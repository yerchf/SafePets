const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
//const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');



const stylesSCSS = async() => {
	// 1. Donde  estan los archivos s
	// 2. Compilar el sass
	// 3. Donde se almacena de css

	await gulp
		.src('./resources/scss/**/*.scss')
		.pipe(
			sass({
				outputStyle: 'expanded'
			}).on('error', sass.logError)
		)
		.pipe(autoprefixer('last 2 versions'))
		.pipe(gulp.dest('./public/css'));
};
gulp.task('watch', () =>{
    gulp.watch('./resources/scss/**/*.scss',stylesSCSS);  
});

gulp.task('stylesSCSS', stylesSCSS);

gulp.task('default',gulp.parallel('watch'), 'stylesSCSS');


exports.stylesSCSS = stylesSCSS;



