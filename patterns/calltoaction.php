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
				<div class="sub__nav--library">
				    <ul class="sub__nav">
				        <li><a href="#graphic">Graphic</a></li>
				        <li><a href="#text">Text</a></li>
				    </ul>
				</div>

				<!-- Graphic -->
				<div id="graphic" class="l-container l-margin-tm">
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
				    	<div class="seven columns">
				    		<p class="l-margin-bn"><strong>Notes</strong></p>
				    		<p>Call to action cards utilize the <strong>.card</strong> modifier classes, <strong>.card__cta</strong> and <strong>.card__cta--graphic</strong>.</p>
				    		<div class="code__examples">
                                <form><textarea class="pattern" id="cta-code-1" name="code">
<div class="card card__cta card__cta--graphic" style="background-image:url(../assets/dist/img/cta-graphic.jpg);">
	<a href="">
		<p>Signup for Junior Lifeguards</p>
		<span href="" class="btn btn--secondary">Signup Today</span>
	</a>
</div></textarea></form> </div>
				    	</div>
				    </div>
				</div>

			    <!-- Text -->
			    <div id="text" class="l-container l-margin-vm">
			    	<h2>Text</h2>
				    <div class="row">
				    	<div class="twelve columns">
				    		<div class="main__message">
				    			<h1 class="main__heading">Movies in the Park</h1>
				    			<p class="main__content">Come join the fun with this year’s Summer Movies in the Park! <a href="">Learn More</a></p>
				    		</div>
				    	</div>
				    </div>

				    <div class="row l-margin-td">
				    	<div class="twelve columns">
				    		<div class="code__examples">
                                <form><textarea class="pattern" id="cta-code-3" name="code">
<div class="main__message">
	<h1 class="main__heading">Movies in the Park</h1>
	<p class="main__content">Come join the fun with this year’s Summer Movies in the Park! <a href="">Learn More</a></p>
</div></textarea></form> </div>
				    	</div>
				    </div>
			    </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>