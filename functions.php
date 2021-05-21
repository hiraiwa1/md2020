<?php

// テーマのセットアップ
function my_setup() {
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('title-tag');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
    );
}
add_action('after_setup_theme', 'my_setup');


// CSS と JavaScript の読み込み
function my_script_init() {
  wp_deregister_script('jquery');
  wp_enqueue_style('reset', get_template_directory_uri(). '/css/reset.css');
  wp_enqueue_style('typekit', 'https://use.typekit.net/uza5ipb.css', array(), NULL, 'all');
  wp_enqueue_style('slick', get_template_directory_uri(). '/css/slick.css', array(), NULL, 'all');
  wp_enqueue_style('slick-theme', get_template_directory_uri(). '/css/slick-theme.css', array('slick'), NULL, 'all');
  wp_enqueue_style( 'my', get_template_directory_uri(). '/style.css', array('reset'), '1.0.0', 'all');
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.js', array(), NULL, false);
  wp_enqueue_script('slick', get_template_directory_uri(). '/js/slick.min.js', array('jquery'), NULL, true);
  wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js' , array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// メニュー
register_nav_menus(
  array(
    'place_global' => 'グローバル',
    'p;ace_footer' => 'フッターナビ',
  )
  );

  // ページごとのメインの文字列を表示
  function get_main_title() {
    if(is_singular('post')):
      $category_obj = get_the_category();
      return $category_obj[0]->name;
    elseif(is_page()):
      return get_the_title();
    elseif(is_category()):
      return single_cat_title();
    endif;
  }

  // 子ページの抽出
  function get_child_pages($number = -1, $specified_id = null) {
    if(isset($specified_id)):
      $parent = $specified_id;
    else:
      $parent_id = get_the_ID();
    endif;
      $args = array(
        'posts_per_page' => $number,
        'post_type' => 'page',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_parent' => $parent_id,
      );
      $child_pages = new WP_Query($args);
      return $child_pages;
  }


?>