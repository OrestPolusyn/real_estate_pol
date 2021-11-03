import vars from '../_vars';
import intlTelInput from 'intl-tel-input';
import utils from '../vendor/utils'

const formContact = Array.from(vars.$formSend),
  formName = Array.from(vars.$formName),
  formMail = Array.from(vars.$formEmail),
  formTel = Array.from(vars.$formTel),
  formCkeck = Array.from(vars.$formCheck),
  modalClose = Array.from(vars.$closeModal),
  openModalsBtn = Array.from(vars.$openModals);

formTel.forEach(element => {
  const iti = intlTelInput(element, {
    preferredCountries: ["ua"],
    utilsScript: "utils",
  });
});

if (modalClose.length > 0) {
  modalClose.forEach(element => {
    element.addEventListener('click', () => {
      document.querySelector('.modal').classList.remove('modal--open');
      document.querySelectorAll('.modal__content').forEach(element => {
        element.classList.remove('modal__content--open');
      });
    });
  });
};

if (openModalsBtn.length > 0) {
  openModalsBtn.forEach(item => {
    item.addEventListener('click', function (e) {

      let btnPath = e.currentTarget.getAttribute('data-path');

      document.querySelector(`[data-target="${btnPath}"]`).classList.add('modal__content--open');

      document.querySelector('.modal').classList.add('modal--open');

      if (e.currentTarget.getAttribute('data-path') === 'modal-finish') {
        document.querySelector('[data-target=modal-form]').classList.remove('modal__content--open');
      }
    });
  });
};

if (formContact.length > 0) {

  formContact.forEach(item => {
    item.addEventListener('submit', function (e) {
      e.preventDefault();

    });
  });
}


// if (formInputs.length > 0) {

//   const iti = intlTelInput(document.querySelector('#phone'), {
//     preferredCountries:["ua"],
//     utilsScript: "utils",
//   });

//   // formSend.forEach(element => {
//   //   element.addEventListener('submit', function (e) {
//   //     e.preventDefault();

//   //     if (vars.$formName.value.length === 0) {
//   //       vars.$formName.classList.add('error');
//   //     } else {
//   //       vars.$formName.classList.remove('error');
//   //     }

//   //     if (!vars.$formEmail.value.includes('@')) {
//   //       vars.$formEmail.classList.add('error');

//   //     } else {
//   //       vars.$formEmail.classList.remove('error');
//   //     }

//   //     if (!iti.isValidNumber()) {
//   //       vars.$formPhoneLabel.classList.add('error');
//   //     } else {
//   //       vars.$formPhoneLabel.classList.remove('error');
//   //     }

//   //     if (!vars.$inputCheked.checked) {
//   //       vars.$inputCheked.classList.add('error');
//   //     } else {
//   //       vars.$inputCheked.classList.remove('error');
//   //     }
//   //   })
//   // });
// };


// vars.$formTel.addEventListener('countrychange', function () {
//   vars.$formTel.value = "";
// });