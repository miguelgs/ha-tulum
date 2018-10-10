<!doctype html>
<html>

<head>
  <? wp_head() ?>
</head>

<body>
  <div id="main-container">

    <div id="main-navigation">
      <ul>
        <li><a href="#" rel="slider"><?= pll_e( 'Inicio' ) ?></a></li>
        <li>
          <a href="#" rel="projects"><?= pll_e( 'Desarrollos' ) ?></a>
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
            <div class="projects-container current-projects row no-gutters">
              <ul>
                <? while( $loop->have_posts() ) : $loop->the_post() ?>
                  <li><a href="<? the_permalink() ?>"><? the_title() ?></a></li>
                <? endwhile ?>
              <? wp_reset_postdata() ?>
              </ul>
            </div>
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
            <div class="projects-container current-projects row no-gutters">
              <ul>
                <? while( $loop->have_posts() ) : $loop->the_post() ?>
                  <li><a href="<? the_permalink() ?>"><? the_title() ?></a></li>
                <? endwhile ?>
              <? wp_reset_postdata() ?>
              </ul>
            </div>
            <? endif ?>
          </div>
        </li>
        <li><a href="#" rel="about-us"><?= pll_e( 'Nosotros' ) ?></a></li>
        <li><a href="#" rel="feature"><?= pll_e( 'Feature' ) ?></a></li>
        <li><a href="#" rel="contact-us"><?= pll_e( 'Contacto' ) ?></a></li>
        <li class="language"><a href="#"><?= pll_e( 'English' ) ?></a></li>
      </ul>
    </div>