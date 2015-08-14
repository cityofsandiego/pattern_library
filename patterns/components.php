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
                    <div class="row">
                        <div class="four columns no-gutters">
                            <div class="card card--video">
                                <a href="">
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

                <!-- Single comment -->
                <div class="l-container l-margin-vm">
                    <h2>Single Comment</h2>
                </div>

                <!-- Tool tips -->
                <div class="l-container l-margin-vm">
                    <h2>Tools Tips</h2>
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
                    <a href="#test-modal" class="popup-modal">Lightbox example</a>
                    <div id="test-modal" class="white-popup-block mfp-hide">
                        <h1>Modal dialog</h1>
                        <p>You won't be able to dismiss this by usual means (escape or
                          click button), but you can close it programatically based on
                          user choices or actions.</p>
                        <p><a class="popup-modal-dismiss" href="#">Dismiss</a></p>
                    </div>
                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>