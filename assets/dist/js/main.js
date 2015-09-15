;(function ($, window, document, undefined) {
    'use strict';

    $(document).ready( function() {

        var Elevator = {
            init : function() {
                this.utils.init();
                this.modal();
                this.slides();
                // this.maps();
                this.buttons();
                this.accordion();
                this.search();
            },
            vals : {
                $window : $(window)
            },

            utils : {

                init : function() {

                    this.mqState.appendEl();
                    this.mqState.checkStateView();
                    this.setDelay();

                },
                mqState : {

                    appendEl : function() {

                        $('body').append('<div class="mq-state"/>');

                    },
                    checkStateView : function() {

                        Elevator.vals.view  = parseInt( $('.mq-state').css('z-index') );

                        // fallback to desktop if browser doesn't support media queries
                        if ( ! Modernizr.mq( 'only all' ) ) Elevator.vals.view = 30;

                    },

                },
                setDelay : function() {

                    var scrolled = false,
                        resized  = false;

                    // delay checking of scroll
                    Elevator.vals.$window.on( 'scroll touchmove', function() { scrolled = true; });
                    // delay checking of window resize
                    Elevator.vals.$window.on( 'resize', function() { resized = true; });

                    setInterval( function() {

                        if ( scrolled ) {

                            scrolled = false;

                        }

                        if ( resized ) {

                            resized = false;

                        }

                    }, 50);
                }
            },

            slides : function() {
                $('.hero__slides--img').flexslider({
                    // controlNav: false,
                    smoothHeight: true,
                    directionNav: false,
                    controlNav: false
                });
 
                $('.hero__slides--content').flexslider({
                    // controlNav: false
                    sync: $(".hero__slides--img"),
                    controlsContainer: $(".custom-controls-container"),
                    customDirectionNav: $(".custom-navigation a")
                });

                // Mobile only slider
                if ( $(window).width() < 480 ) {

                    $(".mobile-flexslider").flexslider({
                        // controlNav: false,
                        animation: "slide",
                        smoothHeight: true,
                        directionNav: false
                    });
                }

            },

            buttons : function() {

                // stop bubbling on card buttons
                $( "#home-slider-nav a.btn" ).click(function( event ) {
                    event.cancelBubble = true; // IE
                    event.stopPropagation();
                });

            },

            modal : function () {
                $('.gallery-pop-link').magnificPopup({
                  type:'inline',
                  midClick: true, // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
                  callbacks : {
                    open: function() {
                        // gallery pop up
                        $('#gallery-pop').flexslider({
                            animation: "slide",
                            controlNav: false,
                            keyboard: true,
                            multipleKeyboard: true,
                            directionNav: true,
                            animationLoop: false,
                            slideshow: false,
                            itemWidth: 880,
                            sync: "#gallery-pop-nav"
                          });

                          // the synced thumbnail nav
                          $('#gallery-pop-nav').flexslider({
                            animation: "slide",
                            controlNav: false,
                            animationLoop: false,
                            slideshow: false,
                            itemWidth: 80,
                            asNavFor: '#gallery-pop'
                          });
                    }
                  }
                });

                $('.js-modal-video').magnificPopup({
                    type : 'iframe',
                    mainClass : 'mfp-fade'
                });

                $('.popup-modal').magnificPopup({
                    type:'inline',
                    midClick: true,
                    closeBtnInside:true
                });
            },

            accordion : function() {

                /**
                 * @todo use hardware acceleration methods instead of
                 * jQuery's fadeIn/Out methods.
                 * e.g. Velocity.js, animate.css
                 */

                $('.js-toggle-accordion').on( 'click', '.accordion__link', function( e ) {

                    e.preventDefault();

                    var $this   = $(this),
                        $parent = $this.closest('.accordion');

                    // current drawer
                    if ( $parent.hasClass('current') ) {

                        $parent
                            .removeClass('current is-open')
                            .find('.accordion__drawer')
                            .stop( true, true )
                            .slideUp();

                    // new drawer
                    } else {

                        // show new drawer
                        $parent
                            .addClass('current is-open')
                            .find('.accordion__drawer')
                            .stop( true, true )
                            .slideDown();

                    }

                });
            },

            search : function() {

                $(".search-icon--open").click(function(){
                    event.preventDefault();
                    $(this).toggleClass("search-open");
                    $("#search-block-form").slideToggle();
                });
            }

            // maps : function() {
            //   (function($) {
            //     /*
            //     *  render_map
            //     *
            //     *  This function will render a Google Map onto the selected jQuery element
            //     *
            //     *  @type  function
            //     *  @date  8/11/2013
            //     *  @since 4.3.0
            //     *
            //     *  @param $el (jQuery element)
            //     *  @return  n/a
            //     */

            //     function render_map( $el ) {

            //       // var
            //       var $markers = $el.find('.marker');

            //       // vars
            //       var args = {
            //         zoom    : 16,
            //         center    : new google.maps.LatLng(0, 0),
            //         mapTypeId : google.maps.MapTypeId.ROADMAP
            //       };

            //       // create map           
            //       var map = new google.maps.Map( $el[0], args);

            //       // add a markers reference
            //       map.markers = [];

            //       // add markers
            //       $markers.each(function(){

            //           add_marker( $(this), map );

            //       });

            //       // center map
            //       center_map( map );

            //     }

            //     /*
            //     *  add_marker
            //     *
            //     *  This function will add a marker to the selected Google Map
            //     *
            //     *  @type  function
            //     *  @date  8/11/2013
            //     *  @since 4.3.0
            //     *
            //     *  @param $marker (jQuery element)
            //     *  @param map (Google Map object)
            //     *  @return  n/a
            //     */

            //     function add_marker( $marker, map ) {

            //       // var
            //       var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

            //       // create marker
            //       var marker = new google.maps.Marker({
            //         position  : latlng,
            //         map     : map
            //       });

            //       // add to array
            //       map.markers.push( marker );

            //       // if marker contains HTML, add it to an infoWindow
            //       if( $marker.html() )
            //       {
            //         // create info window
            //         var infowindow = new google.maps.InfoWindow({
            //           content   : $marker.html()
            //         });

            //         // show info window when marker is clicked
            //         google.maps.event.addListener(marker, 'click', function() {

            //           infowindow.open( map, marker );

            //         });
            //       }

            //     }

            //     /*
            //     *  center_map
            //     *
            //     *  This function will center the map, showing all markers attached to this map
            //     *
            //     *  @type  function
            //     *  @date  8/11/2013
            //     *  @since 4.3.0
            //     *
            //     *  @param map (Google Map object)
            //     *  @return  n/a
            //     */

            //     function center_map( map ) {

            //       // vars
            //       var bounds = new google.maps.LatLngBounds();

            //       // loop through all markers and create bounds
            //       $.each( map.markers, function( i, marker ){

            //         var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

            //         bounds.extend( latlng );

            //       });

            //       // only 1 marker?
            //       if( map.markers.length == 1 )
            //       {
            //         // set center of map
            //           map.setCenter( bounds.getCenter() );
            //           map.setZoom( 16 );
            //       }
            //       else
            //       {
            //         // fit to bounds
            //         map.fitBounds( bounds );
            //       }

            //     }

            //     /*
            //     *  document ready
            //     *
            //     *  This function will render each map when the document is ready (page has loaded)
            //     *
            //     *  @type  function
            //     *  @date  8/11/2013
            //     *  @since 5.0.0
            //     *
            //     *  @param n/a
            //     *  @return  n/a
            //     */

            //     $(document).ready(function(){

            //       $('.acf-map').each(function(){

            //         render_map( $(this) );

            //       });

            //     });

            //   })(jQuery);
            // }

        };

        Elevator.init();

    });

})(jQuery, window, document);
