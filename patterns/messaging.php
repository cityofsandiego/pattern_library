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

                <h1>Messaging</h1>
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Alert: Success</li>
				        <li>Alert: Warning</li>
				        <li>Alert: Error</li>
				    </ul>
				</div>

				<div class="l-container l-margin-vm">
				    <h2>Success</h2>
				    <div class="message message--success">
				    	<p>
				    	<i class="icon-search"></i>
				    	<strong>Success!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.</p>
				    </div>
				</div>

				<div class="l-container l-margin-vm">
					<h2>Warning</h2>
					<div class="message message--warning">
				    	<p>
				    	<i class="icon-search"></i>
				    	<strong>Warning!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.</p>
					</div>
				</div>

				<div class="l-container l-margin-vm">
					<h2>Error</h2>
					<div class="message message--error">
				    	<p>
				    	<i class="icon-search"></i>
				    	<strong>Error!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.</p>
					</div>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>