import vars from '../_vars';
import intlTelInput from 'intl-tel-input';


const formInputs = Array.from(vars.$formInputs);



if (formInputs.length > 0) {

  const iti = intlTelInput(document.querySelector('#phone'), {
    onlyCountries: ["ua", "pl"]
  });

  vars.$formSend.addEventListener('submit', function (e) {
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

    var num = iti.getNumber(),
      valid = iti.isValidNumber();

    console.log(iti);
  })
}