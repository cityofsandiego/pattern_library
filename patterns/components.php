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

                <div class="l-container">
                    <h2>Single Comment</h2>
                    <h2>Tool Tips</h2>
                    <h2>Card Teasers</h2>
                    <h2>Text Teasers</h2>
                    <h2>Image Gallery</h2>
                    <h2>Video Player</h2>
                    <h2>Weather</h2>
                    <h2 class="l-margin-bn">Maps</h2>
                    <p><em>Utilize Google Maps API</em></p>

                    <h2>Lightbox</h2>
                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>