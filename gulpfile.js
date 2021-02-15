let gulp = require('gulp');
let sass = require('gulp-sass');
let browserSync = require('browser-sync');
let concat = require('gulp-concat');
let rename = require('gulp-rename');
let autoprefixer = require('gulp-autoprefixer');
let uglify = require('gulp-uglify-es').default;

gulp.task('html', function() {
    return gulp.src('app/*.html')
    .pipe(browserSync.reload({stream: true}))
})

gulp.task('script', function() {
    return gulp.src('app/js/*.js')
    .pipe(browserSync.reload({stream: true}))
})

// gulp.task('scss', function() {
//     return gulp.src('app/scss/01/style.scss')
//     .pipe(sass({outputStyle: 'expanded'}))
//     .pipe(autoprefixer('last 2 versions'))
//     .pipe(rename({suffix: '.min'}))
//     .pipe(gulp.dest('app/css/01'))
//     .pipe(browserSync.reload({stream: true}))
// });

//OBJ1
gulp.task('obj1', function() {
    return gulp.src('app/scss/obj1/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css/obj1'))
    .pipe(browserSync.reload({stream: true}))
});

//OBJ2
gulp.task('obj2', function() {
    return gulp.src('app/scss/obj2/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css/obj2'))
    .pipe(browserSync.reload({stream: true}))
});

//OBJ3
gulp.task('obj3', function() {
    return gulp.src('app/scss/obj3/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css/obj3'))
    .pipe(browserSync.reload({stream: true}))
});

//OBJ4
gulp.task('obj4', function() {
    return gulp.src('app/scss/obj4/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css/obj4'))
    .pipe(browserSync.reload({stream: true}))
});

//OBJ5
gulp.task('obj5', function() {
    return gulp.src('app/scss/obj5/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css/obj5'))
    .pipe(browserSync.reload({stream: true}))
});

//JK2
gulp.task('jk2', function() {
    return gulp.src('app/scss/jk2/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css/jk2'))
    .pipe(browserSync.reload({stream: true}))
});

//JK3
gulp.task('jk3', function() {
    return gulp.src('app/scss/jk3/style.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(autoprefixer('last 2 versions'))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('app/css/jk3'))
    .pipe(browserSync.reload({stream: true}))
});

gulp.task('browserSync', function() {
    browserSync.init({
        server: {
            baseDir: "app",
            index: 'jk3.html'
        }
    });
});

// INDEX
// gulp.task('js', function() {
//     return gulp.src(['node_modules/slick-carousel/slick/slick.js', 
//         'node_modules/magnific-popup/dist/jquery.magnific-popup.js'])
//     .pipe(concat('libs.min.js'))
//     .pipe(terser())
//     .pipe(gulp.dest('app/js'))
//     .pipe(browserSync.reload({stream: true}))
// });

gulp.task('watch', function() {
    // gulp.watch('app/scss/**/*.scss', gulp.parallel('scss'))
    gulp.watch('app/scss/**/*.scss', gulp.parallel('obj1'))
    gulp.watch('app/scss/**/*.scss', gulp.parallel('obj2'))
    gulp.watch('app/scss/**/*.scss', gulp.parallel('obj3'))
    gulp.watch('app/scss/**/*.scss', gulp.parallel('obj4'))
    gulp.watch('app/scss/**/*.scss', gulp.parallel('obj5'))
    gulp.watch('app/scss/**/*.scss', gulp.parallel('jk2'))
    gulp.watch('app/scss/**/*.scss', gulp.parallel('jk3'))
    gulp.watch('app/**/*.html', gulp.parallel('html'))
    gulp.watch('app/js/*.js', gulp.parallel('script'))
});

gulp.task('default', gulp.parallel('obj1', 'obj2', 'obj3', 'obj4', 'obj5', 'jk2', 'jk3', 'browserSync', 'watch'));
