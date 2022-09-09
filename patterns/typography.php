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

                <h1>Typography</h1>
				<div class="sub__nav--library">
				    <ul class="sub__nav jump-scroll">
				    	<li><a href="#typefaces">Typefaces</a></li>
				    	<li><a href="#sizes">Type Sizes</a></li>
				    	<li><a href="#helpers">Type Helpers</a></li>
				        <li><a href="#byline">Byline</a></li>
				        <li><a href="#blockquotes">Blockquotes</a></li>
				        <li><a href="#body-content">Body Content</a></li>
				        <li><a href="#address">Address</a></li>
				    </ul>
				</div>

				<div id="typefaces" class="l-container l-margin-tm">

				    <div class="l-container l-margin-bm">
					    <h2>Typefaces</h2>
						<p>We're utilizing Google Fonts sitewide; <a href="https://www.google.com/fonts/specimen/Merriweather" target="_blank">Merriweather</a> for headline text, and <a href="https://www.google.com/fonts/specimen/Open+Sans" target="_blank">Open Sans</a> for body copy.</p>
						
						<div class="row l-margin-tm">
							<div class="three columns">
							<h3 class="l-margin-tn">Merriweather</h3>
							</div>
							<div class="nine columns text-accent">
							<p style="font-family:'Merriweather'">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z<br>a b c d e f g h i j k l m n o p q r s t u v w x y z<br>1 2 3 4 5 6 7 8 9 0</p>
							</div>
						</div>
						<div class="row">
							<div class="three columns">
							<p class="h3 l-margin-tn" style="font-family:'Open Sans'">Open Sans</p>
							</div>
							<div class="nine columns text-accent">
							<p>A B C D E F G H I J K L M N O P Q R S T U V W X Y Z<br>a b c d e f g h i j k l m n o p q r s t u v w x y z<br>1 2 3 4 5 6 7 8 9 0</p>
							</div>
						</div>
					</div>
				</div>

				<div id="sizes" class="l-container">

				    <div class="l-container l-margin-bm">
					    <h2>Type Sizes</h2>
						<p>The size, line height, and weight for each heading type is listed.</p>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h1 class="l-margin-an">Main Heading (H1)</h1>
					    	</div>
					    	<div class="six columns">
					    		<p class="text-gray">2.25rem / 1.3 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h2 class="l-margin-an">Subheading (H2)</h2>
					    	</div>
					    	<div class="six columns">
					    		<p class="text-gray"> 1.6875rem / 1.3 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h3 class="l-margin-an">Section Heading (H3)</h3>
					    	</div>
					    	<div class="six columns">
					    		<p class="text-gray"> 1.3125rem / 1.3 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h4 class="l-margin-an">Subsection Heading (H4)</h4>
					    	</div>
					    	<div class="six columns">
					    		<p class="text-gray"> 1rem / 1.3 / 600</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h5 class="l-margin-an">Segment Heading (H5)</p>
					    	</div>
					    	<div class="six columns">
					    		<p class="text-gray">1rem / 1.4 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<p class="l-margin-an">Default Paragraph</p>
					    	</div>
					    	<div class="six columns">
					    		<p class="text-gray">1rem / 1.5 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<p class="l-margin-an text-accent">Accented Paragraph</p>
					    	</div>
					    	<div class="six columns">
					    		<p class="text-gray">1.375rem / 1.5 / Normal</p>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="six columns">
					    		<p class="l-margin-an fine-print">Fine Print Paragraph</p>
					    	</div>
					    	<div class="six columns">
					    		<p class="text-gray">.75rem / 1.5 / Normal</p>
					    	</div>
					    </div>
				    </div>
				<div>
				<div id="helpers" class="l-container">	
					<h2>Type Helpers</h2>
				    <div class="row">
				    	<div class="six columns">
                            <p>Helper classes are available to style typographic tags as header elements. This is helpful if you want the style of, say, an &lt;h2&gt;, but the placement of an &lt;h2&gt; doesn't make semantic sense on the page.</p>
                        </div>
                        <div class="six columns">
                            <p class="h1">This is actually a &lt;p&gt;.</p>
                        	<h4 class="h2">This is actually an &lt;h4&gt;.</h4>
                            <div class="code__examples">
                                <form><textarea class="pattern" id="type-code-1" name="code">
<p class="h1">This is actually a &lt;p&gt;.</p>
<h4 class="h2">This is actually an &lt;h4&gt;.</h4></textarea> </form> </div>
                        </div>
                    </div>

					<p>Additional helper classes available for headings:</p>
					<table class="width-100"><tbody>
					<tr>
						<td class="width-25"><strong>.heading--center</strong></td><td><h3 class="heading--center">Centered Heading</h3></td>
					</tr>
					<tr>
						<td><strong>.heading--right</strong></td><td><h3 class="heading--right">Right-aligned Heading</h3></td>
					</tr>
					<tr>
						<td><strong>.heading--trim</strong></td><td><h3 class="heading--trim">Heading with No Margins</h3></td>
					</tr>
					<tr>
						<td><strong>.heading--snug</strong></td><td><h3 class="heading--snug">Heading with No Top Margin</h3></td>
					</tr>
					<tr>
						<td><strong>.heading--light</strong></td><td class="background--cerulean"><h3 class="heading--light">White Heading Text</h3></td>
					</tr>
					<tr>
						<td><strong>.heading--subcolor</strong></td><td><h3 class="heading--subcolor">Heading with Teal Color</h3><p>Font size is not reduced (do not apply to &lt;h1&gt;)</p></td>
					</tr>
					<tr>
						<td><strong>.subheading</strong></td><td><h3 class="subheading">Subheading</h3><p>Applies a preset font size and teal color to any heading or paragraph. All headings and paragraphs with this class will look the same.</p></td>
					</tr>
					</tbody></table>
					
					<p>Additional helper classes available for paragraphs:</p>
					<table class="width-100"><tbody>
					<tr>
						<td class="width-25"><strong>.text-accent</strong></td><td><p class="text-accent l-margin-bn">Text accent</p></td>
					</tr>
					<tr>
						<td><strong>.fine-print</strong></td><td><p class="fine-print l-margin-bn">Fine print</p></td>
					</tr>
					<tr>
						<td><strong>.text-left</strong></td><td><p class="text-left l-margin-bn">Left-aligned text</p></td>
					</tr>
					<tr>
						<td><strong>.text-center</strong></td><td><p class="text-center l-margin-bn">Centered text</p></td>
					</tr>
					<tr>
						<td><strong>.text-right</strong></td><td><p class="text-right l-margin-bn">Right-aligned text</p></td>
					</tr>
					<tr>
						<td><strong>.text-capitalize</strong></td><td><p class="text-capitalize l-margin-bn">Words with first letter capitalized</p></td>
					</tr>
					<tr>
						<td><strong>.text-upper</strong></td><td><p class="text-upper l-margin-bn">All uppercase letters</p></td>
					</tr>
					</tbody></table>
					<p class="fine-print">These classes are located in <em>typography.scss</em>.</p>
						
				</div>
				

				<div id="byline" class="l-container l-margin-vm">
					<h2>Byline</h2>
					<div class="four columns">
						<div class="post__meta">
							<span class="post__date">23 July 2015</span>
							|
							<span class="post__author"><a href="">by Name Lastname</a></span>
						</div>
					</div>
					<div class="eight columns">
						<p class="l-margin-bn"><strong>Notes</strong></p>
						<p>Wrap article information within a <strong>.post__meta</strong> container. Additional information, such as social sharing icons, is also appropriate in this area.</p>
						<div class="code__examples">
							<form><textarea class="pattern" id="type-code-3" name="code">
<div class="post__meta">
<span class="post__date">23 July 2015</span> |
<span class="post__author"><a href="">by Name Lastname</a></span>
</div></textarea> </form> </div>
					</div>
				</div>

				<div id="blockquotes" class="l-container l-margin-vm">
					<h2>Blockquotes</h2>
					<div class="row">
						<div class="six columns">
							<blockquote>With its great weather, miles of sandy beaches, and major attractions, San Diego is known worldwide as one of the best tourist destinations and a great place for residents to relax year round. <span class="author">Mayor of San Diego</span></blockquote>
						</div>
						<div class="six columns">
						<div class="code__examples">
							<form><textarea class="pattern" id="type-code-5" name="code">
<blockquote>With its great weather, miles of sandy beaches, and major attractions, San Diego is known worldwide as one of the best tourist destinations and a great place for residents to relax year round. <span class="author">Mayor of San Diego</span></blockquote>	</textarea> </form> </div>
						</div>
					</div>
				</div>

				<div id="body-content" class="l-container l-margin-vm">
					<h2>Body Content</h2>
					<div class="row">
						<div class="twelve columns">
							<h2>Intro</h2>
							<p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house. The Pro Shop offers golf merchandise for sale and the rental of clubs, hand and power golf carts. The Professional Golf instruction staff offers group and individual golf lessons.</p>
						</div>
					</div>
					<div class="row l-margin-vd">
						<div class="six columns">
							<h3 class="heading--subcolor">Sub Section</h3>
							<p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house. The Pro Shop offers golf merchandise for sale and the rental of clubs, hand and power golf carts. The Professional Golf instruction staff offers group and individual golf lessons.</p>
						</div>
						<div class="six columns">
							<h3 class="heading--subcolor">Sub Section</h3>
							<p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house. The Pro Shop offers golf merchandise for sale and the rental of clubs, hand and power golf carts. The Professional Golf instruction staff offers group and individual golf lessons.</p>
						</div>
					</div>
				</div>

				<div id="address" class="l-container l-margin-vm">
					<h2>Address</h2>
					<div class="row">
						<div class="four columns">
							<address>
								<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
									<span itemprop="streetAddress">2600 Golf Course Drive <br></span>
									<span itemprop="addressLocality">San Diego</span>,
									<span itemprop="addressRegion">CA</span>
									<span itemprop="postalCode">92102</span>
								</div>
								<span itemprop="telephone">(619) 123-4567</span>
							</address>	
						</div>
						<div class="eight columns">
							<p class="l-margin-bn"><strong>Notes</strong></p>
							<p>When displaying addresses and contact information, it is good practice to include <a href="http://schema.org/" target="_blank">schema.org</a> metadata for search engine utility.</p>

							<div class="code__examples">
							<form><textarea class="pattern" id="type-code-4" name="code">
<address>
<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	<span itemprop="streetAddress">2600 Golf Course Drive <br></span>
	<span itemprop="addressLocality">San Diego</span>,
	<span itemprop="addressRegion">CA</span>
	<span itemprop="postalCode">92102</span>
</div>
<span itemprop="telephone">(619) 123-4567</span>
</address>	</textarea> </form> </div>
					</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>
<script type="text/javascript">
$( document ).ready(function() {
$(".tabs__bucket").removeClass("is-active");
$(".tabs-container div:first-child").addClass("is-active");
});
</script>