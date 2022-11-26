const filterFaq = Array.from(document.querySelectorAll('.filter__btn'));;
const faqBlockContent = Array.from(document.querySelectorAll('.faq__tab'));
let filterTab = [];

if (faqBlockContent.length > 0) {
  faqBlockContent.forEach((el, i) => {
    if (el.dataset.faq === undefined || filterTab.includes(el.dataset.faq)) return false;
    filterTab.push(el.dataset.faq);
    console.log(el.dataset.faq === undefined);

  });

  if (filterTab.length > 0) {
    document.querySelector('.filter').insertAdjacentHTML('afterbegin', '<li class="filter__item"><button class="filter__link filter__link--active filter__btn tag-cloud-link" type="button"data-filter="all">все</button></li>');

  }
}

filterTab.forEach((element) => {

  if (element === undefined) return;

  document.querySelector('.filter').innerHTML += '<li class="filter__item"><button class="filter__link filter__btn tag-cloud-link" type="button"  data-filter="' + element + '" > ' + element + ' </button></li>';

  document.querySelectorAll('.faq__tab').forEach(element => {
    element.classList.add('faq__tab--open');
  });

});

window.addEventListener("click", (e) => {
  if (filterTab.length > 0) {

    let btnPath = e.target.getAttribute('data-filter');
    if (e.target.hasAttribute('data-filter')) {
      document.querySelectorAll('.filter__link').forEach(element => {
        element.classList.remove('filter__link--active');
      });
    }

    if (e.target.hasAttribute('data-filter')) {
      e.target.classList.add('filter__link--active');
      Array.from(document.querySelectorAll(".faq__tab")).forEach(element => {
        element.classList.remove('faq__tab--open');
      });

      document.querySelectorAll(`[data-faq="${btnPath}"]`).forEach(element => {
        element.classList.add('faq__tab--open');
      });

    }
    if (e.target.dataset.filter === "all") {
      document.querySelectorAll('.faq__tab').forEach(element => {
        element.classList.add('faq__tab--open');
      });
    }
  }
})