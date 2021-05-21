
<?php get_header(); ?>

<div class="main content_bg news-archive_main">
  <div class="section_pankuzu">
    <div class="inner">
      <?php bcn_display(); ?>
    </div><!-- /.inner -->
  </div><!-- /.section_pankuzu -->
  <div class="content news-archive">
    <div class="inner">
      <h2 class="content_title news_title news-archive_title">

      <?php echo get_main_title(); ?>

      </h2><!-- /.content_title -->
      <div class="news_list news-archive_list">

<?php
if(have_posts()):
  while(have_posts()): the_post();
    get_template_part('content-archive');
  endwhile;
endif;
?>


        </div><!-- /.news_primary -->

      <?php if(paginate_links()): ?>
      <div class="pagination">
        <?php
        echo paginate_links(
          array(
            'end_size' => 1,
            'mid_size' => 1,
            'prev_next' => true,
            'prev_text' => '&lt;',
            'next_text' => '&gt;',
          )
          );
        ?>
      </div><!-- /.pagination -->
        <?php endif; ?>
    </div><!-- /.inner -->
  </div><!-- /.content -->


  <div id="schedule" class="content news-archive_schedule">
    
<?php get_footer(); ?>
