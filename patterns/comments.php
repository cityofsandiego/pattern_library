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

                <h1>Comments</h1>
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Avatar</li>
				        <li>Username</li>
				        <li>Textarea</li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
				    <h2>Avatar</h2>
				    <h2>Username</h2>
				    <h2>Textarea</h2>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>