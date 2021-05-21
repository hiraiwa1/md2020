
        <div class="cast_content-item">
          <div class="cast_content-item-img">
        
<?php
$image_id = get_sub_field('cast_img');
echo wp_get_attachment_image($image_id, 'sub-cast');
?>

          </div><!-- /.cast_content-item-img -->
          <div class="cast_content-item-box">
            <div class="cast_content-item-title">
              <span><?php the_sub_field('cast_section'); ?></span><?php the_sub_field('cast_name'); ?>
            </div><!-- /.cast_content-item-title -->
            <div class="cast_content-item-work">
              <?php the_sub_field('cast_works'); ?>
            </div><!-- /.cast_content-item-work -->
            <div class="cast_content-item-text">
             <?php the_sub_field('cast_text'); ?>
            </div><!-- /.cast_content-item-text -->
          </div><!-- /.cast_content-item-box -->
        </div><!-- /.cast_content-item -->
