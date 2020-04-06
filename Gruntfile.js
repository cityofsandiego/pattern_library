module.exports = function ( grunt ) {
    'use strict';

    const sass = require('node-sass');

    // Load all grunt tasks matching the 'grunt-*' pattern
    require( 'load-grunt-tasks' )( grunt );

    // Time how long tasks take.
    require('time-grunt')(grunt);

    // Get this party started
    grunt.initConfig({

        pkg: grunt.file.readJSON( 'package.json' ),

        // Global variables
        config: {
            src: 'assets/src',
            dist: 'assets/dist',
            devUrl: 'sandiego.ifdev'
        },

        // Libsass
        sass: {
            minified: {
                options: {
                    implementation: sass,
                    sourceMap: true,
                    outputStyle: 'compressed', // expanded, nested, compressed
                },
                files: {
                    '<%= config.dist %>/css/main.min.css': '<%= config.src %>/sass/main.scss',
                    '<%= config.dist %>/css/no-mq.min.css': '<%= config.src %>/sass/no-mq.scss',
                    '<%= config.dist %>/css/main-admin.min.css': '<%= config.src %>/sass/main-admin.scss',
                    '<%= config.dist %>/css/no-mq-admin.min.css': '<%= config.src %>/sass/no-mq-admin.scss'
                }
            },
            expanded: {
                options: {
                    implementation: sass,
                    outputStyle: 'expanded'
                },
                files: {
                    '<%= config.dist %>/css/main.css': '<%= config.src %>/sass/main.scss',
                    '<%= config.dist %>/css/no-mq.css': '<%= config.src %>/sass/no-mq.scss',
                    '<%= config.dist %>/css/main-admin.css': '<%= config.src %>/sass/main-admin.scss',
                    '<%= config.dist %>/css/no-mq-admin.css': '<%= config.src %>/sass/no-mq-admin.scss'
                }
            }
        },

        // Clean CSS Output
        csscomb: {
            dist: {
                options: {
                    config: '<%= config.src %>/sass/csscomb.json'
                },
                files: {
                    '<%= config.dist %>/css/main.css': ['<%= config.dist %>/css/main.css'],
                    '<%= config.dist %>/css/no-mq.css': ['<%= config.dist %>/css/no-mq.css'],
                    '<%= config.dist %>/css/main-admin.css': ['<%= config.dist %>/css/main-admin.css'],
                    '<%= config.dist %>/css/no-mq-admin.css': ['<%= config.dist %>/css/no-mq-admin.css']
                }
            }
        },

        // Concatenate JS Files
        concat: {
            plugins: {
                files: {
                    '<%= config.dist %>/js/plugins.js': [
                        '<%= config.src %>/js/plugins/*.js'
                    ]
                }
            }
        },

        // Compile RequireJS Optimize
        requirejs: {
          compile: {
            options: {
              baseUrl: "<%= config.src %>/js/",
              mainConfigFile: "<%= config.src %>/js/build.js",
              name: "main",
              out: "<%= config.src %>/js/main-built.js"
            }
          }
        },

        // Minify JS
        uglify: {
            options: {
                sourceMap: true,
                preserveComments: 'some'
            },
            plugins: {
                files: {
                    '<%= config.dist %>/js/plugins.min.js': [ '<%= config.dist %>/js/plugins.js' ]
                }
            }
        },

        // Optimize Media
        imagemin: {
            images: {
                options: {
                    optimizationLevel: 3, // default
                    progressive: true // default
                },
                files: [{
                    expand: true,
                    cwd: '<%= config.src %>/img/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: '<%= config.dist %>/img/'
                }]
            }
        },

        // Copy Files/Folders
        copy: {
            js: {
                expand: true,
                cwd: '<%= config.src %>/js/helpers/',
                src: '*.js',
                dest: '<%= config.dist %>/js/helpers/',
            },
            mainBuilt: {
                expand: true,
                cwd: '<%= config.src %>/js/',
                src: 'main-built.js',
                dest: '<%= config.dist %>/js/',
            },
            require: {
                expand: true,
                cwd: '<%= config.src %>/js/lib/',
                src: 'require.js',
                dest: '<%= config.dist %>/js/lib/',
            },
        },

        // Growl Notifications
        notify: {
            livereload: {
                options: {
                    title: 'Browser Updated',
                    message: 'Livereload completed.'
                }
            }
        },

        // Run Tasks When Files Are Modified
        watch: {
            css: {
                files: '<%= config.src %>/sass/**/*.{scss,sass}',
                tasks: [ 'sass:minified', 'sass', 'csscomb' ]
            },
            jsMain: {
                files: [
                    '<%= config.src %>/js/**/*.js',
                    // '<%= config.src %>/js/main-built.js'
                ],
                tasks: [ 'requirejs' , 'concat', 'uglify:plugins', 'newer:copy:js', 'newer:copy:require','newer:copy:mainBuilt' ]
            },
            images: {
                files: [
                    '<%= config.src %>/img/**/*.{png,jpg,gif}'
                ],
                tasks: [ 'newer:imagemin' ]
            },
        },

    });

    // Default
    grunt.registerTask( 'default', [
        'sass',
        'csscomb',
        'requirejs',
        'concat',
        'uglify',
        'newer:copy:js',
        'newer:copy:mainBuilt',
        'newer:copy:require',
        'newer:imagemin',
        'watch', // add after 'browserSync'. Not needed for Livereload - previous line 'browserSync',
    ]);

    // Build
    // Run all tasks, including sass:expanded
    grunt.registerTask( 'build', [
        'sass',
        'csscomb',
        'requirejs',
        'concat',
        'uglify',
        'newer:copy:js',
        'newer:copy:mainBuilt',
        'newer:copy:require',
        'newer:imagemin',
        'sass:minified',
    ]);

    // Images
    grunt.registerTask( 'media', ['newer:imagemin'] );

};
