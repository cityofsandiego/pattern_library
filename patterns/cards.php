
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

                <h1>Card Teaser</h1>
                <div class="sub__nav--wrap">
                    <ul class="sub__nav">
                        <li>Thumb (image/video thumb)</li>
                        <li>Block Thumb Headline</li>
                        <li>Card Headline</li>
                        <li>Card Byline</li>
                        <li>Card Date</li>
                        <li>Card Summary</li>
                        <li>Card link/button</li>
                    </ul>
                </div>

                <div class="l-container l-margin-vm">
                    <div class="row">
                        <div class="twelve columns">
                            <h2 class="l-margin-bn">Category</h2>
                        </div>
                    </div>
                    <div class="card__container l-margin-vd">
                        <div class="card__wrap">
                            <div class="card">
                                <div class="card__image">
                                    <a href=""><img src="../assets/dist/img/card-img-1.jpg" alt="Card Image Title" width="368" height="207"></a>
                                </div>
                                <div class="card__content">
                                    <a href=""><p class="card__headline">Blog Post Headline Goes Here and Is Two Lines Long</p></a>
                                    <div class="card__meta">
                                        <span class="card__date">23 July 2015</span>
                                        |
                                        <span class="card__author"><a href="">by Name Lastname</a></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue...</p>
                                    <a href="" class="btn card__btn">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="card__wrap">
                            <div class="card">
                                <div class="card__image">
                                    <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                                </div>
                                <div class="card__content">
                                    <a href=""><p class="card__headline">Blog Post Headline Goes Here and Is Two Lines Long</p></a>
                                    <div class="card__meta">
                                        <span class="card__date">23 July 2015</span>
                                        |
                                        <span class="card__author"><a href="">by Name Lastname</a></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue...</p>
                                    <a href="" class="btn card__btn">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="card__wrap">
                            <div class="card">
                                <div class="card__image">
                                    <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                                </div>
                                <div class="card__content">
                                    <a href=""><p class="card__headline">Blog Post Headline Goes Here and Is Two Lines Long</p></a>
                                    <div class="card__meta">
                                        <span class="card__date">23 July 2015</span>
                                        |
                                        <span class="card__author"><a href="">by Name Lastname</a></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing semper. Maecenas nulla lectus, viverra a augue...</p>
                                    <a href="" class="btn card__btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="twelve columns">
                            <h2 class="l-margin-bn">Headline Only</h2>
                            <p class="subheading">Off-white background color</p>
                        </div>
                    </div>
                    <div class="card__container l-margin-vd">
                        <div class="card__wrap">
                            <div class="card background-off-white">
                                <div class="card__image">
                                    <a href=""><img src="../assets/dist/img/card-img-1.jpg" alt="Card Image Title" width="368" height="207"></a>
                                </div>
                                <div class="card__content">
                                    <a href=""><p class="card__headline">Surf Cam [video feed]</p></a>
                                </div>
                            </div>
                        </div>

                        <div class="card__wrap">
                            <div class="card background-off-white">
                                <div class="card__image">
                                    <a href=""><img src="../assets/dist/img/card-img-2.jpg" alt="Card Image Title" width="368" height="207"></a>
                                </div>
                                <div class="card__content">
                                    <a href=""><p class="card__headline">Summer Recreation Programs</p></a>
                                </div>
                            </div>
                        </div>

                        <div class="card__wrap">
                            <div class="card background-off-white">
                                <div class="card__image">
                                    <a href=""><img src="../assets/dist/img/card-img-3.jpg" alt="Card Image Title" width="368" height="207"></a>
                                </div>
                                <div class="card__content">
                                    <a href=""><p class="card__headline">Junior Life Guard Programs</p></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="twelve columns">
                            <h3>Notes</h3>
                            <p>Cards are wrapped in a container set to flexbox.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>