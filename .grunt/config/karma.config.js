module.exports = function(config) {
    config.set({

         basePath: '../../',

        // frameworks to use
        frameworks: ['jasmine'],

        // list of files / patterns to load in the browser
        files: [
            '.grunt/config/tests/*.js',
            '**/*.js'
        ],

        // list of files to exclude
        exclude: [
            '.grunt/gruntfile.js'
        ],

        // test results reporter to use
        reporters: ['progress','browser'],

        // web server port
        port: 9876,

        // enable / disable colors in the output (reporters and logs)
        colors: true,

        // level of logging
        logLevel: config.LOG_INFO,

        // enable / disable watching file and executing tests whenever any file changes
        autoWatch: true,

        // Start these browsers
        browsers: ['PhantomJS','Chrome'],


/*

        browsers: ['Chrome', 'Chrome_without_security'],
        customLaunchers: {
            Chrome_without_security: {
                base: 'Chrome',
                flags: ['--disable-web-security']
            }
        },
        Chrome_with_debugging: {
            base: 'Chrome',
            chromeDataDir: path.resolve(__dirname, '.chrome')
        },*/

    /**
        browsers: ['Firefox', 'FirefoxDeveloper', 'FirefoxAurora', 'FirefoxNightly'],
        customLaunchers: {
            FirefoxAutoAllowGUM: {
                base: 'Firefox',
                prefs: {
                    'media.navigator.permission.disabled': true
                }
            }
        }

        browsers: ['FirefoxWithMyExtension'],
        customLaunchers: {
            FirefoxWithMyExtension: {
                base: 'Firefox',
                extensions: [
                    path.resolve(__dirname, 'helpers/extensions/myCustomExt@suchandsuch.xpi'),
                    path.resolve(__dirname, 'helpers/extensions/myOtherExt@soandso.xpi')
                ]
            }
        }
     */
    /**
        browsers: ['IE'],
        customLaunchers: {
            IE9: {
                base: 'IE',
                'x-ua-compatible': 'IE=EmulateIE9'
            },
            IE8: {
                base: 'IE',
                'x-ua-compatible': 'IE=EmulateIE8'
            }
        },
        browsers: ['IE_no_addons'],
        customLaunchers: {
            IE_no_addons: {
                base:  'IE',
                flags: ['-extoff']
            }
        },
    */

        // If browser does not capture in given timeout [ms], kill it
        captureTimeout: 203600,

        /*
        plugins: [
            'karma-browser-reporter'
        ],

        browserReporter: {
            port: 5432,
            ignoreSuccessful: false,
            ignoreFailed: false,
            ignoreSkipped: false
        },*/
        // Continuous Integration mode
        // if true, it capture browsers, run tests and exit
        singleRun: false
    });
};