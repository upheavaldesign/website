//npm install grunt-npm-install --save-dev
//npm install grunt-contrib-sass --save-dev
//npm install grunt-contrib-watch --save-dev
//npm install grunt-contrib-imagemin --save-dev
//npm install --save imagemin-mozjpeg
//npm install grunt-contrib-uglify --save-dev
//npm install grunt-assets-versioning --save-dev

module.exports = function (grunt) {
    var mozjpeg = require('imagemin-mozjpeg');
    // Watcher for sass compilation and js hinting (with livereload enabled)

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    sourcemap: 'none'
                },
                files: {
                    'dist/assets/css/style-min.css': 'src/css/main.scss'
                }
            },
            dev: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'dist/assets/css/style.css': 'src/css/main.scss'
                }
            }
        },

        watch: {
            scss: {
                options: {
                    debounceDelay: 200,
                    interrupt: true
                },
                files: ['src/css/**/*.scss'],
                tasks: ['sass:dev']
            },

            css: {
                options: {
                    livereload: true,
                    debounceDelay: 50
                },
                files: ['dist/assets/css/style.css']
            },
            html: {
                options: {
                    livereload: true,
                    debounceDelay: 50,
                    interrupt: true
                },
                files: ['dist/**/*.php', 'dist/*.php']
            },
            js: {
                options: {
                    livereload: true,
                    debounceDelay: 50,
                    interrupt: true
                },
                files: ['src/js/*.js', '!src/js/scripts.js'],
                tasks: ['uglify']
            }
        },
        imagemin: { // Task             
            dynamic: { // Another target
                options: { // Target options
                    progressive: true,
                    use: [mozjpeg({
                        quality: 94
                    })]
                },
                files: [{
                    expand: true, // Enable dynamic expansion
                    src: ['**/*.{png,jpg,gif,svg}'], // Actual patterns to match
                    cwd: 'src/', // Src matches are relative to this path			
                    dest: 'dist/assets/' // Destination path prefix
				}]
            }
        },
        uglify: {
            options: {
                mangle: true,
                preserveComments: false
                    //screwIE8: true
            },
            my_target: {
                files: [{
                    'dist/assets/js/scripts.js': ['src/js/jquery.min.js', 'src/js/lazysizes.min.js', 'src/js/basics.js', 'src/js/photo.js', 'src/js/web.js']
        }]
            }
        },
        cachebreaker: {
            dev: {
                options: {
                    match: ['scripts.*.js', 'style-min.*.css'],
                    position: 'overwrite'
                },
                files: {
                    src: ['dist/templates/header.php', 'dist/templates/footer.php']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-cache-breaker');

    // on watch events, configure jshint:all to process only changed files
    grunt.event.on('watch', function (action, filepath) {
        grunt.config(['jshint', 'changed'], filepath);
    });

    // Default task(s).
    grunt.registerTask('default', "Run for local development.", function () {
        grunt.task.run('watch');
    });

    grunt.registerTask('build', "Build production output.", function () {
        grunt.task.run('sass:dev');
        grunt.task.run('sass:dist');
        grunt.task.run('newer:imagemin:dynamic');
        grunt.task.run('uglify');
        grunt.task.run('cachebreaker');
    });

    grunt.registerTask('version', "Set Version", function () {
        grunt.task.run('cachebreaker');
    });
};