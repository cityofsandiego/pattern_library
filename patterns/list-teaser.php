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

                <h1>List Teaser</h1>
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Thumb (image/video)</li>
				        <li>Headline</li>
				        <li>Byline</li>
				        <li>Date</li>
				        <li>Summary</li>
				        <li>Link/button</li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
				    <h2>Thumb (image/video)</h2>
			        <h2>Headline</h2>
			        <h2>Byline</h2>
			        <h2>Date</h2>
			        <h2>Summary</h2>
			        <h2>Link/button</h2>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>