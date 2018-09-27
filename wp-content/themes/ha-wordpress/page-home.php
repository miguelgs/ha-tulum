<? /* Template Name: Home */ ?>

<? get_header() ?>

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
                <a href="<?= get_sub_field('link') ?>" class="ha-btn ha-btn-lg ha-btn-white">Ver más</a>
              </p>
            </div>
          </header>
        </div>
        <? endwhile ?>
      </div>
    </section>
    <? endif ?>

    <section id="projects" class="screen">
      <div class="screen-container">
        <div class="content">
          <p class="screen-title">
            Desarrollos en preventa
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
          <p class="screen-title">
            Desarrollos anteriores
          </p>
          <div class="projects-container previews-projects row no-gutters">
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

    <? if (have_rows('about-us')): ?>

    <? while (have_rows('about-us')) : the_row(); ?>

    <section id="about-us" class="screen">
      <div class="screen-container">
        <div class="content">
          <p class="screen-title screen-title-border">
            =<? //pll_string( 'about-us' ) ?>
          </p>
          <?= get_subfield( 'text' ) ?>
        </div>
        <? if (have_rows('collaborators')) : ?>
        <div class="collaborators">
          <div class="content">
            <p class="title">
              Nuestros colaboradores
            </p>
            <div class="carousel">
              <? while (have_rows('collaborators')) : the_row(); ?>
              <div class="item">
                123
                <div class="logo" style="background-image:url(assets/images/collaborators/logo-bios.jpg)"></div>
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

    <section id="feature" class="screen">
      <div class="screen-container screen-container-regular">
        <div class="row no-gutters">
          <div class="col-lg-6">
            <div class="image"></div>
          </div>
          <div class="col-lg-6">
            <div class="content">
              <p class="screen-title screen-title-border">
                Human Architecture
              </p>
              <p>
                La estandarización se ha vuelto el lugar común en el desarrollo inmobiliario lo cual genera la
                necesidad urgente de traer una mirada fresca dónde las personas estén al centro del diseño.
              </p>
              <p>
                Para nosotros, diseñar una propiedad, se trata de crear un conjunto de experiencias y rituales que se
                irán descubriendo a lo largo del tiempo. Bajo nuestro enfoque Human Architecture, desarrollamos
                espacios que generan un sentido de pertenencia, que se adaptan al momento de vida de sus habitantes y
                sobre todo, despiertan la curiosidad, la creatividad y la comodidad en el momento justo.
              </p>
              <p>
                Por ello, nunca escatimamos en la calidad y la personalidad de cada espacio, elegimos los elementos,
                texturas y distribución para que, sin importar quién habite en cada espacio, siempre podra sentirlo
                como suyo.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact-us" class="screen">
      <div class="screen-container">
        <div class="content">
          <p class="screen-title screen-title-border">
            Ponte en contacto con nosotros
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