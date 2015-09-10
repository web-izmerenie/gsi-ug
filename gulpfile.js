'use strict'
var gulp = require('gulp');
var rename = require("gulp-rename");
var less = require("gulp-less");
var autoprefixer = require('gulp-autoprefixer');
var clean = require('gulp-clean');
var jade = require('gulp-jade');
var connect = require('gulp-connect');
var browserify = require('gulp-browserify');

gulp.task('styles-clean', function () {
	return gulp.src('./styles/build/*', {read: false})
	.pipe(clean());
});

gulp.task('styles', ['styles-clean'], function () {
	gulp.src('./styles/src/main.less')
		.pipe(less())
		.pipe(autoprefixer('last 10 versions', '> 1%', 'ie 9'))
		.pipe(rename('build.css'))
		.pipe(gulp.dest('./styles/build/'));
});

gulp.task('jade', function(){
	gulp.src('./jade/*.jade')
		.pipe(jade({pretty: true}))
		.pipe(gulp.dest('./html/'));
});

gulp.task('coffee', function() {
	gulp.src('./scripts/src/main.coffee', { read: false })
		.pipe(browserify({
			transform: ['coffeeify'],
			extensions: ['.coffee'],
			shim: require('./shim-browserify.json')
		}))
		.pipe(rename('build.js'))
		.pipe(gulp.dest('./scripts/build/'))
});

gulp.task('connect', function() {
  connect.server();
});

gulp.task('watch', ['jade','styles', 'coffee'], function(){
	gulp.watch('./jade/**/*.jade', ['jade']);
	gulp.watch('./styles/src/**/*.less', ['styles']);
	gulp.watch('./scripts/src/**/*.coffee', ['coffee']);
});

gulp.task('default', ['connect', 'jade','styles', 'coffee']);
