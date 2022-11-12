<?php
function my_setup()
{
  add_theme_support('post-thumbnails'); /* アイキャッチ */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('title-tag'); /* タイトルタグ自動生成 */
  add_theme_support('html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'news'; // 任意のスラッグ名
    $args['label'] =  'News';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// 投稿の表示件数制御
function column_posts($query)
{
  if ($query->is_archive()) {
    $query->set('posts_per_page', 10);
    return;
  }
}
add_action('pre_get_posts', 'column_posts');
