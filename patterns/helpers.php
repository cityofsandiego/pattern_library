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

                <h1>Helpers</h1>
                <div class="sub__nav--library">
				    <ul class="sub__nav jump-scroll">
				        <li><a href="#spacing">Spacing</a></li>
                        <li><a href="#typography">Typography</a></li>
                        <li><a href="#display">Display & Visibility</a></li>
                        <li><a href="#alignment">Alignment</a></li>
                        <li><a href="#width">Width</a></li>
                        <li><a href="#design">Design Elements</a></li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
					<div class="row">
						<div class="twelve columns">
							<p>Available for use is a large set of helper classes that may be used on elements freely. These aid immensely to a site build for quick development and lessen the need for extensive and overly-specific CSS selectors. The majority of these classes live within <em>helpers.scss</em>.</p>
						</div>
					</div>
				</div>

				<div id="spacing" class="l-container l-margin-tm">

					<div class="row">
						<div class="twelve columns">
							<h2>Spacing</h2>
							<p>These classes are held in <em>spacing.scss</em> as there is a long list. Classes are available for each side combination of an element (top, bottom, left, right) and vary in margin/padding from extra small (.5em) to extra large (6em). Spacing classes follow this formula:</p>
						</div>
						<div class="four columns">
							<p><strong>.l-&lt;type&gt;-&lt;direction&gt;&lt;size&gt;</strong></p>
							<div class="row">
								<div class="six columns">
									<p class="l-margin-bn"><strong>Direction</strong></p><hr class="l-margin-an">
									<ul class="no-bullets">
										<li>a = all</li>
										<li>t = top</li>
										<li>r = right</li>
										<li>b = bottom</li>
										<li>l = left</li>
										<li>h = horizontal</li>
										<li>v = vertical</li>
									</ul>
								</div>
								<div class="six columns">
									<p class="l-margin-bn"><strong>Size</strong></p><hr class="l-margin-an">
									<ul class="no-bullets">
										<li>n = none</li>
										<li>s = small</li>
										<li>d = default</li>
										<li>m = medium</li>
										<li>l = large</li>
										<li>x = xlarge</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="eight columns">
							<p><strong>Examples:</strong></p>
							<table class="twelve columns">
								<tbody>

								<tr>
									<th>Class</th>
									<th>Value</th>
								</tr>
								<tr>
									<td>.l-margin-ad</td>
									<td>margin: 1em;</td>
								</tr>
								<tr>
									<td>.l-padding-hl</td>
									<td>padding-left: 4em; padding-right: 4em;</td>
								</tr>
								<tr>
									<td>.l-padding-tm</td>
									<td>padding-top: 2em;</td>
								</tr>
								<tr>
									<td>.l-margin-bx</td>
									<td>margin-bottom: 6em;</td>
								</tr>
								<tr>
									<td>.l-margin-vs</td>
									<td>margin-top: 0.5em; margin-bottom: 0.5em;</td>
								</tr>
								<tr>
									<td>.l-margin-ll</td>
									<td>margin-left: 4em;</td>
								</tr>
							</tbody></table>
						</div>
					</div>

							<p>For device-specific spacing, add either <em>desktop</em> or <em>mobile</em> to the class, like so:</p>
							<table class="twelve columns l-margin-bm"><tbody>

								<tr>
									<td>.l-padding-mobile-tn</td>
									<td>No top padding on mobile screens only (tablet viewport and below)</td>
								</tr>
								<tr>
									<td>.l-margin-desktop-hs</td>
									<td>Small top and bottom margin on desktop screens only (beginning at tablet viewport width)</td>
								</tr>

							</tbody></table>
				</div>

				<div id="typography" class="l-container l-margin-tm">

					<div class="row">
						<div class="twelve columns">
							<h2>Typography</h2>

							<table class="twelve columns"><tbody>

								<tr>
									<th>Class</th>
									<th>Value</th>
								</tr>
								<tr>
									<td>.fine-print</td>
									<td>font-size: 12px;</td>
								</tr>
								<tr>
									<td>.text-accent</td>
									<td>font-size: 22px;</td>
								</tr>
								<tr>
									<td>.text-left</td>
									<td>text-align: left;</td>
								</tr>
								<tr>
									<td>.text-center</td>
									<td>text-align: center;</td>
								</tr>
								<tr>
									<td>.text-right</td>
									<td>text-align: right;</td>
								</tr>
								<tr>
									<td>.text-capitalize</td>
									<td>text-transform: capitalize;</td>
								</tr>
								<tr>
									<td>.text-upper</td>
									<td>text-transform: uppercase;</td>
								</tr>

							</tbody></table>
						</div>
					</div>

				</div>

				<div id="display" class="l-container l-margin-tm">
					<div class="row">
						<div class="twelve columns">
							<h2>Display & Visibility</h2>

							<table class="twelve columns"><tbody>

								<tr>
									<th>Class</th>
									<th>Value</th>
								</tr>
								<tr>
									<td>.visuallyhidden</td>
									<td>Hide only visually, but have it available for screen readers</td>
								</tr>
								<tr>
									<td>.hidden</td>
									<td>Hide visually and from screen readers</td>
								</tr>
								<tr>
									<td>.hide-on-mobile</td>
									<td>display:none; until tablet viewport width</td>
								</tr>
								<tr>
									<td>.hide-on-desktop</td>
									<td>display:none; from tablet viewport width</td>
								</tr>

							</tbody></table>
						</div>
					</div>
				</div>

				<div id="alignment" class="l-container l-margin-tm">

					<div class="row">
						<div class="twelve columns">
							<h2>Alignment</h2>
							

							<p>These alignment classes take effect beginning from tablet viewport width.</p>

							<table class="twelve columns"><tbody>

								<tr>
									<td>.alignleft</td>
									<td>margin-right: 1.5em; margin-bottom: 1.5em; display:inline; float:left</td>
								</tr>
								<tr>
									<td>.aligncenter</td>
									<td>clear: both; display: block; margin: 0 auto</td>
								</tr>
								<tr>
									<td>.alignright</td>
									<td>margin-left: 1.5em; margin-bottom: 1.5em; display: inline; float: right</td>
								</tr>
								<tr>
									<td>.pull-left<br>.pull-left--desktop<br>.pull-left--mobile</td>
									<td>float: left</td>
								</tr>
								<tr>
									<td>.pull-center<br>.pull-center--desktop<br>.pull-center--mobile</td>
									<td>margin: 0 auto; display: block</td>
								</tr>
								<tr>
									<td>.pull-right<br>.pull-right--desktop<br>.pull-right--mobile</td>
									<td>float: right</td>
								</tr>
							</tbody></table>
						</div>
					</div>

				</div>
				
				<div id="width" class="l-container l-margin-tm">

					<div class="row">
						<div class="twelve columns">
							<h2>Width</h2>
							

							<p>Width percentages could be applied to elements using the following classes. The number in the class represents the percentage.</p>

							<table class="twelve columns">
							<thead>
								<tr>
									<th>Desktop and Mobile</th>
									<th>Desktop only</th>
									<th>Mobile only</th>
								</tr>
							</thead>
							<tbody>

								<tr>
									<td>width-25</td>
									<td>n/a</td>
									<td>n/a</td>
								</tr>
								<tr>
									<td>width-33</td>
									<td>n/a</td>
									<td>n/a</td>
								</tr>
								<tr>
									<td>width-50</td>
									<td>n/a</td>
									<td>width-50--mobile</td>
								</tr>
								<tr>
									<td>width-66</td>
									<td>n/a</td>
									<td>n/a</td>
								</tr>
								<tr>
									<td>width-75</td>
									<td>n/a</td>
									<td>n/a</td>
								</tr>
								<tr>
									<td>width-100</td>
									<td>n/a</td>
									<td>width-100--mobile</td>
								</tr>
							</tbody></table>
							<p>Class Usage Example</p>
							<table class="twelve columns"><tbody>
								<tr>
									<td>class="width-33"</td>
									<td>33% width in desktop and mobile</td>
								</tr>
								<tr>
									<td>class="width-50--mobile"</td>
									<td>default width in desktop, 50% width in mobile</td>
								</tr>
								<tr>
									<td>class="width-66 width-100--mobile"</td>
									<td>66% width in desktop, 100% width in mobile</td>
								</tr>
							</tbody></table>
						</div>
					</div>

				</div>

				<div id="design" class="l-container l-margin-tm">

					<div class="row">
						<div class="twelve columns">
							<h2>Design Elements</h2>
							<p>These classes refer to color variations that can be applied to elements.</p>

							<table class="twelve columns l-margin-bd"><tbody>

								<tr>
									<th>Class</th>
									<th>Value</th>
								</tr>
								<tr>
									<td>.background--dark</td>
									<td>background-color: $spruce;</td>
								</tr>
								<tr>
									<td>.background--off-white</td>
									<td>background-color: $off-white;</td>
								</tr>
								<tr>
									<td>.background--cerulean</td>
									<td>background-color: $cerulean;</td>
								</tr>
								<tr>
									<td>.background--science</td>
									<td>background-color: $science;</td>
								</tr>

							</tbody></table>
							<p class="text-small"><em>Note that color variables are set in settings.scss.</em></p>

							<p>There are mixins for gradient backgrounds that can be extended onto an element.</p>

							<table class="twelve columns l-margin-bm"><tbody>

								<tr>
									<th>Mixin</th>
									<th>Value</th>
								</tr>
								<tr>
									<td>%black-gradient</td>
									<td>Fades vertically from transparent to black (opacity .75).</td>
								</tr>
								<tr>
									<td>%white-gradient</td>
									<td>Fades vertically from white (opacity .9) to full opacity white.</td>
								</tr>
								<tr>
									<td>%gray-gradient</td>
									<td>Fades vertically from white to light gray.</td>
								</tr>

							</tbody></table>
						</div>
					</div>

				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>