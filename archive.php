<?php get_header(); ?>
<main>
  <div class="news_h1_wrap">
    <h1>News</h1>
  </div>
  <div class="max_width">
    <div class="breadcrumb_trail_wrap">
      <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
      <p>/</p>
      <p>News</p>
    </div>
  </div>
  <section class="news_wrap">
    <div class="max_width">
      <ul class="news_list">
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
      <?php the_posts_pagination(
        array(
          'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
          'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
          'prev_text'     => __('前へ'), // 「前へ」リンクのテキスト
          'next_text'     => __('次へ'), // 「次へ」リンクのテキスト
        )
      ); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>