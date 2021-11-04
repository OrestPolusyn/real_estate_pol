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

vars.$headerBtnModal.addEventListener('click', function (e) {
  let btnPath = e.currentTarget.getAttribute('data-path');

  document.querySelector(`[data-target="${btnPath}"]`).classList.add('modal__content--open');

  document.querySelector('.modal').classList.add('modal--open');

  if (e.currentTarget.getAttribute('data-path') === 'modal-finish') {
    document.querySelector('[data-target=modal-form]').classList.remove('modal__content--open');
  }
});

vars.$formSend.addEventListener('submit', function (e) {
  e.preventDefault();

  if (vars.$formName.value.length === 0) {
    document.querySelector('[data-target="name"]').parentNode.classList.add('error');
  } else {
    document.querySelector('[data-target="name"]').parentNode.classList.remove('error');
  };

  if (!vars.$formEmail.value.includes("@")) {
    document.querySelector('[data-target="email"]').parentNode.classList.add('error');
  } else {
    document.querySelector('[data-target="email"]').parentNode.classList.remove('error');
  };

  if (!iti.isValidNumber()) {
    document.querySelector(`[data-target="tel"]`).parentNode.classList.add('error');
  } else {
    document.querySelector(`[data-target="tel"]`).parentNode.classList.remove('error');
  };

  if (!vars.$formCheck.checked) {
    document.querySelector('[data-target="ckeck"]').parentNode.classList.add('error');
  } else {
    document.querySelector('[data-target="ckeck"]').parentNode.classList.remove('error');
  };

  if (vars.$formName.value.length > 0 && iti.isValidNumber() && vars.$formCheck.checked && vars.$formEmail.value.includes("@")) {
    openModal(e);
  } else {
    return false;
  };
});

vars.$formSendModal.addEventListener('submit', function (e) {
  e.preventDefault();

  if (vars.$formNameModal.value.length === 0) {
    document.querySelector('.modal [data-target="name"]').parentNode.classList.add('error');
  } else {
    console.log('elsr');
    document.querySelector('.modal [data-target="name"]').parentNode.classList.remove('error');
  }

  if (!itiModal.isValidNumber()) {
    document.querySelector(`[data-target="tel-mob"]`).parentNode.classList.add('error');
  } else {
    document.querySelector(`[data-target="tel-mob"]`).parentNode.classList.remove('error');
  }
  if (!vars.$formCheckModal.checked) {
    document.querySelector('.modal [data-target="ckeck"]').parentNode.classList.add('error');
  } else {
    document.querySelector('.modal [data-target="ckeck"]').parentNode.classList.remove('error');
  };

  if (vars.$formNameModal.value.length > 0 && itiModal.isValidNumber() && vars.$formCheckModal.checked) {
    openModal(e);
  } else {
    return false;
  };
});


function openModal(e) {
  let btnPath = e.submitter.getAttribute('data-path');

  document.querySelector(`[data-target="${btnPath}"]`).classList.add('modal__content--open');

  document.querySelector('.modal').classList.add('modal--open');

  if (e.submitter.getAttribute('data-path') === 'modal-finish') {
    document.querySelector('[data-target=modal-form]').classList.remove('modal__content--open');
  };
  e.target.reset();
};