<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns background-white l-padding-mobile-hd">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">

                <h1>Charts & Graphs</h1>
				<div class="sub__nav--library">
				    <ul class="sub__nav">
				        <li><a href="#bar">Bar Graph</a></li>
				        <li><a href="#line">Line Graph</a></li>
				        <li><a href="#pie">Pie Chart</a></li>
				        <li><a href="#tables">Tables</a></li>
				    </ul>
				</div>

				<div id="bar" class="l-container l-margin-tm">
				    <h2>Bar</h2>

				    <div class="text-center">
				    	<canvas id="myChart" width="600" height="400"></canvas>

					    <script>
					    	var data = {
							    labels: ["January", "February", "March", "April", "May", "June", "July"],
							    datasets: [
							        {
							            label: "My First dataset",
							            fillColor: "rgba(228,233,235,0.8)",
							            strokeColor: "rgba(220,220,220,0.8)",
							            highlightFill: "rgba(220,220,220,0.75)",
							            highlightStroke: "rgba(220,220,220,1)",
							            data: [65, 59, 80, 81, 56, 55, 40]
							        },
							        {
							            label: "My Second dataset",
							            fillColor: "rgba(0,152,219,1)",
							            strokeColor: "rgba(0,0,0,1)",
							            highlightFill: "rgba(255,255,255,1)",
							            highlightStroke: "rgba(255,255,255,1)",
							            data: [28, 48, 40, 19, 86, 27, 90]
							        }
							    ]
							};
					    </script>
				    </div>

				</div>

				<div id="line" class="l-container l-margin-tm">
					<h2>Line</h2>

					<div class="text-center">
						<canvas id="lineChart" width="600" height="400"></canvas>

						<script>
							var data = {
							    labels: ["January", "February", "March", "April", "May", "June", "July"],
							    datasets: [
							        {
							            label: "My First dataset",
							            fillColor: "rgba(228,233,235,0.8)",
							            strokeColor: "rgba(220,220,220,0.8)",
							            highlightFill: "rgba(220,220,220,0.75)",
							            highlightStroke: "rgba(220,220,220,1)",
							            data: [65, 59, 80, 81, 56, 55, 40]
							        },
							        {
							            label: "My Second dataset",
							            fillColor: "rgba(0,152,219,1)",
							            strokeColor: "rgba(0,0,0,1)",
							            highlightFill: "rgba(255,255,255,1)",
							            highlightStroke: "rgba(255,255,255,1)",
							            data: [28, 48, 40, 19, 86, 27, 90]
							        }
							    ]
							};
						</script>
					</div>
				</div>

				<div id="pie" class="l-container l-margin-tm">
					<h2>Pie</h2>

					<div class="text-center">
						<canvas id="pieChart" width="600" height="400"></canvas>

						<script>
							var pieData = [
							    {
							        value: 300,
							        color:"#0098db",
							        highlight: "#0098db",
							        label: "Cerulean"
							    },
							    {
							        value: 50,
							        color: "#ffa02f",
							        highlight: "#ffa02f",
							        label: "Orange"
							    },
							    {
							        value: 100,
							        color: "#00c7b2",
							        highlight: "#00c7b2",
							        label: "Teal"
							    }
							]
						</script>
					</div>
				</div>

				<div class="l-container l-margin-vm">
					<div class="row">
						<div class="six columns">
							<div class="code__examples">
                                <form><textarea class="pattern" id="char-code-1" name="code">
<canvas id="pieChart" width="600" height="400"></canvas>

<script>
	var pieData = [
	    {
	        value: 300,
	        color:"#0098db",
	        highlight: "#0098db",
	        label: "Cerulean"
	    },
	    {
	        value: 50,
	        color: "#ffa02f",
	        highlight: "#ffa02f",
	        label: "Orange"
	    },
	    {
	        value: 100,
	        color: "#00c7b2",
	        highlight: "#00c7b2",
	        label: "Teal"
	    }
	]

	var ctx = document.getElementById("pieChart").getContext("2d");
    var myPieChart = new Chart(ctx).Pie(pieData);
</script></textarea> </form> </div>
						</div>
						<div class="six columns">
							<p><strong><em>Notes</em></strong></p>
							<p>Charts are built using <a href="http://www.chartjs.org/" target="_blank">chart.js</a>, a javascript library that allows easy implementation of various charts. Customization options available include responsive charts, animation, and more.</p>	
						</div>
					</div>
				</div>

				<div id="tables" class="l-container l-margin-vd">
					<div class="row">
						<div class="twelve columns">
							<h2 class="border border--bottom l-padding-bn l-margin-bs">Tables</h2>
							<p class="subheading l-margin-bn">Accordion Table</p>
							<p>View on viewport widths from tablet and below for collapsed table data.</p>
						</div>
					</div>

					<div class="row l-padding-as background-off-white">
						<table class="twelve columns table__accordion hide-on-mobile l-padding-as l-padding-bn">
							<tr>
								<th>Balboa Park Golf Course</th>
								<th>SD City Resident*</th>
								<th>Non-Resident</th>
							</tr>
						</table>

						<!-- Table - Accordion -->
						<div class="row l-margin-vm">
							<div class="twelve columns accordions js-toggle-accordion table__accordion">
								<div class="accordion">
									<p class="accordion__heading"><a class="accordion__link" href="#"><strong>Weekday (Monday - Friday)</strong></a></p>
									<div class="accordion__drawer row">
										<table class="twelve columns">
											<tr class="hide-on-desktop">
												<th></th>
												<th>SD City Resident *</th>
												<th>Non-Resident</th>
											</tr>
											<tr>
												<td>18-Hole Course</td>
												<td>$32</td>
												<td>$40</td>
											</tr>
											<tr>
												<td>18-Hole Course Senior (62 and over)</td>
												<td>$32</td>
												<td>$40</td>
											</tr>
											<tr>
												<td>18-Hole Course Junior (17 and under)</td>
												<td>$32</td>
												<td>$40</td>
											</tr>
											<tr>
												<td>18-Hole Course Twilight</td>
												<td>$32</td>
												<td>$40</td>
											</tr>
											<tr>
												<td>9-Hole Course</td>
												<td>$32</td>
												<td>$40</td>
											</tr>
											<tr>
												<td>9-Hole Course Senior (62 and over)</td>
												<td>$32</td>
												<td>$40</td>
											</tr>
											<tr>
												<td>9-Hole Course Junior (17 and under)</td>
												<td>$32</td>
												<td>$40</td>
											</tr>
										</table>
									</div> <!-- accordion drawer -->
								</div>
								<!-- <table>
									<tr class="subheading accordion__heading">
										<td><a class="accordion__link" href="#"><strong>Weekday (Monday - Friday)</strong></a></td>
									</tr>
								</table> -->
							</div>
						</div>

					</div>

					<div class="row l-margin-td">
						<div class="four columns">
							<p><strong>Notes</strong></p>
							<p>Apply <strong>.accordion</strong> classes for accordion ability.</p>
						</div>
						<div class="eight columns">
							<div class="code__examples">
                                <form><textarea class="pattern" id="char-code-2" name="code">
<div class="accordions js-toggle-accordion table__accordion">
	<div class="accordion">
		<p class="accordion__heading"><a class="accordion__link" href="#"><strong>Weekday (Monday - Friday)</strong></a></p>
		<div class="accordion__drawer row">
			<table class="twelve columns">
				<tr class="hide-on-desktop">
					<th></th>
					<th>SD City Resident *</th>
					<th>Non-Resident</th>
				</tr>
				<tr>
					<td>18-Hole Course</td>
					<td>$32</td>
					<td>$40</td>
				</tr>
				<tr>
					<td>18-Hole Course Senior (62 and over)</td>
					<td>$32</td>
					<td>$40</td>
				</tr>
				<tr>
					<td>18-Hole Course Junior (17 and under)</td>
					<td>$32</td>
					<td>$40</td>
				</tr>
				<tr>
					<td>18-Hole Course Twilight</td>
					<td>$32</td>
					<td>$40</td>
				</tr>
				<tr>
					<td>9-Hole Course</td>
					<td>$32</td>
					<td>$40</td>
				</tr>
				<tr>
					<td>9-Hole Course Senior (62 and over)</td>
					<td>$32</td>
					<td>$40</td>
				</tr>
				<tr>
					<td>9-Hole Course Junior (17 and under)</td>
					<td>$32</td>
					<td>$40</td>
				</tr>
			</table>
		</div> <!-- accordion drawer -->
	</div>
</div>
</textarea> </form> </div>
						</div>
					</div>

					<div class="row l-margin-tm">
						<div class="twelve columns">
							<p class="subheading">General Table</p>
						</div>
					</div>

					<!-- Table - General -->
					<div class="row l-padding-as background-off-white">
						<table class="twelve columns">

							<tr class="hide-on-mobile">
								<th>Balboa Park Golf Course</th>
								<th>SD City Resident*</th>
								<th>Non-Resident</th>
							</tr>

							<tr class="subheading">
								<td colspan="3"><strong>Weekend (Saturday, Sunday & Holidays)</strong></td>
							</tr>

							<tr class="subheading hide-on-desktop">
								<th></th>
								<th>SD City Resident *</th>
								<th>Non-Resident</th>
							</tr>
							<tr>
								<td>18-Hole Course</td>
								<td>$32</td>
								<td>$40</td>
							</tr>
							<tr>
								<td>18-Hole Course Senior (62 and over)</td>
								<td>$32</td>
								<td>$40</td>
							</tr>
							<tr>
								<td>18-Hole Course Junior (17 and under)</td>
								<td>$32</td>
								<td>$40</td>
							</tr>
							<tr>
								<td>18-Hole Course Twilight</td>
								<td>$32</td>
								<td>$40</td>
							</tr>
							<tr>
								<td>9-Hole Course</td>
								<td>$32</td>
								<td>$40</td>
							</tr>
							<tr>
								<td>9-Hole Course Senior (62 and over)</td>
								<td>$32</td>
								<td>$40</td>
							</tr>
							<tr>
								<td>9-Hole Course Junior (17 and under)</td>
								<td>$32</td>
								<td>$40</td>
							</tr>
						</table>
					</div>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>