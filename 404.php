<?php
get_header();
?>
<main class="not_found_wrap" role="main">
  <section>
    <h2>404 Not Found <br>ページが見つかりませんでした</h2>
    <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
    <p>URL :<span><?php echo get_pagenum_link(); ?></span></p>
  </section>
</main>

<?php get_footer(); ?>