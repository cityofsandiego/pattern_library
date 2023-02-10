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
                        <li><a href="#lists">Lists</a></li>
                        <li><a href="#display">Display & Visibility</a></li>
                        <li><a href="#alignment">Alignment</a></li>
                        <li><a href="#width">Width</a></li>
                        <li><a href="#bgc">Background Color</a></li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
					<div class="row">
						<div class="twelve columns">
							<p>The helper classes listed below aid immensely to site development and lessen the need for custom inline styling.</p>
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
									<td class="width-25">.l-padding-mobile-tn</td>
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
									<th>Desktop-only</th>
									<th>Mobile-only</th>
								</tr>
								<tr>
									<td>.fine-print</td>
									<td>font-size: 12px;</td>
									<td>n/a</td>
									<td>n/a</td>
								</tr>
								<tr>
									<td>.text-accent</td>
									<td>font-size: 22px;</td>
									<td>.text-accent--desktop</td>
									<td>n/a</td>
								</tr>
								<tr>
									<td>.text-left</td>
									<td>text-align: left;</td>
									<td>.text-left--desktop</td>
									<td>.text-left--mobile</td>
								</tr>
								<tr>
									<td>.text-center</td>
									<td>text-align: center;</td>
									<td>.text-center--desktop</td>
									<td>.text-center--mobile</td>
								</tr>
								<tr>
									<td>.text-right</td>
									<td>text-align: right;</td>
									<td>.text-right--desktop</td>
									<td>.text-right--mobile</td>
								</tr>
								<tr>
									<td>.text-capitalize</td>
									<td>text-transform: capitalize;</td>
									<td>n/a</td>
									<td>n/a</td>
								</tr>
								<tr>
									<td>.text-upper</td>
									<td>text-transform: uppercase;</td>
									<td>n/a</td>
									<td>n/a</td>
								</tr>

							</tbody></table>
						</div>
					</div>

				</div>

				<div id="lists" class="l-container l-margin-tm">

					<div class="row">
						<div class="twelve columns">
							<h2>Lists </h2>
							<p>Classes apply to &lt;ul&gt; and &lt;ol&gt;.</p>
							<table class="twelve columns"><tbody>

								<tr>
									<th>Class</th>
									<th>Value</th>
									<th>Desktop-only</th>
									<th>Mobile-only</th>
								</tr>
								<tr>
									<td>.two-columns</td>
									<td>column-count:2</td>
									<td>.two-columns--desktop</td>
									<td>.two-columns--mobile</td>
								</tr>
								<tr>
									<td>.three-columns</td>
									<td>column-count:3</td>
									<td>.three-columns--desktop</td>
									<td>.three-columns--mobile</td>
								</tr>
								<tr>
									<td>.four-columns</td>
									<td>column-count:4</td>
									<td>.four-columns--desktop</td>
									<td>n/a</td>
								</tr>

							</tbody></table>
							<p>Class Usage Example</p>
							<table class="twelve columns"><tbody>
								<tr>
									<td>&lt;ul class="two-columns"&gt;</td>
									<td>Unordered list will automatically split into two columns on all views</td>
								</tr>
								<tr>
									<td>&lt;ol class="two-columns--desktop"&gt;</td>
									<td>Ordered list will automatically split into two columns on desktop view only</td>
								</tr>
								<tr>
									<td>&lt;ul class="three-columns--desktop two-columns--mobile"&gt;</td>
									<td>Unordered list will automatically split into three columns on desktop view and two columns on mobile view</td>
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
									<td>33% width on all views</td>
								</tr>
								<tr>
									<td>class="width-50--mobile"</td>
									<td>default width on desktop view, 50% width on mobile view</td>
								</tr>
								<tr>
									<td>class="width-66 width-100--mobile"</td>
									<td>66% width on desktop view, 100% width on mobile view</td>
								</tr>
							</tbody></table>
						</div>
					</div>

				</div>

				<div id="bgc" class="l-container l-margin-tm">

					<div class="row">
						<div class="twelve columns">
							<h2>Background Color</h2>
							<p>Some colors in our <a href="colors.php">Color Palette</a> can be used as a background color for an element by applying the ".background--[color name]" class. Note that not all colors are available for this class.</p>
							<p>Examples:</p>
							<ul class="no-bullets l-padding-ld">
								<li>.background--off-white</li>
								<li>.background--spruce</li>
								<li>.background--cerulean</li>
								<li>.background--sunshade</li>
							</ul>
							<table class="twelve columns l-margin-bd hidden"><tbody>

								<tr>
									<th>Class</th>
									<th colspan="2">Value</th>
								</tr>
								<tr>
									<td>.background--dark</td>
									<td>background-color: $spruce;</td>
									<td><i class="icon--md icon--circle" style="padding:1.5em; background-color:#37424a;"></i></td>
								</tr>
								<tr>
									<td>.background--off-white</td>
									<td>background-color: $off-white;</td>
									<td><i class="icon--md icon--circle" style="padding:1.5em; background-color:#37424a;"></i></td>
								</tr>
								<tr>
									<td>.background--cerulean</td>
									<td>background-color: $cerulean;</td>
									<td><i class="icon--md icon--circle" style="padding:1.5em; background-color:#0098db;"></i></td>
								</tr>
								<tr>
									<td>.background--science</td>
									<td>background-color: $science;</td>
									<td><i class="icon--md icon--circle" style="padding:1.5em; background-color:#37424a;"></i></td>
								</tr>

							</tbody></table>
							<p class="text-small"><em>Color variables are set in settings.scss.</em></p>
							<div class="hidden">
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
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>