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
				<div class="sub__nav--wrap">
				    <ul class="sub__nav">
				        <li>Search</li>
				        <li>Comment Form</li>
				        <li>Newsletter Signup</li>
				        <li>I Want To</li>
				        <li>Login</li>
				    </ul>
				</div>

				<!-- General -->
				<div class="l-container l-margin-vm background-off-white border border--dark l-padding-ad border-radius form--general">
					<h3 class="l-margin-tn text-center">General Sign Up</h3>
					<form class="user-info-from-cookie contact-form" action="/drupal_51997/?q=contacts" method="post" id="contact-site-form" accept-charset="UTF-8" empowered="1" novalidate="novalidate">
						<div>

							<div class="row">
								<div class="form-item six columns form-type-textfield form-item-fname">
									<label for="edit-fname" original-title="" data-title="Enter your name here">First name <span class="form-required" title="This field is required.">*</span></label>
									<input type="text" id="edit-fname" name="fname" value="" size="60" maxlength="255" class="form-text required error" data-error="1" placeholder="First name">
									<!-- <div class="messages error">This field is required!</div> -->
								</div>

								<div class="form-item six columns form-type-textfield form-item-lname">
									<label for="edit-lname" original-title="" data-title="Enter your name here">Last name <span class="form-required" title="This field is required.">*</span></label>
									<input type="text" id="edit-lname" name="lname" value="" size="60" maxlength="255" class="form-text required error" data-error="1" placeholder="Last name">
									<!-- <div class="messages error">This field is required!</div> -->
								</div>
							</div>

							<div class="row">
								<div class="form-item six columns form-type-textfield form-item-mail">
									<label for="edit-mail" original-title="" data-title="Enter your contact Email here">Your e-mail address <span class="form-required" title="This field is required.">*</span></label>
									<input type="text" id="edit-mail" name="mail" value="" size="60" maxlength="255" class="form-text required" placeholder="Email">
									<!-- <div class="messages error">This field is required!<br>Please enter a valid email address!</div> -->
								</div>

								<div class="form-item six columns form-type-textfield form-item-number">
									<label for="edit-phone" original-title="" data-title="Enter your phone number">Phone number <span class="form-required" title="This field is required.">*</span></label>
									<input type="text" id="edit-number" name="number" value="" size="60" maxlength="255" class="form-text required" placeholder="Phone number">
									<!-- <div class="messages error">This field is required!</div> -->
								</div>
							</div>

							<input type="hidden" name="form_build_id" value="form-CMfXRs6eUo0EHsImgQNVktOisI_oN9jlXDqaBS5Y8wU">
							<input type="hidden" name="form_id" value="contact_site_form">

							<div class="form-actions form-wrapper" id="edit-actions">
								<input type="submit" id="edit-submit" name="op" value="Submit Request" class="form-submit disabled btn btn--secondary btn--lg">
							</div>

						</div>
					</form>

				</div>

				<!-- Search -->
				<div class="l-container">
				    <h2>Search</h2>

					<div class="row l-margin-bd">
						<div class="four columns no-gutters">
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

					<div class="l-container">
						<p class=""><em>Within header element:</em></p>
						<header class="l-padding-hd">
							<div class="row">
								<div class="four columns">
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
						</header>
					</div>

				</div>

				<!-- I Want to... -->
				<div class="l-container l-margin-vm">
					<h2>I Want To...</h2>
					<div class="row form__steps">
						<div class="three columns form__step">
							<div class="border l-padding-ad">
								<p class="form__step--header">1. I need to...</p>
								<form action="">
									<input type="radio" name="task" value="payment">Make a Payment<br>
									<input type="radio" name="task" value="status">Check Status<br>
									<input type="radio" name="task" value="issue">Report an Issue
								</form>
							</div>
						</div>
						<div class="three columns form__step">
							<div class="border l-padding-ad text-center">
								<p class="form__step--header">2. Payment:</p>
								<div class="l-padding-vd">
									<select>
									  <option value="parking">A Parking Ticket</option>
									  <option value="electric">Electric Bill</option>
									  <option value="tax">Property Tax</option>
									</select>
								</div>
							</div>
						</div>
						<div class="six columns form__step">
							<div class="border l-padding-ad">
								<p class="form__step--header">3. Pay Your Ticket:</p>
								<div class="form__step--info">
									<div class="row">
										<div class="eight columns">
											<p>Advance Reservations may be booked from 8 to 90 days in advance of the date of play. (based on availability)</p>
										</div>
										<div class="four columns">
											<a href="" class="btn">Pay Ticket Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- Comments -->
				<div class="l-container l-margin-vm">
					<h2>Comments</h2>

					<div class="l-padding-vd background-off-white">
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
										<p class=""><i class="lnr lnr-star"></i> <strong>12</strong></p>
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
				<div class="l-container l-margin-vm">
					<h2>Newsletter Signup</h2>
				    <p><em>No newsletter form in design</em></p>

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

				<div class="l-container">
				    <h2>Login</h2>
				    <p><em>Dropdown, modal, or new page?</em></p>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>