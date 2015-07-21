<?php
require_once( 'config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns">
            <aside>
                <div class="four columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="eight columns">
                <h1>Grid System</h1>
                <div class="sub__nav--wrap">
                    <ul class="sub__nav">
                        <li>Grid Sizes</li>
                        <li>Grid Gutter</li>
                        <li>Mixed Grids</li>
                        <li>Responsive Columns</li>
                        <li>Nested Grids</li>
                    </ul>
                </div>

                <div class="l-container l-margin-tm">
                    <p>Our grid system is composed of 8 flexible columns with a gutter between columns of 30px. We apply border-box so that the border and padding is included in the width of the grid columns.</p>
                </div>
            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>