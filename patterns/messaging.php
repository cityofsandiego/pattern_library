<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">

                <h1>Messaging</h1>
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Alert: Success</li>
				        <li>Alert: Warning</li>
				        <li>Alert: Error</li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
				    <h2>Success</h2>
				    <h2>Warning</h2>
				    <h2>Error</h2>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>