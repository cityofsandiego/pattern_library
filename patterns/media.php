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
				    <ul class="sub__nav jump-scroll">
				        <li><a href="#figure">Image</a></li>
                        <li><a href="#gallery">Image Gallery</a></li>
                        <li><a href="#mobile-gallery">Mobile Gallery</a></li>
                        <li><a href="#video">Video</a></li>
				    </ul>
				</div>
				<h2 id="figure">Image</h2>

				<h3 class="subheading">With caption</h3>
				<div class="row">
					<div class="six columns l-margin-mobile-bd">
						<figure class="l-margin-hn"><img src="../assets/dist/img/fig-img.jpg" alt="photo description">
							<figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing semper.</figcaption>
						</figure>
					</div>
					<div class="six columns">
						<div class="code__examples">
								<form><textarea class="pattern" id="img-caption" name="code">
<figure class="l-margin-hn"><img src="[path to image]" alt="[alt text]">
	<figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing semper.</figcaption>
</figure></textarea> </form> </div>	
					</div>
				</div>

				<h3 class="subheading">With photo credit</h3>
				<div class="row">
					<div class="six columns l-margin-mobile-bd">
						<figure class="l-margin-hn"><img src="../assets/dist/img/fig-img.jpg" alt="photo description">
							<p class="photo-credit">Photo by John Doe</p>
						</figure>
					</div>
					<div class="six columns">
						<div class="code__examples">
								 <form><textarea class="pattern" id="img-photo-credit" name="code">
<figure class="l-margin-hn"><img src="[path to image]" alt="[alt text]">
	<p class="photo-credit">Photo by John Doe</p>
</figure></textarea> </form></div>						
					</div>
				</div>
						
				<h3 class="subheading">With caption and photo credit</h3>
				<div class="row">
					<div class="six columns l-margin-mobile-bd">
						<figure class="l-margin-hn"><img src="../assets/dist/img/fig-img.jpg" alt="photo description">
							<figcaption>
								<p class="photo-credit">Photo by John Doe</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p>
							</figcaption>
						</figure>
					</div>
					<div class="six columns">
						<div class="code__examples">
								 <form><textarea class="pattern" id="img-caption-credit" name="code">
<figure class="l-margin-hn"><img src="[path to image]" alt="[alt text]">
	<figcaption>
		<p class="photo-credit">Photo by John Doe</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p>
	</figcaption>
</figure></textarea> </form></div>						
					</div>
				</div>
						
				<h3 class="subheading">Wrapped by text</h3>
						<figure class="img-right width-33"><img src="../assets/dist/img/fig-img.jpg" alt="photo description">
							<figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing semper.</figcaption>
						</figure>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet dictum sit amet justo donec enim diam. Sem et tortor consequat id porta nibh venenatis cras sed. </p>				
						<figure class="img-left width-33"><img src="../assets/dist/img/fig-img.jpg" alt="photo description">
							<figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing semper.</figcaption>
						</figure>
						<p>Massa eget egestas purus viverra accumsan. Sit amet justo donec enim diam vulputate ut pharetra. Accumsan lacus vel facilisis volutpat. Convallis posuere morbi leo urna molestie at.</p>
						<p>At elementum eu facilisis sed odio morbi quis. Enim nec dui nunc mattis. Diam quam nulla porttitor massa id neque. Hac habitasse platea dictumst vestibulum. Aenean sed adipiscing diam donec adipiscing tristique risus nec feugiat. Elit ullamcorper dignissim cras tincidunt lobortis. Amet dictum sit amet justo donec enim diam. Feugiat pretium nibh ipsum consequat nisl vel. Massa eget egestas purus viverra. Nunc aliquet bibendum enim facilisis gravida. Morbi tristique senectus et netus et malesuada fames.</p>
						<div class="code__examples l-margin-tm">
								 <form><textarea class="pattern" id="img-wrap" name="code">
<figure class="img-right width-33"><img src="[path to image]" alt="[alt text]">
	<figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing semper.</figcaption>
</figure>
<p>[text]</p>
<figure class="img-left width-33"><img src="[path to image]" alt="[alt text]">
	<figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing semper.</figcaption>
</figure>
<p>[text]</p>
<p>[text]</p></textarea> </form></div>	

                <!-- Image gallery -->
                <div id="gallery" class="l-container l-margin-vm">
                    <h2>Image Gallery</h2>
                    <p class="subheading">Default Usage</p>

                    <div class="flex-container l-margin-bm">
                        <div class="flexslider flexslider--default">
                            <ul class="slides">
								<li><img src="/assets/dist/img/balboapark1.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/balboapark2.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="l-container l-margin-vm">
                        <div class="row">
                            <div class="twelve columns">
                                <p class="l-margin-bn"><strong>Notes</strong></p>
                                <p>Image galleries utilize <a href="http://www.woothemes.com/flexslider/" target="_blank">Flexslider</a>. For default usage, wrap a <strong>ul.slides</strong> within a containing <strong>.flexslider</strong>. Each &lt;li&gt; contains a single slide. Add a &lt;span&gt; with <strong>.flex-caption</strong> for descriptions. Additional configuration can be found through Flexslider documentation.</p>

                                <div class="code__examples">
                                    <form><textarea class="pattern" id="img-code-1" name="code">
<div class="flex-container l-margin-bm">
    <div class="flexslider flexslider--default">
        <ul class="slides">
            <li><img src="/assets/dist/img/balboapark1.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
            <li><img src="/assets/dist/img/balboapark2.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
            <li><img src="/assets/dist/img/balboaparkgolf.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
            <li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
        </ul>
    </div>
</div></textarea> </form> </div>
                            </div>
                        </div>
                    </div>

                    <p class="subheading">Thumbnail Navigation</p>
                    <div class="flex-container l-margin-bm">
                        <div class="flexslider flexslider--thumbnails">
                            <ul class="slides">
								<li><img src="/assets/dist/img/balboapark1.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/balboapark2.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/balboapark1.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/balboapark2.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
								<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
                            </ul>
                        </div>

                        <div class="flexslider flexslider--thumbnails-nav">
                            <ul class="slides">
								<li><img src="/assets/dist/img/balboapark1.jpg" alt=""></li>
								<li><img src="/assets/dist/img/balboapark2.jpg" alt=""></li>
								<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""></li>
								<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""></li>
								<li><img src="/assets/dist/img/balboapark1.jpg" alt=""></li>
								<li><img src="/assets/dist/img/balboapark2.jpg" alt=""></li>
								<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""></li>
								<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>

                    <div class="l-container l-margin-vm">
                        <div class="row">
                            <div class="twelve columns">
                                <p class="l-margin-bn"><strong>Notes</strong></p>
                                <p>For a gallery with thumbnail navigation, an additional <strong>.flexslider</strong> will need to be created with the thumbnail images. This list requires a <strong>.flexslider--thumbnails-nav</strong> that acts as navigation to <strong>.flexslider--thumbnails</strong>.</p>

                                <div class="code__examples">
                                    <form><textarea class="pattern" id="img-code-thumbs" name="code">
<div class="flex-container l-margin-bm">
    <div class="flexslider flexslider--thumbnails">
        <ul class="slides">
			<li><img src="/assets/dist/img/balboapark1.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
			<li><img src="/assets/dist/img/balboapark2.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
			<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
			<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
			<li><img src="/assets/dist/img/balboapark1.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
			<li><img src="/assets/dist/img/balboapark2.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
			<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
			<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""><span class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</span></li>
        </ul>
    </div>

    <div class="flexslider flexslider--thumbnails-nav">
        <ul class="slides">
			<li><img src="/assets/dist/img/balboapark1.jpg" alt=""></li>
			<li><img src="/assets/dist/img/balboapark2.jpg" alt=""></li>
			<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""></li>
			<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""></li>
			<li><img src="/assets/dist/img/balboapark1.jpg" alt=""></li>
			<li><img src="/assets/dist/img/balboapark2.jpg" alt=""></li>
			<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""></li>
			<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""></li>
        </ul>
    </div>
</div> </textarea> </form> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile Image gallery -->
                <div id="mobile-gallery" class="l-container l-margin-vm">
                    <p class="subheading">Mobile Gallery</p>

                    <div class="flex-container">
                        <div class="flexslider flexslider--mobile">
                            <ul class="slides">
                                <li><img src="/assets/dist/img/balboapark1.jpg" alt="" class="l-margin-vd"></li>
                                <li><img src="/assets/dist/img/balboapark2.jpg" alt="" class="l-margin-vd"></li>
                                <li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt="" class="l-margin-vd"></li>
                                <li><img src="/assets/dist/img/sandiegoskyline.jpg" alt="" class="l-margin-vd"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="l-container l-margin-vm">
                    <div class="row">
                        <div class="twelve columns">
                            <p class="l-margin-bn"><strong>Notes</strong></p>
                    <p>Additionally, use the <strong>.flexslider--mobile</strong> class to enable Flexslider on mobile viewports (480px and below). Preview this on a small screen to see it enabled.</p>

                    <div class="code__examples">
                                <form><textarea class="pattern" id="img-code-2" name="code">
<div class="flex-container">
    <div class="flexslider flexslider--mobile">
        <ul class="slides">
			<li><img src="/assets/dist/img/balboapark1.jpg" alt="" class="l-margin-vd"></li>
			<li><img src="/assets/dist/img/balboapark2.jpg" alt="" class="l-margin-vd"></li>
			<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt="" class="l-margin-vd"></li>
			<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt="" class="l-margin-vd"></li>
        </ul>
    </div>
</div></textarea> </form> </div>
                        </div>
                    </div>
                </div>

                <!-- Video -->
                <div id="video" class="l-container l-margin-vm">
                    <h2>Video Player</h2>
					<h3>Popup Embedded Video</h3>
                    <div class="row l-margin-bm">
                        <div class="four columns no-gutters">
                            <div class="card card--video">
                                <a href="#sd-popup-video" class="popup-modal"><!-- href value targets the modal ID; class initiates the popup instance -->
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
					
					<div id="sd-popup-video" class="video-popup mfp-hide"> <!-- unique ID is necessary; class sets default magnific styling -->
						<iframe width="853" height="480" src="https://www.youtube.com/embed/SWBHUyrg6R4?rel=0&autoplay=0" frameborder="0" allow="autoplay; fullscreen"></iframe>
					</div>

                    <div class="row">
                        <div id="pev-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#pev-tab-item-1">Description</a></li>
								<!--<li class="tabs-list__item"><a class="tabs-list__link" href="#s-tab-item-2">Guidelines</a></li>-->
								<li class="tabs-list__item"><a class="tabs-list__link" href="#pev-tab-item-3">Code</a></li>
								<li class="tabs-list__item"><a class="tabs-list__link" href="#pev-tab-item-4">Notes</a></li>
							</ul>

							<div class="tabs-container">

								<div id="pev-tab-item-1" class="tabs__bucket">
									<p>Videos can utilize Magnific Popup to play the video in a modal box. To do this, add the class of <em>popup-modal</em> to the &lt;a&gt; tag. The href value is the ID of the popup &lt;div&gt;. Paste the YouTube embed code (see Notes for additional info) in the popup &lt;div&gt;.</p>

								</div>

								<!--<div id="s-tab-item-2" class="tabs__bucket">
									<p>Coming soon.</p>
								</div>-->

								<div id="pev-tab-item-3" class="tabs__bucket is-active">
									<div class="code__examples">
										<form>
											<textarea class="pattern" id="pev-code" name="code">
<div class="row l-margin-bm">
	<div class="four columns no-gutters">
		<div class="card card--video">
			<a href="#sd-popup-video" class="popup-modal"><!-- href value targets the modal ID; class initiates the popup instance -->
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

<div id="sd-popup-video" class="video-popup mfp-hide"> <!-- unique ID is necessary; class sets default magnific styling -->
	<iframe width="853" height="480" src="https://www.youtube.com/embed/SWBHUyrg6R4?rel=0&autoplay=0" frameborder="0" allow="autoplay; fullscreen"></iframe>
</div>		

<!-- required javascript -->
<script type="text/javascript">
$( document ).ready(function() {

	$(".popup-modal").click(function() {
		var href = $(this).attr('href');
		$(href+" iframe").attr("src", $(href+" iframe").attr("src").replace("autoplay=0", "autoplay=1")); //make the video autoplay after popup
	});
	
	$.magnificPopup.instance.close = function () {
	  $(".mfp-container iframe").attr("src", $(".mfp-container iframe").attr("src").replace("autoplay=1", "autoplay=0")); //remove autoplay when popup is closed
       // "proto" variable holds MagnificPopup class prototype
       // The above change that we did to instance is not applied to the prototype, 
       // which allows us to call parent method:
       $.magnificPopup.proto.close.call(this);
	};	
});
</script>
					
											</textarea>
										</form>
									</div>
            					</div>

								<div id="pev-tab-item-4" class="tabs__bucket">
									<p>When generating the embed code from YouTube, select video size 853 x 480 and uncheck "Show suggested videos when the video finishes". The src URL must end with <em>?rel=0&amp;autoplay=0</em>.</p>

								</div>

							</div>

						</div>
                    </div>
					<h3>Embedded Video</h3>
					<div class="row">
						<div class="twelve columns">
		<div class="video-wrapper">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/SWBHUyrg6R4?rel=0&wmode=transparent" frameborder="0" allowfullscreen="" scrolling="no"></iframe>
		</div>
						</div>
					</div>
					
					<div class="row l-margin-vd">
					
					
						<div id="vid-emb-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#vid-emb-tab-item-1">Code</a></li>
								<!--<li class="tabs-list__item"><a class="tabs-list__link" href="#s-tab-item-2">Guidelines</a></li>-->
								<li class="tabs-list__item"><a class="tabs-list__link" href="#vid-emb-tab-item-3">Notes</a></li>
							</ul>

							<div class="tabs-container">

								<div id="vid-emb-tab-item-1" class="tabs__bucket is-active">
									<div class="code__examples">
										<form>
											<textarea class="pattern" id="vid-emb-code" name="code">
<div class="video-wrapper">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/SWBHUyrg6R4?rel=0&wmode=transparent" frameborder="0" allowfullscreen="" scrolling="no"></iframe>
</div>
											</textarea>
										</form>
									</div>
            					</div>

								<!--<div id="vid-emb-tab-item-2" class="tabs__bucket">
									<p>Coming soon.</p>
								</div>-->

								<div id="vid-emb-tab-item-3" class="tabs__bucket is-active">
									<p>The video-wrapper class maintains a responsive 16:9 aspect ratio.</p>
									<p>With YouTube videos, add <em>?rel=0&amp;wmode=transparent</em> after the video ID.</p>
									<ul>
										<li><em>rel=0</em> prevents Suggested Videos from appearing after the video is over</li>
										<li><em>wmode=transparent</em> allows z-indexed elements to appear above the video</li>
									</ul>

								</div>

							</div>

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

	$(".popup-modal").click(function() {
		var href = $(this).attr('href');
		$(href+" iframe").attr("src", $(href+" iframe").attr("src").replace("autoplay=0", "autoplay=1")); //make the video autoplay after popup
	});
	
	$.magnificPopup.instance.close = function () {
	  $(".mfp-container iframe").attr("src", $(".mfp-container iframe").attr("src").replace("autoplay=1", "autoplay=0")); //remove autoplay when popup is closed
       // "proto" variable holds MagnificPopup class prototype
       // The above change that we did to instance is not applied to the prototype, 
       // which allows us to call parent method:
       $.magnificPopup.proto.close.call(this);
	};	
});
</script>