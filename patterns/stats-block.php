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

                <h1>Stats Block</h1>

                <div class="l-container l-margin-tm">

                    <div class="row">
                        <div class="four columns">
                            <div class="card card--stats">
                                <p class="card__headline">1.356 mm</p>
                                <p>people in San Diego</p>
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="card card--stats">
                                <p class="card__headline">372</p>
                                <p>square miles</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>