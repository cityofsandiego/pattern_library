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

                <h1>Media</h1>
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Figure w/ Caption</li>
                        <li>Image Gallery</li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
				    <h2>Figure with caption</h2>
                    <figure>
                        <img src="../assets/dist/img/fig-img.jpg" alt="Fig. Alt. Title" width="563" height="283">
                        <figcaption>Image Title: This is the figcaption element.</figcaption>
                    </figure>
				</div>

                <!-- Image gallery -->
                <div class="l-container l-margin-vm">
                    <h2>Image Gallery</h2>

                    <div class="flex-container l-margin-bm">
                        <div class="flexslider">
                            <ul class="slides">
                                <li><img src="http://lorempixel.com/640/480/city/" alt=""></li>
                                <li><img src="http://lorempixel.com/640/480/food/" alt=""></li>
                                <li><img src="http://lorempixel.com/640/480/nightlife/" alt=""></li>
                                <li><img src="http://lorempixel.com/640/480/nature/" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="l-container l-margin-vm">
                    <div class="row">
                        <div class="twelve columns">
                            <p><strong><em>Notes</em></strong></p>
                    <p>Image galleries utilize <a href="http://www.woothemes.com/flexslider/" target="_blank">Flexslider</a>. For default usage, wrap a <strong>ul.slides</strong> within a containing <strong>.flexslider</strong>. Each li contains a single slide. Additional configuration can be found through Flexslider documentation.</p>

                    <div class="code__examples">
                                <form><textarea class="pattern" id="img-code-1" name="code">
<div class="flex-container l-margin-bm">
    <div class="flexslider">
        <ul class="slides">
            <li><img src="http://lorempixel.com/640/480/city/" alt=""></li>
            <li><img src="http://lorempixel.com/640/480/food/" alt=""></li>
            <li><img src="http://lorempixel.com/640/480/nightlife/" alt=""></li>
            <li><img src="http://lorempixel.com/640/480/nature/" alt=""></li>
        </ul>
    </div>
</div></textarea> </form> </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Image gallery -->
                <div class="l-container l-margin-vm">
                    <h2>Mobile Image Gallery</h2>

                    <div class="flex-container">
                        <div class="mobile-flexslider">
                            <ul class="slides">
                                <li><img src="http://lorempixel.com/350/200/city/" alt=""  class="l-margin-vd"></li>
                                <li><img src="http://lorempixel.com/350/200/food/" alt=""  class="l-margin-vd"></li>
                                <li><img src="http://lorempixel.com/350/200/nightlife/" alt=""  class="l-margin-vd"></li>
                                <li><img src="http://lorempixel.com/350/200/nature/" alt=""  class="l-margin-vd"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="l-container l-margin-vm">
                    <div class="row">
                        <div class="twelve columns">
                            <p><strong><em>Notes</em></strong></p>
                    <p>Additionally, use the <strong>.mobile-flexslider</strong> class (instead of .flexslider) to enable Flexslider on mobile viewports (480px and below). Preview this on a small screen to see it enabled.</p>

                    <div class="code__examples">
                                <form><textarea class="pattern" id="img-code-2" name="code">
<div class="flex-container">
    <div class="mobile-flexslider">
        <ul class="slides">
            <li><img src="http://lorempixel.com/350/200/city/" alt=""  class="l-margin-vd"></li>
            <li><img src="http://lorempixel.com/350/200/food/" alt=""  class="l-margin-vd"></li>
            <li><img src="http://lorempixel.com/350/200/nightlife/" alt=""  class="l-margin-vd"></li>
            <li><img src="http://lorempixel.com/350/200/nature/" alt=""  class="l-margin-vd"></li>
        </ul>
    </div>
</div></textarea> </form> </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>