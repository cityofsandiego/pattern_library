<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/template-header.php' ); ?>

        <div class="hero__bg" style="background-image:url('../assets/dist/img/location-bg.jpg');">
            <div class="l-constrained">
                <div class="row l-margin-tl">
                    <div class="twelve columns no-gutters background-white">
                        <div class="l-container breadcrumbs l-padding-ad l-padding-bn background-white hidden">
                            <a href="" class="breadcrumbs__link">Home</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <a href="" class="breadcrumbs__link">Next Page</a>
                            <span class="breadcrumbs__divider">&#62;</span>
                            <span class="breadcrumbs__current">Location with Map</span>
                        </div>

                        <div class="row">
                            <div class="twelve columns">
                                <div class="main__message main__message--white">
                                    <h1 class="main__heading">Location with Map</h1>
                                    <p class="main__content subheading">Subtitle</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="l-constrained">

            <div class="row">
                <main>
                    <div class="twelve columns no-gutters">

                        <div class="entry__content l-padding-ad l-padding-bm background-white l-margin-ts">
                            <div class="row">
								<!-- mobile view only -->
								<div class="four columns hide-on-desktop">
									<!-- Location -->
                                    <div class="card l-padding-ad text-center--mobile background-off-white">
										<h2 class="h3 heading--snug">Location</h2>
                                        <div class="row">
                                            <div class="sm-three columns text-center l-padding-mobile-ts">
                                                <i class="icon-map-marker icon--sm icon--circle background--cerulean"></i>
                                            </div>
                                            <div class="sm-nine columns text-left">
                                                <address>
                                                    <p><strong>123 Main Street <br>
                                                    San Diego, CA 92121</strong></p>
                                                </address>												
                                            </div>
                                        </div>
												<p><a href="" class="btn btn--secondary">Get Directions</a></p>
									</div>
									<!-- // End Location -->
				
									<!-- Hours -->
                                    <div class="card l-padding-ad text-center--mobile l-margin-mobile-ts background-off-white" style="float: left;">
										<h2 class="h3 heading--snug">Hours</h2>
										<div class="field-item even"><div class="oh-current-open"><p>Currently <strong style="color:#006600">open</strong></p></div><span class="oh-wrapper"><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Sunday: </span><span class="oh-display-times oh-display-closed">closed<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Monday: </span><span class="oh-display-times oh-display-hours">9:30 a.m.&nbsp;-&nbsp;6:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Tuesday: </span><span class="oh-display-times oh-display-hours">11:30 a.m.&nbsp;-&nbsp;8:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Wednesday: </span><span class="oh-display-times oh-display-hours oh-display-current">11:30 a.m.&nbsp;-&nbsp;8:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Thursday: </span><span class="oh-display-times oh-display-hours">9:30 a.m.&nbsp;-&nbsp;6:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Friday: </span><span class="oh-display-times oh-display-hours">9:30 a.m.&nbsp;-&nbsp;6:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Saturday: </span><span class="oh-display-times oh-display-hours">9:30 a.m.&nbsp;-&nbsp;6:00 p.m.<br></span></span></span></div>
                                    </div>
									<!-- // End Hours -->
                                    <div class="card l-padding-ad text-center--mobile l-margin-mobile-ts background-off-white" style="float: left;">
										<h2 class="h3 heading--snug">Contact Info</h2>
                                        <div class="row">
                                            <div class="sm-three columns text-center l-padding-mobile-bs">
                                                <i class="icon-user icon--sm icon--circle background--cerulean"></i>
                                            </div>
                                            <div class="sm-nine columns text-left">
                                                    <p><strong>Jane Doe</strong><br><em>Manager</em></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="sm-three columns text-center l-padding-mobile-bs">
                                                <i class="icon-telephone icon--sm icon--circle background--cerulean"></i>
                                            </div>
                                            <div class="sm-nine columns text-left">
                                                <address>
                                                    <p class="l-padding-mobile-ts"><strong><span itemprop="telephone">(619) 123-4567</span></strong></p>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="sm-three columns text-center l-padding-mobile-bs">
                                                <i class="icon-at-sign icon--sm icon--circle background--cerulean"></i>
                                            </div>
                                            <div class="sm-nine columns text-left">
                                                    <p class="l-padding-mobile-ts"><strong><a href="">Send an Email</a></strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<!-- end mobile view only -->
                                <div class="eight columns">
									<h2>Overview</h2>
									<p><img class="alignright" src="/assets/dist/img/card-img-1.jpg"></p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris. Nunc vitae mollis orci. In lectus est, sollicitudin sagittis augue ut, elementum feugiat tellus. In eu laoreet quam. Nam et nulla in nulla fermentum euismod vel quis orci. Suspendisse ut lectus aliquam, ultricies nulla eu, facilisis quam. Vestibulum justo leo, posuere at lacinia vestibulum, pellentesque eget tortor.</p>
									<p>Phasellus ligula ipsum, blandit et mi eu, pretium aliquet urna. Maecenas ultricies erat eu justo vehicula placerat. Maecenas placerat ex lorem, sed auctor dui pretium sed. Nunc justo orci, gravida in justo id, convallis vestibulum ligula. Cras aliquam sodales sem, vitae elementum arcu tincidunt convallis. Praesent commodo leo turpis, non viverra dui ultricies sit amet.</p>
									<p><a href="#test-modal" class="popup-modal btn btn--secondary hide-on-mobile">View Image Gallery</a></p>
									<div id="test-modal" class="video-popup" style="max-width:650px;"> <!-- unique ID is necessary; class sets default magnific styling -->
				
										<div class="flex-container">
											<div class="flexslider">
												<ul class="slides">
													<li><img src="/assets/dist/img/balboapark1.jpg" alt=""><p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p></li>
													<li><img src="/assets/dist/img/balboapark2.jpg" alt=""><p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p></li>
													<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""><p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p></li>
													<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""><p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p></li>
												</ul>
											</div>
										</div> 
									</div>
									
									
									<div class="flex-container hide-on-desktop">
										<div class="flexslider">
											<ul class="slides">
												<li><img src="/assets/dist/img/balboapark1.jpg" alt=""><p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p></li>
												<li><img src="/assets/dist/img/balboapark2.jpg" alt=""><p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p></li>
												<li><img src="/assets/dist/img/balboaparkgolfcourse.jpg" alt=""><p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p></li>
												<li><img src="/assets/dist/img/sandiegoskyline.jpg" alt=""><p class="flex-caption">Lorem ipsum dolor sit amet, consectetur adipiscing semper.</p></li>
											</ul>
										</div>
									</div> 
									
<script type="text/javascript">
$(document).ready(function() {
	$('.flexslider').flexslider({
        animation: "slide",
		slideshow:!1,
		start: function(slider){
			$('#test-modal').addClass('mfp-hide');
            $('.total-slides').text(slider.count);
		},
		after: function(slider) {
			$('.current-slide').text(slider.currentSlide+1);
		}
	});

});
</script>								
									
									<div class="accordions js-toggle-accordion">
										<div class="accordion">
											<p class="accordion__heading"><a class="accordion__link" href="#">Amenities <span class="toggle-icon"></span></a></p>
											<div class="accordion__drawer">
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-swim icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Lifeguard</strong> - Nunc justo orci, gravida in justo id, convallis vestibulum ligula.</p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-swim icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Swimming</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-wheelchair icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Wheelchair Accessible</strong> - Phasellus ligula ipsum, blandit et mi eu, pretium aliquet urna. Maecenas ultricies erat eu justo vehicula placerat.</p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-fire icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Fire Pits</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-bathtub icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Showers</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-wheelchair icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Disabled Access</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-car2 icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Parking</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-man-woman icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Restrooms</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-fish icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Fishing</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-bus2 icon--circle icon--sm background--cerulean"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Public Transportation</strong></p>
													</div>
												</div>
											</div>
										</div>

										<div class="accordion">
											<p class="accordion__heading"><a class="accordion__link" href="#">Restrictions <span class="toggle-icon"></span></a></p>
											<div class="accordion__drawer">											
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-prohibited icon--circle icon--sm background--sunshade"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Glass Bottles</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-prohibited icon--circle icon--sm background--sunshade"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Alcohol</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-prohibited icon--circle icon--sm background--sunshade"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Smoking</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-prohibited icon--circle icon--sm background--sunshade"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Littering</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-prohibited icon--circle icon--sm background--sunshade"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Excessive Noise</strong></p>
													</div>
												</div>
												<div class="row">
													<div class="sm-two one columns text-center">
														<p><i class="icon-prohibited icon--circle icon--sm background--sunshade"></i></p>
													</div>
													<div class="sm-ten eleven columns l-padding-ts">
														<p><strong>Camping</strong></p>
													</div>
												</div>
											</div>
										</div>
									</div>		
                                </div>
								<!-- desktop view only -->
								<div class="four columns hide-on-mobile">
                                    <div class="card l-padding-ad text-center--mobile l-margin-mobile-td background-off-white">
										<h2 class="h3 heading--snug">Location</h2>
									
										<div id="multi-map" class="l-margin-bd" style="width:100%; height: 200px;"></div>
                                        <div class="row">
                                            <div class="two columns">
                                                <i class="icon-map-marker icon--sm icon--circle background--cerulean"></i>
                                            </div>
                                            <div class="ten columns">
                                                <address>
                                                    <p><strong>123 Main Street <br>
                                                    San Diego, CA 92121</strong></p>
                                                </address>
                                            </div>
                                        </div>
									</div>
                                    <div class="card l-padding-ad text-center--mobile background-off-white l-margin-td" style="float: left;">
										<h2 class="h3 heading--snug">Hours</h2>
										<div class="field-item even"><div class="oh-current-open"><p>Currently <strong style="color:#006600">open</strong></p></div><span class="oh-wrapper"><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Sunday: </span><span class="oh-display-times oh-display-closed">closed<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Monday: </span><span class="oh-display-times oh-display-hours">9:30 a.m.&nbsp;-&nbsp;6:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Tuesday: </span><span class="oh-display-times oh-display-hours">11:30 a.m.&nbsp;-&nbsp;8:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Wednesday: </span><span class="oh-display-times oh-display-hours oh-display-current">11:30 a.m.&nbsp;-&nbsp;8:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Thursday: </span><span class="oh-display-times oh-display-hours">9:30 a.m.&nbsp;-&nbsp;6:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Friday: </span><span class="oh-display-times oh-display-hours">9:30 a.m.&nbsp;-&nbsp;6:00 p.m.<br></span></span><span class="oh-display"><span class="oh-display-label" style="width: 6.6em; ">Saturday: </span><span class="oh-display-times oh-display-hours">9:30 a.m.&nbsp;-&nbsp;6:00 p.m.<br></span></span></span></div>
                                    </div>
									
                                    <div class="card l-padding-ad text-center--mobile l-margin-td background-off-white" style="float: left;">
										<h2 class="h3 heading--snug">Contact Info</h2>
                                        <div class="row">
                                            <div class="two columns">
                                                <i class="icon-user icon--sm icon--circle background--cerulean"></i>
                                            </div>
                                            <div class="ten columns">
                                                <p><strong>Jane Doe</strong><br><em>Manager</em></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="two columns">
                                                <i class="icon-telephone icon--sm icon--circle background--cerulean"></i>
                                            </div>
                                            <div class="ten columns">
                                                <address>
                                                    <p class="l-padding-desktop-ts"><strong><span itemprop="telephone">(619) 123-4567</span></strong></p>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="two columns">
                                                <i class="icon-at-sign icon--sm icon--circle background--cerulean"></i>
                                            </div>
                                            <div class="ten columns">
                                                <p class="l-padding-desktop-ts"><strong><a href="">email@sandiego.gov</a></strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<!-- end desktop view only -->
                            </div>
                        </div>

                        

                    </div> <!-- Twelve columns -->

                </main>
            </div> <!-- row -->
            
        </div> <!-- l-constrained -->
        

<?php
require_once( ABSPATH . PARTIALS . '/template-footer.php' ); ?>