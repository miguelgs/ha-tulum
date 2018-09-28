<? get_header() ?>

    <div id="project-navigation">
      <ul>
        <li><a href="#">Descripción</a></li>
        <li><a href="#">Galería</a></li>
        <li><a href="#">Ficha Técnica</a></li>
        <li><a href="#">Ubicación</a></li>
      </ul>
      <a href="#" class="cta">Solicita información</a>
    </div>

    <? if (have_rows('description')): ?>
    <? while (have_rows('description')) : the_row(); ?>
    <section id="project-description" class="screen">
      <div class="screen-container">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="content">
              <p class="screen-title screen-title-border">
                HÁ Tulúm La Veleta
              </p>
              <?= get_sub_field( 'text' ) ?>
            </div>
          </div>
          <div class="col-md-6">
            <? $image = wp_get_attachment_image_src(get_sub_field('image'), 'full') ?>
            <div class="image image-display" style="background-image:url(<?= $image[0] ?>)">
              <p class="caption">
                Lorem ipsum
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <? endwhile ?>
    <? endif ?>

    <? $images = get_field('gallery') ?>
    <? if($images): ?>
    <? foreach($images as $image): ?>
    <section id="slider" class="screen">
      <div class="slider-container">
        <div class="slide image-display" style="background-image:url(<?= wp_get_attachment_image( $image['ID'], 'full' ) ?>)">
          <p class="caption">
            <?= $image['caption'] ?>
          </p>
        </div>
      </div>
    </section>
    <? endforeach ?>
    <? endif ?>

    <? if (have_rows('features')): ?>
    <? while (have_rows('features')) : the_row(); ?>
    <section id="project-about" class="screen">
      <div class="screen-container">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="row no-gutters">
              <div class="col-md-6">
                <div class="content">
                  <p>
                    <span class="option">Arquitectura</span>
                    <br><?= get_sub_field( 'architecture' ) ?>
                  </p>
                  <p>
                    <span class="option">Constructora</span>
                    <br><?= get_sub_field( 'construction' ) ?>
                  </p>
                  <p>
                    <span class="option">Uso</span>
                    <br><?= get_sub_field( 'use' ) ?>
                  </p>
                  <p>
                    <span class="option">No. Unidades</span>
                    <br><?= get_sub_field( 'units' ) ?>
                  </p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="content">
                  <p>
                    <span class="option">Niveles</span>
                    <br><?= get_sub_field( 'levels' ) ?>
                  </p>
                  <p>
                    <span class="option">Estatus</span>
                    <br><?= get_sub_field( 'status' ) ?>
                  </p>
                  <p>
                    <span class="option">Ubicación</span>
                    <br><?= get_sub_field( 'location' ) ?>
                  </p>
                  <p>
                    <span class="option">M2 por unidad</span>
                    <br><?= get_sub_field( 'area' ) ?>
                  </p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="content">
                  <p>
                    <span class="option">Información adicional</span>
                    <br><?= get_sub_field( 'aditional-information' ) ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content">
              <p class="text-right">
                Si deseas más información sobre este desarrollo
                <br><a href="<?= get_sub_field( 'pdf' ) ?>" class="ha-btn ha-btn-submit">Descarga el documento</a>
              </p>
            </div>
          </div>
          <div class="collaborators col-md-6">
            <div class="content">
              <p class="title">
                Nuestros colaboradores
              </p>
              <div class="carousel">
                <div class="item">
                  <div class="logo" style="background-image:url(assets/images/collaborators/logo-bios.jpg)"></div>
                </div>
                <div class="item">
                  <div class="logo" style="background-image:url(assets/images/collaborators/logo-techne.jpg)"></div>
                </div>
                <div class="item">
                  <div class="logo" style="background-image:url(assets/images/collaborators/logo-bios.jpg)"></div>
                </div>
                <div class="item">
                  <div class="logo" style="background-image:url(assets/images/collaborators/logo-techne.jpg)"></div>
                </div>
                <div class="item">
                  <div class="logo" style="background-image:url(assets/images/collaborators/logo-bios.jpg)"></div>
                </div>
                <div class="item">
                  <div class="logo" style="background-image:url(assets/images/collaborators/logo-bios.jpg)"></div>
                </div>
              </div>
            </div>
          </div>
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
          <div class="col-md-4">
            <div class="content">
              <p class="screen-title screen-title-border">
                HÁ Tulúm La Veleta
              </p>
              <?= get_sub_field( 'address' ) ?>
              <p class="subtitle">
                Atracciones y desarrollos cerca
              </p>
              <?= get_sub_field( 'nearby' ) ?>
            </div>
          </div>
          <div class="col-md-8">
            <iframe src="<?= get_sub_field( 'map' ) ?>" frameborder="0" class="map" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <? endwhile ?>
    <? endif ?>

    <section id="projects" class="screen">
      <div class="screen-container">
        <div class="content">
          <p class="screen-title">
            Otros desarrollos en preventa
          </p>
          <div class="projects-container current-projects row no-gutters">
            <div class="col-lg-4">
              <div class="project">
                <div class="project-image">
                  <a href="#" class="ha-btn ha-btn-white">Ver más</a>
                </div>
                <p class="project-name">
                  HÁ Tulúm La Veleta
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="project">
                <div class="project-image">
                  <a href="#" class="ha-btn ha-btn-white">Ver más</a>
                </div>
                <p class="project-name">
                  HÁ Tulúm La Veleta
                </p>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="project">
                <div class="project-image">
                  <a href="#" class="ha-btn ha-btn-white">Ver más</a>
                </div>
                <p class="project-name">
                  HÁ Tulúm La Veleta
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="project-contact-us" class="screen">
      <div class="screen-container">
        <div class="content">
          <p class="screen-title screen-title-border">
            Quiero más información sobre este desarrollo
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
              <div class="col-6 d-flex align-items-end">
                <a href="#" class="ha-btn ha-btn-submit">Enviar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<? get_footer() ?>