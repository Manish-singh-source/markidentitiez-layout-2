(function ($) {
	"use strict";

	// Get the form.
	var form = $('#contact-form');

	// Get the messages div.
	var formMessages = $('.ajax-response');

	// Set up an event listener for the contact form.
	$(form).on("submit", function(e) {
		// Stop the browser from submitting the form.
		e.preventDefault();

		var submitButton = $(form).find('button[type="submit"]');
		var buttonHtml = submitButton.html();
		var formData = new FormData(form[0]);

		submitButton.prop('disabled', true).addClass('is-loading');
		submitButton.html('<span><span class="text-1">Submitting...</span><span class="text-2">Submitting...</span></span>');
		$(formMessages).removeClass('success error').text('');

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData,
			processData: false,
			contentType: false,
			dataType: 'json'
		})
		.done(function(response) {
			if (response.redirect) {
				window.location.href = response.redirect;
				return;
			}

			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			$(formMessages).text(response.message || 'Your message has been sent successfully.');

			// Clear the form.
			$('#contact-form input,#contact-form textarea,#contact-form select').val('');
			submitButton.prop('disabled', false).removeClass('is-loading').html(buttonHtml);
		})
		.fail(function(data) {
			submitButton.prop('disabled', false).removeClass('is-loading').html(buttonHtml);

			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseJSON && data.responseJSON.message) {
				$(formMessages).text(data.responseJSON.message);
			} else if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
		});
	});

})(jQuery);
