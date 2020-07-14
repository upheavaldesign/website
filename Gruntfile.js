module.exports = function (grunt) {
    var mozjpeg = require('imagemin-mozjpeg');
    // Watcher for sass compilation and js hinting (with livereload enabled)

    //get current file path
    var path = require('path');
    path = path.resolve();

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        sass: {
            prod: {
                options: {
                    style: 'compressed',
                    sourcemap: 'none'
                },
                files: {
                    'html/assets/css/styles-min.css': 'src/css/main.scss'
                }
            },
            dev: {
                options: {
                    style: 'expanded'
                },
                files: {
                    'html/assets/css/styles.css': 'src/css/main.scss'
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
                files: ['html/assets/css/styles.css']
            },
            html: {
                options: {
                    livereload: true,
                    debounceDelay: 50,
                    interrupt: true
                },
                files: ['html/**/*.php', 'html/*.php']
            },
            js: {
                options: {
                    livereload: true,
                    debounceDelay: 50,
                    interrupt: true
                },
                files: ['src/js/*.js', '!src/js/concat.js'],
                tasks: ['uglify:dev']
            }
        },
        imagemin: {
            dynamic: {
                options: {
                    optimizationLevel: 3,
                    progressive: true,
                    svgoPlugins: [{
                        removeViewBox: false
                    }],
                    use: [mozjpeg({
                        quality: 92
                    })]
                },
                files: [{
                    expand: true, // Enable dynamic expansion
                    src: ['**/*.{png,jpg,gif,svg}'], // Actual patterns to match
                    cwd: 'src/', // Src matches are relative to this path
                    dest: 'html/assets/' // Destination path prefix
                }]
            }
        },
        concat: {
            /* assemble libraries */
            libs: {
                files: [{
                    'src/js/libs/libs.js': ['node_modules/jquery/dist/jquery.min.js', 'js/libs/picturefill.min.js', 'src/js/libs/lazysizes.min.js', 'src/js/libs/svg4everybody.min.js', 'src/js/libs/masonry.pkgd.min.js']
                }]
            },
            // custom: {
            //     options: {
            //         banner: '(function ($) {',
            //         footer: '})(jQuery);'
            //     },
            //     files: {
            //         'src/js/concat.js': ['src/js/basics.js', 'src/js/photo.js', 'src/js/web.js']
            //     }
            // },
        },
        uglify: {
            /* assemble custom scripts */
            dev: {
                options: {
                    sourceMap: true,
                    compress: false,
                    //beautify: true,
                    mangle: false,
                    preserveComments: 'all',
                    banner: '/*! <%= pkg.site_title %>\n<%= pkg.site_url %>\n' +
                        'Published: <%= grunt.template.today("dddd, mmmm dS, yyyy") %>\n\n' +
                        'Author: <%= pkg.author %>\n' +
                        'Version: Development */'
                },
                files: [{
                    'html/assets/js/scripts.js': ['src/js/libs/libs.js', 'src/js/basics.js']
                }]
            },
            /* assemble production scripts and minify */
            prod: {
                options: {
                    mangle: {
                        reserved: ['jQuery']
                    },
                    preserveComments: false,
                    banner: '/*! <%= pkg.site_title %>\n<%= pkg.site_url %>\n' +
                        'Published: <%= grunt.template.today("dddd, mmmm dS, yyyy") %>\n\n' +
                        'Author: <%= pkg.author %> */'
                },
                files: [{
                    'html/assets/js/scripts-min.js': 'html/assets/js/scripts.js'
                }]
            }
        },
        cachebreaker: {
            options: {
                match: ['scripts-min.*.js', 'styles-min.*.css'],
                position: 'overwrite'
            },
            files: {
                src: ['html/templates/header.php', 'html/templates/footer.php']
            }

        },
        'string-replace': {
            styles: {
                options: {
                    replacements: [{
                        pattern: /{{ UPDATED }}/g,
                        replacement: 'Published: <%= grunt.template.today("dddd, mmmm dS, yyyy") %>'
                    }]
                },
                files: {
                    'html/assets/css/styles.css': 'html/assets/css/styles.css'
                }
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-newer');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-cache-breaker');
    grunt.loadNpmTasks('grunt-string-replace');

    // on watch events, configure jshint:all to process only changed files
    grunt.event.on('watch', function (action, filepath) {
        grunt.config(['jshint', 'changed'], filepath);
    });

    // Default task(s).
    grunt.registerTask('default', "Run for local development.", function () {
        grunt.task.run('watch');
    });

    grunt.registerTask('build', "Build production output.", function () {
        //grunt.task.run('newer:imagemin:dynamic');

        /* process dev versions */
        grunt.task.run('sass:dev');
        grunt.task.run('concat:libs');
        //grunt.task.run('concat:custom');
        grunt.task.run('uglify:dev');
        /* add current date to styles & scripts */
        grunt.task.run('string-replace:styles');

        /* process production versions */
        grunt.task.run('sass:prod');
        grunt.task.run('uglify:prod');

        /* add version serial to resource tags */
        grunt.task.run('cachebreaker');
    });

    grunt.registerTask('version', "Set Version", function () {
        grunt.task.run('cachebreaker');
    });

    grunt.registerTask('images', "Process Images and SVGs", function () {
        grunt.task.run('newer:imagemin:dynamic');
    });
};