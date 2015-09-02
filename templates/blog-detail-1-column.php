<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/template-header.php' ); ?>

        <div class="hero__wrap" style="background-image:url('../assets/dist/img/cysd-hero-bg.jpg');">
            <div class="l-constrained l-padding-mobile-hd">
                <div class="row l-margin-tl">
                    <div class="twelve columns no-gutters background-white">
                        <div class="l-container breadcrumbs l-padding-ad l-padding-bn background-white">
                            <a href="" class="breadcrumbs__link">Home</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <a href="" class="breadcrumbs__link">Secondary</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <a href="" class="breadcrumbs__link">Tertiary</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <span class="breadcrumbs__current">Current Page</span>
                        </div>

                        <div class="row">
                            <div class="six columns">
                                <div class="main__message main__message--white">
                                    <h1 class="main__heading">Article Headline</h1>
                                    <p class="main__content subheading">2 Column Blog Layout</p>
                                    <div class="post__meta">
                                        <span class="post__date">23 July 2015</span>
                                        |
                                        <span class="post__author"><a href="">by Name Lastname</a></span>
                                    </div>
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
                    <div class="twelve columns no-gutters background-off-white">

                        <div class="entry__content l-padding-ad l-padding-desktop-hx l-margin-vd">
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
                    </div> <!-- Twelve columns -->

                </main>
            </div> <!-- row -->
            
        </div> <!-- l-constrained -->
        

<?php
require_once( ABSPATH . PARTIALS . '/template-footer.php' ); ?>