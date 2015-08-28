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
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Byline</li>
				        <li>Address</li>
				        <li>Heading Group</li>
				        <li>Blockquote w/ Citation</li>
				        <li>Intro Text</li>
				    </ul>
				</div>

				<div class="l-container l-margin-tm">
					<p>We're utilizing Google Fonts sitewide; <a href="https://www.google.com/fonts/specimen/Merriweather" target="_blank">Merriweather</a> for headline text, and <a href="https://www.google.com/fonts/specimen/Open+Sans" target="_blank">Open Sans</a> for body copy.</p>
				</div>

				<div class="l-container l-margin-vm">
				    <h2>Byline</h2>
				    <div class="post__meta">
                        <span class="post__date">23 July 2015</span>
                        |
                        <span class="post__author"><a href="">by Name Lastname</a></span>
                    </div>
				</div>

				<div class="l-container l-margin-vm">
				    <h2>Address</h2>
				    <address>
						<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
							<span itemprop="streetAddress">2600 Golf Course Drive <br></span>
							<span itemprop="addressLocality">San Diego</span>,
							<span itemprop="addressRegion">CA</span>
							<span itemprop="postalCode">92102</span>
						</div>
						<span itemprop="telephone">(619) 123-4567</span>
				    </address>

				    <div class="l-container l-margin-vm">
					    <h2>Headings</h2>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h1 class="l-margin-an">Main Headline</h1>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">36px / 47px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h2 class="l-margin-an">Sub Headline</h2>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">27px / 35px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">600 / Bold</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h3 class="l-margin-an">Section Headline</h3>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">24px / 31px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<h4 class="l-margin-an">Section Sub Headline</h4>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">16px / 21px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">600 / Bold</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<p class="l-margin-an subheading">Card or Teaser Title</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">20px / 30px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
					    <div class="row border border--bottom l-padding-ts">
					    	<div class="six columns">
					    		<p class="l-margin-an">General body copy</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray"> 16px / 24px</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
					    <div class="row">
					    	<div class="six columns">
					    		<p class="l-margin-an">Button text / Meta text</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">Font size/line height</p>
					    	</div>
					    	<div class="three columns">
					    		<p class="text-gray">400 / Normal</p>
					    	</div>
					    </div>
				    </div>


				    <div class="l-container l-margin-vm">
				    	<div class="row">
				    		<div class="twelve columns">
				    			<h2>Blockquotes</h2>
				    			<blockquote>With its great weather, miles of sandy beaches, and major attractions, San Diego is known worldwide as one of the best tourist destinations and a great place for residents to relax year round. <span class="author">Mayor Kevin Faulconer</span></blockquote>
				    		</div>
				    	</div>
				    </div>

				    <div class="l-container l-margin-vm">
				    	<div class="row">
				    		<div class="twelve columns">
				    			<h2>Intro</h2>
				    			<p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house. The Pro Shop offers golf merchandise for sale and the rental of clubs, hand and power golf carts. The Professional Golf instruction staff offers group and individual golf lessons.</p>
				    		</div>
				    	</div>
				    	<div class="row l-margin-vd">
				    		<div class="six columns">
				    			<p class="subheading">Sub Section</p>
				    			<p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house. The Pro Shop offers golf merchandise for sale and the rental of clubs, hand and power golf carts. The Professional Golf instruction staff offers group and individual golf lessons.</p>
				    		</div>
				    		<div class="six columns">
				    			<p class="subheading">Sub Section</p>
				    			<p>We are the closest golf course to downtown San Diego. Conveniently located near Route 94 and Interstate 5 freeways. Facilities include an 18-hole golf course and a 9-hole executive golf course, driving range, practice putting greens, coffee shop and half-way house. The Pro Shop offers golf merchandise for sale and the rental of clubs, hand and power golf carts. The Professional Golf instruction staff offers group and individual golf lessons.</p>
				    		</div>
				    	</div>
				    </div>

				    <div class="l-container l-margin-vm">
				    	<h2>Buttons</h2>
						<div class="row l-padding-vd">
							<a class="btn btn--primary" href="#">Primary</a>
							<a class="btn btn--secondary" href="#">Secondary</a>
							<a class="btn btn--tertiary" href="#">Tertiary</a>
							<a class="btn btn--outline" href="#">Outline</a>
						</div>
						<div class="row">
							<a class="btn btn--primary" href="#"><i class="icon-dribbble"></i> Icon Button <i class="icon-arrow-right"></i></a>
							<a class="btn btn--secondary" href="#"><i class="icon-flickr"></i> Icon Button</a>
							<a class="btn btn--tertiary" href="#"><i class="icon-vimeo"></i> Icon Button <i class="icon-arrow-right"></i></a>
						</div>
						<div class="row l-padding-vd">
							<a class="btn btn--xs" href="#">Extra Small</a>
							<a class="btn btn--sm" href="#">Small</a>
							<a class="btn btn--md" href="#">Medium</a>
							<a class="btn btn--lg" href="#">Large</a>
							<a class="btn btn--xl" href="#">Extra Large</a>
						</div>
						<div class="row l-padding-vd">
							<a class="btn btn--round" href="#">Rounded Corners</a>
							<a class="btn btn--oval" href="#">Pill Button</a>
							<a class="btn btn--pill-right" href="#">Pill Right</a>
							<a class="btn btn--pill-left" href="#">Pill Left</a>
						</div>
						<div class="row l-padding-vd">
							<p><a class="btn btn--wide" href="#">Wide</a></p>
							<p><a class="btn btn--half" href="#">Half</a></p>
							<p><a class="btn btn--third" href="#">Third</a></p>
						</div>
						<div class="row l-padding-vd">
							<a class="btn btn--icon-left" href="#"><i class="icon-arrow-left"></i>Previous</a>
							<a class="btn btn--icon-right" href="#">Next<i class="icon-arrow-right"></i></a>
						</div>
						<div class="row l-padding-vd">
							<a class="btn btn--success" href="#">Success</a>
							<a class="btn btn--warning" href="#">Warning</a>
							<a class="btn btn--error" href="#">Error</a>
						</div>
						<div class="row l-padding-vd">
							<a class="btn btn--disabled" href="#">Disabled</a>
						</div>
				    </div>

				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>