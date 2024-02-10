'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify-es').default;
const rename = require('gulp-rename');
const notify = require('gulp-notify');
const del = require('del');

const options = require('./options');
const libs = require('./libs');

const paths = {
    sass: {
        src: options.srcDir + '/sass',
        dest: options.destDir + '/',
        mask: '/*.+(sass|scss)'
    },
    js: {
        src: options.srcDir + '/js',
        dest: options.destDir + '/',
        mask: '/*.js'
    },
    watch: {
        sass: options.srcDir + '/sass/**/*.+(sass|scss)',
        js: options.srcDir + '/js/**/*.js',
        img: options.srcDir + '/img/**/*.+(png|jpg|jpeg|gif|svg)',
        html: options.srcDir + '/**/*.+(html|php)',
        fonts: options.srcDir + '/fonts/**/*'
    },
    vendor: {
        css: 'vendor.min.css',
        js: 'vendor.min.js'
    }
};

const handleError = function (err) {
    notify({
        title: 'Gulp Task Error',
        message: '!!!ERROR!!! Check the console.'
    }).write(err);
    console.log(err.toString());
    this.emit('end');
};

function styles() {
	return gulp.src(paths.sass.src + paths.sass.mask)
		.pipe(sass({outputStyle: 'compressed'}).on('error', handleError))
		.pipe(autoprefixer({ overrideBrowserslist: ['last 10 version'] }))
        .pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest(paths.sass.dest))
}

function vendorCSS() {
	libs.styles.length === 0 ? libs.styles = '.' : libs.styles = libs.styles;
	return gulp.src(libs.styles, {allowEmpty: true})
		.pipe(concat(paths.vendor.css))
		.pipe(sass({outputStyle: 'compressed'}).on('error', handleError))
		.pipe(autoprefixer({ overrideBrowserslist: ['last 10 version'] }))
		.pipe(gulp.dest(paths.sass.dest))
}

function scripts() {
	return gulp.src(paths.js.src + paths.js.mask)
		.pipe(babel({ presets: ['@babel/preset-env'] }))
		.pipe(uglify())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest(paths.js.dest))
}

function vendorJS() {
	libs.scripts.length === 0 ? libs.scripts = '.' : libs.scripts = libs.scripts;
	return gulp.src(libs.scripts, {allowEmpty: true})
		.pipe(concat(paths.vendor.js))
		.pipe(uglify())
		.pipe(gulp.dest(paths.js.dest))
}

function clean() {
	return del([ options.destDir + '/**/*']);
}

function watch() {
	// build();
	gulp.watch([paths.watch.sass], styles)
	gulp.watch([paths.watch.js], scripts)
}

const build = gulp.series( clean, gulp.parallel(vendorCSS, vendorJS, styles, scripts));

exports.styles = styles;
exports.vendorCSS = vendorCSS;
exports.scripts = scripts;
exports.vendorJS = vendorJS;
exports.watch = watch;
exports.build = build;

exports.default = build;