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

                <h1>Components</h1>
                <div class="sub__nav--library">
                    <ul class="sub__nav">
                        <li><a href="#socials">Social Share</a></li>
                        <li><a href="#accordion">Accordion</a></li>
                        <li><a href="#post-meta">Post Meta</a></li>
                        <li><a href="#steps">Steps</a></li>
                        <li><a href="#weather">Weather</a></li>
                        <li><a href="#tool-tips">Tool Tips</a></li>
                        <li><a href="#maps">Maps</a></li>
                        <li><a href="#lightbox">Lightbox</a></li>
                        <li><a href="#stats">Stats Blocks</a></li>
                    </ul>
                </div>

                <!-- Social -->
                <div id="socials" class="l-container l-margin-tm">
                    <div class="row">
                        <div class="twelve columns">
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
                    </div>
                </div>

                <!-- Accordion -->
                <div id="accordion" class="l-container l-margin-vm">
                    <div class="row">
                        <div class="twelve columns">
                            <h2>Accordion</h2>
                            <div class="accordions js-toggle-accordion">
                                <div class="accordion">
                                    <p class="accordion__heading"><a class="accordion__link" href="#">Question <span class="toggle-icon"></span></a></p>
                                    <div class="accordion__drawer" style="display: none;">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>

                                <div class="accordion">
                                    <p class="accordion__heading"><a class="accordion__link" href="#">Question <span class="toggle-icon"></span></a></p>
                                    <div class="accordion__drawer" style="display: none;">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="six columns">
                            <p><strong>Notes</strong></p>
                            <p>Wrap each group of accordion items in a container with <strong>.js-toggle-accordion</strong>. This class controls the on click event to open the accordion; this code is location in <strong>main.js</strong>.</p>
                        </div>
                        <div class="six columns">
                            <div class="code__examples">
                                <form><textarea class="pattern" id="comp-code-1" name="code">
<div class="accordions js-toggle-accordion">
    <div class="accordion">
        <p class="accordion__heading"><a class="accordion__link" href="#">Question <span class="toggle-icon"></span></a></p>
        <div class="accordion__drawer" style="display: none;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

    <div class="accordion">
        <p class="accordion__heading"><a class="accordion__link" href="#">Question <span class="toggle-icon"></span></a></p>
        <div class="accordion__drawer" style="display: none;">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div></textarea> </form> </div>
                        </div>
                    </div>
                    
                </div>

                <!-- Post Meta -->
                <div id="post-meta" class="l-container l-margin-vm">
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
                <div id="steps" class="l-container l-margin-vm">
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

                <!-- Weather -->
                <div id="weather" class="l-container l-margin-vm">
                    <h2>Weather</h2>
                    <div class="card--weather">
                        <i class="icon-search"></i>
                        <p class="temperature"><span class="degrees">73</span>&deg;</p>
                        <p><strong>San Diego <br> Weather</strong></p>
                    </div>
                </div>

                <!-- Tool tips -->
                <div id="tool-tips" class="l-container l-margin-vm">
                    <h2>Tools Tips</h2>
                    <div class="row">
                        <div class="four columns">
                            <p>What's this?
                                <span class="tooltip__wrap">
                                    <i class="lnr lnr-question-circle"></i>
                                    <span class="tooltip tooltip--bottom">Bottom Tooltip Content</span>
                                </span>
                            </p>

                            <p>
                            <span class="tooltip__wrap">
                                <i class="lnr lnr-question-circle"></i>
                                <span class="tooltip tooltip--left">Left Tooltip Content</span>
                            </span>
                            What's this?</p>
                        </div>
                        <div class="eight columns">
                            <div class="code__examples">
                                <form><textarea class="pattern" id="comp-code-3" name="code">
<p>
    <span class="tooltip__wrap">
        <i class="lnr lnr-question-circle"></i>
        <span class="tooltip tooltip--left">Left Tooltip Content</span>
    </span>
    What's this?
</p>
</textarea> </form> </div>
                        </div>
                    </div>
                </div>

                <!-- Maps -->
                <div id="maps" class="l-container l-margin-vm">
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
                <div id="lightbox" class="l-container l-margin-vm">
                    <h2>Lightbox</h2>
                    <a href="#test-modal" class="popup-modal">Lightbox example</a>
                    <div id="test-modal" class="white-popup mfp-hide">
                        <h1>Modal dialog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                    <p class="l-margin-tm l-margin-bn"><em><strong>Notes</strong></em></p>
                    <p>We're utilizing <a href="http://dimsemenov.com/plugins/magnific-popup/" target="_blank">Magnific Popup</a> for lightboxes.</p>
                </div>

                <!-- Stats Block -->
                <div id="stats" class="l-container l-margin-vm">

                    <h2>Stats Block</h2>
                    <div class="row">
                        <div class="four columns">
                            <div class="card card--stats">
                                <p class="card__headline">1.356 mm</p>
                                <p>people in San Diego</p>
                            </div>
                        </div>
                        <div class="three columns">
                            <div class="card card--stats">
                                <p class="card__headline">372</p>
                                <p>square miles</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>