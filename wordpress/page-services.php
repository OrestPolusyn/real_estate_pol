<?php
/*
Template Name: Услуги
*/
?>

<?php get_header(); ?>

<main class="main services">
  <div class="wrapper">

    <?php
    if (get_field('hide_block_page_service') == 'Показать') : ?>
      <section class="adv adv--auto background">
        <div class="adv__content">
          <h1 data-aos="fade-up" data-aos-duration="1000">
            <?php echo get_field('baner_services' . '_' . 'heading'); ?>
          </h1>

          <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
            <?php echo get_field('baner_services' . '_' . 'text'); ?>
          </div>

        </div>

        <div class="adv__picture" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-delay="600" data-aos-duration="1700">
          <img src="<?php echo get_field('baner_services' . '_' . 'image'); ?>" alt="Недвижимость в Польше" height="" width="450">
        </div>
      </section>
    <?php endif; ?>

  </div>

  <?php
  if (get_field('hide_block_our_service') == 'Показать') : ?>

    <?php
    if (get_field('hide_block_page_service') == 'Показать') : ?>

      <section class="services__project">

      <?php else : ?>

        <section class="services__project" style="padding-top:50px">
        <?php endif; ?>

        <div class="container">

          <div class="services__wrapper services__wrapper--num">
            <div class="services__inner">
              <h2 data-aos="fade-up">
                <?php the_field('services_our_head'); ?>
              </h2>

              <p data-aos="fade-up" data-aos-delay="200">
                <?php the_field('services_our_text'); ?>
              </p>

            </div>

            <div class="services__counts" data-aos="fade-up" data-aos-delay="400">
              <ul class="numbers" data-aos="fade-up" data-aos-delay="400">
                <li class="numbers__item">
                  <span>
                    <?php echo get_field('about_numbers' . '_' . 'about_chyslo'); ?> </span>
                  <?php echo get_field('about_numbers' . '_' . 'about_objects'); ?>
                </li>

                <li class="numbers__item">
                  <span>
                    <?php echo get_field('about_numbers' . '_' . 'about_percent'); ?> </span>
                  <?php echo get_field('about_numbers' . '_' . 'about_percents_t'); ?>
                </li>

                <li class="numbers__item">
                  <span>
                    <?php echo get_field('about_numbers' . '_' . 'about_days'); ?> </span>
                  <?php echo get_field('about_numbers' . '_' . 'about_days_t'); ?>
                </li>

              </ul>
            </div>
          </div>

          <div class="services__sider">
            <ul class="services__items swiper-wrapper" data-aos="fade-up">

              <li class="services__item swiper-slide" data-aos="fade-up">

                <article class="article">
                  <img src="<?php echo get_field('services_block_f' . '_' . 'image'); ?>" alt="services/flat.jpgDesc" height="240">
                  <h3>
                    <?php if (get_field('services_block_f' . '_' . 'link')) : ?>
                      <a href="<?php echo get_field('services_block_f' . '_' . 'link'); ?>">
                        <?php echo get_field('services_block_f' . '_' . 'heading'); ?>
                      </a>

                    <?php else : ?>

                      <?php echo get_field('services_block_f' . '_' . 'heading'); ?>

                    <?php endif; ?>

                  </h3>

                  <p>
                    <?php echo get_field('services_block_f' . '_' . 'text'); ?>
                  </p>
                </article>
              </li>

              <li class="services__item swiper-slide" data-aos="fade-up">
                <article class="article">
                  <img src="<?php echo get_field('services_block_s' . '_' . 'image'); ?>" alt="services/flat.jpgDesc" height="240">
                  <h3>

                    <?php if (get_field('services_block_s' . '_' . 'link')) : ?>
                      <a href="<?php echo get_field('services_block_s' . '_' . 'link'); ?>">
                        <?php echo get_field('services_block_s' . '_' . 'heading'); ?>
                      </a>
                    <?php else : ?>

                      <?php echo get_field('services_block_s' . '_' . 'heading'); ?>

                    <?php endif; ?>
                  </h3>

                  <p>
                    <?php echo get_field('services_block_s' . '_' . 'text'); ?>
                  </p>
                </article>
              </li>

              <li class="services__item swiper-slide" data-aos="fade-up">

                <article class="article">
                  <img src="<?php echo get_field('services_block_t' . '_' . 'image'); ?>" alt="services/flat.jpgDesc" height="240">
                  <h3>
                    <?php if (get_field('services_block_t' . '_' . 'link')) : ?>
                      <a href="<?php echo get_field('services_block_t' . '_' . 'link'); ?>">
                        <?php echo get_field('services_block_t' . '_' . 'heading'); ?>
                      </a>
                    <?php else : ?>

                      <?php echo get_field('services_block_t' . '_' . 'heading'); ?>

                    <?php endif; ?>
                  </h3>

                  <p>
                    <?php echo get_field('services_block_t' . '_' . 'text'); ?>
                  </p>
                </article>
              </li>
            </ul>

            <div class="services__slider-btns">

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

        </div>

        </section>
      <?php endif; ?>

      <div class="container">
        <?php
        if (get_field('hide_block_why_service') == 'Показать') : ?>

          <section class="services__advantage background">

            <div class="services__wrapper">

              <div class="services__inner">
                <h2 data-aos="fade-up">
                  <?php the_field('services_why_head'); ?>
                </h2>

                <ul data-aos="fade-up" data-aos-delay="200">
                  <li>
                    <p>
                      <?php echo get_field('services_list' . '_' . 'first'); ?>
                    </p>
                  </li>

                  <li>
                    <p>
                      <?php echo get_field('services_list' . '_' . 'second'); ?>
                    </p>
                  </li>

                  <li>
                    <p>
                      <?php echo get_field('services_list' . '_' . 'third'); ?>
                    </p>
                  </li>

                  <li>
                    <p>
                      <?php echo get_field('services_list' . '_' . 'fourth'); ?>
                    </p>
                  </li>

                  <li>
                    <p>
                      <?php echo get_field('services_list' . '_' . 'fifth'); ?>
                    </p>
                  </li>
                </ul>
              </div>

              <div class="services__video video" data-aos="fade-left" data-aos-delay="700">
                <img src="<?php the_field('services_why_image'); ?>" alt="Котлован дома" width="520">
              </div>
            </div>


          </section>
        <?php endif; ?>

      </div>

</main>

<?php get_footer(); ?>

