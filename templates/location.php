<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/template-header.php' ); ?>

        <div class="hero__bg" style="background-image:url('../assets/dist/img/location-bg.jpg');">
            <div class="l-constrained l-padding-mobile-hd">
                <div class="row l-margin-tl">
                    <div class="twelve columns no-gutters background-white">
                        <div class="l-container breadcrumbs l-padding-ad l-padding-bn background-white">
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

        <div class="l-constrained l-padding-mobile-hd background-white">

            <div class="row">
                <main>
                    <div class="twelve columns no-gutters">

                        <div class="entry__content l-padding-ad l-margin-vd background-off-white">
                            <div class="row">
                                <div class="eight columns">
                                <h2>Overview</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nunc mauris. Nunc vitae mollis orci. In lectus est, sollicitudin sagittis augue ut, elementum feugiat tellus. In eu laoreet quam. Nam et nulla in nulla fermentum euismod vel quis orci. Suspendisse ut lectus aliquam, ultricies nulla eu, facilisis quam. Vestibulum justo leo, posuere at lacinia vestibulum, pellentesque eget tortor.</p>
                                <p>Phasellus ligula ipsum, blandit et mi eu, pretium aliquet urna. Maecenas ultricies erat eu justo vehicula placerat. Maecenas placerat ex lorem, sed auctor dui pretium sed. Nunc justo orci, gravida in justo id, convallis vestibulum ligula. Cras aliquam sodales sem, vitae elementum arcu tincidunt convallis. Praesent commodo leo turpis, non viverra dui ultricies sit amet.</p>
                                <a href="" class="btn btn--secondary">View Image Gallery</a>
                                </div>
                                <div class="four columns">
                                    <div class="card l-padding-ad text-center--mobile l-margin-mobile-td">
                                        <div class="row">
                                            <div class="three columns">
                                                <img src="../assets/dist/img/map-marker.png" alt="" width="83" height="83">
                                            </div>
                                            <div class="nine columns">
                                                <address>
                                                    <p class="l-margin-bn l-margin-desktop-td"><strong>123 Main Street <br>
                                                    San Diego, CA 92121</strong></p>
                                                </address>
                                            </div>
                                        </div>

                                        <div class="text-center l-margin-td">
                                            <a href="" class="btn btn--secondary">Get Directions</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="twelve columns no-gutters">
                                <div id="wide-map-canvas" style="width:100%; height: 360px;"></div>
                            </div>
                        </div>

                        <div class="entry__content l-padding-ad l-padding-vm background-off-white">
                            <div class="row">
                                <div class="twelve columns">
                                    <h2>Amenities</h2>
                                    <p>These are the amenities you will find at this location.</p>
                                </div>
                                <div class="six columns">
                                    <p><strong><i class="lnr lnr-pencil l-margin-rs lnr-circle"></i> Lifeguard</strong></p>
                                    <p><strong><i class="lnr lnr-drop l-margin-rs lnr-circle"></i> Swimming</strong></p>
                                    <p><strong><i class="lnr lnr-wheelchair l-margin-rs lnr-circle"></i> Wheelchair Accessible</strong></p>
                                    <p><strong><i class="lnr lnr-pencil l-margin-rs lnr-circle"></i> Pier</strong></p>
                                    <p><strong><i class="lnr lnr-pencil l-margin-rs lnr-circle"></i> Fire Pits</strong></p>
                                    <p><strong><i class="lnr lnr-drop l-margin-rs lnr-circle"></i> Showers</strong></p>
                                    <p><strong><i class="lnr lnr-bus l-margin-rs lnr-circle"></i> Public Transportation</strong></p>
                                </div>
                                <div class="six columns">
                                    <p><strong><i class="lnr lnr-pencil l-margin-rs lnr-circle"></i> Surfing</strong></p>
                                    <p><strong><i class="lnr lnr-wheelchair l-margin-rs lnr-circle"></i> Disabled Access</strong></p>
                                    <p><strong><i class="lnr lnr-car l-margin-rs lnr-circle"></i> Parking</strong></p>
                                    <p><strong><i class="lnr lnr-pencil l-margin-rs lnr-circle"></i> Volleyball</strong></p>
                                    <p><strong><i class="lnr lnr-users l-margin-rs lnr-circle"></i> Restrooms</strong></p>
                                    <p><strong><i class="lnr lnr-pencil l-margin-rs lnr-circle"></i> Fishing</strong></p>
                                </div>
                            </div>
                        </div>

                        <div class="entry__content l-padding-ad l-margin-vd">
                            <div class="row">
                                <div class="twelve columns">
                                    <h2>Restrictions</h2>
                                    <p>These items are restricted at this location.</p>
                                </div>
                                <div class="six columns">
                                    <p><strong><i class="lnr lnr-pencil l-margin-rs lnr-circle lnr-sunshade"></i> Glass Bottles</strong></p>
                                    <p><strong><i class="lnr lnr-drop l-margin-rs lnr-circle lnr-sunshade"></i> Alcohol</strong></p>
                                    <p><strong><i class="lnr lnr-wheelchair l-margin-rs lnr-circle lnr-sunshade"></i> Smoking</strong></p>
                                </div>
                                <div class="six columns">
                                    <p><strong><i class="lnr lnr-pencil l-margin-rs lnr-circle lnr-sunshade"></i> Littering</strong></p>
                                    <p><strong><i class="lnr lnr-wheelchair l-margin-rs lnr-circle lnr-sunshade"></i> Excessive Noise</strong></p>
                                    <p><strong><i class="lnr lnr-car l-margin-rs lnr-circle lnr-sunshade"></i> Camping</strong></p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- Twelve columns -->

                </main>
            </div> <!-- row -->
            
        </div> <!-- l-constrained -->
        

<?php
require_once( ABSPATH . PARTIALS . '/template-footer.php' ); ?>