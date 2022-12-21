<?php get_header(); ?>
<main class="single_wrap">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
      <div>
        <?php the_title('<h1 class="single_h1_title max_width">', '</h1>'); ?>
        <div class="max_width">
          <div style="margin-bottom: 20px;">
            <?php
            if (function_exists('yoast_breadcrumb')) {
              yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
            }
            ?>
          </div>
        </div>

        <!-- ページネーションがタイトルの場合 -->
        <!-- <section class="max_width single_content">
          <div class="news_content">
            <time>投稿：<?php the_time('Y年n月j日'); ?></time>
            <?php the_content(); ?>
          </div>
          <div class="page_feed_wrap">
            <?php
            $next = get_adjacent_post(false, '', false); //$nextに次の記事を代入
            $prev = get_adjacent_post(false, '', true); //$prevに前の記事を代入
            ?>
            <?php if ($next) : //次の記事があったら… 
            ?>
              <a class="title_wrap next" href="<?php echo get_permalink($next->ID) //次の記事URL 
                                                ?>">
                <div>
                  < <?php //記事タイトルの先頭30文字を表示
                    if (mb_strlen(get_the_title($next->ID)) > 7) :
                      $title = mb_substr(get_the_title($next->ID), 0, 7);
                      echo $title . '...';
                    else :
                      echo get_the_title($next->ID);
                    endif;
                    ?> </div>
              </a>
            <?php endif; ?>
            <?php if ($prev) : //前の記事があったら… 
            ?>
              <a class="title_wrap prev" href="<?php echo get_permalink($prev->ID) //前の記事URL 
                                                ?>">
                <div>
                  <?php //記事タイトルの先頭30文字を表示
                  if (mb_strlen(get_the_title($prev->ID)) > 7) :
                    $title = mb_substr(get_the_title($prev->ID), 0, 7);
                    echo $title . '...';
                  else :
                    echo get_the_title($prev->ID);
                  endif;
                  ?>
                  >
                </div>
              </a>
            <?php endif; ?>
          </div>
          <a class="return_list_btn" href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ一覧に戻る</a>
        </section> -->



        <!-- ページネーションが次へ -->
        <section class="max_width single_content">
          <?php the_title('<h1 class="page_title">', '</h1>'); ?>
          <time><?php the_time('Y年n月j日'); ?></time>
          <div class="single_inner">
            <?php the_content(); ?>
          </div>
          <div class="page_feed_wrap">
            <?php previous_post_link('%link', '前へ'); ?>
            <a class="list_link" href="<?php echo esc_url(home_url('/news/')); ?>">一覧へ</a>
            <?php next_post_link('%link', '次へ'); ?>
          </div>
        </section>
      </div>
  <?php
    endwhile;
  endif;
  ?>
</main>
<?php get_footer(); ?>