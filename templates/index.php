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
                        <li><a href="blog-detail-1-column.php">Blog Detail 1 Column</a></li>
                        <li><a href="blog-detail-2-column.php">Blog Detail 2 Column</a></li>
                        <li><a href="blog-detail-3-column.php">Blog Detail 3 Column</a></li>
                    </ul>
                </div>

            </div> <!-- Nine columns -->
        </div> <!-- row -->
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>