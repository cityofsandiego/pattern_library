
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="/assets/dist/js/plugins.min.js"></script>
		<script data-main="/assets/dist/js/main-built.js" src="/assets/dist/js/lib/require.js"></script>


        <?php if ($current_page == "charts-graphs.php"){ ?>
        <script>
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May"],
      datasets: [
        {
          label: " things",
          backgroundColor: ["#0098db", "#00c7b2","#ffa02f","#37424a","#dad7cb"],
          data: [68,52,24,37,15]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number of Things'
      },
	  scales: {
		  xAxes: [
			{
			  gridLines: {
					display:false
				}
			}
		  ]
	  }
    }
});
new Chart(document.getElementById("line-chart"), {
    type: 'line',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May"],
      datasets: [
        {
          label: " things",
          data: [68,52,24,37,15],
          borderColor: "#3e95cd",
          fill: false
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Number of Things'
      },
	  scales: {
		  xAxes: [
			{
			  gridLines: {
					display:false
				}
			}
		  ]
	  }
    }
});
new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May"],
      datasets: [
		{
          label: " things",
          backgroundColor: ["#0098db", "#00c7b2","#ffa02f","#37424a","#dad7cb"],
          data: [68,52,24,37,15]
        }
	  ]
    },
    options: {
      title: {
        display: true,
        text: 'Number of Things'
      }
    }
});
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
			
			var amountScrolled = 300;

			jQuery(window).scroll(function() {
				if ( jQuery(window).scrollTop() > amountScrolled ) {
					jQuery('div.backToTop a').fadeIn('slow');
				} else {
					jQuery('div.backToTop a').fadeOut('slow');
				}
			});
			jQuery('div.backToTop a').click(function() {
				jQuery('html, body').animate({
					scrollTop: 0
				}, 700);
				return false;
			});
			jQuery(".jump-scroll li a").on("click", function( e ) {
				e.preventDefault();

				jQuery("body, html").animate({ 
					scrollTop: jQuery( jQuery(this).attr('href') ).offset().top 
				}, 600);				
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
