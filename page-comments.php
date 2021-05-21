<?php get_header(); ?>

<div class="main content_bg section_main">
  <div class="section_pankuzu">
    <div class="inner">
      <?php bcn_display(); ?>
    </div><!-- /.inner -->
  </div><!-- /.section_pankuzu -->
  <div class="content news-archive">
    <div class="inner">
      <h2 class="content_title comments_title comments_content-title"><?php get_main_title(); ?></h2><!-- /.content_title -->
      <div class="comments_subtitle comments_content-subtitle">舞台関係者のみならず各界著名人からコメントが届いています！</div><!-- /.comments_subtitle -->
      <div class="comments_body comments_content-body">
        <div class="comments_body-item">
          <div class="comments_body-title"><span>京都佛立ミュージアム館長 </span>長松清潤</div><!-- /.comments_title -->
          <div class="comments_body-text comments_content-body-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
          まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</div><!-- /.comments_body-text -->
        </div><!-- /.comments_body-item -->
      </div><!-- /.comments_body -->

      <div class="comments_content-list">
        
<?php
$comments = array('comment_1', 'comment_2', 'comment_3', 'comment_4', 'comment_5', 'comment_6', 'comment_7', 'comment_8', 'comment_9', 'comment_10', 'comment_11', 'comment_12');
foreach($comments as $comment):
  if(have_rows($comment)):
    while(have_rows($comment)): the_row();
      get_template_part('content-comment');
    endwhile;
  endif;
endforeach;
?>


      </div><!-- /.comments_content-list -->

    </div>
  </div>    


  <div id="schedule" class="content comments_content">
   
<?php get_footer(); ?>
