<footer class="l-constrained text-center--mobile">
    <div class="row">
        <div class="three columns footer--left l-padding-ad l-padding-vm">
            <div class="row l-padding-desktop-ld">
                <div class="twelve columns no-gutters">
                    <img src="/assets/dist/img/logo--white--sm.png" alt="The City of San Diego - logo" width="49" height="39">
                    <ul class="socials">
                        <li><a href=""><i class="icon-googleplus"></i></a></li>
                        <li><a href=""><i class="icon-facebook"></i></a></li>
                        <li><a href=""><i class="icon-youtube"></i></a></li>
                        <li><a href=""><i class="icon-twitter"></i></a></li>
                        <li><a href=""><i class="icon-dribbble"></i></a></li>
                        <li><a href=""><i class="icon-rss"></i></a></li>
                    </ul>
                    <p class="copyright">
                    Copyrighted © 2002-2015<br>
                    City of San Diego. All rights reserved.</p>
                </div>
            </div>
        </div>

        <div class="nine columns no-gutters">
            <div class="footer--right l-padding-am row">
                <div class="four columns">
                    <p class=""><strong>Council Districts</strong></p>
                    <ul class="two-columns">
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                        <li><a href="">Council District 1</a></li>
                    </ul>
                </div>
                <div class="four columns">
                    <p class=""><strong>City Officials</strong></p>
                    <ul>
                        <li><a href="">Office of the City Attorney</a></li>
                        <li><a href="">Office of the City Clerk</a></li>
                        <li><a href="">Office of the City Auditor</a></li>
                        <li><a href="">Office of the Independent Budget Analyst</a></li>
                    </ul>
                </div>
                <div class="four columns">
                    <p class=""><strong>Government Agencies</strong></p>
                    <ul>
                        <li><a href="">County of San Diego</a></li>
                        <li><a href="">State of California</a></li>
                        <li><a href="">Federal Government</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__privacy">
        <div class="l-constrained row text-center l-padding-vd">
            <ul>
                <li><a href="">Disclaimers</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms & Conditions</a></li>
            </ul>
        </div>
    </div>
</footer>

    </div>
</div>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>-->
        <script src="/assets/dist/js/plugins.min.js"></script>

        <script>
            window.twttr = (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
              if (d.getElementById(id)) return t;
              js = d.createElement(s);
              js.id = id;
              js.src = "https://platform.twitter.com/widgets.js";
              fjs.parentNode.insertBefore(js, fjs);
             
              t._e = [];
              t.ready = function(f) {
                t._e.push(f);
              };
             
              return t;
            }(document, "script", "twitter-wjs"));
        </script>

        <script>
          var code = document.getElementById("code");
          if( code ) {
              var editor = CodeMirror.fromTextArea( code , {
                lineNumbers: true,
                mode: "application/x-ejs",
                indentUnit: 1,
                indentWithTabs: true
              });
          }
        </script>

        <script>
            var ctx = document.getElementById("lineChart");
            if( ctx ) {
                ctx = ctx.getContext("2d");
                var lineChart = new Chart(ctx).Line(data);
            }
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            //     (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            //     function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            //     e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            //     e.src='https://www.google-analytics.com/analytics.js';
            //     r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            //     ga('create','UA-XXXXX-X','auto');ga('send','pageview');
			
			jQuery(function() {
				jQuery('header').data('size','big');
				jQuery('a.close-mm').focus(function(e) {
				  $('.dropdown').removeClass("visible");
				}).click( function() {
				  e.preventDefault();
				});
			});
			jQuery(window).scroll(function(){
				//console.log(jQuery(document).scrollTop() + ' ' +jQuery('header').outerHeight());
			  if(jQuery(document).scrollTop() > 165) {
				if(jQuery('header').data('size') == 'big')
				{
				  jQuery('header').data('size','small');
				  jQuery('header').addClass('header--fixed');  
				  jQuery('.form--search').css('top',(jQuery('header').outerHeight()) + 'px');
				  jQuery('.quicklinks').css('top',(jQuery('header').outerHeight()) + 'px');
				  //jQuery('.form--search').css('left',(jQuery('.search-icon--open').offset().left - 350) + 'px');
				  jQuery('#search-block-form').hide();
				  jQuery('.quicklinks').hide();
				}
			  } else if(jQuery(document).scrollTop() < jQuery('#top-header').outerHeight()) {
				if(jQuery('header').data('size') == 'small') {
				  jQuery('header').data('size','big');
				  jQuery('header').removeClass('header--fixed');
				  if (jQuery('.search-icon').css('display') == 'none') {
				    jQuery('#search-block-form').show();
				    jQuery('.quicklinks').show();
				  }
				}  
			  }
			});

			
			
			
			
			
        </script>
		<script data-main="/assets/dist/js/main-built.js" src="/assets/dist/js/lib/require.js"></script>
		<script type="text/javascript">
		<!--//--><![CDATA[//><!--

			function googleTranslateElementInit() {
			  if ($('.search-icon').css('display') == 'none') {
				new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
				changeLanguageText();
			  } else {				
				new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
			  }
			}
			function changeLanguageText() {
			  var el = $('.goog-te-menu-value span:first-child');
			  if (el.text() == 'Select Language') {
				$(el).html('English');
				$('#google_translate_element').fadeIn('slow');
			  } else {
				setTimeout(changeLanguageText, 10);
			  }
			}
		//--><!]]>
		</script>
		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </body>
</html>
