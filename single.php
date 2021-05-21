
<?php get_header(); ?>

<div class="main content_bg news-single_main">
  <div class="section_pankuzu">
    <div class="inner">
      <?php bcn_display(); ?>
    </div><!-- /.inner -->
  </div><!-- /.section_pankuzu -->

  <!-- primary -->
  <div class="content section_content">
    <div class="inner">
      <h2 class="content_title section_title"><?php echo get_main_title(); ?></h2><!-- /.content_title -->

<?php
if(have_posts()):
  while(have_posts()): the_post();
    get_template_part('content-single');
  endwhile;
endif;
?>

      <div class="section_prev-next">

<?php
$next_post = get_next_post('news');
$prev_post = get_previous_post('news');
if($next_post):
?>

        <div class="section_next">
          <a href="<?php echo get_permalink($next_post->ID); ?>">
            <div class="section_prev-next-btn section_next-btn">&lt;</div><!-- /.section_next-btn -->
            <div class="section_prev-next-title">
              <span><?php echo get_the_time('Y.m.d', $next_post->ID); ?></span>
              <?php echo get_the_title($next_post->ID); ?>
            </div><!-- /.section_prev-next-title -->
          </a>
        </div><!-- /.section_next -->

<?php
endif;
if($prev_post):
?>

        <div class="section_prev">
          <a href="<?php echo get_permalink($prev_post->ID); ?>">
            <div class="section_prev-next-btn sction_prev-btn">&gt;</div><!-- /.section_next-btn -->
            <div class="section_prev-next-title">
              <span><?php echo get_the_time('Y.m.d', $prev_post->ID); ?></span>
              <?php echo get_the_title($prev_post->ID); ?>
            </div><!-- /.section_prev-next-title -->
          </a>
        </div><!-- /.section_next -->
      </div><!-- /.section_perv-next -->

<?php endif; ?>

    </div><!-- /.inner -->
  </div><!-- ./content -->
  


  <div id="schedule" class="content news-single_schedule">
    
<?php get_footer(); ?>
