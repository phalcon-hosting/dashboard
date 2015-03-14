module.exports = function(grunt) {

    var jsFiles = {
        "public/js/app.js" : [
            "public/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js",
            "public/js/vendor/bootstrap.min.js",
            "public/js/plugins.js",
            "public/js/main.js",
            "public/js/ph.js",
        ]
    };

    grunt.initConfig({


        //////////
        // SASS //
        //////////
        sass: {
            dev: {
                files: {
                    'public/css/app.css' : 'public/css/all.scss'
                }
            },

            dist:{
                options: {
                    style   : 'compressed',
                    sourcemap: 'none'
                },
                files: {
                    'public/css/app.css' : 'public/css/all.scss'
                }
            }
        },



        ////////////
        // UGLIFY //
        ////////////
        uglify : {
            dist: {
                options: {
                    sourceMap: false
                },
                files:  [
                    jsFiles
                ]
            },

            dev: {
                options: {
                    sourceMap: true
                },
                files:  [
                    jsFiles
                ]
            }
        },


    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-sass');

    grunt.registerTask('dev', ['sass:dev' ,  'uglify:dev']);
    grunt.registerTask('dist',['sass:dist', 'uglify:dist']);
};