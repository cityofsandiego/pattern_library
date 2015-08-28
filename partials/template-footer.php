<footer class="l-constrained">
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="/assets/dist/js/plugins.js"></script>
        <script src="/assets/dist/js/main.js"></script>

        <script>
            var ctx = document.getElementById("myChart").getContext("2d");
            var myNewChart = new Chart(ctx).Bar(data);

            var ctx = document.getElementById("lineChart").getContext("2d");
            var lineChart = new Chart(ctx).Line(data);

            var ctx = document.getElementById("pieChart").getContext("2d");
            var myPieChart = new Chart(ctx).Pie(pieData);
        </script>

        <script>
          var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
            lineNumbers: true,
            mode: "application/x-ejs",
            indentUnit: 1,
            indentWithTabs: true
          });
        </script>

        <script type="text/javascript">
            jQuery(window).load(function() {
                jQuery('.flexslider').flexslider({
                    //declare the slider items
                    selector: ".slides > li",
                    animation: "slide",
                    //do not add navigation for paging control of each slide
                    controlNav: true,
                    directionNav: false,
                    slideshow: false,
                    //Allow height of the slider to animate smoothly in horizontal mode
                    smoothHeight: true,
                    start: function(){
                        jQuery('.slides').children('li').css({
                            'opacity': 1,
                            'position': 'relative'
                        });
                    }
                });
            });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            //     (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            //     function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            //     e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            //     e.src='https://www.google-analytics.com/analytics.js';
            //     r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            //     ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        </div>
    </div>
    </body>
</html>