<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/template-header.php' ); ?>

        <div class="hero__wrap">
            <div class="hero__bg hero__bg--solid"></div>

            <div class="l-constrained l-padding-mobile-hd">
                <div class="row l-margin-tl">
                    <div class="twelve columns no-gutters background-white">
                        <div class="l-container breadcrumbs l-padding-ad l-padding-bn background-white">
                            <a href="" class="breadcrumbs__link">Home</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <span class="breadcrumbs__current">Leisure</span>
                        </div>

                        <div class="row">
                            <div class="six columns">
                                <div class="main__message main__message--white">
                                    <h1 class="main__heading">Leisure</h1>
                                    <p class="main__content subheading">Explore, Play + Events</p>
                                    <p class="l-margin-vd l-padding-desktop-hm">With its great weather, miles of sandy beaches, and major attractions, San Diego is known worldwide as one of the best tourist destinations and a great place for residents to relax year round.</p>
                                </div>
                            </div>
                            <div class="six columns text-center no-gutters">
                                <div class="main__image l-padding-hd l-padding-desktop-bd">
                                    <img src="../assets/dist/img/entry-image-sm.jpg" width="565" height="280" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="l-constrained l-padding-mobile-hd background-white">
            <div class="row">
                <main>

                    <div class="l-container l-padding-hd background-off-white">
                        <div class="row">
                            <div class="twelve columns">
                                <h2>Explore San Diego</h2>
                            </div>
                        </div>

                        <div class="row l-margin-bm">
                            <div class="six columns">
                                <div id="wide-map-canvas" class="google-map" style="width:100%; height: 360px;"></div>
                            </div>
                            <div class="six columns no-gutters">
                                <div class="row event__wrap">
                                    <div class="six columns">

                                        <div class="l-padding-hd">
                                            <h6 class="l-margin-tn">I am looking for...</h6>
                                            <div class="l-margin-bd">
                                                <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                                                    <div><div class="container-inline">
                                                        <h2 class="visuallyhidden">Search form</h2>
                                                        <div class="form-item form-type-textfield form-item-search-block-form">
                                                            <label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
                                                            <input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="Parks" size="15" maxlength="128" class="form-text">
                                                        </div>
                                                        <div class="form-actions form-wrapper" id="edit-actions">
                                                            <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
                                                        </div>
                                                        <input type="hidden" name="form_build_id" value="">
                                                        <input type="hidden" name="form_id" value="search_block_form">
                                                    </div></div>
                                                </form>
                                            </div>

                                            <div class="l-margin-bd">
                                                <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                                                    <div><div class="container-inline">
                                                        <h2 class="visuallyhidden">Search form</h2>
                                                        <div class="form-item form-type-textfield form-item-search-block-form">
                                                            <label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
                                                            <input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="Enter a Neighborhood" size="15" maxlength="128" class="form-text">
                                                        </div>
                                                        <div class="form-actions form-wrapper" id="edit-actions">
                                                            <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
                                                        </div>
                                                        <input type="hidden" name="form_build_id" value="">
                                                        <input type="hidden" name="form_id" value="search_block_form">
                                                    </div></div>
                                                </form>
                                            </div>

                                            <div class="l-margin-bd">
                                                <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                                                    <div><div class="container-inline">
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
                                    <div class="six columns">
                                        <div class="l-padding-hd">
                                            <h6 class="l-margin-tn"><img src="../assets/dist/img/event-marker.png" width="14" height="16" alt=""> Nearby Events</h6>
                                            <div>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="l-container l-padding-hd l-margin-vm">
                        <div class="row">
                            <div class="twelve columns">
                                <h2>Get It Done</h2>
                            </div>
                        </div>
                        <div class="row form__steps l-margin-vm">
                            <div class="three columns form__step">
                                <div class="border l-padding-ad">
                                    <p class="form__step--header">1. I need to...</p>
                                    <form action="">
                                        <input type="radio" name="task" value="payment">Make a Payment<br>
                                        <input type="radio" name="task" value="status">Check Status<br>
                                        <input type="radio" name="task" value="issue">Report an Issue
                                    </form>
                                </div>
                            </div>
                            <div class="three columns form__step">
                                <div class="border l-padding-ad">
                                    <p class="form__step--header">2. Payment:</p>
                                    <div class="l-padding-vd text-center">
                                        <select>
                                          <option value="parking">A Parking Ticket</option>
                                          <option value="electric">Electric Bill</option>
                                          <option value="tax">Property Tax</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="six columns form__step">
                                <div class="border l-padding-ad">
                                    <p class="form__step--header">3. Pay Your Ticket:</p>
                                    <div class="form__step--info">
                                        <div class="row">
                                            <div class="eight columns">
                                                <p>Advance Reservations may be booked from 8 to 90 days in advance of the date of play. (based on availability)</p>
                                            </div>
                                            <div class="four columns">
                                                <a href="" class="btn">Pay Ticket Now</a>
                                            </div>
                                        </div>
                                    </div>
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
                                <i class="lnr lnr-leaf lnr-xl lnr-circle"></i>
                                <h6>Label</h6>
                            </div>
                            <div class="sm-six two columns">
                                <i class="lnr lnr-cloud lnr-xl lnr-circle"></i>
                                <h6>Label</h6>
                            </div>
                            <div class="sm-six two columns">
                                <i class="lnr lnr-pencil lnr-xl lnr-circle"></i>
                                <h6>Label</h6>
                            </div>
                            <div class="sm-six two columns">
                                <i class="lnr lnr-magic-wand lnr-xl lnr-circle"></i>
                                <h6>Label</h6>
                            </div>
                            <div class="two columns">
                                
                            </div>
                        </div>
                    </div>

                    <div class="l-container l-margin-vm l-padding-hd">
                        <div class="row">
                            <div class="twelve columns">
                                <h2>Events, Programs + Initiatives</h2>
                            </div>
                        </div>

                        <div class="mobile-flexslider card__container">
                            <ul class="slides">
                                <li class="card__wrap">
                                    <div class="card background-off-white">
                                        <div class="card__image">
                                            <a href=""><img src="../assets/dist/img/card-img-1.jpg" alt="Card Image Title" width="368" height="207"></a>
                                        </div>
                                        <div class="card__content">
                                            <a href=""><p class="card__headline">Surf Cam [video feed]</p></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="card__wrap">
                                    <div class="card background-off-white">
                                        <div class="card__image">
                                            <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                                        </div>
                                        <div class="card__content">
                                            <a href=""><p class="card__headline">Summer Recreation Programs</p></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="card__wrap">
                                    <div class="card background-off-white">
                                        <div class="card__image">
                                            <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                                        </div>
                                        <div class="card__content">
                                            <a href=""><p class="card__headline">Junior Life Guard Programs</p></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="entry__content l-padding-ad background-off-white">
                        <div class="row">
                            <div class="twelve columns">
                                <h2>Resources</h2>
                            </div>
                        </div>
                        <div class="row l-margin-bm">
                            <div class="three columns">
                                <a class="btn btn--secondary btn--icon l-margin-mobile-vd" href="#"><i class="lnr lnr-leaf"></i> Parks + Rec <i class="lnr lnr-chevron-right"></i></a>
                            </div>
                            <div class="three columns">
                                <a class="btn btn--secondary btn--icon l-margin-mobile-vd" href="#"><i class="lnr lnr-sun"></i> Lifeguards <i class="lnr lnr-chevron-right"></i></a>
                            </div>
                            <div class="three columns">
                                <a class="btn btn--secondary btn--icon l-margin-mobile-vd" href="#"><i class="lnr lnr-home"></i> Neighborhoods <i class="lnr lnr-chevron-right"></i></a>
                            </div>
                            <div class="three columns">
                                <a class="btn btn--secondary btn--icon l-margin-mobile-vd" href="#"><i class="lnr lnr-map"></i> Council Districts <i class="lnr lnr-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                </main>
            </div> <!-- row -->
            
        </div> <!-- l-constrained -->
        

<?php
require_once( ABSPATH . PARTIALS . '/template-footer.php' ); ?>