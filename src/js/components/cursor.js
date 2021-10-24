import vars from '../_vars';
import gsap from "gsap";


if (vars.$serviseSlider) {
  vars.$serviseSlider.addEventListener('mouseover', () => {
    cursor();
  });

  function cursor() {
    const cursor = document.querySelector('.cursor');
    gsap.set(cursor, {
      xPercent: 50,
      yPercent: 50,
    });

    vars.$serviseSlider.addEventListener('pointermove', movecursor);

    vars.$serviseSlider.addEventListener('pointerout', movecursorEnd);

    vars.$serviseSlider.addEventListener('pointerdown', () => {
      vars.$cursorInner.classList.add('cursor-click--active');
    })

    vars.$serviseSlider.addEventListener('pointerup', () => {
      vars.$cursorInner.classList.remove('cursor-click--active');
    })

    function movecursor(e) {

      vars.$cursor.classList.add('visible');
      gsap.to(cursor, {
        duration: 0.5,
        x: e.clientX,
        y: e.clientY,
      });
    }

    function movecursorEnd(e) {
      vars.$cursor.classList.remove('visible');

      gsap.to(cursor, {
        duration: 0.5,
        x: e.clientX,
        y: e.clientY,
      });
    }
  }
}