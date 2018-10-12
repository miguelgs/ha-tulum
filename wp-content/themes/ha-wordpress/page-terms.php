<? /* Template Name: Terms & Privacy */ ?>

<!doctype html>
<html>

<head>
    <meta charset="<? bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <? wp_head() ?>
</head>

<body class="modal-body">
  <div id="terms-and-privacy">
    <div class="container">
      <div class="content">
        <p class="screen-title screen-title-border">
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