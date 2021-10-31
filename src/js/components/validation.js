import vars from '../_vars';


const formInputs = Array.from(vars.$formInputs);

if (formInputs.length > 0) {

  vars.$formSend.addEventListener('submit', function (e) {
    e.preventDefault();

    if (vars.$formName.value.length === 0) {
      vars.$formName.classList.add('error');
    } else {
      vars.$formName.classList.remove('error');
    }

    console.log();

    if (!vars.$formEmail.value.includes('@')) {
      vars.$formEmail.classList.add('error');
    } else {
      vars.$formEmail.classList.remove('error');
    }

    if (vars.$formPhone.value.length === 0) {
      vars.$formPhone.classList.add('error');
    } else {
      vars.$formPhone.classList.remove('error');
    }

  })
}