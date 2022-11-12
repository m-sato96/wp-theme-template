<?php get_header(); ?>
<main>
  <section class="sample">
    <h1>WP環境設定</h1>
    <h2>最初にすること</h2>
    <ol>
      <li>パンクずが必要なら、Yoast SEOプラグインを入れる</li>
      <li>
        ダッシュボード左メニューの設定⇨パーマリンク⇨カスタム構造を選択して<span class="code">/%category%/%post_id%/</span>と入力する
      </li>
      <li>
        テーマディレクトリ直下に960 × 720でscreenshot.jpgを配置するとテーマのサムネになる
      </li>
      <li>
        imgsディレクトリ直下に180 × 180でfavicon.pngを配置するとテーマのサムネになるファビコンになる
      </li>
    </ol>
    <h2>注意点</h2>
    <ol>
      <li>
        画像パス例<br>
        <span class="code"> src="<?php echo get_template_directory_uri(); ?>/imgs/catch_copy.svg"</span>と記述
      </li>
      <li>
        リンクパス例<br>
        <span class="code"> href="<?php echo esc_url(home_url('/news/')); ?>" </span>と記述
      </li>
    </ol>
  </section>
  <section>
    <div class="max_width">
      <p>News</p>
      <ul>
        <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
            <li class="news_items">
              <a href="<?php echo esc_url(get_permalink()); ?>">
                <time><?php the_time('Y.n.j'); ?></time>
                <p><?php the_title(); ?></p>
              </a>
            </li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </div>
  </section>
</main>
<?php get_footer(); ?>