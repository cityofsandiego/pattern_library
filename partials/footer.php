
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="/assets/dist/js/plugins.min.js"></script>
        <script src="/assets/dist/js/main.min.js"></script>

        <script>
            var multi  = document.getElementById('multi-map');
            var single = document.getElementById('single-map');

            function initialize() {

                var myLatlng = new google.maps.LatLng(32.7117,-117.1592);

                var mapOptions = {
                    zoom: 13,
                    center: myLatlng
                }

                var image = '../assets/dist/img/marker.png';

                var map = new google.maps.Map(document.getElementById('multi-map'), mapOptions);

                var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  icon: image
                });

                var wideMap = new google.maps.Map(document.getElementById('single-map'), mapOptions);

                var wideMarker = new google.maps.Marker({
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
                size   : new google.maps.Size(13,19),
                origin : new google.maps.Point(0,0),
                anchor : new google.maps.Point(0,0)
            };

            var attractionImage = {
                url    : '../assets/dist/img/attraction-marker.png',
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

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>

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
