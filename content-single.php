<div class="news-single_content">
        <div class="news-single_image">
          <?php if(has_post_thumbnail()) {
            the_post_thumbnail('large');
          }
          ?>
        </div><!-- /.news-single_image -->
        <div class="news-single_title">
          <span><?php the_time('Y.n.j') ?></span>
          <h2><?php the_title(); ?></h2>
        </div><!-- /.news-single_title -->
         <div class="news-single_item">

         <?php
         the_content();
         ?>
         <?php
        //  改ページを有効にするための記述
        wp_link_pages(
          array(
          'before' => '<nav class="entry-links">',
          'after' => '</nav>',
          'link_before' => '',
          'link_after' => '',
          'next_or_number' => 'number',
          'separator' => '',
          ));
         ?>

        </div><!-- /.news-single_item -->
      </div><!-- /.news-single_content -->