import vars from '../_vars';
import intlTelInput from 'intl-tel-input';
import utils from '../vendor/utils'

const formName = Array.from(vars.$formName),
  formMail = Array.from(vars.$formEmail),
  formTel = Array.from(vars.$formTel),
  formCkeck = Array.from(vars.$formCheck),
  modalClose = Array.from(vars.$closeModal),
  openModalsBtn = Array.from(vars.$openModals);


const iti = intlTelInput(vars.$formTel, {
  preferredCountries: ["ua"],
  utilsScript: "utils",
});

const itiModal = intlTelInput(vars.$formTelModal, {
  preferredCountries: ["ua"],
  utilsScript: "utils",
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

if (openModalsBtn) {
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

vars.$formSend.addEventListener('submit', function (e) {
  e.preventDefault();

  if (!iti.isValidNumber()) {
    document.querySelector(`[data-target="tel"]`).parentNode.classList.add('error');
  } else {
    document.querySelector(`[data-target="tel"]`).parentNode.classList.remove('error');
  }
});


vars.$formSendModal.addEventListener('submit', function (e) {
  e.preventDefault();

  if (!itiModal.isValidNumber()) {
    document.querySelector(`[data-target="tel-mob"]`).parentNode.classList.add('error');
  } else {
    document.querySelector(`[data-target="tel-mob"]`).parentNode.classList.remove('error');
  }
});