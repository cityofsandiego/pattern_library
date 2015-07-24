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

				<div class="l-container l-margin-vd">
					<div class="accordions js-toggle-accordion">
						<div class="accordion">
							<h4 class="accordion__heading"><a class="accordion__link" href="#">2015 <span class="toggle-icon"></span></a></h4>
							<div class="accordion__drawer" style="display: none;">
								<p>In calendar 2013 and 2014, Lantronix launched a record number of new products, services and solutions – more than a dozen IoT and M2M networking solutions including xPico Wi-Fi, xPrintServer Office (iOS) and CloudPrint (Android/Google), the SLC8000, xSenso, xDirect, xPort Pro Lx6, a new Professional Services organization, and more. In early 2015, we see customers and the entire IoT and M2M markets making significant strides in moving from early designs and prototyping, into manufacturing, product / application launch and more mass deployments.</p>
							</div>
						</div>
						<div class="accordion">
							<h4 class="accordion__heading"><a class="accordion__link" href="#">2014 <span class="toggle-icon"></span></a></h4>
							<div class="accordion__drawer" style="display: none;">
								<p>Lantronix announces Python support for Company’s Intelligent Device Software Platform – Starting with its PremierWave® family of Intelligent Gateways. Support for the industry’s most popular programming language, combined with ruggedized Lantronix Intelligent Gateways enables rapid development and deployment of secure IoT applications. To support customers and Python hobbyists, the Company launched a new developers’ wiki to provide downloadable sample scripts, instructions, and a platform for community sharing and collaboration.</p>
							</div>
						</div>
						<div class="accordion">
							<h4 class="accordion__heading"><a class="accordion__link" href="#">2013 <span class="toggle-icon"></span></a></h4>
							<div class="accordion__drawer" style="display: none;">
								<p>Announces Wyless partnership to deliver robust cellular technology and turnkey solutions into the global cellular market. With this new partnership, Lantronix’ customers can fast track their cellular M2M application development.</p>
							</div>
						</div>
						<div class="accordion">
							<h4 class="accordion__heading"><a class="accordion__link" href="#">Continued History <span class="toggle-icon"></span></a></h4>
							<div class="accordion__drawer" style="display: none;">
								<h4>2012</h4>
								<p>Lantronix announces the <a title="xPrintServer – Office Edition (iOS)" href="http://ltrx015201.dev/products/xprintserver-office/">xPrintServer® Office Edition</a>, the next-generation version of the company’s award-winning xPrintServer – Network Edition. This plug-and-print hardware solution comes with a wide range of robust features to support mobile printing throughout the enterprise. Designed in close collaboration with our enterprise customers, the new Office Edition addresses the challenges faced by IT departments on how to identify, deploy and manage iOS device printing throughout the extended organization.</p>
							</div>
						</div>
					</div>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>