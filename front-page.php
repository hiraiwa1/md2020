<?php get_header(); ?>


<div class="main content_bg">

  <div id="intro" class="content">
    <div class="inner">
      <div class="intro_body opacity_bg">

        <h2 class="content_title intro_title">INTRODUCTION<span>なぜ今「マハーバーラタ」なのか？</span></h2><!-- /.content_title -->
        <div class="intro_text">
          <p>「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
            それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>
            平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
            </p>
            <p>現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
              神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
              非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
              </p>
        </div><!-- /.introduction-text -->
      </div><!-- /.intoro_body -->
    </div><!-- /.inner --> 
  </div><!-- /.content -->

  <div id="news" class="content">
    <div class="inner">
      <?php $term_obj = get_term_by('slug', 'news', 'category'); ?>
      <h2 class="content_title news_title"><?php echo $term_obj->name; ?></h2><!-- /.content_title -->
      <div class="content_btn news_btn"><a href="<?php echo esc_url(get_term_link($term_obj)); ?>"><?php echo $term_obj->name; ?>一覧へ</a></div><!-- /.content_btn -->
      <div class="news_list">

      <?php
      $args = array(
        'post_type' => 'post',
        'category_name' => 'news',
        'posts_per' => 5,
      );
      $news_posts = new WP_Query($args);
      if($news_posts->have_posts()):
        while($news_posts->have_posts()): $news_posts->the_post();
      ?>

        <div class="news_list-item">
          <a href="<?php the_permalink(); ?>">
            <div class="news_list-img">
              <?php the_post_thumbnail(); ?>
            </div><!-- /.news_list-img -->
            <div class="news_list-body">
              <div class="news_list-body-day"><?php the_time('Y.n.j'); ?></div><!-- /.news_list-body-day -->
              <div class="news_list-body-title"><?php the_title(); ?></div><!-- /.news_list-body-title -->
            </div><!-- /.news_list-body -->
          </a>
        </div><!-- /.news_list-item -->

      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

      </div><!-- /.news_primary -->
    </div><!-- /.inner -->
  </div><!-- /.content -->

  <div id="story" class="content">
    <div class="inner">
    <?php
    $story_obj = get_page_by_path('story');
    $post = $story_obj;
    setup_postdata($post);
    $story_title = get_the_title();
    ?>
    <h2 class="content_title story_title"><?php the_title(); ?></h2><!-- /.content_title -->
      <p class="story_body-text">
        <?php
        if(have_rows('story_main')): the_row();
        the_sub_field('story_main_text');
        endif;
        ?>
      </p><!-- /.story_body-text -->
      <div class="content_btn story_btn"><a href="<?php echo esc_url(home_url('story')); ?>">もっと詳しく</a></div><!-- /.content_btn -->
      <?php
        wp_reset_postdata();
      ?>
    </div><!-- /.inner -->
  </div><!-- /.content -->

  <div id="comments" class="content">
    <div class="inner">
      <h2 class="content_title comments_title">COMMENTS</h2>
      <div class="comments_subtitle">舞台関係者のみならず各界著名人からコメントが届いています！</div><!-- /.comments_subtitle -->
      <div class="comments_body">
        <div class="comments_body-item opacity_bg">
          <div class="comments_body-title"><span>京都佛立ミュージアム館長 </span>長松清潤</div><!-- /.comments_title -->
          <div class="comments_body-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
          まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</div><!-- /.comments_body-text -->
        </div><!-- /.comments_body-item -->
          <div class="content_btn comments_btn"><a href="<?php echo esc_url(home_url('comment')); ?>">もっと見る</a></div><!-- /.content_btn -->
      </div><!-- /.comments_body -->
    </div><!-- /.inner -->
  </div><!-- /.content -->

  <div id="cast" class="content">
  <?php
  $cast_obj = get_page_by_path('cast');
  $post = $cast_obj;
  setup_postdata($post);
  $cast_title = get_the_title();
  ?>
    <h2 class="content_title cast_title"><?php the_title(); ?></h2><!-- /.content_title -->
    <?php wp_reset_postdata(); ?>
    <div class="cast_list content_bg-whit">
        <div class="inner js-slider">

<?php
  $page_id = get_page_by_path('cast');
  $page_id = $page_id->ID;
  $casts = array('cast_1', 'cast_2', 'cast_3');
  foreach($casts as $cast):
 if(have_rows($cast, $page_id)):
  while(have_rows($cast, $page_id)): the_row();
?>

          <div class="cast_list-item">
            <div class="cast_item-img">
            <?php
            $image_id = get_sub_field('cast_img');
            echo wp_get_attachment_image($image_id, 'cast');
            ?>
            </div>
            <div class="cast_item-title">
              <div class="cast_item-title-name">
                <span><?php the_sub_field('cast_section'); ?></span><?php the_sub_field('cast_name'); ?>
              </div><!-- /.cast_item-title-name -->
              <div class="cast_item-title-work"></div><!-- /.cast_item-title-work -->
            </div><!-- /.cast_item-title -->
            <div class="cast_item-text">
              <?php the_sub_field('cast_text'); ?>
            </div><!-- /.cast_item-text -->
          </div><!-- /.cast_list-item -->

<?php
  endwhile;
endif;
endforeach;
?>

          </div>

        <div class="content_btn cast_btn"><a href="<?php echo esc_url(home_url('cast')); ?>">もっと見る</a></div><!-- /.content_btn cast_btn -->
      </div><!-- /.cast_list -->
  </div><!-- /#cast.content -->

  <div id="schedule" class="content">

<?php get_footer(); ?>