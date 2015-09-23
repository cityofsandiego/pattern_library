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

                <h1>Forms</h1>
				<div class="sub__nav--library">
				    <ul class="sub__nav">
				    	<li><a href="#general">General Sign Up</a></li>
				        <li><a href="#search">Search</a></li>
				        <li><a href="#i-want-to">I Want To...</a></li>
				        <li><a href="#comments">Comments</a></li>
				        <li><a href="#newsletter">Newsletter Signup</a></li>
				        <li><a href="#login">Login</a></li>
				    </ul>
				</div>

				<!-- General -->
				<div id="general" class="l-container l-margin-vm">
					<div class="row">
						<div class="twelve columns">
							<div class="background-off-white border border--dark l-padding-ad border-radius form--general">
								<div class="twelve columns">
									<h3 class="l-margin-tn text-center">General Sign Up</h3>
								</div>
								<form class="" action="" method="post" id="" accept-charset="UTF-8" novalidate="novalidate">
									<fieldset>
										<div class="row">
											<div class="twelve columns l-margin-bd">
												<legend>General Sign Up Form</legend>
												<p class="fine-print text-right text-pom"><em>Required</em> <span class="form-required" title="This field is required.">*</span></p>
											</div>
											<div class="form-item six columns form-type-textfield form-item-fname">
												<label for="edit-fname" original-title="" data-title="Enter your name here">First name <span class="form-required" title="This field is required.">*</span></label>
												<input type="text" id="" name="fname" value="" size="60" maxlength="255" class="form-text required error" data-error="1" placeholder="First name">
												<!-- <div class="messages error">This field is required!</div> -->
											</div>

											<div class="form-item six columns form-type-textfield form-item-lname">
												<label for="edit-lname" original-title="" data-title="Enter your name here">Last name <span class="form-required" title="This field is required.">*</span></label>
												<input type="text" id="" name="lname" value="" size="60" maxlength="255" class="form-text required error" data-error="1" placeholder="Last name">
												<!-- <div class="messages error">This field is required!</div> -->
											</div>
										</div>

										<div class="row">
											<div class="form-item six columns form-type-textfield form-item-mail">
												<label for="edit-mail" original-title="" data-title="Enter your contact Email here">Your e-mail address <span class="form-required" title="This field is required.">*</span></label>
												<input type="text" id="" name="mail" value="" size="60" maxlength="255" class="form-text required" placeholder="Email">
												<!-- <div class="messages error">This field is required!<br>Please enter a valid email address!</div> -->
											</div>

											<div class="form-item six columns form-type-textfield form-item-number">
												<label for="edit-phone" original-title="" data-title="Enter your phone number">Phone number <span class="form-required" title="This field is required.">*</span></label>
												<input type="text" id="" name="number" value="" size="60" maxlength="255" class="form-text required" placeholder="Phone number">
												<!-- <div class="messages error">This field is required!</div> -->
											</div>
										</div>

										<div class="row">
											<div class="form-item twelve columns form-type-textarea">
												<label for="edit-mail" original-title="" data-title="Comments">Comments</label>
												<textarea name="message" id="" cols="30" rows="10"></textarea>
												<!-- <div class="messages error">This field is required!<br>Please enter a valid email address!</div> -->
											</div>
										</div>

										<div class="row">
											<div class="form-item four columns form-type-radio">
												<div class="grouped fields">
													<p>Radio buttons: <span class="form-required" title="This field is required.">*</span></p>
											        <div class="field">
											          <div class="radio checkbox">
											            <input type="radio" name="activity" checked="" tabindex="0" class="">
											            <label>Parks</label>
											          </div>
											        </div>
											        <div class="field">
											          <div class="radio checkbox">
											            <input type="radio" name="activity" tabindex="0" class="">
											            <label>Beach</label>
											          </div>
											        </div>
											        <div class="field">
											          <div class="radio checkbox">
											            <input type="radio" name="activity" tabindex="0" class="">
											            <label>Nightlife</label>
											          </div>
											        </div>
											        <div class="field">
											          <div class="radio checkbox">
											            <input type="radio" name="activity" tabindex="0" class="">
											            <label>Vacation</label>
											          </div>
											        </div>
										      </div>
											</div>

											<div class="form-item four columns">
												<p>Checkboxes:</p>
												<div class="field">
											        <div class="checkbox">
											          <input type="checkbox" tabindex="0" class="">
											          <label>Option 1</label>
											        </div>
											    </div>
											    <div class="field">
											        <div class="checkbox">
											          <input type="checkbox" tabindex="0" class="">
											          <label>Option 2</label>
											        </div>
											    </div>
											    <div class="field">
											        <div class="checkbox">
											          <input type="checkbox" tabindex="0" class="">
											          <label>Option 3</label>
											        </div>
											    </div>
											    <div class="field">
											        <div class="checkbox">
											          <input type="checkbox" tabindex="0" class="">
											          <label>Option 4</label>
											        </div>
											    </div>
											</div>

											<div class="form-item four columns">
												<p>Select dropdown:</p>
												<div class="field">
											        <select>
											          <option value="">Select One</option>
											          <option value="0">Option 1</option>
											          <option value="1">Option 2</option>
											          <option value="2">Option 3</option>
											          <option value="3">Option 4</option>
											        </select>
											    </div>
											</div>
										</div>

										<input type="hidden" name="form_build_id" value="">
										<input type="hidden" name="form_id" value="contact_site_form">

										<div class="row l-margin-td form-actions form-wrapper" id="">
											<input type="submit" id="" name="op" value="Submit Request" class="form-submit disabled btn btn--secondary btn--lg">
										</div>
									</fieldset>
								</form>
							</div>
						</div>
						<div class="twelve columns">
							<div class="code__examples">
                                <form><textarea class="pattern" id="form-code-1" name="code">
<div class="background-off-white border border--dark l-padding-ad border-radius form--general">
	<div class="twelve columns">
		<h3 class="l-margin-tn text-center">General Sign Up</h3>
	</div>
	<form class="" action="" method="post" id="" accept-charset="UTF-8" novalidate="novalidate">
		<fieldset>
			<div class="row">
				<div class="twelve columns l-margin-bd">
					<legend>General Sign Up Form</legend>
					<p class="fine-print text-right text-pom"><em>Required</em> <span class="form-required" title="This field is required.">*</span></p>
				</div>
				<div class="form-item six columns form-type-textfield form-item-fname">
					<label for="edit-fname" original-title="" data-title="Enter your name here">First name <span class="form-required" title="This field is required.">*</span></label>
					<input type="text" id="" name="fname" value="" size="60" maxlength="255" class="form-text required error" data-error="1" placeholder="First name">
					<!-- <div class="messages error">This field is required!</div> -->
				</div>

				<div class="form-item six columns form-type-textfield form-item-lname">
					<label for="edit-lname" original-title="" data-title="Enter your name here">Last name <span class="form-required" title="This field is required.">*</span></label>
					<input type="text" id="" name="lname" value="" size="60" maxlength="255" class="form-text required error" data-error="1" placeholder="Last name">
					<!-- <div class="messages error">This field is required!</div> -->
				</div>
			</div>

			<div class="row">
				<div class="form-item six columns form-type-textfield form-item-mail">
					<label for="edit-mail" original-title="" data-title="Enter your contact Email here">Your e-mail address <span class="form-required" title="This field is required.">*</span></label>
					<input type="text" id="" name="mail" value="" size="60" maxlength="255" class="form-text required" placeholder="Email">
					<!-- <div class="messages error">This field is required!<br>Please enter a valid email address!</div> -->
				</div>

				<div class="form-item six columns form-type-textfield form-item-number">
					<label for="edit-phone" original-title="" data-title="Enter your phone number">Phone number <span class="form-required" title="This field is required.">*</span></label>
					<input type="text" id="" name="number" value="" size="60" maxlength="255" class="form-text required" placeholder="Phone number">
					<!-- <div class="messages error">This field is required!</div> -->
				</div>
			</div>

			<div class="row">
				<div class="form-item twelve columns form-type-textarea">
					<label for="edit-mail" original-title="" data-title="Comments">Comments</label>
					<textarea name="message" id="" cols="30" rows="10">Comments</ textarea>
				</div>
			</div>

			<div class="row">
				<div class="form-item four columns form-type-radio">
					<div class="grouped fields">
						<p>Radio buttons: <span class="form-required" title="This field is required.">*</span></p>
				        <div class="field">
				          <div class="radio checkbox">
				            <input type="radio" name="activity" checked="" tabindex="0" class="">
				            <label>Parks</label>
				          </div>
				        </div>
				        <div class="field">
				          <div class="radio checkbox">
				            <input type="radio" name="activity" tabindex="0" class="">
				            <label>Beach</label>
				          </div>
				        </div>
				        <div class="field">
				          <div class="radio checkbox">
				            <input type="radio" name="activity" tabindex="0" class="">
				            <label>Nightlife</label>
				          </div>
				        </div>
				        <div class="field">
				          <div class="radio checkbox">
				            <input type="radio" name="activity" tabindex="0" class="">
				            <label>Vacation</label>
				          </div>
				        </div>
			      </div>
				</div>

				<div class="form-item four columns">
					<p>Checkboxes:</p>
					<div class="field">
				        <div class="checkbox">
				          <input type="checkbox" tabindex="0" class="">
				          <label>Option 1</label>
				        </div>
				    </div>
				    <div class="field">
				        <div class="checkbox">
				          <input type="checkbox" tabindex="0" class="">
				          <label>Option 2</label>
				        </div>
				    </div>
				    <div class="field">
				        <div class="checkbox">
				          <input type="checkbox" tabindex="0" class="">
				          <label>Option 3</label>
				        </div>
				    </div>
				    <div class="field">
				        <div class="checkbox">
				          <input type="checkbox" tabindex="0" class="">
				          <label>Option 4</label>
				        </div>
				    </div>
				</div>

				<div class="form-item four columns">
					<p>Select dropdown:</p>
					<div class="field">
				        <select>
				          <option value="">Select One</option>
				          <option value="0">Option 1</option>
				          <option value="1">Option 2</option>
				          <option value="2">Option 3</option>
				          <option value="3">Option 4</option>
				        </select>
				    </div>
				</div>
			</div>

			<input type="hidden" name="form_build_id" value="">
			<input type="hidden" name="form_id" value="contact_site_form">

			<div class="row l-margin-td form-actions form-wrapper" id="">
				<input type="submit" id="" name="op" value="Submit Request" class="form-submit disabled btn btn--secondary btn--lg">
			</div>
		</fieldset>
	</form>
</div></textarea> </form> </div>
						</div>
					</div>


				</div>

				<!-- Search -->
				<div id="search" class="l-container">
				    <h2>Search</h2>

					<div class="row l-margin-bd">
						<div class="four columns">
							<div class="l-padding-ad l-margin-td">
								<form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
							    	<div><div class="container-inline">
										<h2 class="visuallyhidden">Search form</h2>
								    	<div class="form-item form-type-textfield form-item-search-block-form">
								  			<label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
								 			<input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="I need to..." size="15" maxlength="128" class="form-text">
										</div>
										<div class="form-actions form-wrapper" id="edit-actions">
											<input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
										</div>
										<input type="hidden" name="form_build_id" value="">
										<input type="hidden" name="form_id" value="search_block_form">
									</div></div>
								</form>
							</div>
						</div>

						<div class="four columns">
							<p class="fine-print l-margin-vn"><em>Within header element:</em></p>
							<header class="l-padding-ad">
								<form action="" method="post" id="search-block-form" class="form--search" accept-charset="UTF-8">
							    	<div><div class="container-inline">
										<h2 class="visuallyhidden">Search form</h2>
								    	<div class="form-item form-type-textfield form-item-search-block-form">
								  			<label class="visuallyhidden" for="edit-search-block-form--2">Search</label>
								 			<input title="Enter the terms you wish to search for." type="search" id="search-block-form--2" name="search_block_form" value="" placeholder="I need to..." size="15" maxlength="128" class="form-text">
										</div>
										<div class="form-actions form-wrapper" id="edit-actions">
											<input type="submit" id="edit-submit" name="op" value="Search" class="form-submit">
										</div>
										<input type="hidden" name="form_build_id" value="">
										<input type="hidden" name="form_id" value="search_block_form">
									</div></div>
								</form>
							</header>
						</div>

						<div class="eight columns l-margin-tm">
							<p>Form code output may differ in Drupal; all search form styles extend from <strong>.form--search</strong> which is assigned to the &lt;form&gt; tag.</p>
						</div>
					</div>

				</div>

				<!-- I Want to... -->
				<div id="i-want-to" class="l-container l-margin-vm">
					<h2>I Want To...</h2>
					<div class="row form__steps l-margin-tm">
						<div class="three columns form__step">
							<form action="">
								<fieldset>
									<legend class="form__step--header"><span class="icon--circle">1</span> I need to...</legend>
									<div class="field">
							          <div class="radio checkbox">
							            <input type="radio" name="activity" checked="" tabindex="0" class="">
							            <label>Make a Payment</label>
							          </div>
							        </div>
							        <div class="field">
							          <div class="radio checkbox">
							            <input type="radio" name="activity" tabindex="0" class="">
							            <label>Check Status</label>
							          </div>
							        </div>
							        <div class="field">
							          <div class="radio checkbox">
							            <input type="radio" name="activity" tabindex="0" class="">
							            <label>Report an Issue</label>
							          </div>
							        </div>
								</fieldset>
							</form>
						</div>
						<div class="three columns form__step">
							<div class="">
								<form action="">
									<fieldset>
										<legend class="form__step--header"><span class="icon--circle">2</span> Payment:</legend>
										<div class="field l-margin-desktop-td">
									        <select>
									          <option value="">Select One</option>
									          <option value="0">Option 1</option>
									          <option value="1">Option 2</option>
									          <option value="2">Option 3</option>
									          <option value="3">Option 4</option>
									        </select>
									    </div>
									</fieldset>
								</form>
							</div>
						</div>
						<div class="six columns form__step">
							<div class="form__step--info">
								<form action="">
									<fieldset>
										<legend class="form__step--header"><span class="icon--circle">3</span> Pay Your Ticket:</legend>
										<div class="row">
											<div class="seven columns">
												<p>Advance Reservations may be booked from 8 to 90 days in advance of the date of play. (based on availability)</p>
											</div>
											<div class="five columns">
												<a href="" class="btn">Pay Ticket Now</a>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Comments -->
				<div id="comments" class="l-container l-margin-vm">
					<h2>Comments</h2>

					<div class="l-padding-ad background-off-white">
						<div class="card card--comment row">
							<div class="one columns card__image text-center no-gutters">
								<img src="http://placehold.it/65x65">
							</div>
							<div class="eleven columns">
								<div class="card__meta row">
									<div class="six columns no-gutters comments">
										<p class=""><strong>15 Comments</strong></p>
									</div>
									<div class="six columns no-gutters favorites text-right">
										<p class=""><i class="icon-star"></i> <strong>12</strong></p>
									</div>
								</div>
								<div class="card__content">
									<form class="user-info-from-cookie form--comments" action="" method="post" id="" accept-charset="UTF-8" empowered="1" novalidate="novalidate">

										<div class="form-item form-type-textarea form-item-message">
											<label class="element-invisible" for="edit-message">Message <span class="form-required" title="This field is required.">*</span></label>
											<div class="form-textarea-wrapper textarea-processed">
												<textarea placeholder="Message" id="" name="message" cols="60" rows="3" class="form-textarea required error" data-error="1"></textarea>
												<div class="grippie"></div>
												<!-- <div class="error-message">This field is required!</div> -->
											</div>
										</div>

										<input type="hidden" name="form_build_id" value="">
										<input type="hidden" name="form_id" value="contact_site_form">

										<div class="form-actions form-wrapper" id="edit-actions">
											<input type="submit" id="" name="op" value="Leave Comment" class="form-submit disabled">
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Newsletter -->
				<div id="newsletter" class="l-container l-margin-vm">
					<h2>Newsletter Signup</h2>

					<div class="row l-margin-bd">
						<div class="six columns no-gutters background-off-white border border--dark l-padding-ad border-radius">
							<form action="" method="post" id="newsletter-block-form" class="form--newsletter" accept-charset="UTF-8">
								<div class="container-inline">
									<h2 class="visuallyhidden">Signup for Our Newsletter</h2>
									<div class="form-item form-type-textfield form-item-fname">
										<label for="edit-fname" original-title="" data-title="Enter your name here">First name <span class="form-required" title="This field is required.">*</span></label>
										<input type="text" id="edit-name" name="name" value="" size="60" maxlength="255" class="form-text required error" data-error="1" placeholder="Name">
										<!-- <div class="messages error">This field is required!</div> -->
									</div>

									<div class="form-item form-type-textfield form-item-mail">
										<label for="edit-mail" original-title="" data-title="Enter your contact Email here">Your e-mail address <span class="form-required" title="This field is required.">*</span></label>
										<input type="text" id="edit-mail" name="mail" value="" size="60" maxlength="255" class="form-text required" placeholder="Email">
										<!-- <div class="messages error">This field is required!<br>Please enter a valid email address!</div> -->
									</div>

									<div class="form-actions form-wrapper" id="edit-actions">
										<input type="submit" id="edit-submit" name="op" value="Signup" class="form-submit">
									</div>

									<input type="hidden" name="form_build_id" value="">
									<input type="hidden" name="form_id" value="newsletter_block_form">
								</div>
							</form>
						</div>
					</div>

				</div>

				<div id="login" class="l-container">
				    <h2>Login</h2>
				    <p><em>Dropdown, modal, or new page?</em></p>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>