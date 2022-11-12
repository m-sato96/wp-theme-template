// gulpの読み込み
const gulp = require("gulp");
// Sass読み込み
const sass = require("gulp-dart-sass");
const autoprefixer = require("gulp-autoprefixer"); //ベンダープレフィックス自動付与
// browser-syncの読み込み
const browserSync = require("browser-sync");
// エラー時に終了させないための機能
const plumber = require("gulp-plumber");
// エラー発生時のアラート出力
const notify = require("gulp-notify");

const srcPath = {
  css: "./sass/*.scss",
  php: "./*.php",
};

const destPath = {
  css: "./css/",
};

//ベンダープレフィックスを付与する条件
const TARGET_BROWSERS = [
  "last 2 versions", //各ブラウザの2世代前までのバージョンを担保
  "ie >= 11", //IE11を担保
];

// .scssのコンパイルタスク
const compSass = () => {
  return (
    gulp
      .src(srcPath.css, {
        sourcemaps: true,
      })
      .pipe(
        plumber({
          // plumberのエラー表示(notify)
          errorHandler: notify.onError("Error!!:<%= error.message %>"),
        })
      )
      // コンパイル時のスタイル設定
      .pipe(sass({ outputStyle: "expanded" }))
      .pipe(autoprefixer(TARGET_BROWSERS)) // ベンダープレフィックス自動付与
      // 保存先のファイルの指定
      .pipe(gulp.dest(destPath.css), { sourcemaps: "./" })
      .pipe(browserSync.stream())
  );
};

const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
};

// browser-syncのオプション
const browserSyncOption = {
  // Localで動かすWPのサイトドメイン
  proxy: "http://localhost:8888/portfolio/",
  open: "true",
  watchOptions: {
    debounceDelay: 1000,
  },
  reloadOnRestart: true,
};

const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

const watchFiles = () => {
  gulp.watch(srcPath.css, gulp.series(compSass, browserSyncReload));
  gulp.watch(srcPath.php, gulp.series(browserSyncReload));
};

// seriesで順番に実行
exports.default = gulp.series(gulp.parallel(compSass), gulp.parallel(watchFiles, browserSyncFunc));
