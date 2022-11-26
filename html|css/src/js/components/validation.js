import vars from '../_vars'
import intlTelInput from 'intl-tel-input'
import utils from '../vendor/utils'

const modalClose = Array.from(vars.$closeModal)
const checkboxForms = Array.from(
	document.querySelectorAll('.wpcf7-list-item-label+input')
)
const formsSubmit = Array.from(document.querySelectorAll('.form__btn'))

if (document.querySelector('.contact-form')) {
	const iti = intlTelInput(document.querySelector('.form__phone.form__area'), {
		preferredCountries: ['ua'],
		utilsScript: 'utils',
	})
}

const itiModal = intlTelInput(
	document.querySelector('[data-name=phome-mob] .form__area'),
	{
		preferredCountries: ['ua'],
		utilsScript: 'utils',
	}
)

if (modalClose.length > 0) {
	modalClose.forEach(element => {
		element.addEventListener('click', () => {
			document.querySelector('.modal').classList.remove('modal--open')
			document.querySelectorAll('.modal__content').forEach(element => {
				element.classList.remove('modal__content--open')
			})
		})
	})
}

if (checkboxForms.length > 0) {
	checkboxForms.forEach(element => {
		element.addEventListener('click', () => {
			if (element.checked) {
				element.previousElementSibling.classList.add('checked')
			} else {
				element.previousElementSibling.classList.remove('checked')
			}
		})
	})
}

document
	.querySelector('.header__list .btn')
	.addEventListener('click', function (e) {
		let btnPath = e.currentTarget.getAttribute('data-path')
		document
			.querySelector(`[data-target="${btnPath}"]`)
			.classList.add('modal__content--open')

		document.querySelector('.modal').classList.add('modal--open')

		if (e.currentTarget.getAttribute('data-path') === 'modal-finish') {
			document
				.querySelector('[data-target=modal-form]')
				.classList.remove('modal__content--open')
		}
	})

document.addEventListener(
	'wpcf7mailsent',
	function (event) {
		document.querySelector('.modal').classList.add('modal--open')
		document
			.querySelector(`[data-target="modal-finish"]`)
			.classList.add('modal__content--open')
		document
			.querySelector('[data-target=modal-form]')
			.classList.remove('modal__content--open')

		checkboxForms.forEach(element => {
			if (element.checked) {
				element.previousElementSibling.classList.remove('checked')
			}
		})
	},
	false
)
