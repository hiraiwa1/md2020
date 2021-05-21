<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>

</head>

<body>
<header>
  <div class="header_nav">
    <div class="toggle">
      <span></span>
      <span></span>
      <span></span>
    </div><!-- /.toggle -->

<?php
wp_nav_menu(
  array(
    'theme_location' => 'place_global',
    'container' => false,
  )
  );
?>

  </div><!-- /.header_nav -->

<?php if(is_home() || is_front_page()) : ?>
  <div class="top_image">
    <div class="top_image-title">
      <img src="<?php echo get_template_directory_uri() ?>/image/top-title.png" alt="">
    </div><!-- /.top_image-title -->
    <div class="top_image-data">
      <div class="image-day">
        <img src="<?php echo get_template_directory_uri() ?>/image/top-data.png" alt="">
      </div><!-- /.image-data -->
      <div class="image-text">
        <p>小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である<span>完全版マハーバーラタ</span>の公演が決定！！</p><p>
        アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
          </p>
      </div><!-- /.image-text -->
    </div><!-- /.top_image-data -->
    <div class="content_btn-b top_btn"><a href="">チケット予約サイトへ</a></div><!-- /.top_image-ticket -->
<?php  elseif(is_page('story')) : ?>
  <div class="top_image story_top-image">
    <div class="inner">
      <div class="story_top-image-head">
        <div class="top_image-title section_top-image-title">
          <img src="<?php echo get_template_directory_uri() ?>/image/top-title.png" alt="">
        </div><!-- /.top_image-title -->
        <div class="top_image-data section_top-image-data">
          <div class="image-day section_image-day">
            <img src="<?php echo get_template_directory_uri() ?>/image/top-data.png" alt="">
          </div><!-- /.image-data -->
        </div><!-- /.top_image-data -->
        <div class="content_btn-b top_btn story_top-image-btn"><a href="">チケット予約サイトへ</a></div><!-- /.top_image-ticket -->
      </div><!-- /.story_top-image-head -->

      <div class="section_pankuzu">
        <div class="inner">
          <?php
          if(function_exists('bcn_display')) {
            bcn_display();
          }
          ?>
        </div><!-- /.inner -->
      </div><!-- /.section_pankuzu --> 
      <div class="story_top-image-content">
      
<?php
if(have_rows('story_main')):
  while(have_rows('story_main')): the_row();
?>

        <div class="story_top-image-content-title"><?php the_title(); ?></div><!-- /.story_top-image-content-title -->
        <div class="story_top-image-item">
          <div class="story_top-image-item-subtitle"><?php the_sub_field('story_main_title'); ?></div><!-- /.story_top-image-item-subtitle -->
          <div class="story_top-image-item-text"><?php the_sub_field('story_main_text'); ?>
          </div><!-- /.story_top-image-item-text -->
        </div><!-- /.story_top-image-item -->

<?php
  endwhile;
endif;
?>

      </div><!-- /.story_top-image-content -->
    </div><!-- /.inner -->

<?php else : ?>
  <div class="top_image section_top-image">
    <div class="inner">
      <div class="top_image-title section_top-image-title">
        <img src="<?php echo get_template_directory_uri() ?>/image/top-title.png" alt="">
      </div><!-- /.top_image-title -->
      <div class="top_image-data section_top-image-data">
        <div class="image-day section_image-day">
          <img src="<?php echo get_template_directory_uri() ?>/image/top-data.png" alt="">
        </div><!-- /.image-data -->
      </div><!-- /.top_image-data -->
      <div class="content_btn-b top_btn section_top-btn"><a href="">チケット予約サイトへ</a></div><!-- /.top_image-ticket -->
    </div><!-- /.inner -->
<?php endif; ?>
    
  </div><!-- /.top_image -->
</header>