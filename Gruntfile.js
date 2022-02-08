module.exports = function (grunt) {
    /* detects and loads which modules are required */
    require('load-grunt-tasks')(grunt);

    const sass = require('node-sass');
    const mozjpeg = require('imagemin-mozjpeg');

    //get current file path
    var path = require('path');
    path = path.resolve();

    const assets = 'html/assets/';

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),
        watch: {
            scss: {
                options: {
                    debounceDelay: 200,
                    interrupt: true
                },
                files: ['src/css/**/*.scss'],
                tasks: ['sass']
            },
            js: {
                options: {
                    livereload: true,
                    debounceDelay: 50,
                    interrupt: true
                },
                files: ['src/js/*.js'],
                tasks: ['terser:dev']
            },
            livereload: {
                // Here we watch the files the sass task will compile to
                // These files are sent to the live reload server after sass compiles to them
                options: {
                    livereload: true
                },
                files: [assets + 'js/scripts.js', assets + 'css/styles.css']
            },
        },

        sass: {
            options: {
                implementation: sass,
                //sourceMap: true
            },
            prod: {
                files: {
                    [assets + 'css/styles.css']: 'src/css/main.scss'
                }
            }
        },

        cssmin: {
            options: {
                mergeIntoShorthands: false,
                roundingPrecision: -1,
                sourceMap: true,
                report: 'min'
            },
            target: {
                files: {
                    [assets + 'css/styles.css']: [assets + 'css/styles.css']
                }
            }
        },

        svg_sprite: {
            general: {
                // Target basics
                expand: true,
                cwd: assets + 'gfx/svg/',
                src: ['**/*.svg'],
                dest: '',

                // Target options
                options: {
                    mode: {
                        symbol: { // Activate the «symbol» mode
                            sprite: path + '/' + assets + 'gfx/sprite.svg',
                            layout: 'packed',
                            prefix: '.', // Remove the automatic prefix
                            dimensions: '%s', // Remove the '-dims' suffix
                            bust: false,
                            // render: {
                            //   scss: { // Activate Sass output (with default options)
                            //     template: 'grunt/sass/template-sprite.scss',
                            //     dest: path + '/grunt/sass/_sprite.scss'
                            //   }
                            // },
                            shape: {
                                id: {
                                    generator: "%s" // CSS classes will have this
                                }
                            }
                        }
                    }
                }
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
                    [assets + 'js/libs.js']: ['node_modules/jquery/dist/jquery.min.js', 'node_modules/lazysizes/lazysizes.min.js', 'node_modules/masonry-layout/dist/masonry.pkgd.js']
                }]
            }
        },

        terser: {
            /* assemble custom scripts */
            dev: {
                options: {
                    sourceMap: true,
                    compress: false,
                    mangle: false,
                    output: {
                        beautify: true,
                    },
                    //preserveComments: 'all',
                    //banner: '/*! Version: Development */'
                },
                files: [{
                    [assets + 'js/scripts.js']: [
                        assets + 'js/libs.js',
                        'src/js/basics.js'
                    ]
                }]
            },
            /* assemble production scripts and minify */
            dist: {
                options: {
                    mangle: {
                        reserved: ['jQuery']
                    },
                    output: {
                        comments: /^!/
                    },
                },
                files: [{
                    [assets + 'js/scripts.js']: [assets + 'js/scripts.js']
                }]
            }
        },

        cachebreaker: {
            options: {
                match: ["v=*!"],
                position: 'overwrite'
            },
            files: {
                src: ['html/templates/meta.php', 'html/templates/footer.php']
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
                    [assets + 'css/styles.css']: [assets + 'css/styles.css']
                }
            },
            scripts: {
                options: {
                    replacements: [{
                        pattern: /{{ CREDITS }}/g,
                        replacement: '\n<%= pkg.site_title %>\n<%= pkg.site_url %>\n' +
                            'Developer: <%= pkg.author %>\n' +
                            'Published: <%= grunt.template.today("dddd, mmmm dS, yyyy") %>\n'
                    }]
                },
                files: {
                    [assets + 'js/scripts.js']: [assets + 'js/scripts.js']
                }
            }
        },

        clean: {
            //clean up build directory before processing src
            SVG: assets + 'gfx/',
            //IMG: assets + 'img/'
        }

    });

    // on watch events, configure jshint:all to process only changed files
    grunt.event.on('watch', function (action, filepath) {
        grunt.config(['jshint', 'changed'], filepath);
    });

    // Default task(s).
    grunt.registerTask('default', "Run for local development.", function () {
        grunt.task.run('local');
        grunt.task.run('watch');
    });


    /* this task fires when first starting grunt */
    grunt.registerTask('local', "Build local resources.", function () {
        grunt.task.run('clean');
        grunt.task.run('imagemin');
        grunt.task.run('svg_sprite');

        /* compile scripts */
        grunt.task.run('concat');
        grunt.task.run('terser:dev');

        grunt.task.run('sass');

        /* add current date to styles & scripts */
        grunt.task.run('string-replace');
    });

    grunt.registerTask('build', "Build production output.", function () {
        grunt.task.run('clean');
        grunt.task.run('imagemin:dynamic');
        grunt.task.run('svg_sprite');

        /* process production versions */
        grunt.task.run('concat');
        grunt.task.run('terser');

        grunt.task.run('sass');
        grunt.task.run('cssmin');

        /* add current date to styles & scripts */
        grunt.task.run('string-replace');

        /* add version serial to resource tags */
        grunt.task.run('cachebreaker');
    });

    grunt.registerTask('images', "Process Images and SVGs", function () {
        grunt.task.run('clean');
        grunt.task.run('imagemin:dynamic');
        grunt.task.run('svg_sprite');
    });

    grunt.registerTask('version', "Set Version", function () {
        grunt.task.run('cachebreaker');
    });
};