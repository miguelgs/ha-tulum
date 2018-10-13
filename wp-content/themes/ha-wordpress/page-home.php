<? /* Template Name: Home */ ?>

<? get_header() ?>

    <!--------------------------------------------------
      Slider
    --------------------------------------------------->

    <? if( have_rows('slider') ): ?>
    <section id="slider" class="screen">
      <div class="slider-container">
        <? while ( have_rows('slider') ) : the_row(); ?>
        <? $image = wp_get_attachment_image_src(get_sub_field('image'), 'full') ?>
        <div class="slide" style="background-image:url(<?= $image[0] ?>)">
          <header>
            <div class="screen-container">
              <p class="title">
                <?= get_sub_field('title') ?>
              </p>
              <p class="mb-0">
                <a href="<?= get_sub_field('link') ?>" class="ha-btn ha-btn-lg ha-btn-white"><?= pll_e( 'Ver más' ) ?></a>
              </p>
            </div>
          </header>
        </div>
        <? endwhile ?>
      </div>
    </section>
    <? endif ?>

    <!--------------------------------------------------
      Projects
    --------------------------------------------------->
      
    <section id="projects" class="screen">
      <div class="screen-container">
        <div class="content">

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

            <p class="screen-title">
              <?= pll_e( 'Desarrollos en preventa' ) ?>
            </p>
            <div class="projects-container projects-top row no-gutters">

              <? while( $loop->have_posts() ) : $loop->the_post() ?>
                <? if (have_rows('description')): ?>
                  <? while (have_rows('description')) : the_row(); ?>

                    <div class="col-md-4">
                      <div class="project">
                        <? $image = wp_get_attachment_image_src(get_sub_field('image'), 'full') ?>
                        <div class="project-image" style="background-image:url(<?= $image[0] ?>)">
                          <a href="<? the_permalink() ?>" class="ha-btn ha-btn-white"><?= pll_e( 'Ver más' ) ?></a>
                        </div>
                        <p class="project-name">
                          <? the_title() ?>
                        </p>
                      </div>
                    </div>

                  <? endwhile ?>
                <? endif ?>
              <? endwhile ?>

              <? wp_reset_postdata() ?>

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

            <p class="screen-title">
              <?= pll_e( 'Desarrollos anteriores' ) ?>
            </p>
            <div class="projects-container projects-bottom row no-gutters">

              <? while( $loop->have_posts() ) : $loop->the_post() ?>
                <? if (have_rows('description')): ?>
                  <? while (have_rows('description')) : the_row(); ?>

                    <div class="col-md-4">
                      <div class="project">
                        <? $image = wp_get_attachment_image_src(get_sub_field('image'), 'full') ?>
                        <div class="project-image" style="background-image:url(<?= $image[0] ?>)">
                          <a href="<? the_permalink() ?>" class="ha-btn ha-btn-white"><?= pll_e( 'Ver más' ) ?></a>
                        </div>
                        <p class="project-name">
                          <? the_title() ?>
                        </p>
                      </div>
                    </div>

                  <? endwhile ?>
                <? endif ?>
              <? endwhile ?>

              <? wp_reset_postdata() ?>

            </div>

          <? endif ?>

        </div>
      </div>
    </section>

    <!--------------------------------------------------
      About us
    --------------------------------------------------->

    <? if( have_rows('about-us') ):  ?>
      <? while( have_rows('about-us') ): the_row();  ?>
      
      <section id="about-us" class="screen">
        <div class="screen-container">
          <div class="content">
            <p class="screen-title screen-title-border">
              <?= pll_e( 'Acerca de nosotros' ) ?>
            </p>
            <?= get_sub_field( 'text' ) ?>
          </div>
          
          <? if ( have_rows('collaborators') ) : ?>
          
          <div class="collaborators">
            <div class="content">
              <p class="title">
                <?= pll_e( 'Nuestros colaboradores' ) ?>
              </p>
              <div class="carousel">
                
                <? while ( have_rows('collaborators') ) : the_row(); ?>
                
                <div class="item">
                  <? $image = wp_get_attachment_image_src(get_sub_field('image'), 'full') ?>
                  <div class="logo" style="background-image:url(<?= $image[0] ?>)"></div>
                </div>

                <? endwhile ?>

              </div>
            </div>
          </div>

          <? endif ?>

        </div>
      </section>

      <? endwhile ?>
    <? endif ?>

    <!--------------------------------------------------
      Feature
    --------------------------------------------------->

    <? if (have_rows('feature')): ?>
      <? while (have_rows('feature')) : the_row(); ?>
      <section id="feature" class="screen">
        <div class="screen-container screen-container-regular">
          <div class="row no-gutters">
            <div class="col-lg-6">
              <? $image = wp_get_attachment_image_src(get_sub_field('image'), 'full') ?>
              <div class="image" style="background-image:url(<?= $image[0] ?>)"></div>
            </div>
            <div class="col-lg-6">
              <div class="content">
                <p class="screen-title screen-title-border">
                  <?= get_sub_field( 'title' ) ?>
                </p>
                <?= get_sub_field( 'description' ) ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <? endwhile ?>
    <? endif ?>

    <!--------------------------------------------------
      Contact us
    --------------------------------------------------->

    <section id="contact-us" class="screen">
      <div class="screen-container">
        <div class="content">
          <p class="screen-title screen-title-border">
            <?= pll_e( 'Ponte en contacto con nosotros' ) ?>
          </p>
          <div class="form">
            <div class="row no-gutters">
              <div class="col-lg-6">
                <div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apellido">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="E-mail">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Teléfono">
                  </div>
                </div>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="col-lg-6">
                <div>
                  <div class="form-group mb-0">
                    <textarea class="form-control" placeholder="Mensaje" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-end">
                <a href="#" class="ha-btn ha-btn-submit"><?= pll_e( 'Enviar' ) ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<? get_footer() ?>