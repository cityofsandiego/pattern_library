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
				<div class="sub__nav--library">
				    <ul class="sub__nav">
				        <li><a href="#figure">Figure</a></li>
                        <li><a href="#gallery">Image Gallery</a></li>
                        <li><a href="#mobile-gallery">Mobile Gallery</a></li>
                        <li><a href="#video"></a></li>
				    </ul>
				</div>

				<div id="figure" class="l-container l-margin-tm">
				    <h2>Figure with caption</h2>
                    <figure>
                        <img src="../assets/dist/img/fig-img.jpg" alt="Fig. Alt. Title" width="563" height="283">
                        <figcaption>Image Title: This is the figcaption element.</figcaption>
                    </figure>
				</div>

                <!-- Image gallery -->
                <div id="gallery" class="l-container l-margin-vm">
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
                <div id="mobile-gallery" class="l-container l-margin-vm">
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

                <!-- Video -->
                <div id="video" class="l-container l-margin-vm">
                    <h2>Video Player</h2>
                    <div class="row l-margin-bm">
                        <div class="four columns no-gutters">
                            <div class="card card--video">
                                <a href="https://www.youtube.com/watch?v=SWBHUyrg6R4" class="js-modal-video">
                                    <i class="icon-play"></i>
                                    <div class="overlay"></div>
                                    <img src="../assets/dist/img/video-1.jpg" alt="Video Title" width="400" height="250">
                                </a>
                            </div>
                        </div>
                        <div class="eight columns">
                            <h6 class="l-margin-tn"><strong>Name of this Video</strong></h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris.</p>
                            <a href="">Watch Video</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="six columns">
                            <div class="code__examples">
                                <form><textarea class="pattern" id="comp-code-2" name="code">
<a href="https://www.youtube.com/watch?v=SWBHUyrg6R4" class="js-modal-video">
    <i class="icon-play"></i>
    <div class="overlay"></div> <!-- Dark opacity -->
    <img src="../assets/dist/img/video-1.jpg" alt="Video Title" width="400" height="250"> <!-- Video screenshot -->
</a>
</textarea> </form> </div>
                        </div>
                        <div class="six columns">
                            <p><strong><em>Notes</em></strong></p>
                            <p>Videos can utilize <a href="http://dimsemenov.com/plugins/magnific-popup/" target="_blank">Magnific Popup</a> to play the video in a modal box. To do this, add the class of <strong>.js-modal-video </strong>to the &lt;a&gt; tag. The href value should be the URL of the video page.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>