<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns background-white l-padding-mobile-hd">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">

                <h1>Modal</h1>

                <!-- Lightbox -->
                <div class="l-container l-margin-vm">
                    <h2>Lightbox</h2>
                    <a href="#test-modal" class="popup-modal">Lightbox example</a>
                    <div id="test-modal" class="white-popup mfp-hide">
                        <h1>Modal dialog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                    <p class="l-margin-tm l-margin-bn"><em><strong>Notes</strong></em></p>
                    <p>We're utilizing <a href="http://dimsemenov.com/plugins/magnific-popup/" target="_blank">Magnific Popup</a> for lightboxes.</p>
                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>