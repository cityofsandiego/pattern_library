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
                <h1>Templates</h1>

                <div class="l-container l-margin-tm">
                    <ul>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="blog-detail.php">Blog Detail</a></li>
                    </ul>
                </div>

            </div> <!-- Nine columns -->
        </div> <!-- row -->
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>