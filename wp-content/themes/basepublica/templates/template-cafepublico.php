<?php
/**
 * Template Name: Cafe Publico
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Base Publica 1.0
 */
get_template_part( 'template-parts/cafepublico' );

?>
<!-- VIDEO MODAL -->
      <div id="player-modal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content bg-dark">
            <div class="modal-header border-0">
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <iframe id="video-player" src="" width="100%" height="100%" border="0" class="border-0"/><iframe>
            </div>
          </div>
        </div>
      </div>