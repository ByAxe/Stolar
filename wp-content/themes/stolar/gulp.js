"use strict";

var
    gulp = require('gulp'),
    dest = require('gulp-dest'),
    autoprefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    nano = require('gulp-cssnano');

// operations with CSS
gulp.task('css', function () {
    return gulp.src('dev/css/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({   // add prefixes for cross-browsering
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(nano()) // minfify css files
        .pipe(gulp.dest('dist/css')); // put them all into the dist/css folder
});

// operations with JavaScript
gulp.task('js', function () {
    return gulp.src('dev/js/**/*.js')
        .pipe(uglify()) // minify js files
        .pipe(gulp.dest('dist/js')); // put them all into the dist/js folder
});

gulp.task('watch-css', function () {
    return gulp.watch("dev/css/*.scss", ['css']); // watch for specified location
});

gulp.task('watch-js', function () {
    return gulp.watch("dev/js/**/*.js", ['js']);
});


gulp.task('default', ['css', 'js', 'watch-css', 'watch-js']); // collect them all together within default task