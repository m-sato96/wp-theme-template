<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <meta http-equiv="Content-Type" charset="UTF-8" />
  <meta http-equiv="Content-Script-Type" content="text/javascript" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500;700&display=swap" rel="stylesheet">

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/imgs/favicon.png" sizes="180×180">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/imgs/favicon.png" sizes="180×180">
  <link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <h1 class="logo_wrap">
      <a href="<?php echo esc_url(home_url('/')); ?>">logo</a>
    </h1>

    <nav id="js-nav" class="header_nav_menu">
      <ul class="nav_menu_list">
        <li class="nav_menu_item"><a href="<?php echo esc_url(home_url('/news/')); ?>">News</a></li>
        <li class="nav_menu_item"><a href="">メニュー</a></li>
        <li class="nav_menu_item"><a href="">メニュー</a></li>
        <li class="nav_menu_item"><a href="">メニュー</a></li>
        <li class="nav_menu_item"><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問合せ</a></li>
      </ul>
    </nav>

    <div class="header_contact_hamburger_wrap">
      <a class="header_contact_sp" href="<?php echo esc_url(home_url('/contact/')); ?>">お問合せ</a>
      <button class="header_hamburger" id="js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>
  <div class="background" id="js-background"></div>