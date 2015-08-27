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

                <h1>Components</h1>
                <div class="sub__nav--wrap">
                    <ul class="sub__nav">
                        <li>Social Share</li>
                        <li>Accordion</li>
                        <li>Single Comment</li>
                        <li>Post Meta</li>
                        <li>Tool Tips</li>
                        <li>Card Teasers</li>
                        <li>Text Teasers</li>
                        <li>Image Gallery</li>
                        <li>Video Player</li>
                        <li>Steps (1-10)</li>
                        <li>Weather</li>
                        <li>Maps</li>
                        <li>Lightbox</li>
                    </ul>
                </div>

                <!-- Social -->
                <div class="l-container l-margin-tm">
                    <h2>Social Share</h2>

                    <div class="social-share__wrap">
                        <span class='st_sharethis_large' displayText='ShareThis'></span>
                        <span class='st_facebook_large' displayText='Facebook'></span>
                        <span class='st_twitter_large' displayText='Tweet'></span>
                        <span class='st_linkedin_large' displayText='LinkedIn'></span>
                        <span class='st_pinterest_large' displayText='Pinterest'></span>
                        <span class='st_email_large' displayText='Email'></span>
                    </div>
                </div>

                <!-- Accordion -->
                <div class="l-container l-margin-vm">
                    <h2>Accordion</h2>

                    <div class="accordions js-toggle-accordion">
                        <div class="accordion">
                            <p class="accordion__heading"><a class="accordion__link" href="#">Question <span class="toggle-icon"></span></a></p>
                            <div class="accordion__drawer" style="display: none;">
                                <p>Vehicles cannot be parked or stored on a public street for long periods of time. Storage of a vehicle is considered to be a vehicle in excess of 72 hours without being moved at least one tenth of a mile. Vehicles stored longer than 72 hours are subject to being towed or cited.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Post Meta -->
                <div class="l-container l-margin-vm">
                    <h2>Post Meta</h2>
                    <div class="post__meta">
                        <span class="post__date">23 July 2015</span>
                        |
                        <span class="post__author"><a href="">by Name Lastname</a></span>

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

                <!-- Steps -->
                <div class="l-container l-margin-vm">
                    <h2>Steps (1-10)</h2>
                    <div class="steps__wrap">
                        <div class="step__single">
                            <i class="icon-dribbble"></i>
                            <h4 class="step__header"><span>Define Project</span>: <span class="step__desc">Does your project need a permit?</span></h4>
                        </div>
                        <div class="step__single">
                            <i class="icon-dribbble"></i>
                            <h4 class="step__header"><span>Site Information</span>: <span class="step__desc">Are there site constraints on your project?</span></h4>
                        </div>
                        <div class="step__single">
                            <i class="icon-dribbble"></i>
                            <h4 class="step__header"><span>Discretionary Review</span>: <span class="step__desc">Does your project require special approvals?</span></h4>
                        </div>
                        <div class="step__single">
                            <i class="icon-dribbble"></i>
                            <h4 class="step__header"><span>Plan Review</span>: <span class="step__desc">Does your project comply with building and land development codes?</span></h4>
                        </div>
                    </div>
                </div>

                <!-- Video -->
                <div class="l-container l-margin-vm">
                    <h2>Video Player</h2>
                    <div class="row l-margin-bm">
                        <div class="four columns no-gutters">
                            <div class="card card--video">
                                <a href="https://www.youtube.com/watch?v=SWBHUyrg6R4" class="js-modal-video">
                                    <i class="icon-play"></i>
                                    <div class="overlay"></div>
                                    <img src="../assets/dist/img/video-1.jpg" alt="Video Title" width="400" height="250">
                                </a>
                            </div>
                        </div>
                        <div class="eight columns">
                            <h6 class="l-margin-tn"><strong>Name of this Video</strong></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.</p>
                            <a href="">Watch Video</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="six columns">
<div class="code__examples">
                                <form><textarea class="code-mirror" id="code" name="code">
<a href="https://www.youtube.com/watch?v=SWBHUyrg6R4" class="js-modal-video">
    <i class="icon-play"></i>
    <div class="overlay"></div> <!-- Dark opacity -->
    <img src="../assets/dist/img/video-1.jpg" alt="Video Title" width="400" height="250"> <!-- Video screenshot -->
</a>
</textarea> </form> </div>
                        </div>
                        <div class="six columns">
                            <p><strong><em>Notes</em></strong></p>
                            <p>Videos can utilize <a href="http://dimsemenov.com/plugins/magnific-popup/" target="_blank">Magnific Popup</a> to play the video in a modal box. To do this, add the class of .js-modal-video to the &lt;a&gt; tag. The href value should be the URL of the video page.</p>
                        </div>
                    </div>
                </div>

                <!-- Weather -->
                <div class="l-container l-margin-vm">
                    <h2>Weather</h2>
                    <div class="card--weather">
                        <i class="icon-search"></i>
                        <p class="temperature"><span class="degrees">73</span>&deg;</p>
                        <p><strong>San Diego <br> Weather</strong></p>
                    </div>
                </div>

                <!-- Single Comment -->
                <div class="l-container l-margin-vm">
                    <h2>Single Comment</h2>

                    <div class="l-padding-vd background-off-white">
                        <div class="card card--comment row">
                            <div class="one columns card__image text-center no-gutters">
                                <img src="http://placehold.it/65x65">
                            </div>
                            <div class="eleven columns">
                                <div class="card__meta row">
                                    <div class="six columns no-gutters comments">
                                        <p class=""><strong>15 Comments</strong></p>
                                    </div>
                                    <div class="six columns no-gutters favorites text-right">
                                        <p class=""><i class="lnr lnr-star"></i> <strong>12</strong></p>
                                    </div>
                                </div>
                                <div class="card__content">
                                    <form class="user-info-from-cookie form--comments" action="" method="post" id="" accept-charset="UTF-8" empowered="1" novalidate="novalidate">

                                        <div class="form-item form-type-textarea form-item-message">
                                            <label class="element-invisible" for="edit-message">Message <span class="form-required" title="This field is required.">*</span></label>
                                            <div class="form-textarea-wrapper textarea-processed">
                                                <textarea placeholder="Message" id="" name="message" cols="60" rows="3" class="form-textarea required error" data-error="1"></textarea>
                                                <div class="grippie"></div>
                                                <!-- <div class="error-message">This field is required!</div> -->
                                            </div>
                                        </div>

                                        <input type="hidden" name="form_build_id" value="">
                                        <input type="hidden" name="form_id" value="contact_site_form">

                                        <div class="form-actions form-wrapper" id="edit-actions">
                                            <input type="submit" id="" name="op" value="Leave Comment" class="form-submit disabled">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tool tips -->
                <div class="l-container l-margin-vm">
                    <h2>Tools Tips</h2>
                    <div class="row">
                        <div class="twelve columns">
                            <p>What's this?
                                <span class="tooltip__wrap">
                                    <i><i class="lnr lnr-question-circle"></i>
                                    <span class="tooltip tooltip--bottom">Bottom Tooltip</span>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="twelve columns">
                            <p>
                            <span class="tooltip__wrap">
                                <i><i class="lnr lnr-question-circle"></i>
                                <span class="tooltip tooltip--left">Left Tooltip</span>
                            </span>
                            What's this?</p>
                        </div>
                    </div>
                </div>

                <!-- Card Teasers -->
                <div class="l-container l-margin-vm">
                    <h2>Card Teasers</h2>
                    <p><a href="/patterns/cards.php">See Card Teasers</a></p>
                </div>

                <!-- Text Teasers -->
                <div class="l-container l-margin-vm">
                    <h2>Text Teasers</h2>
                    <p><a href="/patterns/list-teaser.php">See List Teasers</a></p>
                </div>

                <!-- Image gallery -->
                <div class="l-container l-margin-vm">
                    <h2>Image Gallery</h2>

                    <div class="flex-container l-margin-bm">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><img src="http://lorempixel.com/640/480/city/" alt=""></li>
                                <li><img src="http://lorempixel.com/640/480/food/" alt=""></li>
                                <li><img src="http://lorempixel.com/640/480/nightlife/" alt=""></li>
                                <li><img src="http://lorempixel.com/640/480/nature/" alt=""></li>
                            </ul>
                        </div>
                    </div>


                    <p><strong><em>Notes</em></strong></p>
                    <p>Image galleries utilize <a href="http://www.woothemes.com/flexslider/" target="_blank">Flexslider</a>.</p>

                </div>

                <!-- Maps -->
                <div class="l-container l-margin-vm">
                    <h2>Maps</h2>

                    <div class="row l-margin-bm">
                        <p class="subheading">With multiple locations and location types</p>
                        <div class="six columns no-gutters">
                            <div id="map-canvas" style="width:100%; height: 360px;"></div>
                        </div>
                        <div class="six columns no-gutters">
                            <div class="row l-padding-hd event__wrap">
                                <div class="six columns">
                                    <h6><img src="../assets/dist/img/event-marker.png" width="14" height="16" alt=""> Nearby Events</h6>

                                    <div class="row">
                                        <div class="event__date">
                                            <span class="event--day">4</span>
                                            <span class="event--month">Jul</span>
                                        </div>
                                        <div class="event__info">
                                            <h6 class="l-margin-bn"><strong>Big Bay Boom</strong></h6>
                                            <p class="l-margin-bn text-small">Fourth of July fireworks</p>
                                            <p><a href="">Learn More</a></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="event__date">
                                            <span class="event--day">8</span>
                                            <span class="event--month">Jul</span>
                                        </div>
                                        <div class="event__info">
                                            <h6 class="l-margin-bn"><strong>Comic Con</strong></h6>
                                            <p class="l-margin-bn text-small">San Diego Comic Con 2015</p>
                                            <p><a href="">Learn More</a></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="event__date">
                                            <span class="event--day">10</span>
                                            <span class="event--month">Jul</span>
                                        </div>
                                        <div class="event__info">
                                            <h6 class="l-margin-bn"><strong>Concert in the Park</strong></h6>
                                            <p class="l-margin-bn text-small">Free summer concerts in the park</p>
                                            <p><a href="">Learn More</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="six columns">
                                    <h6><img src="../assets/dist/img/attraction-marker.png" width="14" height="16" alt=""> Nearby Attractions</h6>

                                    <div class="">
                                        <h6 class="l-margin-bn"><strong>Gaslamp Museum</strong></h6>
                                        <p class="l-margin-bn text-small">Programs and tours offered through the William Heath Davis House</p>
                                        <p><a href="">Learn More</a></p>
                                    </div>

                                    <div class="">
                                        <h6 class="l-margin-bn"><strong>Star of India</strong></h6>
                                        <p class="l-margin-bn text-small">The world's oldest active sailing ship</p>
                                        <p><a href="">Learn More</a></p>
                                    </div>

                                    <div class="">
                                        <h6 class="l-margin-bn"><strong>San Diego Zoo</strong></h6>
                                        <p class="l-margin-bn text-small">The World Famous San Diego Zoo</p>
                                        <p><a href="">Learn More</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="subheading">Single location, full width</p>
                    <div class="row l-margin-bm">
                        <div class="twelve columns">
                            <div id="wide-map-canvas" style="width:100%; height: 360px;"></div>
                        </div>
                    </div>

                    <p><em>If the site is built with Drupal, is there a plugin/module that utilizes google maps? If so, how much customization in code can be done now?</em></p>

                </div>

                <!-- Lightbox -->
                <div class="l-container l-margin-vm">
                    <h2>Lightbox</h2>
                    <p><a href="/patterns/modal.php">See Modal</a></p>
                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>