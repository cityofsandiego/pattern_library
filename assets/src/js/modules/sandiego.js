// var Modules = Modules || {};

define(function() {
  SanDiego = function(window, document, $, undefined) {

    function init() {
      $(document).ready(function() {
        toggleFeedback();
        initHoverIntent();
        initHomepage();
        initBucket();
      });
    }
    function toggleFeedback() {
      var $page = $('body');
      $page.find('.js-leave-feedback-link').click(function(){
        $page.find(this).parent().toggleClass('is-visible');
      });
    }
    function initHoverIntent() {
      $("#nav .has__dropdown").each(function(){
          var dropdown = $(this).children(".dropdown");
 
          $(this).hoverIntent({
              over: function(){ dropdown.addClass("visible"); },
              timeout: 0,
              interval: 200,
              out: function(){ dropdown.removeClass("visible"); }
          });
      })
    }
    function initHomepage() {
      if ($('body').hasClass('front')) {
        var $slides = $("div#hero__slides--primary .slides li")
        if ($slides.length > 1) {
          $("div.custom-navigation").removeClass("hidden").fadeIn("slow");
        }
        $("div#hero__slides--primary").removeClass("hidden");
        $("div#get_it_done").removeClass("hidden");
      }
    }
    function initBucket() {
      if ($('body').hasClass('node-type-bucket')) {
        $("div#get_it_done").removeClass("hidden");
      }
    }

    return {
      init:init
    };
  }(window, document, jQuery);
  return SanDiego;
});
