<div class="popup-back" id="popUp">

	<div class="popupClose">
		<i class="icon-close"></i>
	</div>

	<div class="popup-wrapper">
		<span class="h2">
			What are you looking for?
		</span>
		<form id="contact-us-form" action="#" method='post'>
			<label for="email">
				Email
				<input class="form_control" type="email" name="email" id="email" placeholder="email" required>
			</label>

			<label for="phone-number">
				Phone number
				<input type="tel" class="form_control" name="phone-number" id="phone-number" placeholder="Phone number" required>
			</label>

			<label for="describe">
				what are you looking for
				<textarea name="describe" class="form_control" id="describe" cols=" 30" rows="10" placeholder="Describe"></textarea>
			</label>

			<!-- <label for="agreement"
				   class="flex-row">
				<input type="checkbox"
					   name="agreement"
					   id="agreement"
					   value="true"
					   checked>
				I want you to inform me about new products and new offers
			</label> -->

			<div class="cf-turnstile" data-sitekey="0x4AAAAAAAduRsbVAHyEFDb5" data-callback="javascriptCallback"></div>

			<button type="submit" id="contact-us-form-submit" class="btn bg_secondary1">
				send
				<i class="icon-Component-2-1"></i>
			</button>
		</form>
	</div>

</div>