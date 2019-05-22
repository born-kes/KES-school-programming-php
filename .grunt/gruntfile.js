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
        },
		phpunit: {
    classes: {
        dir: './.composer/tests'
    },
    options: {
        bin: 'vendor/bin/phpunit',
        bootstrap: './.composer/vendor/autoload.php',
        colors: true
    }
}
		

    });

    grunt.loadNpmTasks('grunt-contrib-connect');
    grunt.loadNpmTasks('grunt-contrib-watch');
//    grunt.loadNpmTasks('grunt-karma');
	grunt.loadNpmTasks('grunt-phpunit');

    grunt.registerTask('default', ['connect','watch']);
    grunt.registerTask('goKarma', ['karma']);
	
	grunt.registerTask('test', '', function () {
        "use strict";
        var exec = require('child_process').execSync;
        result = exec("phpunit", { encoding: 'utf8' });
       // console.log(result);
});


};