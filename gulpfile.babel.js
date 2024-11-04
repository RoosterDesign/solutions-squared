import { src, dest, watch, series, parallel } from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
//import postcss from 'gulp-postcss';
import sourcemaps from 'gulp-sourcemaps';
import autoprefixer from 'gulp-autoprefixer';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpack from 'webpack-stream';
import named from 'vinyl-named';
import gcmq from 'gulp-group-css-media-queries';
const PRODUCTION = yargs.argv.prod;

export const styles = () => {
	return src('src/scss/styles.scss')
		.pipe(gulpif(!PRODUCTION, sourcemaps.init()))
		.pipe(sass().on('error', sass.logError))
		.pipe(gulpif(PRODUCTION, autoprefixer('last 2 versions')))
		.pipe(gulpif(PRODUCTION, cleanCss({ compatibility: 'ie10' })))
		.pipe(gulpif(PRODUCTION, gcmq()))
		.pipe(gulpif(!PRODUCTION, sourcemaps.write()))
		.pipe(dest('dist/css'));
};

export const scripts = () => {
	return src(['src/js/scripts.js', 'src/js/admin.js'])
		.pipe(named())
		.pipe(
			webpack({
				module: {
					rules: [
						{
							test: /\.js$/,
							use: {
								loader: 'babel-loader',
								options: {
									presets: [],
								},
							},
						},
					],
				},
				mode: PRODUCTION ? 'production' : 'development',
				devtool: !PRODUCTION ? 'inline-source-map' : false,
				output: {
					filename: '[name].js',
				},
				//externals: {
				//jquery: 'jQuery',
				//},
			})
		)
		.pipe(dest('dist/js'));
};

export const images = () => {
	return src('src/images/**/*.{jpg,jpeg,png,svg,gif}').pipe(gulpif(PRODUCTION, imagemin())).pipe(dest('dist/images'));
};

export const copy = () => {
	return src(['src/**/*', '!src/{images,js,scss}', '!src/{images,js,scss}/**/*']).pipe(dest('dist'));
};

export const clean = () => del(['dist']);

export const watchForChanges = () => {
	watch('src/scss/**/*.scss', styles);
	watch('src/images/**/*.{jpg,jpeg,png,svg,gif}', images);
	watch(['src/**/*', '!src/{images,js,scss}', '!src/{images,js,scss}/**/*'], copy);
	watch('src/js/**/*.js', scripts);
};

export const dev = series(clean, parallel(styles, images, copy, scripts), watchForChanges);
export const build = series(clean, parallel(styles, images, copy, scripts));
export default dev;
