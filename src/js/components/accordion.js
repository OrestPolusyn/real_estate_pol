const questions = document.querySelectorAll(".faq__tab");

questions.forEach((el) => {

  el.addEventListener("click", () => {
    questions.forEach((item) => {
      if (item !== el) {
        item.classList.remove("faq__tab--active");
      }
    });

    el.classList.toggle("faq__tab--active");
  });
});