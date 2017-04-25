module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                mangle: true,
                compress: {
                    sequences: false
                },
            },
            build: {
                src: [
                    'dist/moby.js',
                    '_assets/js/lib/*.js',
                    '_assets/js/src/*.js'
                ],
                dest: '_assets/js/main.min.js'
            }
        },
        concat : {
            basic : {
                src : [
                    'dist/moby.less',
                    '_assets/css/lib/*.less',
                    '_assets/css/src/mixins.less',
                    '_assets/css/src/reset.less',
                    '_assets/css/src/global.less',
                    '_assets/css/src/material-icons.less',
                    '_assets/css/src/*.less'
                ],
                dest : './_assets/css/staging.less'
            }
        },
        less: {
            options: {
                compress: true,
                banner : '@charset "UTF-8";'
            },
            build: {
                src: '_assets/css/staging.less',
                dest: '_assets/css/master.min.css'
            }
        }
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-less');

    // Default task(s).
    grunt.registerTask('default', ['uglify', 'concat', 'less']);
    grunt.registerTask('buildCss', ['concat', 'less']);
    grunt.registerTask('buildJs', ['uglify']);
};