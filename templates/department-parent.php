<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/template-header.php' ); ?>

        <div class="hero__slides hero__slides--secondary">
            <div class="l-constrained--site row">
                <!--<div class="twelve columns hero__content">
                    <div id="hero__slides--secondary" class="hero__slides--content">
                        <ul class="slides">
                            <li>
                                <p>Get your event permit today.</p>
                                <h1 class="main__heading">Nam et nulla in nulla fermentum. </h1>
                            </li>

                            <li>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <h1 class="main__heading">Nam et nulla in nulla fermentum. </h1>
                            </li>
                        </ul>
                    </div>

                    <div class="custom-navigation custom-navigation--secondary">
                      <a href="#" class="flex-prev"><i class="icon-chevron-left"></i></a>
                      <a href="#" class="flex-next"><i class="icon-chevron-right"></i></a>
                    </div>
                </div>-->

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

        <div class="l-constrained l-padding-mobile-hd background-white role-main">
           <nav class="sub-navigation">
				<div class="hide-on-mobile">
					<ul class="menu">
						<li class="first leaf active-trail"><a href="" class="active-trail active">Parks & Recreation Home</a></li>
						<li class="leaf"><a href="">General Information</a></li>
						<li class="leaf"><a href="">Recreation Centers & Pools</a></li>
						<li class="leaf"><a href="">Parks & Open Spaces</a></li>
						<li class="leaf"><a href="">Another Long Titled Department Name Here</a></li>
					</ul>
				</div>
				<div class="hide-on-desktop sub-navigation-mobile l-padding-hd l-padding-td l-padding-bs background-white">
	  
					<div class="accordions js-toggle-accordion">
					  <div class="accordion">
						<p class="accordion__heading"><a class="accordion__link" href="#"><i class="icon-menu l-margin-rs"></i> Site Menu  <span class="toggle-icon"> </span></a></p>
						<div class="accordion__drawer">
							<ul class="menu">
								<li class="first leaf"><a href="" class="active">Parks & Recreation</a></li>
								<li class="leaf"><a href="">General Information</a></li>
								<li class="leaf"><a href="">Recreation Centers & Pools</a></li>
								<li class="leaf"><a href="">Parks & Open Spaces</a></li>
								<li class="leaf"><a href="">Another Long Titled Department Name Here</a></li>
							</ul>
						</div>
					  </div>
					</div>
					
				</div>				
            </nav>
			
            <div class="l-container breadcrumbs l-padding-ad l-padding-bn background-white hidden">
                <a href="" class="breadcrumbs__link">Home</a>
                <span class="breadcrumbs__divider">&#62;</span>
                <a href="" class="breadcrumbs__link">Secondary</a>
                <span class="breadcrumbs__divider">&#62;</span>
                <a href="" class="breadcrumbs__link">Tertiary</a>
                <span class="breadcrumbs__divider">&#62;</span>
                <span class="breadcrumbs__current">Current Page</span>
            </div>

            <div class="l-container l-padding-ad">
                <div class="row dept-parent-intro">
                    <div class="six columns">
                        <div class="l-padding-desktop-hl l-margin-vd row">
                            <div class="three columns border border--right hide-on-mobile">
                                <img src="/assets/dist/img/logo-mark.png" alt="The City of San Diego" width="163" height="132" class="l-padding-rd l-padding-ts">
                            </div>
                            <div class="nine columns">
                                <div class="l-padding-desktop-ld">
                                    <h1 class="l-margin-tn">Parks & Recreation</h1>
                                    <p>General Park & Recreation<br>
                                    Information Phone: <br> <a href="tel:619-525-8213">(619) 525-8213</a></p>
                                    <div class="social-share__wrap">
                                        <span class='st_sharethis_large' displayText='ShareThis'></span>
                                        <span class='st_facebook_large' displayText='Facebook'></span>
                                        <span class='st_twitter_large' displayText='Tweet'></span>
                                        <span class='st_linkedin_large' displayText='LinkedIn'></span>
                                        <span class='st_pinterest_large' displayText='Pinterest'></span>
                                        <span class='st_email_large' displayText='Email'></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="six columns">

                        <div class="card card--video">
                            <a href="https://www.youtube.com/watch?v=SWBHUyrg6R4" class="js-modal-video">
                                <i class="icon-play"></i>
                                <div class="overlay"></div>
                                <img src="../assets/dist/img/entry-image-sm.jpg" width="565" height="280" alt="">
                            </a>
                        </div>

                    </div>
                </div>
                
            </div>

            <div class="row">

                <main>
                     <div class="nine columns no-gutters background-off-white">

                        <div class="entry__content l-padding-hm l-padding-vd">
                            <h2>Parks News and Announcements</h2>
                            <div class="flexslider--mobile card__container l-margin-vd">
                                <ul class="slides">
                                    <li class="card__wrap">
                                        <div class="card">
                                            <div class="card__image">
                                                <a href=""><img src="../assets/dist/img/card-img-1.jpg" alt="Card Image Title" width="368" height="207"></a>
                                            </div>
                                            <div class="card__content">
                                                <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                <a href="" class="">Read More</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="card__wrap">
                                        <div class="card">
                                            <div class="card__image">
                                                <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                                            </div>
                                            <div class="card__content">
                                                <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                <a href="" class="">Read More</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="card__wrap">
                                        <div class="card">
                                            <div class="card__image">
                                                <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                                            </div>
                                            <div class="card__content">
                                                <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                <a href="" class="">Read More</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="card__wrap">
                                        <div class="card">
                                            <div class="card__image">
                                                <a href=""><img src="../assets/dist/img/card-img-1.jpg" alt="Card Image Title" width="368" height="207"></a>
                                            </div>
                                            <div class="card__content">
                                                <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                <a href="" class="">Read More</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="card__wrap">
                                        <div class="card">
                                            <div class="card__image">
                                                <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                                            </div>
                                            <div class="card__content">
                                                <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                <a href="" class="">Read More</a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="card__wrap">
                                        <div class="card">
                                            <div class="card__image">
                                                <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                                            </div>
                                            <div class="card__content">
                                                <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                <a href="" class="">Read More</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        </div> <!-- Nine columns -->
                </main>

                <aside class="l-margin-mobile-vd l-margin-bm">
                    <div class="three columns">

                        <div class="widget l-padding-hs l-margin-bd">
                            <h4>Helpful Links</h4>
                            <ul>
                                <li><a href="">This Awesome Link</a></li>
                                <li><a href="">Another Great Link</a></li>
                                <li><a href="">More Greatness</a></li>
                                <li><a href="">Click Here</a></li>
                                <li><a href="">Here is Information</a></li>
                            </ul>
                        </div>

                        <div class="widget l-padding-hs l-margin-bd">
                            <div class="card card__cta card__cta--graphic" style="background-image:url(../assets/dist/img/cta-graphic.jpg);">
                                <a href="">
                                    <p>Signup for Junior Lifeguards</p>
                                    <span href="" class="btn btn--secondary">Signup Today</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
<?php
require_once( ABSPATH . PARTIALS . '/template-footer.php' ); ?>