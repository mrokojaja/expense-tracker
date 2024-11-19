const forms = fx('form');
const loginForm = fx('#login-form');
const registerForm = fx('#register-form');

const btnToggleForm = fx('.toggle-form');

loginForm.formValidator.init({
	config: {
		useDefaultStyling: true
	}
}).attrib({initialized: true});

btnToggleForm.off().upon('click', function (e) {
	e.preventDefault();
	const currentForm = fx(e.currentTarget).parents('form');
	const nextForm = fx(fx(e.currentTarget).dataAttrib('target'));
	currentForm.fadeout().then(() => nextForm.fadein().then(() => !nextForm.attrib('initialized') && nextForm.formValidator.init({config: {useDefaultStyling: true}}).attrib({initialized: true})));
});

forms.upon('submit', function (e) {
	e.preventDefault();
	const form = fx(e.currentTarget);
	console.log(form);
	form.handleFormSubmit({beforeSend: () => form.toggleFormSubmitButtonState(), handleError: true}).then(xhr => {
		const response = xhr.JSON;
		if (response.status === 308) {
			fx.modal({
				type: 'success',
				content: (response.message ?? 'Request Successful') + '<br>Please Wait...',
			});
			setTimeout(() => location.href = response.redirect, 2000);
		}
	}).catch(error => {
		console.log(error)
	});
})
