<div class="story_content-item story_content-img-1">
      <div class="story_content-bg">
        <?php
        $image_id = get_sub_field('story_bg');
        echo wp_get_attachment_image($image_id, 'story');
        ?>
      </div><!-- /.story_content-bg -->
      <div class="inner story_content-text">
        <p><?php the_sub_field('story_text'); ?></p>
      </div>
    </div><!-- /.story_content-item -->