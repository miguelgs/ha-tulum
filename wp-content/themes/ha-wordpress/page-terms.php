<? /* Template Name: Terms & Privacy */ ?>

<!doctype html>
<html>

<head>
  <? wp_head() ?>
</head>

<body>
  <div id="terms-and-privacy">
    <div class="modal-container">
      <div class="content">
        <p class="screen-title">
          <? the_title() ?>
        </p>
        <? if (have_posts()) : while (have_posts()) : the_post(); ?>
          <? the_content(); ?>
        <? endwhile; endif ?>
      </div>
    </div>
  </div>
  <? wp_footer() ?>
</body>

</html>