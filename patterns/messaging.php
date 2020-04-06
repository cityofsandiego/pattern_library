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

                <h1>Messaging</h1>

				<div class="l-container l-margin-vm">
				    <h2>Success</h2>
				    <div class="message message--success">
				    	<p>
				    	<i class="icon-flag l-margin-rs"></i>
				    	<strong>Success!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.
				    	<a href="" class="pull-right"><i class="icon-cross-circle"></i></a></p>
				    </div>
				</div>

				<div class="l-container l-margin-vm">
					<h2>Warning</h2>
					<div class="message message--warning">
				    	<p>
				    	<i class="icon-flag l-margin-rs"></i>
				    	<strong>Warning!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.
				    	<a href="" class="pull-right"><i class="icon-cross-circle"></i></a></p>
					</div>
				</div>

				<div class="l-container l-margin-vm">
					<h2>Error</h2>
					<div class="message message--error">
				    	<p>
				    	<i class="icon-flag l-margin-rs"></i>
				    	<strong>Error!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.
				    	<a href="" class="pull-right"><i class="icon-cross-circle"></i></a></p>
					</div>
				</div>

				<div class="l-container l-margin-vm">
					<h2>Emergency</h2>
					<div class="message message--emergency">
				    	<p>
				    	<i class="icon-flag l-margin-rs"></i>
				    	<strong>Alert!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Proin in nunc mauris</a>.</p>
					</div>
				</div>

				<div class="l-container">
					<div class="row">
						<div class="six columns">
							<p>Messages use a simple <strong>.message</strong> class with type modifiers.</p>
						</div>
						<div class="six columns">
							<div class="code__examples">
                        <form><textarea class="pattern" id="comp-code-msg" name="code">
<div class="message message--error">
<p>
	<i class="icon-flag"></i>
	<strong>Error!</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.
	<a href="" class="pull-right"><i class="icon-cross-circle"></i></a>
</p>
</div></textarea> </form> </div>
						</div>
					</div>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>