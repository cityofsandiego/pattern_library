// var Modules = Modules || {};

define(function () {
  ElevatorModule = function($, window, document, undefined) {

    var Elevator = {
      init : function() {
        $(document).ready(function() {
          Elevator.utils.init();
          Elevator.modal();
          //Elevator.maps();
          Elevator.slides();
          Elevator.buttons();
          Elevator.close();
          Elevator.accordion();
          Elevator.search();
          Elevator.translate();
          Elevator.close();
          Elevator.menu();
          Elevator.tabs();
          Elevator.steps();
        });
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
      /*maps : function() {
        var $multi  = $('#multi-map'),
            $single = $('#single-map');

        if ( $multi.length ) {
          function start() {
            var myLatlng = new google.maps.LatLng(32.7117,-117.1592);
            var mapOptions = {
                  zoom: 13,
                  center: myLatlng
                }
            var map = new google.maps.Map(document.getElementById('multi-map'), mapOptions);
            var image = '../sites/all/themes/sandiego/assets/dist/img/gmap-markers/marker.png';
            var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  icon: image
                });

            setMarkers(map, events, eventImage);
            setMarkers(map, attractions, attractionImage);
          }

          var events = [
                ['Big Bay Boom', 32.7090, -117.1711, 1],
                ['Comic Con', 32.7063, -117.1612, 2],
                ['Concerts in the Park', 32.7039, -117.1643, 3],
              ];

          var attractions = [
                ['Gaslamp Museum', 32.7105728, -117.1606412],
                ['Star of India', 32.7202992, -117.1735802],
                ['San Diego Zoo', 32.7359631, -117.1507747],
              ];

          var eventImage = {
                url    : '../sites/all/themes/sandiego/assets/dist/img/gmap-markers/event-marker.png',
                size   : new google.maps.Size(13,19),
                origin : new google.maps.Point(0,0),
                anchor : new google.maps.Point(0,0)
              };

          var attractionImage = {
                url    : '../sites/all/themes/sandiego/assets/dist/img/gmap-markers/attraction-marker.png',
                size   : new google.maps.Size(13,19),
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
          google.maps.event.addDomListener(window, 'load', start);
        }

        if ( $single.length ) {
          function initialize() {
            var myLatlng = new google.maps.LatLng(32.7117,-117.1592);
            var mapOptions = {
                  zoom: 13,
                  center: myLatlng
                };
            var wideMap = new google.maps.Map(document.getElementById('single-map'), mapOptions);
            var image = '../sites/all/themes/sandiego/assets/dist/img/gmap-markers/marker.png';
            var wideMarker = new google.maps.Marker({
                  position: myLatlng,
                  map: wideMap,
                  icon: image
                });
          }
          google.maps.event.addDomListener(window, 'load', initialize);
        }
      },*/
      slides : function() {
        $('#hero__slides--primary').flexslider({
          controlNav: false,
          customDirectionNav: $(".custom-navigation--primary a")
        });
       $('#hero__slides--secondary').flexslider({
          controlNav: false,
          customDirectionNav: $(".custom-navigation--secondary a")
        });
        $('.flexslider--default').flexslider({
          animation: "slide",
          slideshow: false,
          start: function(slider) {
            var count = $('.total-slides').text(slider.count);
          },
          after: function(slider) {
            $('.current-slide').text(slider.currentSlide+1);
          }
        });
        var counter = '<li class="flex-counter"><span class="current-slide">1</span> / <span class="total-slides"></span></li>';
        $('.flexslider .flex-control-nav').append( counter );
        var index = $('.flexslider li:has(.flex-active)').index('.flex-control-nav li')+1;
        var total = $('.flexslider .flex-control-nav li').length;
        $('.flexslider--thumbnails').flexslider({
          animation: "slide",
          slideshow: false,
          controlNav: false,
          sync: ".flexslider--thumbnails-nav"
        });
        $('.flexslider--thumbnails-nav').flexslider({
          animation: "slide",
          itemWidth: 150,
          itemMargin: 5,
          slideshow: false,
          controlNav: false,
          asNavFor: ".flexslider--thumbnails"
        });
        // Mobile only slider
        if ( $(window).width() < 480 ) {
          $(".flexslider--mobile").flexslider({
            // controlNav: false,
            animation: "slide",
            smoothHeight: false,
            directionNav: true
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
              .children('.accordion__drawer')
              .stop( true, true )
              .slideUp();
              // new drawer
          } else {
            // show new drawer
            $parent
              .addClass('current is-open')
              .children('.accordion__drawer')
              .stop( true, true )
              .slideDown(function () {
                $('.flexslider').resize();
              });
          }
        });
      },
      search : function() {
        $(".search-icon--open").click(function(event){
          event.preventDefault();
		  // if quicklinks is visible (display: block), hide it
		  if($(".quicklinks").is(":visible")) {
            $(this).toggleClass("translate-open");
            $(".quicklinks").slideToggle();
		  }
		  // open the search box
          $(this).toggleClass("search-open");
          $("#search-block-form").slideToggle();
		  // place cursor in the search box
		  $("#search-block-form--2").focus();
        }).focus(function(){
			$('.dropdown').removeClass("visible");
		});
        $(".form--search-wrap.hide-on-desktop .search-icon--open, .form--search-wrap.hide-on-desktop .translate-icon--open").click(function(event){
          event.preventDefault();
		  $(".form--search, .quicklinks").css("top", $("#header-alert").outerHeight() + $("#top-header").outerHeight() - 1);
        });
      },
      translate : function() {
        $(".translate-icon--open").click(function(event){
          event.preventDefault();
		  // if search box is visible (display: block), hide it
		  if($("#search-block-form").is(":visible")) {
            $(this).toggleClass("search-open");
            $("#search-block-form").slideToggle();
		  }
		  // open quicklinks
          $(this).toggleClass("translate-open");
          $(".quicklinks").slideToggle();
		  // place focus on google translate
		  $(".goog-te-menu-value").focus();
        });
      },
      close : function() {
        $(".close-icon").each(function() {
          $(this).click(function( event ){
            event.preventDefault();
            $(this).parents(".message").hide();
            $('header').removeClass("has-alert");
          });
        });
      },
      menu : function() {
        // Check window width on load
        var windowWidth = $(window).width();
        function checkWidth() {
          $(".main__navigation .dropdown-parent").each(function(){
              var $this = $(this);
              var $icon = $(this).find("i");
              var $dropdown = $this.siblings(".dropdown");
              $icon.on("click", function( e ){
                e.preventDefault();
                $dropdown.slideToggle();
                $this.toggleClass("open-dropdown");
              });
          });
        }
        // If window width is tablet or below ON LOAD, run function
        if ( windowWidth < 768 ) {
          checkWidth();
        }
        $(window).on('resize', function(){
          var windowWidth = $(window).width();
          // console.log ( windowWidth );
			if ($(".main__navigation .dropdown-parent").length) {
			  var $parent = $(".main__navigation .dropdown-parent");
			  var $icon   = $parent.find("i");
			  // Check events attached to parent links
			  var $events = jQuery._data($parent[0], "events" );
			  // If viewport is at tablet width or below and no click event is bound to link
			  if ( windowWidth < 768 && $events === undefined ) {
				// $parent.on("click", function( e ){
				//   e.preventDefault();
				// }
				$icon.on("click", function(){
				  var $dropdown = $(this).siblings(".dropdown");
				  $(this).toggleClass("open-dropdown");
				  $dropdown.slideToggle();
				});
			  }
			  if ( windowWidth > 768 ) {
				// Remove click handler event once viewport is larger than tablet
				$parent.each(function(){
				  $(this).off();
				  $(this).removeClass("open-dropdown");
				});
				$(".main__navigation .has__dropdown > .dropdown").css( "display", "");
			  }
			}
        });
      },
      tabs : function() {
        /**
         * @todo set/check hash in url
         *
         * remove default is-active classes defined in html
         * and set programmatically via js
         */
        function change_tab($this) {
          if (!$this.hasClass('is-active')) {
            var $tabid = $($this).closest('div').attr('id');
            var $bucket = $($this.find('.tabs-list__link').attr('href'));

            // set active tab class
            $('#' + $tabid + ' .' + $this.attr('class')).addClass('is-active');
            $('#' + $tabid + ' #' + $bucket.attr('id')).addClass('is-active');

            // remove active class on other items
            $('#' + $tabid + ' .tabs-list__item').not($this).removeClass('is-active');
            $('#' + $tabid + ' .tabs__bucket').not($bucket).removeClass('is-active');

            // set the hashtag on the url
            if (history.pushState) {
              history.pushState(null, null, '#' + $this.attr('id'));
            } else {
              location.hash = $this.attr('id');
            }
          }
        }
        // set active tab on tab click
        $('.js-tabs-list').on( 'click', '.tabs-list__link', function( e ) {
          e.preventDefault();
          var $this = $(this).closest('.tabs-list__item');
          // set active tab
          change_tab( $this );
        });
      },
      steps : function() {
        var one = $("#form__step-1 fieldset").height();
        var two = $("#form__step-2 fieldset").height();
        var three = $("#form__step-1").height();
        var difference = one - two;
        if( two < one ) {
          $("#form__step-2 fieldset").height(function (index, height) {
            return (height + difference);
          });
          $("#form__step-3 fieldset").css( "min-height", three );
        }
      }
    };
    return {
      init: Elevator.init
    };
  }(jQuery, window, document);
  return ElevatorModule;
});
