
        <div class="news-archive_list-item">
          <a href="<?php the_permalink(); ?>">
            <div class="news_list-img">
              <?php the_post_thumbnail(); ?>
            </div><!-- /.news_list-img -->
            <div class="news_list-body">
              <div class="news_list-body-day"><?php the_time('Y.n.j') ?></div><!-- /.news_list-body-day -->
              <div class="news_list-body-title"><?php the_title(); ?></div><!-- /.news_list-body-title -->
            </div><!-- /.news_list-body -->
          </a>
        </div><!-- /.news_list-item news-archive_list-item -->
