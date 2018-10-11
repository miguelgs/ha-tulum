<? /* Template Name: Terms & Privacy */ ?>

<!doctype html>
<html>

<head>
  <? wp_head() ?>
</head>

<body>
  <div id="terms-and-privacy" class="content-area">
    <div class="screen-container">
      <div class="content">
        <p class="screen-title">
          <? the_title() ?>
        </p>
        <? if (have_posts()) : while (have_posts()) : the_post(); ?>
          <? the_content() ?>
        <? endif ?>
      </div>
    </div>
  </div>
  <? wp_footer() ?>
</body>

</html>