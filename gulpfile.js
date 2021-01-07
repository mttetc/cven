var gulp = require('gulp'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache');
var cleancss = require('gulp-clean-css');
var sass = require('gulp-sass');
var php2html = require("gulp-php2html");

gulp.task('fonts', function (text) {
    gulp.src('src/fonts/**/*')
        .pipe(gulp.dest('site/fonts'));
});

gulp.task('images', function () {
    gulp.src('src/img/**/*')
        .pipe(gulp.dest('site/img/'));
});

gulp.task('styles', function () {
    gulp.src(['src/scss/**/*.scss'])
        .pipe(plumber({
            errorHandler: function (error) {
                console.log(error.message);
                this.emit('end');
            }
        }))
        .pipe(sass())
        .pipe(autoprefixer('last 2 versions'))
        .pipe(gulp.dest('site/styles/'))
        .pipe(rename({suffix: '.min'}))
        .pipe(cleancss())
        .pipe(gulp.dest('site/styles/'))
});

gulp.task('watch', function () {
    gulp.watch("src/scss/**/*.scss", ['styles']);
    gulp.watch("src/js/**/*.js", ['scripts']);
    gulp.watch("src/fonts/**/*", ['fonts']);
});

gulp.task('html', function() {
    gulp.src("./src/index.php")
        .pipe(php2html())
        .pipe(gulp.dest("./site"));
});

gulp.task('clean', require('del').bind(null, ['site']));

gulp.task('default', ['clean'], function () {
    gulp.start('styles');
    gulp.start('fonts');
    gulp.start('images');
    gulp.start('html');
});