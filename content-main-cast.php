
        <div class="cast_list-item cast-1">
          <div class="cast_item-img">
            
<?php
$image_id = get_sub_field('cast_img');
echo wp_get_attachment_image($image_id, 'cast');
?>

          </div><!-- /.cast_item-img -->
          <div class="cast_item-title">
            <div class="cast_item-title-name">
              <span><?php the_sub_field('cast_section'); ?></span><?php the_sub_field('cast_name'); ?>
            </div><!-- /.cast_item-title-name -->
            <div class="cast_item-title-work"><?php the_sub_field('cast_works'); ?></div><!-- /.cast_item-title-work -->
          </div><!-- /.cast_item-title -->
          <div class="cast_item-text">
            <?php the_sub_field('cast_text'); ?>
          </div><!-- /.cast_item-text -->
        </div><!-- /.cast_list-item -->
