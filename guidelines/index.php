<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/header.php' ); ?>

        <div class="l-constrained row patterns background-white l-padding-mobile-hd">
            <aside>
                <div class="three columns">
                    <?php require_once( ABSPATH . PARTIALS . '/patterns-nav.php' ); ?>
                </div>
            </aside>
            <div class="nine columns l-padding-bl">
                <h1>Guidelines</h1>

				<div class="sub__nav--library">
				    <ul class="sub__nav">
				    	<li><a href="#browsers">Browser Support</a></li>
				    	<li><a href="#links">Links</a></li>
				        <li><a href="#images">Images</a></li>
				    </ul>
				</div>
				
				<div id="browsers" class="l-container">
					<h2>Browser Support</h2>
					<p>Websites and web applications need to be compatible with the following web browsers (current and previous versions unless noted otherwise):</p>
					<ul>
						<li>Microsoft Edge</li>
						<li>Google Chrome (desktop and Android)</li>
						<li>Mozilla Firefox</li>
						<li>Apple Safari (macOS and iOS)</li>
					</ul>
					<p><strong>NOTE:</strong> Microsoft Internet Explorer is NOT supported (as of June 15, 2022).</p>
				</div>
				
				
				<div id="links" class="l-container">
					<h2>Links</h2>

					<p class="subheading">Descriptive Text</p>

					<p> Link text must be descriptive of the target content.</p>
					
					<div class="border rounded-corners l-padding-ad">
					
						<p><a href="">Read more about the Mayor's State of the City Address</a><br>
<a href="">Watch the Mayor's State of the City Address video</a></p>
						<div class="code__examples">
							<form>
								<textarea class="pattern" id="link-code-1" name="code">
<a href="">Read more about the Mayor's State of the City Address</a>
<a href="">Watch the Mayor's State of the City Address video</a></textarea>
							</form>
						</div>				

					</div>							
					
					<p>Shortened link text, like "Read more" or "Watch Video", can be achieved by hiding the descriptive text with the "visuallyhidden" helper class. This ensures that the descriptive text is still readable by screen readers.</p>
					
					<div class="border rounded-corners l-padding-ad">
						<p><a href="">Read more<span class="visuallyhidden"> about the Mayor's State of the City Address</span></a><br>
<a href="">Watch<span class="visuallyhidden"> the Mayor's State of the City Address</span> video</a></p>

						<div class="row l-margin-bd">
							<div class="two columns l-padding-desktop-ln">
								<p><i class="icon-cross-circle icon--md l-margin-rs" style="color:#c51313"></i> Incorrect</p>
							</div>
							<div class="ten columns l-padding-desktop-rn">
								<div class="code__examples">
											<form>
												<textarea class="pattern" id="link-code-2" name="code">
<a href="">Read more</a>
<a href="">Watch video</a></textarea>
											</form>
								</div>
							</div>
						</div>
						<div class="row l-margin-bd">
							<div class="two columns l-padding-desktop-ln">
								<p><i class="icon-checkmark-circle icon--md l-margin-rs" style="color:#007b69"></i> Correct</p>
							</div>
							<div class="ten columns l-padding-desktop-rn">
								<div class="code__examples">
											<form>
												<textarea class="pattern" id="link-code-3" name="code">
<a href="">Read more<span class="visuallyhidden"> about the Mayor's State of the City Address</span></a>
<a href="">Watch<span class="visuallyhidden"> the Mayor's State of the City Address</span> video</a></textarea>
											</form>
								</div>
							</div>
						</div>
					</div>
					<p class="subheading">Internal Links</p>

					<p>Internal links, or links that point to another www.sandiego.gov page, must open in the same tab to maintain a favorable user experience since opening links in a new tab prevents users from using the Back button to return to the previous page.</p>
					
					<p class="subheading">External Links</p>

					<p>Links to external sites must be denoted with this icon: <span class="ext"></span>. The icon is placed immediately after the link. The text "(link is external)" must be appended to the link text but hidden by the "visuallyhidden" helper class. The external site must open in a new browser tab or window.</p>

					<p>Note: this link behavior is automatically handled by Drupal.</p>
					
					<div class="border rounded-corners l-padding-ad">
						<p><a href="" class="ext extlink" target="_blank">USA.gov <span class="ext"><span class="visuallyhidden"> (link is external)</span></span></a></p>
						
						<div class="code__examples">
							<form>
								<textarea class="pattern" id="ext-link-code-1" name="code">
<a href="https://www.usa.gov" class="ext extlink" target="_blank">USA.gov <span class="ext"><span class="visuallyhidden"> (link is external)</span></span></a></textarea>
							</form>
						</div>
					</div>
					
					<p class="subheading">Links to Images</p>

					<p>Links should not directly target images. Developers should embed the image within an HTML document so that alternative text can be provided for the images.</p>
					
					
				</div>
				
				<div id="images" class="l-container">
					<h2>Images</h2>
					
					<p class="subheading">Content-related Images</p>
					
					<p>Content-related images must be part of the HTML, not in the CSS as a background image.</p>

					<p class="subheading">Alternative Text</p>

					<p><strong><em>For content-related images,</em></strong> alternative text must be provided through the alt attribute of the &lt;img&gt; tag.<br><a href="https://webaim.org/techniques/alttext/">Tips on how to write effective alternative text (WebAIM) <span class="ext"><span class="visuallyhidden">(link is external)</span></span></a></p>
					
					<div class="code__examples l-margin-bd">
                                    <form><textarea class="pattern" id="alt-text-code-1" name="code">
<img src="mayor.jpg" alt="The mayor speaks at the State of the City Address in Balboa Theatre."></textarea> </form> </div>

					<p><strong><em>For decorative images (not important to the content),</em></strong> an empty alt attribute must be included. Doing so will cause screen readers to completely skip over the image. If the alt attribute is omitted instead, screen readers will read the filename, which could cause confusion to those using the screen reader.</p>
					
					<div class="code__examples l-margin-bd">
                                    <form><textarea class="pattern" id="alt-text-code-2" name="code">
<img src="decoration.jpg" alt=""></textarea> </form> </div>
					
					<p><strong><em>For images used as links,</em></strong> the alternative text must describe the linked website or the action caused by clicking the link.</p>
					
					<div class="code__examples l-margin-bd">
                                    <form><textarea class="pattern" id="alt-text-code-3" name="code">
<a href="https://www.sandiego.gov"><img src="san-diego-logo.jpg" alt="City of San Diego Website Home Page"></a>
<a href="#" onclick="closePopup();"><img src="x.jpg" alt="Close the popup window"></a></textarea> </form> </div>

					<p class="subheading">Image Properties</p>
					
					<p><strong>Default Aspect Ratio:</strong> 16:9</p>
					<p><strong>File formats:</strong> jpg, png, gif</p>
					<p><strong>Minimum DPI:</strong> 72</p>
					
				</div>
            </div> <!-- Nine columns -->
        </div> <!-- row -->
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>