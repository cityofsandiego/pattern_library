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

				<div class="l-container l-margin-vm">

					<form class="user-info-from-cookie contact-form" action="/drupal_51997/?q=contacts" method="post" id="contact-site-form" accept-charset="UTF-8" empowered="1" novalidate="novalidate">
						<div>

							<div class="form-item form-type-textfield form-item-name">
								<label for="edit-name" original-title="" data-title="Enter your name here">Your name <span class="form-required" title="This field is required.">*</span></label>
								<input type="text" id="edit-name" name="name" value="" size="60" maxlength="255" class="form-text required error" data-error="1">
								<div class="messages error">This field is required!</div>
							</div>

							<div class="form-item form-type-textfield form-item-mail">
								<label for="edit-mail" original-title="" data-title="Enter your contact Email here">Your e-mail address <span class="form-required" title="This field is required.">*</span></label>
								<input type="text" id="edit-mail" name="mail" value="" size="60" maxlength="255" class="form-text required">
								<div class="messages error">This field is required!<br>Please enter a valid email address!</div>
							</div>

							<div class="form-item form-type-textfield form-item-subject">
								<label for="edit-subject" original-title="" data-title="Enter the subject of your message here">Subject <span class="form-required" title="This field is required.">*</span></label>
								<input type="text" id="edit-subject" name="subject" value="" size="60" maxlength="255" class="form-text required">
								<div class="messages error">This field is required!</div>
							</div>

							<div class="form-item form-type-textarea form-item-message">
								<label for="edit-message" original-title="" data-title="Enter your message here">Message <span class="form-required" title="This field is required.">*</span></label>
								<div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
									<textarea id="edit-message" name="message" cols="60" rows="5" class="form-textarea required"></textarea><div class="grippie"></div><div class="messages error">This field is required!</div>
								</div>
							</div>

							<input type="hidden" name="form_build_id" value="form-CMfXRs6eUo0EHsImgQNVktOisI_oN9jlXDqaBS5Y8wU">
							<input type="hidden" name="form_id" value="contact_site_form">

							<div class="form-actions form-wrapper" id="edit-actions">
								<input type="submit" id="edit-submit" name="op" value="Send message" class="form-submit disabled">
							</div>

						</div>
					</form>

				</div>

				<div class="l-container">
				    <h2>Search</h2>

					<div class="row l-margin-bd">
						<div class="four columns no-gutters">
							<form action="" method="post" id="search-block-form" class="form__search" accept-charset="UTF-8">
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
									<form action="" method="post" id="search-block-form" class="form__search" accept-charset="UTF-8">
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

				<div class="l-container l-margin-vm">
					<h2>I Want To...</h2>
					<div class="row">
						<div class="three columns">
							1. I need to...
						</div>
						<div class="three columns">
							2. I want to reserve:
						</div>
						<div class="six columns">
							3. Reservation requirements:

							<p>Advance Reservations may be booked from 8 to 90 days in advance of the date of play. (based on availability)</p>
							<a href="" class="btn">Book Tee Time Now</a>
						</div>
					</div>
				</div>

				<div class="l-container">
				    <h2>Comments</h2>
				    <p><em>Will a 3rd party plugin be used?</em></p>
				    <h2>Newsletter Signup</h2>
				    <p><em>No newsletter form in design</em></p>
				    <h2>Login</h2>
				</div>

            </div>
        </div>
        

<?php
require_once( ABSPATH . PARTIALS . '/footer.php' ); ?>