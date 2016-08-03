module.exports = function (grunt) {

    'use strict';

    var my_location = 'KES-school-programming-php';

    grunt.initConfig({

        /*
         * https://www.npmjs.com/package/grunt-contrib-connect
         */
        connect: {
            server: {
                files   : '../index.php',
                options: {
                    livereload : true,
                    reload: true,
                    port: 8080,
                    open: {
                        target: 'http://localhost/' + my_location
                    }
                }
            }
        },
        /*
         *  https://github.com/gruntjs/grunt-contrib-watch
         */
        watch : {
            options: {
                livereload: true,
            },
            css: {
                files: ['../**/*.css'],
            },
            js: {
                files: ['../**/*.js'],
            },
            html: {
                files: ['../*.html','../**/*.html'],
            },
            php: {
                files: ['../*.php','../**/*.php'],
            },
            configFiles: {
                files: [ 'Gruntfile.js', 'config/*.js' ],
                options: {
                    reload: true
                }
            }
        },
        /*
         * https://www.npmjs.com/package/grunt-karma
         */
        karma: {
            unit: {
                configFile: 'config/karma.config.js'
            }
        }

    });

    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-karma');

    grunt.registerTask('default', ['connect','watch']);
    grunt.registerTask('goKarma', ['karma']);

};