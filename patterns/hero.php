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
                <h1>Hero</h1>

			    <div class="l-container">
			    	<div class="row">
			    		<div class="twelve columns">
			    			<p>There are two types of hero blocks, each with a secondary variations.</p>
			    		</div>
			    	</div>
			    </div>

			    <!-- Slideshow -->
			    <div id="slides" class="l-container l-margin-vm">
			    	<h2>Slideshow</h2>
				    
				    <div class="l-margin-as">
					    <div class="hero__slides fine-print">
				            <div class="l-constrained row">
				                <div class="six columns hero__content">
				                    <div id="hero__slides--primary" class="hero__slides--content">
				                        <ul class="slides">
				                            <li>
				                                <h1>Event permits</h1>
				                                <p>Get your event permit today.</p>
				                                <a href="" class="btn btn--secondary">Apply Now</a>
				                            </li>

				                            <li>
				                                <h1>Slide 2</h1>
				                                <p>Another slide</p>
				                                <a href="" class="btn btn--secondary">Apply Now</a>
				                            </li>
				                        </ul>
				                    </div>

				                    <div class="custom-navigation custom-navigation--primary">
				                      <a href="#" class="flex-prev"><i class="icon-chevron-left"></i></a>
				                      <a href="#" class="flex-next"><i class="icon-chevron-right"></i></a>
				                    </div>
				                </div>

				            </div>

				            <div class="hero__slides--img">
				                <ul class="slides">
				                    <li>
				                        <div class="hero__bg" style="background-image:url('../assets/dist/img/home-hero-1.jpg');"></div>
				                        <div class="hero--credit">
				                               <p>Image by Cindy Devin</p>
				                        </div>
				                    </li>
				                </ul>
				            </div>
				        </div>
			        </div>

			        <div class="row l-margin-vd">
			        	<div class="six columns">
			        		<p>The default usage of the hero slideshow has a full-width background image and half-width, semi-transparent content block. Use <strong>#hero__slides--primary</strong> as the wrap for <strong>.slides</strong>.</p>
			        	</div>
			        	<div class="six columns">
			        		<div class="code__examples">
                                <form><textarea class="pattern" id="char-code-2" name="code">
<div class="hero__slides">
    <div class="l-constrained row">
        <div class="six columns hero__content">
            <div id="hero__slides--primary" class="hero__slides--content">
                <ul class="slides">
                    <li>
                        <h1>Event permits</h1>
                        <p>Get your event permit today.</p>
                        <a href="" class="btn btn--secondary">Apply Now</a>
                    </li>

                    <li>
                        <h1>Slide 2</h1>
                        <p>Another slide</p>
                        <a href="" class="btn btn--secondary">Apply Now</a>
                    </li>
                </ul>
            </div>

            <div class="custom-navigation custom-navigation--primary">
              <a href="#" class="flex-prev"><i class="icon-chevron-left"></i></a>
              <a href="#" class="flex-next"><i class="icon-chevron-right"></i></a>
            </div>
        </div>

    </div>

    <div class="hero__slides--img">
        <ul class="slides">
            <li>
                <div class="hero__bg" style="background-image:url('../assets/dist/img/home-hero-1.jpg');"></div>
                <div class="hero--credit">
                    <p>Image by Cindy Devin</p>
                </div>
            </li>
        </ul>
    </div>
</div> </textarea> </form> </div>
			        	</div>
			        </div>
			    </div>

			    <!-- Secondary Slideshow -->
			    <div id="slides-secondary" class="l-container l-margin-vm">
			    	<h2>Secondary Slideshow</h2>
				    
				    <div class="l-margin-as">
					    <div class="hero__slides hero__slides--secondary fine-print">
				            <div class="l-constrained--site row">
				                <div class="twelve columns hero__content">
				                    <div id="hero__slides--secondary" class="hero__slides--content">
				                        <ul class="slides">
				                            <li>
				                                <p class="main__content">Get your event permit today.</p>
				                                <h1 class="main__heading">Nam et nulla in nulla fermentum. </h1>
				                            </li>

				                            <li>
				                                <p class="main__content">Lorem ipsum dolor sit amet.</p>
				                                <h1 class="main__heading">Nam et nulla in nulla fermentum. </h1>
				                            </li>
				                        </ul>
				                    </div>

				                    <div class="custom-navigation custom-navigation--secondary">
				                        <a href="#" class="flex-prev"><i class="icon-chevron-left"></i></a>
				                        <a href="#" class="flex-next"><i class="icon-chevron-right"></i></a>
				                    </div>
				                </div>

				            </div>

				            <div class="hero__slides--img">
				                <ul class="slides">
				                    <li>
				                        <div class="hero__bg" style="background-image:url('../assets/dist/img/home-hero-1.jpg');"></div>
				                        <div class="hero--credit">
				                            <p>Image by Cindy Devin</p>
				                        </div>
				                    </li>
				                </ul>
				            </div>
				        </div>
			        </div>

			        <div class="row l-margin-vd">
			        	<div class="six columns">
			        		<p>The alternative version of the hero slideshow is the same as the default with a couple differences. Add <strong>#hero__slides--secondary</strong> to the wrap. The content is full-width, and instead of direction navigation, it's using a control navgation based on the number of slides.</p>
			        	</div>
			        	<div class="six columns">
			        		<div class="code__examples">
                                <form><textarea class="pattern" id="char-code-slides-sec" name="code">
<div class="hero__slides hero__slides--secondary fine-print">
    <div class="l-constrained--site row">
        <div class="twelve columns hero__content">
            <div id="hero__slides--secondary" class="hero__slides--content">
                <ul class="slides">
                    <li>
                        <p class="main__content">Get your event permit today.</p>
                        <h1 class="main__heading">Nam et nulla in nulla fermentum. </h1>
                    </li>

                    <li>
                        <p class="main__content">Lorem ipsum dolor sit amet.</p>
                        <h1 class="main__heading">Nam et nulla in nulla fermentum. </h1>
                    </li>
                </ul>
            </div>

            <div class="custom-navigation custom-navigation--secondary">
                <a href="#" class="flex-prev"><i class="icon-chevron-left"></i></a>
                <a href="#" class="flex-next"><i class="icon-chevron-right"></i></a>
            </div>
        </div>

    </div>

    <div class="hero__slides--img">
        <ul class="slides">
            <li>
                <div class="hero__bg" style="background-image:url('../assets/dist/img/home-hero-1.jpg');"></div>
                <div class="hero--credit">
                    <div class="l-constrained">
                        <p>Image by Cindy Devin</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div></textarea> </form> </div>
			        	</div>
			        </div>
			    </div>

			    <div id="hero" class="l-container l-margin-vm">
			    	<h2>Hero - Background Image</h2>
			    	<div class="hero__bg" style="background-image:url('../assets/dist/img/cysd-hero-bg.jpg');">
			            <div class="l-constrained l-padding-mobile-hd">
			                <div class="row l-margin-tl l-margin-hd">
			                    <div class="twelve columns no-gutters">
			                        <div class="main__message main__message--white">
			                            <h1 class="main__heading">Default Hero Area</h1>
			                            <p class="main__content subheading">Single Background Image</p>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>

			        <div class="row l-margin-vm">
				    	<div class="six columns">
				    		<p>The default hero area is a full-width background image behind a white block of content. This block should include breadcrumbs, sub-navigation, page title, social sharing, and related content. The background image lines up with the height of the content block.</p>
				    	</div>
				    	<div class="six columns">
				    		<div class="code__examples">
	                            <form><textarea class="pattern" id="char-code-slides-hero" name="code">
<div class="hero__bg" style="background-image:url('../assets/dist/img/cysd-hero-bg.jpg');">
    <div class="l-constrained">
        <div class="row l-margin-tl l-margin-hd">
            <div class="twelve columns no-gutters">
                <div class="main__message main__message--white">
                    <h1 class="main__heading">Default Hero Area</h1>
                    <p class="main__content subheading">Single Background Image</p>
                </div>
            </div>
        </div>
    </div>
</div> </textarea> </form> </div>
				    	</div>
				    </div>
			    </div>

			    <div class="l-container l-margin-vm">
			    	<h2>Hero - Secondary</h2>

			    	<div class="l-container">
			    		<div class="hero__wrap">
				            <div class="hero__bg hero__bg--secondary" style="background-image:url('../assets/dist/img/department-hero.jpg');"></div>

				            <div class="l-constrained">
				                <div class="row">
				                    <div class="twelve columns">
				                        <div class="row">
				                            <div class="twelve columns">
				                                <div class="main__message main__message--transparent">
				                                    <h1 class="main__heading">Parks & Recreation</h1>
				                                </div>

				                                <nav class="sub-navigation">
				                                    <ul class="l-margin-vn">
				                                        <li><a href="">Parks & Recreation</a></li>
				                                        <li><a href="">General Information</a></li>
				                                        <li><a href="">Recreation Centers and Pools</a></li>
				                                        <li><a href="">Parks & Open Spaces</a></li>
				                                    </ul>
				                                </nav>
				                            </div>
				                        </div>
				                    </div>
				                </div>
				            </div>
				        </div>

	                    <div class="row l-constrained--main l-margin-hd background-white">
	                    	<div class="twelve columns">
		                        <div class="entry__content l-padding-desktop-hx">
		                            <h1 class="l-margin-bn">Balboa Park Golf Course</h1>
		                            <p class="subheading">Parks and Recreation</p>
		                            <p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house.</p>
		                        </div>
		                    </div>
	                    </div>
			    	</div>

			    	<div class="l-container">
			    		<div class="row">
			    			<div class="six columns">
			    				<p>The alternative to the main hero block contains a <strong>.hero__bg--secondary</strong>, which contains no content. A <strong>.main__message</strong> block is beneath this, containing the page title. Beyond that, a sub-navigation (if necessary), and page content flows down the rest of the page.</p>
			    				<p>The main difference here is there is no height contrained for the background image. If a darker image is provided, add <strong>.main__message--transparent</strong> for readable title text.</p>
			    			</div>
			    			<div class="six columns">
			    				<div class="code__examples">
	                            	<form><textarea class="pattern" id="char-code-slides-hero-secondary" name="code">
<div class="hero__wrap">
	<div class="hero__bg hero__bg--secondary" style="background-image:url('../assets/dist/img/department-hero.jpg');"></div>
	<div class="l-constrained">
	    <div class="row">
	        <div class="twelve columns">
	            <div class="row">
	                <div class="twelve columns">
	                    <div class="main__message main__message--transparent">
	                        <h1 class="main__heading">Parks & Recreation</h1>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div></textarea> </form> </div>
			    			</div>
			    		</div>
			    	</div>

			    	<div class="l-container">
			    		<div class="row">
			    			<div class="twelve columns">
			    				<p><strong>Additional hero modifiers:</strong></p>
			    				<ul>
			    					<li>
			    						Add <strong>.hero__wrap--empty</strong> to .hero__wrap if no content is provided. This will give the hero area a min-height so the image will display, and main content will push down.
			    					</li>
			    					<li>Add <strong>.hero__bg--solid</strong> to .hero__bg if no image is provided. This will give the hero area a solid light blue background color.</li>
			    				</ul>
			    			</div>
			    		</div>
			    	</div>
			    </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>