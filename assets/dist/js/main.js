;(function ($, window, document, undefined) {
    'use strict';

    $(document).ready( function() {

        var Elevator = {
            init : function() {
                this.utils.init();
                this.modal();
                this.slides();
                this.maps();
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

            maps : function() {

                function initialize() {

                    var myLatlng = new google.maps.LatLng(32.7117,-117.1592);

                    var mapOptions = {
                        zoom: 13,
                        center: myLatlng
                    }

                    var map = new google.maps.Map(document.getElementById('multi-map'), mapOptions);

                    var wideMap = new google.maps.Map(document.getElementById('single-map'), mapOptions);

                    var image = '../assets/dist/img/map-marker.png';

                    var marker = new google.maps.Marker({
                      position: myLatlng,
                      map: map,
                      icon: image
                    });

                    var marker = new google.maps.Marker({
                      position: myLatlng,
                      map: wideMap,
                      icon: image
                    });

                    setMarkers(map, events, eventImage);
                    setMarkers(map, attractions, attractionImage);
                }

                var events = [
                    ['Big Bay Boom', 32.7090, -117.1711, 1],
                    ['Comic Con', 32.7063, -117.1612, 2],
                    ['Concerts in the Park', 32.7039, -117.1643, 3],
                ]

                var attractions = [
                    ['Gaslamp Museum', 32.7105728, -117.1606412],
                    ['Star of India', 32.7202992, -117.1735802],
                    ['San Diego Zoo', 32.7359631, -117.1507747],
                ]

                var eventImage = {
                    url    : '../assets/dist/img/event-marker.png',
                    size   : new google.maps.Size(14,16),
                    origin : new google.maps.Point(0,0),
                    anchor : new google.maps.Point(0,0)
                };

                var attractionImage = {
                    url    : '../assets/dist/img/attraction-marker.png',
                    size   : new google.maps.Size(14,16),
                    origin : new google.maps.Point(0,0),
                    anchor : new google.maps.Point(0,0)
                };

                function setMarkers(map, locations, icon) {

                    var shape = {
                        coords: [1, 1, 1, 20, 18, 20, 18 , 1],
                        type: 'poly'
                    };

                    for (var i = 0; i < locations.length; i++) {
                        var event = locations[i];
                        var myLatLng = new google.maps.LatLng(event[1], event[2]);
                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            icon: icon,
                            shape: shape,
                            title: event[0],
                            zIndex: event[3]
                        });
                    }

                }

                google.maps.event.addDomListener(window, 'load', initialize);

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

                $('.flexslider').flexslider({
                    selector: ".slides > li",
                    animation: "slide",
                    controlNav: true,
                    directionNav: false,
                    slideshow: false,
                    smoothHeight: true
                });

                // Mobile only slider
                if ( $(window).width() < 480 ) {

                    $(".mobile-flexslider").flexslider({
                        // controlNav: false,
                        animation: "slide",
                        smoothHeight: false,
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

        };

        Elevator.init();

    });

})(jQuery, window, document);
