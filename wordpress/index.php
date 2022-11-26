<?php
/*Template name:  Main*/
?>

<?php get_header(); ?>


<main class="main">
  <h1 class="sr-only">
    <?php the_field('home_main_title') ?>
  </h1>
  <div class="wrapper">

    <?php
    if (get_field('hide_block_slider') == 'Показать') : ?>
      <section class="story">
        <div class="swiper-pagination">
        </div>
        <ul class="story__list swiper-wrapper">
          <?php

          if (get_field('slide_first' . '_' . 'show_hide') == 'Показать') : ?>
            <li class="story__item banner banner--first swiper-slide">
              <div class="banner__content" data-aos="fade-up">

                <h2 data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_first' . '_' . 'heading'); ?>
                  <span>
                    <?php echo get_field('slide_first' . '_' . 'heading_add'); ?>
                  </span>
                </h2>

                <p data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_first' . '_' . 'text'); ?>
                </p>

              </div>

              <div class="banner__picture" data-swiper-animation="animate__fadeInUp" data-duration="1s">
                <img src="<?php echo get_field('slide_first' . '_' . 'image'); ?>" alt="sss" width="790" height="600">
              </div>

              <span class="banner__next" data-swiper-animation="animate__fadeInUp" data-duration="1s" data-delay="1s">
                <?php echo get_field('slide_first' . '_' . 'action'); ?>
              </span>
            </li>
          <?php endif; ?>
          <?php

          if (get_field('slide_second' . '_' . 'show_hide') == 'Показать') : ?>

            <li class="story__item banner swiper-slide">
              <div class="banner__content banner__list banner__list--colored">
                <h2 data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_second' . '_' . 'heading'); ?>
                </h2>

                <p data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_second' . '_' . 'text_f'); ?>
                </p>

                <p data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_second' . '_' . 'text_s'); ?>
                </p>

                <p data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_second' . '_' . 'text_t'); ?>
                </p>

                <p data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_second' . '_' . 'text_fr'); ?>
                </p>
              </div>

              <div class="banner__picture" data-swiper-animation="animate__fadeInRight" data-duration="2s" data-delay="1s">
                <img src=" <?php echo get_field('slide_second' . '_' . 'image'); ?>" alt="Проблемы инвестора" width="325">
              </div>

              <span class="banner__next" data-swiper-animation="animate__fadeInUp" data-duration="1s" data-delay="1s">
                <?php echo get_field('slide_second' . '_' . 'action'); ?>
              </span>
            </li>
          <?php endif; ?>
          <?php

          if (get_field('slide_third' . '_' . 'show_hide') == 'Показать') : ?>
            <li class="story__item banner swiper-slide">

              <div class="banner__content  banner__list banner__list--video">
                <h2 data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_third' . '_' . 'heading'); ?>
                </h2>

                <p data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_third' . '_' . 'text_f'); ?>
                </p>

                <p data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_third' . '_' . 'text_s'); ?>
                </p>

                <p data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_third' . '_' . 'text_t'); ?>
                </p>

              </div>


              <div class="banner__picture" data-swiper-animation="animate__fadeInRight" data-duration="2s" data-delay="0.5s">
                <video autoplay loop muted width="390">
                  <source type="video/mp4" src="<?php echo get_field('slide_third' . '_' . 'video'); ?>">
                </video>
              </div>

              <span class="banner__next" data-swiper-animation="animate__fadeInUp" data-duration="1s" data-delay="1s">
                <?php echo get_field('slide_third' . '_' . 'action'); ?>
              </span>
            </li>
          <?php endif; ?>
          <?php

          if (get_field('slide_four' . '_' . 'show_hide') == 'Показать') : ?>
            <li class="story__item banner swiper-slide">

              <div class="banner__content  banner__content--last">
                <h2 data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_four' . '_' . 'heading'); ?>
                </h2>

                <p data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_four' . '_' . 'text'); ?>
                </p>

                <button class="btn btn--reverse story__btn" type="button" data-swiper-animation="animate__fadeInUp" data-duration="1s">
                  <?php echo get_field('slide_four' . '_' . 'btn'); ?>
                </button>
              </div>

              <div class="banner__picture" data-swiper-animation="animate__fadeInRight" data-duration="2s" data-delay="1s">
                <img src="<?php echo get_field('slide_four' . '_' . 'image'); ?>" alt="Недвижимость в Польше" width="790">
              </div>

              <span class="banner__next" data-swiper-animation="animate__fadeInUp" data-duration="1s" data-delay="1s">
                <?php echo get_field('slide_four' . '_' . 'action'); ?>
              </span>

            </li>
          <?php endif; ?>

        </ul>

      </section>
    <?php endif; ?>

  </div>

  <div class="container">
    <section class="services-home">

      <h2 data-aos="fade-up">
        <?php the_field('service_head'); ?>
      </h2>

      <p data-aos="fade-up" data-aos-delay="200">
        <?php the_field('service_text'); ?>
      </p>

      <ul class="services-home__list items" data-aos="fade-up" data-aos-delay="300">
        <?php if (get_field('service_f' . '_' . 'heading') || get_field('service_f' . '_' . 'text')) : ?>

          <li class="background">
            <div class="items__icon items__icon--flat">
              <h3>
                <?php echo get_field('service_f' . '_' . 'heading'); ?>
              </h3>
            </div>

            <p>
              <?php echo get_field('service_f' . '_' . 'text'); ?>
            </p>
            <?php if (get_field('service_f' . '_' . 'link_text') && get_field('service_f' . '_' . 'link')) : ?>
              <a href="<?php echo get_field('service_f' . '_' . 'link'); ?>">
                <?php echo get_field('service_f' . '_' . 'link_text'); ?>
              </a>
            <?php endif; ?>
          </li>
        <?php endif; ?>

        <?php if (get_field('service_s' . '_' . 'heading') || get_field('service_s' . '_' . 'text')) : ?>
          <li class="background">

            <div class="items__icon items__icon--flat">
              <h3>
                <?php echo get_field('service_s' . '_' . 'heading'); ?>
              </h3>
            </div>

            <p>
              <?php echo get_field('service_s' . '_' . 'text'); ?>
            </p>

            <?php if (get_field('service_s' . '_' . 'link_text') && get_field('service_s' . '_' . 'link')) : ?>
              <a href="<?php echo get_field('service_s' . '_' . 'link'); ?>">
                <?php echo get_field('service_s' . '_' . 'link_text'); ?>
              </a>
            <?php endif; ?>

          </li>
        <?php endif; ?>

        <?php if (get_field('service_t' . '_' . 'heading') || get_field('service_t' . '_' . 'text')) : ?>

          <li class="background">

            <div class="items__icon items__icon--flat">
              <h3>
                <?php echo get_field('service_t' . '_' . 'heading'); ?>
              </h3>
            </div>

            <p>
              <?php echo get_field('service_t' . '_' . 'text'); ?>
            </p>

            <?php if (get_field('service_t' . '_' . 'link_text') && get_field('service_t' . '_' . 'link')) : ?>
              <a href="<?php echo get_field('service_t' . '_' . 'link'); ?>">
                <?php echo get_field('service_t' . '_' . 'link_text'); ?>
              </a>
            <?php endif; ?>

          </li>
        <?php endif; ?>

      </ul>

    </section>

    <?php
    if (get_field('hide_block_about') == 'Показать') : ?>
      <section class="about">

        <div class="about__inner">

          <h2 data-aos="fade-up">
            <?php the_field('about_head'); ?>
          </h2>

          <p data-aos="fade-up" data-aos-delay="400">
            <?php the_field('about_text'); ?>
          </p>

          <ul class="numbers" data-aos="fade-up" data-aos-delay="400">
            <li class="numbers__item">

              <span>
                <?php echo get_field('home_about_numbers' . '_' . 'about_chyslo'); ?>
              </span>

              <?php echo get_field('home_about_numbers' . '_' . 'about_objects'); ?>
            </li>

            <li class="numbers__item">

              <span>
                <?php echo get_field('home_about_numbers' . '_' . 'about_percent'); ?>
              </span>

              <?php echo get_field('home_about_numbers' . '_' . 'about_percents_t'); ?>
            </li>

            <li class="numbers__item">
              <span>
                <?php echo get_field('home_about_numbers' . '_' . 'about_days'); ?>
              </span>

              <?php echo get_field('home_about_numbers' . '_' . 'about_days_t'); ?>
            </li>

          </ul>

        </div>

        <div class="about__picture" data-aos="fade-left" data-aos-delay="700">
          <img src="<?php the_field('about_img'); ?>" alt="Проект компании" width="530">
        </div>

      </section>
    <?php endif; ?>

    <?php
    if (get_field('hide_block_news') == 'Показать') : ?>
      <section class="news">

        <div class="news__nav" data-aos="fade-up">
          <h2>
            <?php the_field('home_news_title'); ?>
          </h2>

          <div class="news__slider-btns">

            <button class="slider-btn__prev slider-btn" type="button">
              <svg class="icon icon--rotate">
                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-right"></use>
              </svg>
            </button>

            <button class="slider-btn__next slider-btn" type="button">
              <svg class="icon ">
                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-right"></use>
              </svg>
            </button>

          </div>
        </div>
        <div class="news__slider">

          <ul class="news__list swiper-wrapper" data-aos="fade-up" data-aos-delay="400">

            <?php $posts = get_posts("category=44&orderby=date&numberposts=5"); ?>

            <?php if ($posts) : ?>
              <?php foreach ($posts as $post) : setup_postdata($post); ?>

                <li class="news__item swiper-slide" data-aos="fade-up">

                  <article class="article">

                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>

                      <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/big-wood-house.jpg" alt="<?php the_title(); ?>">
                    <?php endif; ?>

                    <h3>
                      <a href="<?php echo get_permalink(); ?>">
                        <?php the_title(); ?>
                      </a>
                    </h3>

                    <div><?php the_excerpt(); ?></div>
                  </article>
                </li>

              <?php endforeach; ?>
            <?php endif; ?>

          </ul>

          <a class="news__more btn" href="<?php echo esc_attr(pll__('Ссылка на страницу блога'))  ?>" data-aos="fade-up">
            <?php echo esc_attr(pll__('Текст кнопки в разделе Новости (Главная страница)'))  ?>
          </a>

        </div>
      </section>
    <?php endif; ?>

    <?php
    if (get_field('hide_block_contact_home', 7) == 'Показать') : ?>
      <section class="contacts">

        <div class="contacts__images">

          <img src="<?php the_field('home_contact_img_top', 7); ?>" alt="Открdой ключем" height="420" width="275" data-aos="fade-right" data-aos-delay="400">

          <img src="<?php the_field('home_contact_img_bottom', 7); ?>" alt="Лодонь" height="420" width="380" data-aos="fade-up" data-aos-delay="500">

        </div>

        <div class="contact-form" data-aos="fade-ridht">
          <h2 data-aos="fade-up">
            <?php echo esc_attr(pll__('Свяжитесь с нами')) ?>
          </h2>

          <p data-aos="fade-up" data-aos-delay="300">
            <?php echo esc_attr(pll__('Мы готовы ответить на все ваши вопросы или сразу предложить вам объект, который вас заинтересует.'))  ?>
          </p>

          <div class="form" data-aos="fade-up" data-path="modal-finish">
            <?php echo do_shortcode('[cf7form cf7key="contact_ru"]'); ?>
          </div>

      </section>
    <?php endif; ?>

  </div>

</main>

<?php get_footer(); ?>