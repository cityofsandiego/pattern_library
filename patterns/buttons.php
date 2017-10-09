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

                <h1>Buttons</h1>
				<div class="sub__nav--library">
				    <ul class="sub__nav">
				        <li><a href="#primary">Primary Button</a></li>
				        <li><a href="#modifiers">Button Modifiers</a></li>
				        <li><a href="#buttons">Button Variations</a></li>
				        <li><a href="#size">Size Variations</a></li>
				        <li><a href="#border">Border Variations</a></li>
				        <li><a href="#width">Width Variations</a></li>
				        <li><a href="#directional">Directional Variations</a></li>
				        <li><a href="#icon">Button with Icon Variations</a></li>
				        <li><a href="#messaging">Messaging Variations</a></li>
				    </ul>
				</div>

				<h2 id="primary">Primary Button</h2>	
				<p>Primary button is created by adding the <strong>.btn</strong> class to the &lt;a&gt; tag. By default, <strong>.btn</strong> applies styling from <strong>.btn--primary</strong>, so adding <strong>.btn--primary</strong> is optional.</p>			
				<div class="row l-margin-bm">
					<div class="six columns">
						<p><a class="btn" href="#">Primary</a></p>
						
						<div class="row">
							<div class="six columns l-padding-ln">
								<a class="btn btn--primary l-margin-vs" href="#">Primary with Wrapping Content</a>
							</div>
						</div>
					</div>
					<div class="six columns">
						<div class="code__examples">
							<form><textarea class="pattern" id="default-code" name="code">
<a class="btn" href="#">Primary</a>
<a class="btn bnt--primary" href="#">Primary</a></textarea></form>
						</div>
					</div>
				</div>
				
				<h2 id="modifiers">Button Modifiers</h2>
				<p class="l-margin-bm">The primary button can be modified by adding additional classes to <strong>.btn</strong>.</p>
				
				<h3 id="buttons">Button Variations</h3>

				<div class="row l-margin-vm">
					<div class="six columns">
						<a class="btn btn--secondary l-margin-vs" href="#">Secondary</a><br>
						<a class="btn btn--tertiary l-margin-vs" href="#">Tertiary</a><br>
						<a class="btn btn--outline l-margin-vs" href="#">Outline</a>
					</div>
					<div class="six columns">
					
					
						<div class="code__examples">
							<form><textarea class="pattern" id="buttons-code" name="code">
<a class="btn btn--secondary" href="#">Secondary</a>
<a class="btn btn--tertiary" href="#">Tertiary</a>
<a class="btn btn--outline" href="#">Outline</a></textarea> </form> </div>						

					</div>
				</div>
						
				<h3 id="size">Size Variations</h3>
						
				<div class="row l-margin-vm">
					<div class="six columns">
						<a class="btn btn--xs l-margin-vs" href="#">Extra Small</a>
						<a class="btn btn--sm l-margin-vs" href="#">Small</a>
						<a class="btn btn--md l-margin-vs" href="#">Medium</a>
						<a class="btn l-margin-vs" href="#">Default</a>
						<a class="btn btn--lg l-margin-vs" href="#">Large</a>
						<a class="btn btn--xl l-margin-vs" href="#">Extra Large</a>
					</div>
					<div class="six columns">
					
					
						<div class="code__examples">
                            <form><textarea class="pattern" id="size-code" name="code">
<a class="btn btn--xs" href="#">Extra Small</a> <!-- 55% -->
<a class="btn btn--sm" href="#">Small</a> <!-- 70% -->
<a class="btn btn--md" href="#">Medium</a> <!-- 85% -->
<a class="btn" href="#">Default</a> <!-- 100% -->
<a class="btn btn--lg" href="#">Large</a> <!-- 115% -->
<a class="btn btn--xl" href="#">Extra Large</a> <!-- 130% --></textarea></form> </div>

								
					</div>
				</div>
						
				<h3 id="border">Border Variations</h3>

				<div class="row l-margin-vm">
					<div class="six columns">
						<a class="btn btn--oval l-margin-vs" href="#">Pill Button</a><br>
						<a class="btn btn--pill-left l-margin-vs" href="#">Pill Left</a>
						<a class="btn btn--pill-right l-margin-vs" href="#">Pill Right</a>
					</div>
					<div class="six columns">

						<div class="code__examples">
							<form><textarea class="pattern" id="border-code" name="code">
<a class="btn btn--oval" href="#">Pill Button</a>
<a class="btn btn--pill-left" href="#">Pill Left</a>
<a class="btn btn--pill-right" href="#">Pill Right</a></textarea> </form> </div>
					</div>
				</div>
				
				<h3 id="width">Width Variations</strong></h3>
						
				<div class="row l-margin-vm">
					<div class="six columns">
						<p><a class="btn btn--wide" href="#">Wide</a></p>
						<p><a class="btn btn--half" href="#">Half</a></p>
						<p><a class="btn btn--third" href="#">Third</a></p>
					</div>
					<div class="six columns">
					
						<div class="code__examples l-margin-bd">
							<form><textarea class="pattern" id="width-code" name="code">
<a class="btn btn--wide" href="#">Wide</a>
<a class="btn btn--half" href="#">Half</a>
<a class="btn btn--third" href="#">Third</a></textarea> </form> </div>

						<p>Button width is dependent on parent div's width.</p>
						<ul>
							<li>Wide takes up 100% of the parent div's width.</li>
							<li>Half takes up 50% of the parent div's width.</li>
							<li>Third takes up 33.3% of the parent div's width.</li>
						</ul>
            		</div>


				</div>
				
				<h3 id="directional">Directional Variations</h3>

				<div class="row l-padding-vm">
					<div class="six columns">
						<a class="btn btn--icon-left l-margin-vs" href="#"><i class="icon-chevron-left"></i>Previous</a>
						<a class="btn btn--icon-right l-margin-vs" href="#">Next<i class="icon-chevron-right"></i></a>
					</div>
					<div class="six columns">

						<div class="code__examples">
							<form><textarea class="pattern" id="directional-code" name="code">
<a class="btn btn--icon-left" href="#"><i class="icon-arrow-left"></i>Previous</a>
<a class="btn btn--icon-right" href="#">Next<i class="icon-arrow-right"></i></a></textarea> </form> </div>
					</div>
				</div>
	            
				<h3 id="icon">Button with Icon Variations</h3>

				<div class="row l-padding-vm">
					<div class="six columns">
						<a class="btn--icon btn--half btn btn--primary btn--icon-right l-margin-vs" href="#"><i class="icon-user"></i> Icon Button <i class="icon-chevron-right"></i></a><br>
						<a class="btn--icon btn--half btn btn--secondary l-margin-vs" href="#"><i class="icon-sun"></i> Icon Button</a><br>
						<a class="btn--icon btn--half btn btn--tertiary btn--icon-right l-margin-vs" href="#"><i class="icon-vimeo"></i> Icon Button <i class="icon-chevron-right"></i></a><br>
						<a class="btn--icon btn--half btn btn--outline btn--icon-left l-margin-vs" href="#"><i class="icon-chevron-left"></i> Icon Button <i class="icon-twitter icon--heavy"></i></a>
						<a class="btn--half btn btn--outline l-margin-vs" href="#"><i class="icon-play"></i> Icon Button</a>
						<a class="btn--half btn btn--outline l-margin-vs" href="#"><i class="icon-play icon--heavy"></i> Icon Button</a>
					</div>
					<div class="six columns">
						
						<div class="code__examples l-margin-bd">
							<form><textarea class="pattern" id="icon-code" name="code">
<a class="btn btn--icon btn--primary btn--icon-right" href="#"><i class="icon-user"></i> Icon Button <i class="icon-chevron-right"></i></a>
<a class="btn btn--icon btn--secondary" href="#"><i class="icon-sun"></i> Icon Button</a>
<a class="btn btn--icon btn--tertiary btn--icon-right" href="#"><i class="icon-vimeo"></i> Icon Button <i class="icon-chevron-right"></i></a>
<a class="btn btn--icon btn--outline btn--icon-left" href="#"><i class="icon-chevron-left"></i> Icon Button <i class="icon-twitter icon--heavy"></i></a>
<a class="btn btn--outline" href="#"><i class="icon-play"></i> Icon Button</a>
<a class="btn btn--outline" href="#"><i class="icon-play icon--heavy"></i> Icon Button</a></textarea> </form> </div>
						<p>Icons are placed on the left side of button. Exception: An icon can be placed on the right side if the button has a left chevron arrow on the left side.<p>
						<p><em>Class descriptions</em></p>
						<p><strong>.btn--icon</strong>: aligns text to left</p>
						<p><strong>.btn--icon-left, .btn--icon-right</strong>: required if adding chevron arrows</p>
						<p><strong>.icon--heavy</strong>: icon class that puts the icon in a blue circle (outline buttons only)</p>
			
					</div>								
						
				</div>
				
				<h3 id="messaging">Messaging Variations</h3>

				<div class="row l-padding-vm">
					<div class="six columns">
						<a class="btn btn--success l-margin-vs" href="#">Success</a><br>
						<a class="btn btn--warning l-margin-vs" href="#">Warning</a><br>
						<a class="btn btn--error l-margin-vs" href="#">Error</a><br>
						<a class="btn btn--disabled l-margin-vs" href="#">Disabled</a>
					</div>
					<div class="six columns">

						<div class="code__examples l-margin-bd">
							<form><textarea class="pattern" id="messaging-code" name="code">
<a class="btn btn--success" href="#">Success</a>
<a class="btn btn--warning" href="#">Warning</a>
<a class="btn btn--error" href="#">Error</a>
<a class="btn btn--disabled" href="#">Disabled</a></textarea> </form> </div>
<p class="l-margin-bn l-margin-td"><em>Colors</em></p>
<ul>
<li>Success - default: #659f13, hover: #48710e</li>
<li>Warning - default: #e28327, hover: #bd6a19</li>
<li>Error - default: #c51313, hover: #960f0f</li>
</ul>
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