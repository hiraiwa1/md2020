
<?php get_header(); ?>

<div class="main content_bg inquiry_main">
  <div class="section_pankuzu">
    <div class="inner">
      <?php bcn_display(); ?>
    </div><!-- /.inner -->
  </div><!-- /.section_pankuzu -->
  <div class="content inquiry">
    <div class="inner">
      <h2 class="content_title inquiry_title">INQUIRY</h2><!-- /.content_title -->

      <div class="inquiry_content opacity_bg">
        <form id="js-form" action="" method="POST">
        <div class="inquiry_content-text">
          <p>小池博史ブリッジプロジェクトにご興味を持っていただきまして、ありがとうございます。<br>
          公演に関するお問い合わせ、公演・ワークショップのご依頼など、<br>
          お電話（03-3385-2066）か、下記フォームよりお気軽にお問い合わせください。</p>
        </div><!-- /.inquiry_content-text -->

        <div class="inquiry_content-item">
          <label for="">お名前</label>
          <input type="text">
        </div><!-- /.inquiry_content-item -->

        <div class="inquiry_content-item">
          <label for="">電話番号</label>
          <input type="tel" name="tel" id="">
        </div><!-- /.inquiry_content-item -->

        <div class="inquiry_content-item">
          <label for="">メールアドレス</label>
          <input type="email" name="emailAddress" id="">
        </div><!-- /.inquiry_content-item -->

        <div class="inquiry_content-item">
          <label for="">内容</label>
          <textarea name="content"></textarea><!-- /# -->
        </div><!-- /.inquiry_content-item -->

        <button id="js-submit" class="content_btn-b inquiry_content-btn">
          送信
        </button><!-- /.content_btn -->

      </form>

      <p id="js-success" class="end-message">お問い合わせありがとうございました。<br>
        メッセージは正常に送信されました</p>
      <p id="false-message" class="false-message">送信に失敗しました。ページを更新して再度送信してください。</p>

    </div><!-- /.inquiry_content -->


    </div>
  </div>
  <div id="schedule" class="content">
    
<?php get_footer(); ?>
