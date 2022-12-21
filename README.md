# WP-theme-template

これは WordPress 自作テーマ用テンプレートです。<br>
ローカル環境に WP がある状態で themes 配下に clone してください。<br>
タスクランナーには gulp を使用しています。<br>
sass ディレクトリ配下で、スタイルを記述してください。<br>
imgs ディレクトリ配下に使用する画像を格納してください。<br>
gulpfile.js の`proxy: "http://localhost:8888/portfolio/",`は適宜環境や WP インストールディレクトリ名に変更してください。<br>
`$ npx gulp`でタスクを実行し下記動作を行います。<br>

1. browser-sync の立ち上げ
1. "./sass/_.scss","./_.php"の監視
1. css ディレクトリにコンパイル出力

gulp やディレクトリ構成などは最低限の内容にしてあります。<br>
プロジェクトに合わせて適宜、gulp のタスクや固定ページ、投稿ページの添削などを行なってください。<br>

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

1. `/themes/`直下に wp_theme_template を clone(theme 名は作成するサイトに変更)
1. ターミナルで`/themes/wp_theme_template/`に移動
1. `$ npm install`で package.json に記述されているモジュールインストール
1. `$ npx gulp`でタスクの実行

## 備考

1. テーマディレクトリ直下（wp_theme_template）に 960 × 720 で screenshot.jpg を配置するとテーマのサムネになります。
1. imgs ディレクトリ直下に 180 × 180 で favicon.png を配置するとファビコンになります。
