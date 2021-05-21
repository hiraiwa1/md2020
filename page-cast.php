<?php get_header(); ?>

<div class="main content_bg cast_main">
  <div class="section_pankuzu">
    <div class="inner">
      <?php bcn_display(); ?>
    </div><!-- /.inner -->
  </div><!-- /.section_pankuzu -->
  <div class="content news-archive">
  
    <h2 class="content_title e cast_title cast_content-title"><?php the_title(); ?></h2><!-- /.content_title -->
    
    <div class="cast_list content_bg-whit cast_content-list">
      <div class="inner js-slider">

<?php
$casts = array('cast_1', 'cast_2', 'cast_3');
foreach($casts as $cast):
  if(have_rows($cast)):
    while(have_rows($cast)): the_row();
    get_template_part('content-main-cast');
    endwhile;
  endif;
endforeach;

?>

      </div><!-- /.inner -->
    </div><!-- /.cast_list -->
    <div class="cast_content-sublist">
      <div class="inner">

      <?php
$casts = array('sub-cast_1', 'sub-cast_2', 'sub-cast_3', 'sub-cast_4');
foreach($casts as $cast):
  if(have_rows($cast)):
    while(have_rows($cast)): the_row();
    get_template_part('content-sub-cast');
    endwhile;
  endif;
endforeach;

?>

      </div><!-- /.inner -->
    </div><!-- /.cast_content-sublist -->
    <div class="cast_content-otherlist content_bg-whit">
      <div class="inner">

    
<?php
$casts = array('other-cast_1', 'other-cast_2', 'other-cast_3', 'other-cast_4', 'other-cast_5', 'other-cast_6', 'other-cast_7', 'other-cast_8', 'other-cast_9', 'other-cast_10', 'other-cast_11', 'other-cast_12');
foreach($casts as $cast):
  if(have_rows($cast)):
    while(have_rows($cast)): the_row();
    get_template_part('content-other-cast');
    endwhile;
  endif;
endforeach;

?>   
        
        
      </div><!-- /.inner -->
    </div><!-- /.cast_content-other -->
  </div><!-- /.content -->


  <div id="schedule" class="content content_bg cast_schedule">
    
  <?php get_footer(); ?>