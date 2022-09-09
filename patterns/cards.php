
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

                <h1>Card Teasers</h1>
                <div class="sub__nav--library">
                    <ul class="sub__nav jump-scroll">
                        <li><a href="#images">With Images</a></li>
                        <li><a href="#noimages">Without Images</a></li>
                    </ul>
                </div>
                <div id="images" class="l-container l-margin-tm">
                    <h2>With Images</h2>
                    <div class="flexslider--mobile card__container l-margin-vd">
                        <ul class="slides">
                            <li class="card__wrap">
                                <div class="card background-off-white">
                                    <div class="card__image">
                                        <a href=""><img src="../assets/dist/img/card-img-1.jpg" alt="Card Image Title" width="368" height="207"></a>
                                    </div>
                                    <div class="card__content">
                                        <p class="card__headline"><a href="">One-Line Headline</a></p>
                                        <div class="card__meta">
                                            <span class="card__date">23 July 2015</span>
                                            |
                                            <span class="card__author"><a href="">by Name Lastname</a></span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue.</p>
                                        <p><a href="" class="btn btn--outline card__btn">Read More</a></p>
                                    </div>
                                </div>
                            </li>

                            <li class="card__wrap">
                                <div class="card background-off-white">
                                    <div class="card__image">
                                        <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                                    </div>
                                    <div class="card__content">
                                        <p class="card__headline"><a href="">Longer Headline That Needs Two Lines</a></p>
                                        <p>Lorem ipsum dolor sit amet. Maecenas nulla lectus, viverra a augue.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="card__wrap">
                                <div class="card border l-padding-bn background-off-white">
                                    <div class="card__image">
                                        <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                                    </div>
                                    <div class="card__content">
                                        <p class="card__headline"><a href="">Headline Only</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="row l-margin-vd">					
					
						<div id="cards-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#cards-tab-item-1">Notes</a></li>
								<li class="tabs-list__item"><a class="tabs-list__link" href="#cards-tab-item-2">Code</a></li>
							</ul>

							<div class="tabs-container">

								<div id="cards-tab-item-1" class="tabs__bucket">

                                    <p>Cards can be used universally throughout the site for multiple content purposes. Cards are wrapped in a <strong>.card__container</strong> and <strong>flexslider--mobile</strong> container set to flexbox. For a default output, wrap each <strong>.card</strong> within a <strong>.card__wrap</strong>. This defaults to 3 cards/row on desktop, 2/row on mobile-tablet viewports, and 1/row on mobile viewports. For alternative output, utilize row column classes.</p>

                                    <ul class="l-margin-tn">
                                        <li>Images should be wrapped in a <strong>.card__image</strong> element.</li>
                                        <li>Minimum dimensions for card images are <strong>500 x 238</strong>.</li>
                                        <li>All content (title, post info, description, and link) should be wrapped in a <strong>.card__content</strong> element.</li>
                                        <li>Title should be given <strong>.card__headline</strong>.</li>
                                        <li>Post information should be wrapped in <strong>.card__meta</strong>, with <strong>.card__date</strong> and <strong>.card__author</strong> inside, if applicable.</li>
                                        <li>If a button link is used, it should have class <strong>.card__btn</strong>.</li>
                                    </ul>
								</div>

								<div id="cards-tab-item-2" class="tabs__bucket is-active">
									<div class="code__examples">
										<form>
											<textarea class="pattern" id="cards-code" name="code">
<div class="flexslider--mobile card__container">
    <ul class="slides">
        <li class="card__wrap">
            <div class="card background-off-white">
                <div class="card__image">
                    <a href=""><img src="../assets/dist/img/card-img-1.jpg" alt="Card Image Title" width="368" height="207"></a>
                </div>
                <div class="card__content">
                    <p class="card__headline"><a href="">One-Line Headline</a></p>
                    <div class="card__meta">
                        <span class="card__date">23 July 2015</span>
                        |
                        <span class="card__author"><a href="">by Name Lastname</a></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue.</p>
                    <p><a href="" class="btn btn--outline card__btn">Read More</a></p>
                </div>
            </div>
        </li>

        <li class="card__wrap">
            <div class="card background-off-white">
                <div class="card__image">
                    <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                </div>
                <div class="card__content">
                    <p class="card__headline"><a href="">Longer Headline That Needs Two Lines</a></p>
                    <p>Lorem ipsum dolor sit amet. Maecenas nulla lectus, viverra a augue.</p>
                </div>
            </div>
        </li>

        <li class="card__wrap">
            <div class="card border l-padding-bn background-off-white">
                <div class="card__image">
                    <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                </div>
                <div class="card__content">
                    <p class="card__headline"><a href="">Headline Only</a></p>
                </div>
            </div>
        </li>
    </ul>
</div></textarea>
										</form>
									</div>
            					</div>
							</div>
						</div>
					</div>
                </div>
                <div id="noimages" class="l-container l-margin-bl">
                    <h2>Without Images</h2>
                    <p>Cards without images use flex to center the text vertically.</p>
                    <div class="card__container text-center">
                        <div class="card__wrap l-margin-mobile-ln">
                            <div class="card background--off-white l-padding-ad border l-flex-center-container">
                                <p class="card__headline l-margin-bn l-flex-center"><a href="">One-Line Headline</a></p>
                            </div>
                        </div>

                        <div class="card__wrap l-margin-mobile-ln">
                            <div class="card background--off-white l-padding-ad border l-flex-center-container">
                                <p class="card__headline l-margin-bn l-flex-center"><a href="">Longer Headline That Needs Two Lines</a></p>
                            </div>
                        </div>

                        <div class="card__wrap l-margin-mobile-ln">
                            <div class="card background--off-white l-padding-ad border l-flex-center-container">
                                <p class="card__headline l-margin-bn l-flex-center"><a href="">One-Line Headline</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row l-margin-vd">
                        <div class="code__examples">
                            <form>
                                <textarea class="pattern" id="cards-no-image-code" name="code">
<div class="card__container text-center">
    <div class="card__wrap l-margin-mobile-ln">
        <div class="card background--off-white l-padding-ad border l-flex-center-container">
            <p class="card__headline l-margin-bn l-flex-center"><a href="">One-Line Headline</a></p>
        </div>
    </div>

    <div class="card__wrap l-margin-mobile-ln">
        <div class="card background--off-white l-padding-ad border l-flex-center-container">
            <p class="card__headline l-margin-bn l-flex-center"><a href="">Longer Headline That Needs Two Lines</a></p>
        </div>
    </div>

    <div class="card__wrap l-margin-mobile-ln">
        <div class="card background--off-white l-padding-ad border l-flex-center-container">
            <p class="card__headline l-margin-bn l-flex-center"><a href="">One-Line Headline</a></p>
        </div>
    </div>
</div></textarea>
                            </form>
                        </div>
					</div>
<h3>Alternate Style</h3>
<div class="card__container text-center">
                        <div class="card__wrap l-margin-mobile-ln">
                            <div class="card background--off-white l-padding-ad border l-flex-center-container">
                                <p class="l-margin-bn l-flex-center"><a href="#" style="text-decoration:none"><strong>One-Line Headline</strong></a></p>
                            </div>
                        </div>

                        <div class="card__wrap l-margin-mobile-ln">
                            <div class="card background--off-white l-padding-ad border l-flex-center-container">
                                <p class="l-margin-bn l-flex-center"><a href="#" style="text-decoration:none"><strong>Longer Headline That Needs Two Lines</strong></a></p>
                            </div>
                        </div>

                        <div class="card__wrap l-margin-mobile-ln">
                            <div class="card background--off-white l-padding-ad border l-flex-center-container">
                                <p class="l-margin-bn l-flex-center"><a href="#" style="text-decoration:none"><strong>One-Line Headline</strong></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row l-margin-vd">
                        <div class="code__examples">
                            <form>
                                <textarea class="pattern" id="cards-no-image-alt--code" name="code">
<div class="card__container text-center">
    <div class="card__wrap l-margin-mobile-ln">
        <div class="card background--off-white l-padding-ad border l-flex-center-container">
            <p class="l-margin-bn l-flex-center"><a href="" style="text-decoration:none"><strong>One-Line Headline</strong></a></p>
        </div>
    </div>

    <div class="card__wrap l-margin-mobile-ln">
        <div class="card background--off-white l-padding-ad border l-flex-center-container">
            <p class="l-margin-bn l-flex-center"><a href="" style="text-decoration:none"><strong>Longer Headline That Needs Two Lines</strong></a></p>
        </div>
    </div>

    <div class="card__wrap l-margin-mobile-ln">
        <div class="card background--off-white l-padding-ad border l-flex-center-container">
            <p class="l-margin-bn l-flex-center"><a href="" style="text-decoration:none"><strong>One-Line Headline</strong></a></p>
        </div>
    </div>
</div></textarea>
                            </form>
                        </div>
					</div>

                </div>
            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>
<script type="text/javascript">
$( document ).ready(function() {
	$(".tabs__bucket").removeClass("is-active");
	$(".tabs-container div:first-child").addClass("is-active");
});
</script>