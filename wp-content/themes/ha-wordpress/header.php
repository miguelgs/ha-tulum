<!doctype html>
<html>

<head>
    <meta charset="<? bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <? wp_head() ?>
</head>

<body>
  <div id="main-container">

    <div id="main-navigation">
      <ul>
        <li><a href="<? bloginfo('url') ?>#slider" rel="slider"><?= pll_e( 'Inicio' ) ?></a></li>
        <li>
          <a href="<? bloginfo('url') ?>#projects" rel="projects"><?= pll_e( 'Desarrollos' ) ?></a>
          <div class="sub-navigation">
            <?
              $args = array(
                'post_type' => 'project',
                'posts_per_page' => 3,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'project_type',
                    'field' => 'slug',
                    'terms' => 'preventa'
                  )
                )
              );

              $loop = new WP_Query( $args );
            ?>
            <? if( $loop->have_posts() ): ?>
            <p class="head">
              <?= pll_e( 'Desarrollos en Preventa' ) ?>
            </p>
            <ul>
              <? while( $loop->have_posts() ) : $loop->the_post() ?>
                <li><a href="<? the_permalink() ?>"><? the_title() ?></a></li>
              <? endwhile ?>
            </ul>
            <? wp_reset_postdata() ?>
            <? endif ?>
            <?
              $args = array(
                'post_type' => 'project',
                'posts_per_page' => 3,
                'tax_query' => array(
                  array(
                    'taxonomy' => 'project_type',
                    'field' => 'slug',
                    'terms' => 'anteriores'
                  )
                )
              );

              $loop = new WP_Query( $args );
            ?>
            <? if( $loop->have_posts() ): ?>
            <p class="head">
              <?= pll_e( 'Desarrollos anteriores' ) ?>
            </p>
            <ul>
              <? while( $loop->have_posts() ) : $loop->the_post() ?>
                <li><a href="<? the_permalink() ?>"><? the_title() ?></a></li>
              <? endwhile ?>
            </ul>
            <? wp_reset_postdata() ?>
            <? endif ?>
          </div>
        </li>
        <li><a href="<? bloginfo('url') ?>#about-us" rel="about-us"><?= pll_e( 'Nosotros' ) ?></a></li>
        <li><a href="<? bloginfo('url') ?>#feature" rel="feature"><?= pll_e( 'Feature' ) ?></a></li>
        <li><a href="<? bloginfo('url') ?>#contact-us" rel="contact-us"><?= pll_e( 'Contacto' ) ?></a></li>
        <? pll_the_languages( array( 'hide_current' => 1 ) ) ?>
      </ul>
    </div>