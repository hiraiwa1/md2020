<div class="inner">
      <div class="schedule_body opacity_bg">
        <h2 class="content_title schedule_title">SCHEDULE</h2><!-- /.content_title -->
        <div class="schedule_list">
          <dl>
            <div class="schedule_list-item">
        <?php
        $page_id = get_page_by_path('home');
        $page_id = $page_id->ID;
        $schedules = array('top-schedule');
        foreach($schedules as $schedule):
        if(have_rows($schedule, $page_id)):
          while(have_rows($schedule, $page_id)): the_row();
        ?>
              
            </div><!-- /.schedule_list-item -->
            <div class="schedule_list-item">
              <dt>
                <?php the_sub_field('schedule-text'); ?>
              </dt>
              <dd>
                <a href="<?php the_sub_field('schedule-url'); ?>">
                <?php the_sub_field('schedule-urltext'); ?>
                </a>
              </dd>

<?php
    endwhile;
  endif;
endforeach;
?>
            </div><!-- /.schedule_list-item -->          
          </dl>

        </div><!-- /.schedule_list -->
      </div><!-- /.schedule_body -->
      <div class="schedule_btn-item">
        <div class="content_btn-b schedule_contact"><a href="">お問い合わせはこちら</a></div><!-- /.content_btn-b schedule_contact -->
        <div class="content_btn-b schedule_ticket"><a href="">チケット予約サイトへ</a></div><!-- /.content_btn-b schedule_contact -->
      </div><!-- /.schedule_btn-item -->
    </div><!-- /.inner -->
  </div><!-- /.schedule -->
 
</div><!-- /.main -->

<footer>
  <p class="copyright">Copyright &copy; 2019 完全版マハーバーラタ All Rights Reserved.</p><!-- /.copyright -->
</footer>

<div class="page_top"><a href="#">
  <img src="<?php echo get_template_directory_uri(); ?>/image/triangle.svg" alt="">
</a></div><!-- /.page_top -->

<?php wp_footer(); ?>
  
</body>
</html>