    <footer id="main-footer">
      <nav>
        <!--<a href="#" rel="terms"><?= pll_e( 'Términos y Condiciones' ) ?></a>
        |-->
        <a href="#" rel="privacy"><?= pll_e( 'Política de Privacidad' ) ?></a>
      </nav>
    </footer>
  </div>

  <div class="modal fade" id="privacy">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <a href="#" rel="privacy" class="close"><a>
        <!--<div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>-->
        <div class="modal-body">
          <!--<iframe src="<?= get_post_permalink( pll_get_post( 3 ) ) ?>" frameborder="0" allowtransparency="true"></iframe>-->

          <?
            $privacy_id = 3;
            $privacy_post = get_post( $privacy_id ); 
          ?>

          <p class="screen-title screen-title-border">
            <?=  $privacy_post->post_title ?>
          </p>
          <?= $privacy_post->post_content ?>

        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>-->
      </div>
    </div>
  </div>

  <div class="modal fade" id="terms">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <a href="#" rel="terms" class="close"><a>
        <!--<div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>-->
        <div class="modal-body">
          <iframe src="<?= get_post_permalink( pll_get_post( 100 ) ) ?>" frameborder="0" allowtransparency="true"></iframe>
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>-->
      </div>
    </div>
  </div>

  <? wp_footer() ?>
</body>

</html>