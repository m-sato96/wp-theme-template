<?php get_header(); ?>
<main>
  <div class="service_h1_wrap">
    <?php the_title('<h1>', '</h1>'); ?>
  </div>
  <div class="max_width">
    <div>
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>
    </div>
  </div>
  <section class="max_width">
    <div class="contact_wrap">
      <?php echo do_shortcode('[mwform_formkey key="19"]'); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>