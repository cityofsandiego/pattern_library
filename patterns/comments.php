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

                <h1>Comments</h1>
				<div class="sub__nav--library">
				    <ul class="sub__nav">
				        <li>Avatar</li>
				        <li>Username</li>
				        <li>Textarea</li>
				    </ul>
				</div>

				<!-- Single Comment -->
                <div class="l-container l-margin-vm">
                    <h2>Single Comment</h2>

                    <div class="l-padding-ad background-off-white">
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

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>