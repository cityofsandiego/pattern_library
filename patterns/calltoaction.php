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
                <h1>Call to Action</h1>
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Graphical w/ Button</li>
				        <li>Text w/ Button</li>
				        <li>Alerts (weather, traffic, etc.)</li>
				    </ul>
				</div>

				<!-- Graphic -->
				<div class="l-container l-margin-tm">
				    <h2>Graphic</h2>
				    <div class="row">
				    	<div class="five columns">
				    		<div class="card card__cta card__cta--graphic" style="background-image:url(../assets/dist/img/cta-graphic.jpg);">
				    			<a href="">
					    			<p>Signup for Junior Lifeguards</p>
					    			<span href="" class="btn btn--secondary">Signup Today</span>
				    			</a>
				    		</div>
				    	</div>
				    </div>
				</div>

			    <!-- Text -->
			    <div class="l-container l-margin-vm">
			    	<h2>Text</h2>
				    <div class="row">
				    	<div class="twelve columns">
				    		<div class="main__message">
				    			<h1 class="main__heading">Movies in the Park</h1>
				    			<p class="main__content">Come join the fun with this year’s Summer Movies in the Park! <a href="">Learn More</a></p>
				    		</div>
				    	</div>
				    </div>
			    </div>

				<!-- Alert -->
				<div class="l-container l-margin-vm">
				    <h2>Alerts</h2>
				    <div class="row">
				    	<div class="five columns">
				    		<div class="alert">
				    			<p class="alert__heading">Alerts for July 10</p>
				    			<div class="row alert__content l-margin-bs">
				    				<div class="two columns">
				    					<i class="icon-search"></i>
				    				</div>
				    				<div class="ten columns">
				    					<p>Hours of Operation: <em>7AM - 10PM</em></p>
				    				</div>
				    			</div>

				    			<p class="alert__heading">July Notices</p>
				    			<div class="row alert__content l-margin-bs">
				    				<div class="two columns">
				    					<i class="icon-play"></i>
				    				</div>
				    				<div class="ten columns">
				    					<p><strong>New City of San Diego Junior Amateur Championship</strong></p>
				    					<p>Coming this July, The Junior City Amateur Championship. 2015 City of San Diego Junior Amateur Championship</p>
				    				</div>
				    			</div>

				    		</div>
				    	</div>
				    </div>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>