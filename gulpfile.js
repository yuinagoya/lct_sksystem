var gulp = require('gulp');
var sass = require('gulp-sass'); //Sassコンパイル
var plumber = require('gulp-plumber'); //エラー時の強制終了を防止
var notify = require('gulp-notify'); //エラー発生時にデスクトップ通知する
var browserSync = require('browser-sync'); //ブラウザ反映
var postcss = require('gulp-postcss'); //autoprefixerとセット
var autoprefixer = require('autoprefixer'); //ベンダープレフィックス付与
var ejs = require("gulp-ejs");
var rename = require("gulp-rename"); //.ejsの拡張子を変更

// パスを設定
var path = './';

// scssのコンパイル
gulp.task('sass', function () {
  return gulp
    .src(path + 'scss/**/*.scss')
    .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))//エラーチェック
    .pipe(sass({
      outputStyle: 'expanded' //expanded, nested, campact, compressedから選択
    }))
    .pipe(postcss([autoprefixer(
      {
        // ☆IEは11以上、Androidは4.4以上
        // その他は最新2バージョンで必要なベンダープレフィックスを付与する
        // 設定はpackage.json内の"browserslist"
        cascade: false
      }
    )]))
    .pipe(gulp.dest(path + 'css'));//コンパイル後の出力先
});

// 保存時のリロード
gulp.task('browser-sync', function (done) {
  browserSync.init({

    //ローカル開発
    server: {
      baseDir: path,
      index: "index.html"
    }
  });
  done();
});

gulp.task('bs-reload', function (done) {
  browserSync.reload();
  done();
});

gulp.task("ejs", (done) => {
  gulp
    .src([path + "ejs/**/*.ejs", "!" + path + "ejs/**/_*.ejs"])
    .pipe(plumber({ errorHandler: notify.onError("Error: <%= error.message %>") }))//エラーチェック
    .pipe(ejs({}, {}, { ext: '.html' })) //ejsを纏める
    .pipe(rename({ extname: ".html" })) //拡張子をhtmlに
    .pipe(gulp.dest(path)); //出力先
  done();
});

// 監視
gulp.task('watch', function (done) {
  gulp.watch(path + 'scss/**/*.scss', gulp.task('sass')); //sassが更新されたらgulp sassを実行
  gulp.watch(path + 'scss/**/*.scss', gulp.task('bs-reload')); //sassが更新されたらbs-reloadを実行
  gulp.watch(path + 'js/*.js', gulp.task('bs-reload')); //jsが更新されたらbs-relaodを実行
  gulp.watch(path + 'ejs/**/*.ejs', gulp.task('ejs')); //ejsが更新されたらgulp-ejsを実行
  gulp.watch(path + 'ejs/**/*.ejs', gulp.task('bs-reload')); //ejsが更新されたらbs-reloadを実行
  gulp.watch(path + '**/*.html', gulp.task('bs-reload')); //htmlが更新されたらbs-relaodを実行
});

// default
gulp.task('default', gulp.series(gulp.parallel('browser-sync', 'watch')));
