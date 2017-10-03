/*
* yarn install gulp gulp-watch gulp-autoprefixer gulp-uglify gulp-sass gulp-sourcemaps gulp-rigger gulp-minify-css gulp-imagemin imagemin-pngquant rimraf --save
*/
'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    rimraf = require('rimraf')
    

var path = {
    dist: {
        bower:'dist/bower_components/',
        html: 'dist/',
        php: 'dist/',
        js: 'dist/js/',
        css: 'dist/css/',
        img: 'dist/images/',
        fonts: 'dist/fonts/'
    },
    src: {
        bower: 'src/bower_components/**/*.*',
        html: 'src/*.html',
        php: 'src/**/*.php',
        js: 'src/js/**/*.js',
        style: 'src/sass/style.scss',
        img: 'src/images/**/*.*',
        fonts: 'src/fonts/**/*.*'
    },
    watch: {
        html: 'src/**/*.html',
        php: 'src/**/*.php',
        js: 'src/js/**/*.js',
        style: 'src/sass/**/*.scss',
        img: 'src/images/**/*.*',
        fonts: 'src/fonts/**/*.*'
    },
    clean: './dist'
};


gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('bower:dist', function () {
    gulp.src(path.src.bower)
        .pipe(rigger())
        .pipe(gulp.dest(path.dist.bower))
});

gulp.task('html:dist', function () {
    gulp.src(path.src.html) 
        .pipe(rigger())
        .pipe(gulp.dest(path.dist.html))
});

gulp.task('php:dist', function () {
    gulp.src(path.src.php) 
        .pipe(rigger())
        .pipe(gulp.dest(path.dist.php))
});

gulp.task('js:dist', function () {
    gulp.src(path.src.js) 
        .pipe(rigger()) 
        .pipe(sourcemaps.init()) 
        .pipe(uglify()) 
        .pipe(sourcemaps.write()) 
        .pipe(gulp.dest(path.dist.js))
});

gulp.task('style:dist', function () {
    gulp.src(path.src.style) 
        .pipe(sourcemaps.init())
        .pipe(sass({
            sourceMap: true,
            errLogToConsole: true
        }))
        .pipe(prefixer())
        .pipe(cssmin())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(path.dist.css))
});

gulp.task('image:dist', function () {
    gulp.src(path.src.img) 
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(path.dist.img))
});

gulp.task('fonts:dist', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.dist.fonts))
});

gulp.task('dist', [
    'bower:dist',
    'html:dist',
    'php:dist',
    'js:dist',
    'style:dist',
    'fonts:dist',
    'image:dist'
]);


gulp.task('watch', function(){
    watch([path.watch.html], function(event, cb) {
        gulp.start('html:dist');
    });
    watch([path.watch.php], function(event, cb) {
        gulp.start('php:dist');
    });
    watch([path.watch.style], function(event, cb) {
        gulp.start('style:dist');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:dist');
    });
    watch([path.watch.img], function(event, cb) {
        gulp.start('image:dist');
    });
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:dist');
    });
});


gulp.task('default', ['dist', 'watch']);