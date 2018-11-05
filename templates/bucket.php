<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/template-header.php' ); ?>

        <div class="hero__wrap">
            <div class="hero__bg hero__bg--solid"></div>

            <div class="l-constrained l-padding-mobile-hd">
                <div class="row l-margin-tl">
                    <div class="twelve columns no-gutters background-white">
                        <div class="l-container breadcrumbs l-padding-ad l-padding-bn background-white">
                            <p class="hidden"><a href="" class="breadcrumbs__link">Home</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <span class="breadcrumbs__current">Leisure</span></p>
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
                                                    <div><div class="l-container">
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
                                                    <div><div class="l-container">
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
                        <div class="row form__steps l-margin-tm">
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
                                        <div class="field">
                                          <div class="radio checkbox">
                                            <label for="payment-2">
                                            <input type="radio" id="payment-2" name="payment-2" tabindex="0" class="">
                                            Make a Payment</label>
                                          </div>
                                        </div>
                                        <div class="field">
                                          <div class="radio checkbox">
                                            <label for="status-2">
                                            <input type="radio" id="status-2" name="status-2" tabindex="0" class="">
                                            Check Status</label>
                                          </div>
                                        </div>
                                        <div class="field">
                                          <div class="radio checkbox">
                                            <label for="issue-2">
                                            <input type="radio" id="issue-2" name="issue-2" tabindex="0" class="">
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
                                            <div class="row">
                                                <div class="twelve columns">
                                                    <p>Advance Reservations may be booked from 8 to 90 days in advance of the date of play. (based on availability)</p>
                                                    <a href="" class="btn">Pay Ticket Now</a>
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
                                <i class="icon-leaf icon--xl icon--circle"></i>
                                <h6>Label</h6>
                            </div>
                            <div class="sm-six two columns">
                                <i class="icon-cloud icon--xl icon--circle"></i>
                                <h6>Label</h6>
                            </div>
                            <div class="sm-six two columns">
                                <i class="icon-pencil icon--xl icon--circle"></i>
                                <h6>Label</h6>
                            </div>
                            <div class="sm-six two columns">
                                <i class="icon-magic-wand icon--xl icon--circle"></i>
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
                                            <p class="card__headline"><a href="">Surf Cam [video feed]</a></p>
                                        </div>
                                    </div>
                                </li>

                                <li class="card__wrap">
                                    <div class="card background-off-white">
                                        <div class="card__image">
                                            <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                                        </div>
                                        <div class="card__content">
                                            <p class="card__headline"><a href="">Summer Recreation Programs</a></p>
                                        </div>
                                    </div>
                                </li>

                                <li class="card__wrap">
                                    <div class="card background-off-white">
                                        <div class="card__image">
                                            <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                                        </div>
                                        <div class="card__content">
                                            <p class="card__headline"><a href="">Junior Life Guard Programs</a></p>
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
                                <a class="btn btn--secondary btn--wide btn--icon l-margin-mobile-vd" href="#"><i class="icon-leaf"></i> Parks + Rec <i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="three columns">
                                <a class="btn btn--secondary btn--wide btn--icon l-margin-mobile-vd" href="#"><i class="icon-sun"></i> Lifeguards <i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="three columns">
                                <a class="btn btn--secondary btn--wide btn--icon l-margin-mobile-vd" href="#"><i class="icon-home"></i> Neighborhoods <i class="icon-chevron-right"></i></a>
                            </div>
                            <div class="three columns">
                                <a class="btn btn--secondary btn--wide btn--icon l-margin-mobile-vd" href="#"><i class="icon-map"></i> Council Districts <i class="icon-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                </main>
            </div> <!-- row -->
            
        </div> <!-- l-constrained -->
        

<?php
require_once( ABSPATH . PARTIALS . '/template-footer.php' ); ?>