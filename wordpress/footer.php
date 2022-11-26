<footer class="footer">

  <div class="container">

    <div class="footer__inner">
      <a class="logo" href="<?php echo home_url(); ?>">
        <img src=" <?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>" alt="Arni Invest" width="150" height="35">
      </a>

      <div class="footer__wrapper">

        <?php
        wp_nav_menu([
          'menu'            => 'Main',
          'container'       => false,
          'menu_class'      => 'footer__list nav-list',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'depth'           => 0,
          'walker'          => '',
        ]);
        ?>

        <address class="address">

          <ul class="address__list">

            <li class="address__item address__item--phone">
              <span class="slogan ">
                <?php echo esc_attr(pll__('Телефон'))  ?>
              </span>
              <a class="address__text" rel="nofollow"  href="tel:<?php the_field('phone_number', 7) ?>">
                <?php the_field('phone_number', 7) ?>
              </a>
            </li>

            <li class="address__item address__item--location">
              <span class="slogan">
                <?php echo esc_attr(pll__('Локация'))  ?>
              </span>

              <a class="address__text" href="<?php the_field('address_link', 7) ?>" target="_blank" rel="nofollow">
                <?php the_field('address', 7) ?>
              </a>
            </li>
          </ul>
        </address>
      </div>
    </div>
  </div>

  <div class="footer__inner footer__inner--bottom">
    <div class="container">
      <div class="footer__rights">
        <ul class="footer__list">
          <li class="footer__item">
            <?php the_field('year', 7) ?>
          </li>

          <li class="footer__item">
            All rights Reserved
          </li>

          <li class="footer__item">
            &#169; Arni Invest
          </li>

        </ul>

        <ul class="footer__list messangers">
          <li class="footer__item">
            <a class="footer__link" href="viber://chat?number=<?php the_field('phone_number', 7) ?>" target="_blank" rel="nofollow">
              viber
            </a>
          </li>

          <li class="footer__item">
            <a class="footer__link" href="<?php the_field('telegram', 7) ?>" target="_blank" rel="nofollow">
              telegram
            </a>
          </li>
          <li class="footer__item">
            <a class="footer__link" href="https://api.whatsapp.com/send?phone=<?php the_field('phone_number', 7) ?>" target="_blank" rel="nofollow">
              Whatsapp
            </a>
          </li>

        </ul>
      </div>
    </div>
  </div>
</footer>
<div class="modal">


  <div class="modal__content modal__content--form" data-target="modal-form">

    <button class="modal__close" type="button" data-close="modal">
      <span class="sr-only">
        Show/hide text
      </span>

      <svg class="icon ">
        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#plus-circle"></use>
      </svg>
    </button>

    <p>
      <?php echo esc_attr(pll__('Мы готовы ответить на все ваши вопросы или сразу предложить вам объект, который вас заинтересует.')) ?>
    </p>

    <div class="form">
      <?php echo do_shortcode('[cf7form cf7key="contact_ru_modal"]'); ?>
    </div>
  </div>
  
  <div class="modal__content modal__content--finish" data-target="modal-finish">

    <button class="modal__close" type="button" data-close="modal">
      <span class="sr-only">
        Show/hide text
      </span>

      <svg class="icon ">
        <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#plus-circle"></use>
      </svg>
    </button>

    <p>
      <?php echo esc_attr(pll__('Заголовок (попап)')) ?>
    </p>

    <p>
      <?php echo esc_attr(pll__('Текст (попап)')) ?>
    </p>

    <button class="btn" type="button" data-close="modal">
      <?php echo esc_attr(pll__('Текст кнопки вернутся на главную (попап)')) ?>
    </button>

  </div>
</div>
</div>
<?php wp_footer(); ?>

</body>