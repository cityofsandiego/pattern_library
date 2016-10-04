<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/template-header.php' ); ?>

        <div class="hero__bg" style="background-image:url('../assets/dist/img/cysd-hero-bg.jpg');">
            <div class="l-constrained">
                <div class="row l-margin-tl">
                    <div class="twelve columns no-gutters">
                        <div class="l-container breadcrumbs l-padding-ad l-padding-bn background-white hidden">
                            <a href="" class="breadcrumbs__link">Home</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <a href="" class="breadcrumbs__link">Secondary</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <a href="" class="breadcrumbs__link">Tertiary</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <span class="breadcrumbs__current">Current Page</span>
                        </div>

                        <div class="main__message main__message--white">
                            <h1 class="main__heading">Article Headline</h1>
                            <p class="main__content subheading">2 Column Blog Layout</p>
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
                    </div>
                </div>
            </div>
        </div>

        <div class="l-constrained">

            <div class="row l-margin-ts background-white">
                <aside class="">
                    <div class="three columns l-padding-td">

                        <div class="widget l-padding-hs l-padding-mobile-hm l-padding-mobile-bm l-margin-bd">
                            <h4>Additional Content</h4>
                            <ul>
                                <li><a href="">This Awesome Link</a></li>
                                <li><a href="">Another Great Link</a></li>
                                <li><a href="">More Greatness</a></li>
                                <li><a href="">Click Here</a></li>
                                <li><a href="">Here is Information</a></li>
                            </ul>
                        </div>

                    </div>
                </aside>

                <main>
                    <div class="six columns no-gutters background-white">
                        <div class="entry__image">
                            <img src="../assets/dist/img/entry-image.jpg" width="882" height="245" alt="">
                        </div>

                        <div class="entry__content l-padding-am l-margin-vd">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend ac ante a lacinia. Mauris pellentesque lacus vitae felis ultricies, commodo egestas quam cursus. Vivamus faucibus lectus et sapien auctor maximus. Cras eu sem eleifend, pharetra libero vitae, dignissim augue. Ut ante sapien, vestibulum vel odio nec, blandit commodo nisi. Donec tempus efficitur lectus ac congue. Suspendisse sed aliquam.</p>
                            <p>Aenean iaculis eget elit sed mollis. Nam ultricies enim at venenatis pellentesque. Cras dapibus ut est a tincidunt. Nullam sem mauris, scelerisque vitae elementum sit amet, fermentum ut velit. Etiam ac condimentum lectus. Nulla a lorem at tellus pellentesque cursus. Curabitur condimentum ex ac erat lacinia, vitae rutrum purus vestibulum. Nullam sit amet scelerisque dolor.</p>

                            <img src="../assets/dist/img/entry-content-img.jpg" width="882" height="245" alt="">

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend ac ante a lacinia. Mauris pellentesque lacus vitae felis ultricies, commodo egestas quam cursus. Vivamus faucibus lectus et sapien auctor maximus. Cras eu sem eleifend, pharetra libero vitae, dignissim augue. Ut ante sapien, vestibulum vel odio nec, blandit commodo nisi. Donec tempus efficitur lectus ac congue. Suspendisse sed aliquam.</p>
                            <p>Aenean iaculis eget elit sed mollis. Nam ultricies enim at venenatis pellentesque. Cras dapibus ut est a tincidunt. Nullam sem mauris, scelerisque vitae elementum sit amet, fermentum ut velit. Etiam ac condimentum lectus. Nulla a lorem at tellus pellentesque cursus. Curabitur condimentum ex ac erat lacinia, vitae rutrum purus vestibulum. Nullam sit amet scelerisque dolor.</p>
                        </div>

                        <div class="entry__comments l-padding-am">
                            <hr>
                            <h4 class="text-center">Comments</h4>
                            <hr>

                            <div class="l-padding-vd">
                                <div class="card card--comment row">
                                    <div class="card__meta eleven columns push-one">
                                        <div class="six columns no-gutters comments">
                                            <p class=""><strong>15 Comments</strong></p>
                                        </div>
                                        <div class="six columns no-gutters favorites text-right">
                                            <p class=""><i class="icon-star"></i> <strong>12</strong></p>
                                        </div>
                                    </div>
                                    <div class="one columns card__image text-center no-gutters">
                                        <img src="http://placehold.it/65x65">
                                    </div>
                                    <div class="eleven columns">
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
                                                    <input type="submit" id="" name="op" value="Leave Comment" class="form-submit disabled btn btn--primary">
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="entry__pagination l-padding-am">
                            <div class="row">
                                <div class="six columns">
                                    <p class="entry--prev"><a href="">&laquo; Previous Article</a></p>
                                    <p><strong>Title of the Previous Article</strong></p>
                                    <p>Entry excerpt. In aliquet ipsum at purus scelerisque venenatis. Curabitur pretium risus id accumsan varius. Suspendisse in sapien sem. Praesent vitae nisl maximus, pulvinar nunc nec, venenatis sapien. Aenean sagittis euismod mauris vitae.</p>
                                </div>

                                <div class="six columns">
                                    <p class="entry--next"><a href="">Next Article &raquo;</a></p>
                                    <p><strong>Title of the Previous Article</strong></p>
                                    <p>Entry excerpt. In aliquet ipsum at purus scelerisque venenatis. Curabitur pretium risus id accumsan varius. Suspendisse in sapien sem. Praesent vitae nisl maximus, pulvinar nunc nec, venenatis sapien. Aenean sagittis euismod mauris vitae.</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Nine columns -->

                </main>

                <aside class="l-margin-mobile-vd l-margin-bm l-padding-mobile-hm l-padding-mobile-bm">
                    <div class="three columns l-padding-td">
                        <div class="widget l-padding-hs l-margin-bd">
                            <form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
                                <div><div class="l-container">
                                    <h2 class="visuallyhidden">Search form</h2>
                                    <div class="form-item form-type-textfield form-item-search-block-form">
                                        <label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
                                        <input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="Search Blog" size="15" maxlength="128" class="form-text">
                                    </div>
                                    <div class="form-actions form-wrapper" id="edit-actions">
                                        <input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
                                    </div>
                                    <input type="hidden" name="form_build_id" value="">
                                    <input type="hidden" name="form_id" value="search_block_form">
                                </div></div>
                            </form>
                        </div>

                        <div class="widget l-padding-hs l-margin-bd">
                            <h4>Categories</h4>
                            <ul>
                                <li>Press Releases<a href="" class="pull-right">(22)</a></li>
                                <li>Event Recaps<a href="" class="pull-right">(2)</a></li>
                                <li>City Initiatives<a href="" class="pull-right">(10)</a></li>
                                <li>Last Category<a href="" class="pull-right">(9)</a></li>
                            </ul>
                        </div>

                        <div class="widget l-padding-hs l-margin-bd">
                            <h4>Archives</h4>
                            <ul>
                                <li><a href="">July 2015</a></li>
                                <li><a href="">June 2015</a></li>
                                <li><a href="">May 2015</a></li>
                                <li><a href="">April 2015</a></li>
                                <li><a href="">March 2015</a></li>
                            </ul>
                        </div>

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
            </div> <!-- row -->
            
        </div> <!-- l-constrained -->
        

<?php
require_once( ABSPATH . PARTIALS . '/template-footer.php' ); ?>