<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns">

                <h1>Charts & Graphs</h1>
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Bar Graph</li>
				        <li>Line Graph</li>
				        <li>Pie Chart</li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
				    <h2>Bar</h2>
				    <h2>Line</h2>
				    <h2>Pie</h2>
				</div>

				<div class="l-container l-margin-vd background-off-white">
					<div class="row">
						<h2 class="border border--bottom l-padding-bn l-margin-bs">Tables</h2>
						<table class="twelve columns table__accordion hide-on-mobile">
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

						<hr>

						<!-- Table - General -->
						<div class="row l-margin-vm">
							<table class="twelve columns">

								<tr class="hide-on-mobile">
									<th>Balboa Park Golf Course</th>
									<th>SD City Resident*</th>
									<th>Non-Resident</th>
								</tr>

								<tr class="subheading accordion__heading">
									<td colspan="3"><a class="accordion__link" href="#"><strong>Weekend (Saturday, Sunday & Holidays)</strong></a></td>
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
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>