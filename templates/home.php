<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/template-header.php' ); ?>

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
        </div>

        <main role="main">
            <div class="l-constrained l-padding-mobile-hd background-white">
                <div class="l-container l-padding-hd l-padding-desktop-td l-padding-desktop-bm">
                    <div class="row">
                        <div class="twelve columns">
                            <h2>Get It Done</h2>
                        </div>
                    </div>
                    <div class="row form__steps l-margin-tn">
                        <div class="three columns form__step" id="form__step-1">
                            <form action="">
                                <fieldset>
                                    <legend class="form__step--header"><span class="icon--circle">1</span> I need to...</legend>
                                    <div class="field">
                                      <div class="radio checkbox">
                                        <label for="payment">
                                        <input type="radio" id="payment" name="payment" tabindex="0" class="">
                                        Make a Payment</label>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="radio checkbox">
                                        <label for="status">
                                        <input type="radio" id="status" name="status" tabindex="0" class="">
                                        Check Status</label>
                                      </div>
                                    </div>
                                    <div class="field">
                                      <div class="radio checkbox">
                                        <label for="issue">
                                        <input type="radio" id="issue" name="issue" tabindex="0" class="">
                                        Report an Issue</label>
                                      </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="three columns form__step" id="form__step-2">
                            <div class="">
                                <form action="">
                                    <fieldset>
                                        <legend class="form__step--header"><span class="icon--circle">2</span> Payment:</legend>
                                        <div class="field l-margin-desktop-td">
                                            <select>
                                              <option value="">Select One</option>
                                              <option value="0">Option 1</option>
                                              <option value="1">Option 2</option>
                                              <option value="2">Option 3</option>
                                              <option value="3">Option 4</option>
                                            </select>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <div class="six columns form__step" id="form__step-3">
                            <div class="form__step--info">
                                <form action="">
                                    <fieldset>
                                        <legend class="form__step--header"><span class="icon--circle">3</span> Pay Your Ticket:</legend>
                                        <div class="row l-margin-desktop-td">
                                            <div class="eight columns">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. </p>
                                            </div>
                                            <div class="four columns">
                                                <a href="" class="btn btn--wide">Pay Ticket Now</a>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="l-container background-off-white text-center l-padding-vm">
                    <div class="row">
                        <div class="twelve columns">
                            <h2>New Section</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="two columns">
                        </div>
                        <div class="sm-six two columns">
                            <img src="http://placehold.it/110x110">
                            <p><strong>Label</strong></p>
                        </div>
                        <div class="sm-six two columns">
                            <img src="http://placehold.it/110x110">
                            <p><strong>Label</strong></p>
                        </div>
                        <div class="sm-six two columns">
                            <img src="http://placehold.it/110x110">
                            <p><strong>Label</strong></p>
                        </div>
                        <div class="sm-six two columns">
                            <img src="http://placehold.it/110x110">
                            <p><strong>Label</strong></p>
                        </div>
                        <div class="two columns">
                            
                        </div>
                    </div>
                </div>

                <div class="l-container l-padding-hd l-margin-mobile-tm">
                    <div class="row">
                        <div class="nine columns">
                            <div class="l-container l-padding-td">
                                <h2>Our San Diego</h2>

                                <div class="flexslider--mobile card__container l-margin-vd">
                                    <ul class="slides">
                                        <li class="card__wrap">
                                            <div class="card background-off-white">
                                                <div class="card__image">
                                                    <a href=""><img src="../assets/dist/img/card-img-1.jpg" alt="Card Image Title" width="368" height="207"></a>
                                                </div>
                                                <div class="card__content">
                                                    <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                    <div class="card__meta">
                                                        <span class="card__date">23 July 2015</span>
                                                        |
                                                        <span class="card__author"><a href="">by Name Lastname</a></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue...</p>
                                                    <a href="" class="">Read More</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="card__wrap">
                                            <div class="card background-off-white">
                                                <div class="card__image">
                                                    <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                                                </div>
                                                <div class="card__content">
                                                    <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                    <div class="card__meta">
                                                        <span class="card__date">23 July 2015</span>
                                                        |
                                                        <span class="card__author"><a href="">by Name Lastname</a></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue...</p>
                                                    <a href="" class="">Read More</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="card__wrap">
                                            <div class="card background-off-white">
                                                <div class="card__image">
                                                    <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                                                </div>
                                                <div class="card__content">
                                                    <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                    <div class="card__meta">
                                                        <span class="card__date">23 July 2015</span>
                                                        |
                                                        <span class="card__author"><a href="">by Name Lastname</a></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue...</p>
                                                    <a href="" class="">Read More</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="card__wrap">
                                            <div class="card background-off-white">
                                                <div class="card__image">
                                                    <a href=""><img src="../assets/dist/img/card-img-1.jpg" alt="Card Image Title" width="368" height="207"></a>
                                                </div>
                                                <div class="card__content">
                                                    <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                    <div class="card__meta">
                                                        <span class="card__date">23 July 2015</span>
                                                        |
                                                        <span class="card__author"><a href="">by Name Lastname</a></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue...</p>
                                                    <a href="" class="">Read More</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="card__wrap">
                                            <div class="card background-off-white">
                                                <div class="card__image">
                                                    <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                                                </div>
                                                <div class="card__content">
                                                    <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                    <div class="card__meta">
                                                        <span class="card__date">23 July 2015</span>
                                                        |
                                                        <span class="card__author"><a href="">by Name Lastname</a></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue...</p>
                                                    <a href="" class="">Read More</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="card__wrap">
                                            <div class="card background-off-white">
                                                <div class="card__image">
                                                    <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                                                </div>
                                                <div class="card__content">
                                                    <p class="card__headline"><a href="">Blog Post Headline Goes Here and Is Two Lines Long</a></p>
                                                    <div class="card__meta">
                                                        <span class="card__date">23 July 2015</span>
                                                        |
                                                        <span class="card__author"><a href="">by Name Lastname</a></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue...</p>
                                                    <a href="" class="">Read More</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="three columns">
                            <div class="l-container text-center--mobile l-padding-td">
                                <h2>Notifications <a href="" class="view-more">See all <i class="icon-chevron-right"></i></a></h2>
                                <hr class="hr--dashed">
                                <div class="card--notification row">
                                    <div class="icon two columns text-center l-margin-mobile-bd">
                                        <i class="icon-lighter background--sunshade"></i>
                                    </div>
                                    <div class="ten columns">
                                        <p class="date">11:32am | June 24, 2015</p>
                                        <p>City Council Meeting <a href="" class="text-small">Learn More</a></p>
                                    </div>
                                </div>
                                <hr class="hr--dashed">
                                <div class="card--notification row">
                                    <div class="icon two columns text-center l-margin-mobile-bd">
                                        <i class="icon-home background--science"></i>
                                    </div>
                                    <div class="ten columns">
                                        <p class="date">11:32am | June 24, 2015</p>
                                        <p>City Closed July 3rd <a href="" class="text-small">Learn More</a></p>
                                    </div>
                                </div>
                                <hr class="hr--dashed">
                                <div class="card--notification row">
                                    <div class="twelve columns">
                                        <p class="date">11:32am | June 24, 2015</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. <a href="" class="text-small">Learn More</a></p>
                                    </div>
                                </div>
                                <hr class="hr--dashed">
                                <div class="card--notification row">
                                    <div class="icon two columns text-center l-margin-mobile-bd">
                                        <i class="icon-lighter background--sunshade"></i>
                                    </div>
                                    <div class="ten columns">
                                        <p class="date">11:32am | June 24, 2015</p>
                                        <p>Committee Meeting <a href="" class="text-small">Learn More</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="l-container l-margin-tm">
                                <h2>A Message From the Mayor</h2>
                                <p class="text-small">I am committed to creating a City with great opportunities for every resident in every neighborhood. Together, we will fix our streets, bolster our innovative economy and make every neighborhood safe in One San Diego. </p>
                                <a href="" class="btn btn--secondary btn--wide l-margin-ts">Visit the Mayor's page</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="l-container l-padding-hd l-margin-mobile-td">
                    <div class="row">
                        <div class="twelve columns l-margin-bd">
                            <h2>Explore San Diego</h2>
                        </div>
                    </div>

                    <div class="row l-margin-bm">
                        <!--<div class="six columns l-margin-mobile-bd">
                            <div id="multi-map" style="width:100%; height: 360px;"></div>
                        </div>-->
                        <div class="twelve columns">
                            <div class="row">
                                <div class="twelve columns">
                                    <h6 class="l-margin-tn l-padding-hd">I am looking for...</h6>
                                </div>
                                <div class="six columns">
                                    <div class="l-margin-bd l-padding-hd">
                                        <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                                            <div><div class="l-container">
                                                <h2 class="visuallyhidden">Search form</h2>
                                                <div class="form-item form-type-textfield form-item-search-block-form">
                                                    <label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
                                                    <input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="I need to..." size="15" maxlength="128" class="form-text">
                                                </div>
                                                <div class="form-actions form-wrapper" id="edit-actions">
                                                    <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
                                                </div>
                                                <input type="hidden" name="form_build_id" value="">
                                                <input type="hidden" name="form_id" value="search_block_form">
                                            </div></div>
                                        </form>
                                    </div>
                                </div>
                                <div class="six columns">
                                    <div class="l-margin-bd l-padding-hd">
                                        <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                                            <div><div class="l-container">
                                                <h2 class="visuallyhidden">Search form</h2>
                                                <div class="form-item form-type-textfield form-item-search-block-form">
                                                    <label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
                                                    <input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="Date Filter" size="15" maxlength="128" class="form-text">
                                                </div>
                                                <div class="form-actions form-wrapper" id="edit-actions">
                                                    <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
                                                </div>
                                                <input type="hidden" name="form_build_id" value="">
                                                <input type="hidden" name="form_id" value="search_block_form">
                                            </div></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row event__wrap">
                                <div class="six columns">
                                    <div class="l-padding-hd">
                                        <h6><img src="../assets/dist/img/event-marker.png" width="14" height="16" alt=""> Nearby Events</h6>

                                        <div class="row">
                                            <div class="event__date">
                                                <span class="event--day">4</span>
                                                <span class="event--month">Jul</span>
                                            </div>
                                            <div class="event__info">
                                                <h6 class="l-margin-bn"><strong>Event 1</strong></h6>
                                                <p class="l-margin-bn text-small">Description</p>
                                                <p><a href="">Learn More</a></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="event__date">
                                                <span class="event--day">8</span>
                                                <span class="event--month">Jul</span>
                                            </div>
                                            <div class="event__info">
                                                <h6 class="l-margin-bn"><strong>Event 2</strong></h6>
                                                <p class="l-margin-bn text-small">Description</p>
                                                <p><a href="">Learn More</a></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="event__date">
                                                <span class="event--day">10</span>
                                                <span class="event--month">Jul</span>
                                            </div>
                                            <div class="event__info">
                                                <h6 class="l-margin-bn"><strong>Event 3</strong></h6>
                                                <p class="l-margin-bn text-small">Description</p>
                                                <p><a href="">Learn More</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="six columns">
                                    <div class="l-padding-hd">
                                        <h6><img src="../assets/dist/img/attraction-marker.png" width="14" height="16" alt=""> Nearby Attractions</h6>

                                        <div class="">
                                            <h6 class="l-margin-bn"><strong>Museums</strong></h6>
                                            <p class="l-margin-bn text-small">Programs and tours</p>
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
                    </div>
                </div>
            </div> <!-- row -->
        </main>

<?php
require_once( ABSPATH . PARTIALS . '/template-footer.php' ); ?>