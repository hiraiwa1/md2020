
<?php get_header(); ?>

<div class="main story_bg story_main">

  <div class="story_content inner">
   
<?php
$storys = array('story_1', 'story_2', 'story_3');
foreach($storys as $story):
  if(have_rows($story)):
    while(have_rows($story)): the_row();
      get_template_part('content-story');
    endwhile;
  endif;
endforeach;
?>

  </div><!-- /.story_content -->
  

  <div id="schedule" class="content content_bg story_schedule">

  <?php get_footer(); ?>