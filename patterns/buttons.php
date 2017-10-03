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
				<!--<div class="sub__nav--library">
				    <ul class="sub__nav">
				        <li><a href="#buttons">Buttons</a></li>
				    </ul>
				</div>-->

				<div id="buttons" class="l-container l-margin-vm">
				<h2>Main Buttons</h2>
						<div class="row l-padding-vd">
							<div class="six columns">
								<a class="btn btn--primary l-margin-vs" href="#">Primary</a>
								<a class="btn btn--secondary l-margin-vs" href="#">Secondary</a>
								<a class="btn btn--tertiary l-margin-vs" href="#">Tertiary</a>
								<a class="btn btn--outline l-margin-vs" href="#">Outline</a>
								<div class="row l-margin-td">
									<div class="six columns">
										<a class="btn btn--primary l-margin-vs" href="#">Primary with Wrapping Content</a>
									</div>
								</div>
							</div>
							<div class="six columns">
							
							
						<div id="buttons-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#buttons-tab-item-1">Notes</a></li>
								<li class="tabs-list__item"><a class="tabs-list__link" href="#buttons-tab-item-2">Code</a></li>
							</ul>

							<div class="tabs-container">

								<div id="buttons-tab-item-1" class="tabs__bucket is-active">
									<p>Numerous <strong>.btn</strong> modifiers allow styling of buttons. Use helper classes to apply variations to the main button styles. Blue button is default (<strong>btn--primary</strong>).</p>
            					</div>

								<div id="buttons-tab-item-2" class="tabs__bucket is-active">
									<div class="code__examples">
                                	<form><textarea class="pattern" id="buttons-code" name="code">
<a class="btn btn--primary" href="#">Primary</a>
<a class="btn btn--secondary" href="#">Secondary</a>
<a class="btn btn--tertiary" href="#">Tertiary</a>
<a class="btn btn--outline" href="#">Outline</a></textarea> </form> </div>
            					</div>

							</div>

						</div>							

							</div>
						</div>
						
						<div class="row l-padding-vm">
						<h2>Button Variations</h2>
							<div class="six columns">
								<a class="btn btn--xs l-margin-vs" href="#">Extra Small</a>
								<a class="btn btn--sm l-margin-vs" href="#">Small</a>
								<a class="btn btn--md l-margin-vs" href="#">Medium</a>
								<a class="btn btn--lg l-margin-vs" href="#">Large</a>
								<a class="btn btn--xl l-margin-vs" href="#">Extra Large</a>
							</div>
							<div class="six columns">
								<p><strong>Size variations</strong></p>

								
					<div class="row l-margin-vd">
					
					
						<div id="button-size-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#button-size-tab-item-1">Notes</a></li>
								<li class="tabs-list__item"><a class="tabs-list__link" href="#button-size-tab-item-2">Code</a></li>
							</ul>

							<div class="tabs-container">

								<div id="button-size-tab-item-1" class="tabs__bucket is-active">
									<p>Default size for home page buttons is Large (<strong>btn--lg</strong>).</p>
            					</div>

								<div id="button-size-tab-item-2" class="tabs__bucket is-active">
									<div class="code__examples">
                                	<form><textarea class="pattern" id="size-code" name="code">
<a class="btn btn--xs" href="#">Extra Small</a>
<a class="btn btn--sm" href="#">Small</a>
<a class="btn btn--md" href="#">Medium</a>
<a class="btn btn--lg" href="#">Large</a>
<a class="btn btn--xl" href="#">Extra Large</a></textarea> </form> </div>
            					</div>

							</div>

						</div>
					
					</div>
								
							</div>
						</div>

						<div class="row l-padding-vm">
							<div class="six columns">
								<a class="btn btn--round l-margin-vs" href="#">Rounded Corners</a>
								<a class="btn btn--oval l-margin-vs" href="#">Pill Button</a>
								<a class="btn btn--pill-right l-margin-vs" href="#">Pill Right</a>
								<a class="btn btn--pill-left l-margin-vs" href="#">Pill Left</a>
							</div>
							<div class="six columns">
								<p><strong>Border variations</strong></p>

								<div class="code__examples">
                                	<form><textarea class="pattern" id="border-code" name="code">
<a class="btn btn--round" href="#">Rounded Corners</a>
<a class="btn btn--oval" href="#">Pill Button</a>
<a class="btn btn--pill-right" href="#">Pill Right</a>
<a class="btn btn--pill-left" href="#">Pill Left</a> </textarea> </form> </div>
							</div>
						</div>
						
						<div class="row l-padding-vd">
							<div class="six columns">
								<p><a class="btn btn--wide" href="#">Wide</a></p>
								<p><a class="btn btn--half" href="#">Half</a></p>
								<p><a class="btn btn--third" href="#">Third</a></p>
							</div>
							<div class="six columns">
								<p><strong>Width variations</strong></p>

					<div class="row l-margin-vd">
					
					
						<div id="btn-width-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#btn-width-tab-item-1">Notes</a></li>
								<li class="tabs-list__item"><a class="tabs-list__link" href="#btn-width-tab-item-2">Code</a></li>
							</ul>

							<div class="tabs-container">

								<div id="btn-width-tab-item-1" class="tabs__bucket is-active">
									<p>Button width is dependent on parent div's width.</p>
									<ul>
										<li>Wide takes up 100% of the parent div's width.</li>
										<li>Half takes up 50% of the parent div's width.</li>
										<li>Third takes up 33.3% of the parent div's width.</li>
									</ul>
            					</div>

								<div id="btn-width-tab-item-2" class="tabs__bucket is-active">
									<div class="code__examples">
                                	<form><textarea class="pattern" id="width-code" name="code">
<a class="btn btn--wide" href="#">Wide</a>
<a class="btn btn--half" href="#">Half</a>
<a class="btn btn--third" href="#">Third</a></textarea> </form> </div>
            					</div>

							</div>

						</div>
					
					</div>
								
								
								
							</div>
						</div>

						<div class="row l-padding-vd">
							<div class="six columns">
								<a class="btn btn--icon-left l-margin-vs" href="#"><i class="icon-chevron-left"></i>Previous</a>
								<a class="btn btn--icon-right l-margin-vs" href="#">Next<i class="icon-chevron-right"></i></a>
							</div>
							<div class="six columns">
								<p><strong>Directional variations</strong></p>

								<div class="code__examples">
                                	<form><textarea class="pattern" id="directional-code" name="code">
<a class="btn btn--icon-left" href="#"><i class="icon-arrow-left"></i>Previous</a>
<a class="btn btn--icon-right" href="#">Next<i class="icon-arrow-right"></i></a></textarea> </form> </div>
							</div>
						</div>

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
	                            <p><strong>Button with Icon variations</strong></p>
								
					<div class="row l-margin-vd">
					
					
						<div id="buttons-icons-tabs" class="tabs">
						
							<ul class="tabs-list js-tabs-list">
								<li class="tabs-list__item is-active"><a class="tabs-list__link" href="#button-icons-tab-item-1">Notes</a></li>
								<li class="tabs-list__item"><a class="tabs-list__link" href="#button-icons-tab-item-2">Code</a></li>
							</ul>

							<div class="tabs-container">

								<div id="button-icons-tab-item-1" class="tabs__bucket is-active">
									<p>Icons are placed on the left side of button. Exception: An icon can be placed on the right side if the button has a left chevron arrow on the left side.<p>
									<p>Class explanations</p>
									<p><strong>.btn--icon</strong>: aligns text to left</p>
									<p><strong>.btn--icon-left, .btn--icon-right</strong>: required if adding chevron arrows</p>
									<p><strong>.icon--heavy</strong>: puts the icon in a blue circle in outline buttons only</p>
	                            
            					</div>

								<div id="button-icons-tab-item-2" class="tabs__bucket is-active">
									<div class="code__examples">
										<form><textarea class="pattern" id="icon-code" name="code">
<a class="btn btn--icon btn--primary btn--icon-right" href="#"><i class="icon-user"></i> Icon Button <i class="icon-chevron-right"></i></a><br>
<a class="btn btn--icon btn--secondary" href="#"><i class="icon-sun"></i> Icon Button</a><br>
<a class="btn btn--icon btn--tertiary btn--icon-right" href="#"><i class="icon-vimeo"></i> Icon Button <i class="icon-chevron-right"></i></a><br>
<a class="btn btn--icon btn--outline btn--icon-left" href="#"><i class="icon-chevron-left"></i> Icon Button <i class="icon-twitter icon--heavy"></i></a>
<a class="btn btn--outline" href="#"><i class="icon-play"></i> Icon Button</a>
<a class="btn btn--outline" href="#"><i class="icon-play icon--heavy"></i> Icon Button</a></textarea> </form> </div>
            					</div>

							</div>

						</div>
					
					</div>								
								
							</div>

						</div>

						<div class="row l-padding-vd">
							<div class="six columns">
								<a class="btn btn--success l-margin-vs" href="#">Success</a><br>
								<a class="btn btn--warning l-margin-vs" href="#">Warning</a><br>
								<a class="btn btn--error l-margin-vs" href="#">Error</a><br>
								<a class="btn btn--disabled l-margin-vs" href="#">Disabled</a>
							</div>
							<div class="six columns">
								<p><strong>Messaging variations</strong></p>

								<div class="code__examples">
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