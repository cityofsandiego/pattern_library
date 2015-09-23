
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="/assets/dist/js/plugins.min.js"></script>
        <script src="/assets/dist/js/main.min.js"></script>

        <?php if ($current_page == "charts-graphs.php"){ ?>
        <script>
            var ctx = document.getElementById("myChart").getContext("2d");
            var myNewChart = new Chart(ctx).Bar(data);

            var ctx = document.getElementById("lineChart").getContext("2d");
            var lineChart = new Chart(ctx).Line(data);

            var ctx = document.getElementById("pieChart").getContext("2d");
            var myPieChart = new Chart(ctx).Pie(pieData);
        </script>
        <?php } ?>

        <script>
          var els = document.querySelectorAll("textarea.pattern");

            Array.prototype.forEach.call(els, function(el) {
                var id = el.id;

                var editor = CodeMirror.fromTextArea(document.getElementById(id), {
                    lineNumbers: true,
                    lineWrapping: true,
                    mode: "htmlmixed"
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
