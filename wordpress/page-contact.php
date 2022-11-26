<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

<main class="main">

  <h1 class="sr-only">
    <?php the_title(); ?>
  </h1>

  <div class="container">
    <section class="adv  background contact-page">

      <ul class="contact-page__list" data-aos="fade-up">
        <li class="contact-page__item">
          <?php echo esc_attr(pll__('Телефон'))  ?>
          <a class="contact-page__link" href="tel:<?php the_field('phone_number', 7) ?>">
            <?php the_field('phone_number', 7) ?>
          </a>
        </li>

        <li class="contact-page__item">
          Email
          <a class="contact-page__link" href="mailto:<?php the_field('e_mail', 7) ?>">
            <?php the_field('e_mail', 7) ?>
          </a>
        </li>

        <li class="contact-page__item ">
          <?php echo esc_attr(pll__('Мессенджеры'))  ?>

          <span class="contact-page__messanger">
            <a class="contact-page__link" href="viber://chat?number=<?php the_field('phone_number', 7) ?>">
              <span class="sr-only">
                viber
              </span>

              <svg class="contact-page__icon">
                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#viber"></use>
              </svg>
            </a>
            <a class="contact-page__link" href="<?php the_field('telegram', 7) ?>">
              <span class="sr-only">
                telegram
              </span>

              <svg class="contact-page__icon">
                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram"></use>
              </svg>
            </a>
            <a class="contact-page__link" href="https://api.whatsapp.com/send?phone=<?php the_field('phone_number', 7) ?>">
              <span class="sr-only">
                whatsapp
              </span>

              <svg class="contact-page__icon">
                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#whatsapp"></use>
              </svg>
            </a>
          </span>
        </li>
      </ul>

      <div class="contact-form" data-aos="fade-ridht">
        <h2 data-aos="fade-up">
          <?php echo esc_attr(pll__('Свяжитесь с нами')) ?>
        </h2>

        <p data-aos="fade-up" data-aos-delay="300">
          <?php echo esc_attr(pll__('Мы готовы ответить на все ваши вопросы или сразу предложить вам объект, который вас заинтересует.'))  ?>
        </p>
        <div class="form" data-aos="fade-up">
          <?php echo do_shortcode('[cf7form cf7key="contact_ru"]'); ?>
        </div>
      </div>

    </section>
  </div>

</main>

<?php get_footer(); ?>