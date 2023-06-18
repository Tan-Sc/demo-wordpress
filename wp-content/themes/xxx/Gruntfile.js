const sass = require("node-sass");

module.exports = function (grunt) {
  grunt.initConfig({
    sass: {
      options: {
        implementation: sass,
      },
      dist: {
        options: { outputStyle: "compressed", sourceMap: true },
        files: { "css/styles.min.css": "css/scss/styles.scss" },
      },
    },
    cssmin: {
      combine: {
        files: { "css/css-all.min.css": ["css/styles.min.css"] },
      },
    },
    watch: {
      sass: {
        files: ["css/scss/supporting/*.scss"],
        tasks: ["sass", "cssmin"],
      },
    },
  });

  grunt.loadNpmTasks("grunt-sass");
  grunt.loadNpmTasks("grunt-contrib-cssmin");
  grunt.loadNpmTasks("grunt-contrib-watch");

  grunt.registerTask("dev", ["watch"]);
  grunt.registerTask("prod", ["sass", "cssmin"]);
};
