<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns background-white l-padding-mobile-hd">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns l-padding-bm">

                <h1>Tables/Charts &amp; Graphs</h1>
				<div class="sub__nav--library">
				    <ul class="sub__nav">
				        <li><a href="#general-table">General Table</a></li>
				        <li><a href="#accordion-table">Accordion Table</a></li>
				        <li><a href="#bar">Bar Graph</a></li>
				        <li><a href="#line">Line Graph</a></li>
				        <li><a href="#pie">Pie Chart</a></li>
				    </ul>
				</div>
				
				
				<div id="tables" class="l-container l-margin-td l-margin-bm">
				
				
					<h2 class="border border--bottom l-padding-bn l-margin-bs">Tables</h2>
							
					<div class="row l-margin-tm">
						<div class="twelve columns">
							<h3 id="general-table">General Table</h3>
						</div>
					</div>

					<!-- Table - General -->
					<div class="row l-padding-as l-margin-bd">
						<table class="twelve columns">

							<tr class="hide-on-mobile">
								<th>Balboa Park Golf Course</th>
								<th>SD City Resident*</th>
								<th>Non-Resident</th>
							</tr>

							<tr class="subheading">
								<td colspan="3" class="l-padding-ld"><strong>Weekend (Saturday, Sunday & Holidays)</strong></td>
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
				
				
					<div class="row">
						<div class="twelve columns">
							<h3 id="accordion-table">Accordion Table</h3>
							<p>View on viewport widths from tablet and below for collapsed table data.</p>
						</div>
					</div>

					<div class="row l-padding-as background-off-white">

						<!-- Table - Accordion -->
						<div class="row">
							<div class="twelve columns accordions js-toggle-accordion table__accordion">
								<div class="accordion current is-open">
									<p class="accordion__heading"><a class="accordion__link" href="#"><strong>Weekday (Monday - Friday)</strong> <span class="toggle-icon"><i class="icon-chevron-down"></i></span></a></p>
									<div class="accordion__drawer row">
										<table class="twelve columns">
											<tr>
												<th><span class="hide-on-mobile">Balboa Park Golf Course</span></th>
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
						</div>

					</div>

					<div class="row l-margin-td">
						<div class="four columns">
							<p class="l-margin-bn"><strong>Notes</strong></p>
							<p>Apply <strong>.accordion</strong> classes for accordion ability.</p>
						</div>
						<div class="eight columns">
							<div class="code__examples">
                                <form><textarea class="pattern" id="char-code-2" name="code">
<div class="accordions js-toggle-accordion table__accordion">
	<div class="accordion current is-open">
		<p class="accordion__heading"><a class="accordion__link" href="#"><strong>Weekday (Monday - Friday)</strong> <span class="toggle-icon"><i class="icon-chevron-down"></i></span></a></p>
		<div class="accordion__drawer row">
			<table class="twelve columns">
				<tr>
					<th><span class="hide-on-mobile">Balboa Park Golf Course</span></th>
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
</div> </textarea> </form> </div>
						</div>
					</div>

					
				</div>
				
				
				<h2 class="border border--bottom l-padding-bn l-margin-bs">Charts and Graphs</h2>
				<p>Charts are built using <a href="http://www.chartjs.org/" target="_blank">chart.js</a>, a javascript library that allows easy implementation of various charts. Customization options available include responsive charts, animation, and more.</p>	

				<div id="bar" class="l-container l-margin-tm l-margin-bd">
				    <h3>Bar</h3>

				    <div class="text-center">
				    	<canvas id="bar-chart" width="600" height="400"></canvas>
				    </div>

				</div>
				
				<div class="code__examples l-margin-bd">
                                <form><textarea class="pattern" id="bar-code" name="code">
<div class="text-center">
	<canvas id="bar-chart" width="600" height="400"></canvas>
</div>
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
</script></textarea> </form> </div>

				<div id="line" class="l-container l-margin-tm l-margin-bd">
					<h3>Line</h3>

					<div class="text-center">
						<canvas id="line-chart" width="600" height="400"></canvas>
					</div>
				</div>

				<div class="code__examples l-margin-bd">
                                <form><textarea class="pattern" id="line-code" name="code">
<div class="text-center">
	<canvas id="line-chart" width="600" height="400"></canvas>
</div>
<script>
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
</script></textarea> </form> </div>

				<div id="pie" class="l-container l-margin-vm">
					<h3>Pie</h3>

					<div class="text-center">
						<canvas id="pie-chart" width="600" height="400"></canvas>
					</div>
				</div>	

<div class="code__examples">
                                <form><textarea class="pattern" id="pie-code" name="code">
<div class="text-center">
	<canvas id="pie-chart" width="600" height="400"></canvas>
</div>
<script>
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
</script></textarea> </form> </div>


            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>