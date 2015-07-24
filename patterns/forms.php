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

                <h1>Forms</h1>
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Search</li>
				        <li>Comment Form</li>
				        <li>Newsletter Signup</li>
				        <li>I Want To</li>
				        <li>Login</li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
				    <h2>Search</h2>
				    <h2>Comments</h2>
				    <h2>Newsletter Signup</h2>
				    <h2>I Want To...</h2>
				    <h2>Login</h2>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>