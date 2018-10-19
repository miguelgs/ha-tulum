<? get_header() ?>

    <div id="project-navigation">
      <ul>
        <li><a href="#" rel="project-description"><?= pll_e( 'Descripción' ) ?></a></li>
        <li><a href="#" rel="project-gallery"><?= pll_e( 'Galería' ) ?></a></li>
        <li><a href="#" rel="project-about"><?= pll_e( 'Ficha Técnica' ) ?></a></li>
        <li><a href="#" rel="project-map"><?= pll_e( 'Ubicación' ) ?></a></li>
      </ul>
      <a href="#" rel="project-contact-us" class="cta"><?= pll_e( 'Solicita información' ) ?></a>
    </div>

    <? if (have_rows('description')): ?>
      <? while (have_rows('description')) : the_row(); ?>
        <section id="project-description" class="screen">
          <div class="screen-container">
            <div class="row no-gutters">
              <div class="col-xl-7 col-lg-8 order-last order-lg-first">
                <div class="content">
                  <p class="screen-title screen-title-border">
                    <? the_title() ?>
                  </p>
                  <?= get_sub_field( 'text' ) ?>
                </div>
              </div>
              <div class="col-xl-5 col-lg-4 order-first order-lg-last">
                <? $file = wp_get_attachment_image_src(get_sub_field('image'), 'full') ?>
                <div class="image image-display" style="background-image:url(<?= $file[0] ?>)"></div>
              </div>
            </div>
          </div>
        </section>
      <? endwhile ?>
    <? endif ?>

    <? if (have_rows('gallery')): ?>
      <section id="project-gallery">
        <? while (have_rows('gallery')) : the_row(); ?>
          <? $file = wp_get_attachment_image_src( get_sub_field( 'image' ), 'full' ) ?>
          <div class="gallery-item screen image-display" style="background-image:url(<?= $file[0] ?>)">
            <p class="caption">
              <?= get_sub_field( 'caption' ) ?>
            </p>
          </div>
        <? endwhile ?>
      </section>
    <? endif ?>

    <? if (have_rows('features')): ?>
      <? while (have_rows('features')) : the_row(); ?>
        <? $file = wp_get_attachment_image_src( get_sub_field( 'image' ), 'full' ) ?>
        <section id="project-about" class="screen" style="background-image:url(<?= $file[0] ?>)">
          <div class="screen-container">
            <div class="row no-gutters">
              <div class="col-lg-8">
                <div class="row no-gutters">
                  <div class="col-md-6">
                    <div class="content">
                      <p>
                        <span class="option"><?= pll_e( 'Arquitectura' ) ?></span>
                        <br><span class="value"><?= get_sub_field( 'architecture' ) ?></span>
                      </p>
                      <p>
                        <span class="option"><?= pll_e( 'Constructora' ) ?></span>
                        <br><span class="value"><?= get_sub_field( 'construction' ) ?></span>
                      </p>
                      <p>
                        <span class="option"><?= pll_e( 'Uso' ) ?></span>
                        <br><span class="value"><?= get_sub_field( 'use' ) ?></span>
                      </p>
                      <p>
                        <span class="option"><?= pll_e( 'No. Unidades' ) ?></span>
                        <br><span class="value"><?= get_sub_field( 'units' ) ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="content">
                      <p>
                        <span class="option"><?= pll_e( 'Niveles' ) ?></span>
                        <br><span class="value"><?= get_sub_field( 'levels' ) ?></span>
                      </p>
                      <p>
                        <span class="option"><?= pll_e( 'Estatus' ) ?></span>
                        <br><span class="value"><?= get_sub_field( 'status' ) ?></span>
                      </p>
                      <p>
                        <span class="option"><?= pll_e( 'Ubicación' ) ?></span>
                        <br><span class="value"><?= get_sub_field( 'location' ) ?></span>
                      </p>
                      <p>
                        <span class="option"><?= pll_e( 'M2 por unidad' ) ?></span>
                        <br><span class="value"><?= get_sub_field( 'area' ) ?></span>
                      </p>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="content no-padding">
                      <p>
                        <span class="option"><?= pll_e( 'Información adicional' ) ?></span>
                        <br><span class="value"><?= get_sub_field( 'aditional-information' ) ?></span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="content short-padding">
                  <p class="text-right">
                    <?= pll_e( 'Si deseas más información sobre este desarrollo' ) ?>
                    <br><a href="<?= get_sub_field( 'pdf' ) ?>" class="ha-btn ha-btn-pdf"><?= pll_e( 'Descarga el documento' ) ?></a>
                  </p>
                </div>
              </div>
              <? if (have_rows('collaborators')): ?>
              <div class="collaborators col-lg-8">
                <div class="content">
                  <p class="title">
                    <?= pll_e( 'Nuestros colaboradores' ) ?>
                  </p>
                  <div class="carousel">
                    <? while (have_rows('collaborators')) : the_row(); ?>
                    <div class="item">
                      <? $file = wp_get_attachment_image_src( get_sub_field( 'image' ), 'full' ) ?>
                      <div class="logo" style="background-image:url(<?= $file[0] ?>)"></div>
                    </div>
                    <? endwhile ?>
                  </div>
                </div>
              </div>
              <? endif ?>
            </div>
          </div>
        </section>
      <? endwhile ?>
    <? endif ?>

    <? if (have_rows('location')): ?>
      <? while (have_rows('location')) : the_row(); ?>
        <section id="project-map" class="screen">
          <div class="screen-container">
            <div class="row no-gutters">
              <div class="col-xl-7 col-lg-7">
                <div class="content">
                  <p class="screen-title screen-title-border">
                    <? the_title() ?>
                  </p>
                  <?= get_sub_field( 'address' ) ?>
                  <p class="subtitle">
                    <?= pll_e( 'Atracciones y desarrollos cerca' ) ?>
                  </p>
                  <?= get_sub_field( 'nearby' ) ?>
                </div>
              </div>
              <div class="col-xl-5 col-lg-5">
                <iframe src="<?= get_sub_field( 'map' ) ?>" frameborder="0" class="map" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </section>
      <? endwhile ?>
    <? endif ?>

    <?
      $args = array(
        'post_type' => 'project',
        'posts_per_page' => 3,
        'post__not_in' => array( $post->ID ),
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
      <section id="projects" class="screen">
        <div class="screen-container">
          <div class="content">
            <p class="screen-title">
              <?= pll_e( 'Otros desarrollos en preventa' ) ?>
            </p>
            <div class="projects-container projects-top row no-gutters">
              <? while( $loop->have_posts() ) : $loop->the_post() ?>
                <? if (have_rows('description')): ?>
                  <? while (have_rows('description')) : the_row(); ?>
                    <div class="col-lg-4">
                      <div class="project">
                        <? $image = wp_get_attachment_image_src(get_sub_field('image'), 'full') ?>
                        <div class="project-image">
                          <div class="image" style="background-image:url(<?= $image[0] ?>)"></div>
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
          </div>
        </div>
      </section>
    <? endif ?>

    <section id="project-contact-us" class="screen">
      <div class="screen-container">
        <div class="content">
          <p class="screen-title screen-title-border">
            <?= pll_e( 'Quiero más información sobre este desarrollo' ) ?>
          </p>
          <div class="form">
            <div class="row no-gutters justify-content-center">
              <div class="col-lg-6">
                <div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="<?= pll_e( 'Nombre' ) ?>">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="<?= pll_e( 'Apellido' ) ?>">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="<?= pll_e( 'Correo electrónico' ) ?>">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="<?= pll_e( 'Teléfono' ) ?>">
                  </div>
                  <div class="form-group mb-0">
                    <textarea class="form-control" placeholder="<?= pll_e( 'Mensaje' ) ?>" rows="5"></textarea>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 d-flex align-items-end">
                <a href="#" class="ha-btn ha-btn-submit"><?= pll_e( 'Enviar' ) ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<? get_footer() ?>