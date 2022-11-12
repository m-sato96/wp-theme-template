# WP-theme-template

これはWordPress自作テーマ用テンプレートです。<br>
ローカル環境にWPがある状態でthemes配下にcloneしてください。<br>
タスクランナーにはgulpを使用しています。<br>
sassディレクトリ配下で、スタイルを記述してください。<br>
imgsディレクトリ配下に使用する画像を格納してください。<br>
gulpfile.jsの`proxy: "http://localhost:8888/portfolio/",`は適宜環境やWPインストールディレクトリ名に変更してください。<br>
`$ npx gulp`でタスクを実行し下記動作を行います。<br>
1. browser-syncの立ち上げ
1.  "./sass/*.scss","./*.php"の監視
1. cssディレクトリにコンパイル出力

gulpやディレクトリ構成などは最低限の内容にしてあります。<br>
プロジェクトに合わせて適宜、gulpのタスクや固定ページ、投稿ページの添削などを行なってください。<br>

**使用パッケージ**
1. browser-sync
1. gulp
1. gulp-autoprefixer
1. gulp-dart-sass
1. gulp-notify
1. gulp-plumber
1. gulp-sass
1. sass



## themes 直下に wp_theme_template 配置

1. `/themes/`直下に wp_theme_template をclone(theme名は作成するサイトに変更)
1. ターミナルで`/themes/wp_theme_template/`に移動
1. `$ npm install`で package.json に記述されているモジュールインストール
1. `$ npx gulp`でタスクの実行

## 備考

1. テーマディレクトリ直下（wp_theme_template）に960 × 720でscreenshot.jpgを配置するとテーマのサムネになります。
1. imgsディレクトリ直下に180 × 180でfavicon.pngを配置するとテーマのサムネになるファビコンになります。

