<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns l-padding-mobile-hd">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">

                <h1>Media</h1>
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Figure w/ Caption</li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
				    <h2>Figure with caption</h2>
                    <figure>
                        <img src="../assets/dist/img/fig-img.jpg" alt="Fig. Alt. Title" width="563" height="283">
                        <figcaption>Image Title: This is the figcaption element.</figcaption>
                    </figure>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>