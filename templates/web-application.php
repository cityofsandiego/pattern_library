<?php
require_once( '../config.php' );
require_once( ABSPATH . PARTIALS . '/application-header.php' ); ?>

<main>
<div class="l-padding-vm l-padding-hd background-white">
<div class="form--general">
	<div class="twelve columns">
		<h3 class="l-margin-tn">Heading</h3>
	</div>
	<form class="" action="#" method="post" id="" name="form-1" accept-charset="UTF-8" novalidate="novalidate">
		<div class="row">
			<div class="twelve columns l-margin-bd">
				<div class="message message--error">
			    	<p> <strong>Error!</strong> Please fill out missing fields below.</p>
				</div>
			</div>
			<div class="form-item six columns form-type-textfield form-item-fname">
				<div class="form-error">This field is required!</div>
				<label for="edit-fname" original-title="" data-title="Enter your name here">First name <span class="form-required" title="This field is required.">*</span></label>
				<input type="text" id="" name="fname" value="" size="60" maxlength="255" class="form-text required error" data-error="1" placeholder="First name">
				
			</div>

			<div class="form-item six columns form-type-textfield form-item-lname">
				<div class="form-error">This field is required!</div>
				<label for="edit-lname" original-title="" data-title="Enter your name here">Last name <span class="form-required" title="This field is required.">*</span></label>
				<input type="text" id="" name="lname" value="" size="60" maxlength="255" class="form-text required error" data-error="1" placeholder="Last name">
				
			</div>
		</div>

		<div class="row">
			<div class="form-item six columns form-type-textfield form-item-mail">
				<div class="form-error">This field is required!<br>Please enter a valid email address!</div>
				<label for="edit-mail" original-title="" data-title="Enter your contact Email here">Your e-mail address <span class="form-required" title="This field is required.">*</span></label>
				<input type="text" id="" name="mail" value="" size="60" maxlength="255" class="form-text required" placeholder="Email">
			</div>

			<div class="form-item six columns form-type-textfield form-item-number">

				<label for="edit-phone" original-title="" data-title="Enter your phone number">Phone number <span class="form-required" title="This field is required.">*</span></label>
				<input type="text" id="" name="number" value="" size="60" maxlength="255" class="form-text required" placeholder="Phone number">
			</div>
		</div>

		<div class="row">
			<div class="form-item twelve columns form-type-textarea">
				<label for="edit-mail" original-title="" data-title="Comments">Comments</label>
				<textarea name="message" id="" cols="30" rows="10"></textarea> <!-- Extra space in closing textarea tag is only added for example rendering. Ignore in actual code use. -->
			</div>
		</div>

		<div class="row">
			<div class="form-item four columns form-type-radio">
				<div class="grouped fields">
					<p>Radio buttons: <span class="form-required" title="This field is required.">*</span></p>
					<fieldset>
						<legend>Fieldset 1</legend>
				        <div class="field">
				          <div class="radio checkbox">
				            <label for="vacation">
				            <input type="radio" id="vacation" name="vacation" tabindex="0" class="">
				            Vacation</label>
				          </div>
				        </div>
				        <div class="field">
				          <div class="radio checkbox">
				            <label for="parks">
				            <input type="radio" id="parks" name="parks" checked="" tabindex="0" class="">
				            Parks</label>

				            <fieldset>
				            	<legend>Fieldset 2 (Nested)</legend>
				            	<div class="field">
						          <div class="radio checkbox">
						            <label for="beach">
						            <input type="radio" id="beach" name="beach" tabindex="0" class="">
						            Beach</label>
						          </div>
						        </div>
						        <div class="field">
						          <div class="radio checkbox">
						            <label for="nightlife">
						            <input type="radio" id="nightlife" name="nightlife" tabindex="0" class="">
						            Nightlife</label>
						          </div>
						        </div>
						    </fieldset>
				          </div>
				        </div>

					</fieldset>
		      </div>
			</div>

			<div class="form-item four columns">
				<p>Checkboxes: <span class="form-required" title="This field is required.">*</span></p>
	            <div class="field">
			        <div class="checkbox">
			          <label for="option-1">
			          <input type="checkbox" id="option-1" tabindex="0" class="">
			          Option 1</label>
			        </div>
			    </div>
			    <div class="field">
			        <div class="checkbox">
			          <label for="option-2">
			          <input type="checkbox" id="option-2" tabindex="0" class="">
			          Option 2</label>
			        </div>
			    </div>
			    <div class="field">
			        <div class="checkbox">
			          <label for="option-3">
			          <input type="checkbox" id="option-3" tabindex="0" class="">
			          Option 3</label>
			        </div>
			    </div>
			    <div class="field">
			        <div class="checkbox">
			          <label for="option-4">
			          <input type="checkbox" id="option-4" tabindex="0" class="">
			          Option 4</label>
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

		<div class="row l-margin-td form-actions form-wrapper l-padding-ld" id="">
			<input type="submit" id="" name="op" value="Submit Request" class="form-submit disabled btn btn--primary btn--md">
		</div>
	</form>
</div>
</div>
</main>

<?php
require_once( ABSPATH . PARTIALS . '/application-footer.php' ); ?>