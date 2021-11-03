import vars from '../_vars';
import intlTelInput from 'intl-tel-input';
import utils from '../vendor/utils'

const formInputs = Array.from(vars.$formInputs),
  formSend = Array.from(vars.$formSend);


if (formInputs.length > 0) {

  const iti = intlTelInput(document.querySelector('#phone'), {
    preferredCountries:["ua"],
    utilsScript: "utils",
  });

  formSend.forEach(element => {
    element.addEventListener('submit', function (e) {
      e.preventDefault();

      if (vars.$formName.value.length === 0) {
        vars.$formName.classList.add('error');
      } else {
        vars.$formName.classList.remove('error');
      }

      if (!vars.$formEmail.value.includes('@')) {
        vars.$formEmail.classList.add('error');

      } else {
        vars.$formEmail.classList.remove('error');
      }

      if (!iti.isValidNumber()) {
        vars.$formPhoneLabel.classList.add('error');
      } else {
        vars.$formPhoneLabel.classList.remove('error');
      }

      if (!vars.$inputCheked.checked) {
        vars.$inputCheked.classList.add('error');
      } else {
        vars.$inputCheked.classList.remove('error');
      }
    })
  });
};

vars.$formPhone.addEventListener('countrychange', function () {
  vars.$formPhone.value = "";
});

