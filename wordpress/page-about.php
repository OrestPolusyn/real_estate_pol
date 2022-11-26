<?php
/*
Template Name: О нас  
*/
?>

<?php get_header(); ?>

<main class="main">
  <div class="wrapper">
    <?php
    if (get_field('hide_block_page_about') == 'Показать') : ?>
      <section class="adv adv--about background">
        <div class="adv__content">
          <h1 data-aos="fade-up" data-aos-duration="1000">
            <?php echo get_field('baner_about' . '_' . 'heading'); ?>
          </h1>

          <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
            <p>
              <?php echo get_field('baner_about' . '_' . 'text'); ?>
            </p>
          </div>
        </div>

        <div class="adv__picture" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-delay="600" data-aos-duration="1700">
          <img src="<?php echo get_field('baner_about' . '_' . 'image'); ?>" alt="Недвижимость в Польше" height="" width="580">
        </div>
      </section>
    <?php endif; ?>

  </div>

  <div class="container">

    <?php
    if (get_field('hide_block_proces') == 'Показать') : ?>
      <?php
      if (get_field('hide_block_page_about') == 'Показать') : ?>

        <section class="process">

        <?php else : ?>
          <section class="process" style="padding-top:50px">

          <?php endif; ?>

          <h2 data-aos="fade-up">
            <?php the_field('about_proc_head'); ?>
          </h2>

          <p data-aos="fade-up" data-aos-delay="300">
            <?php the_field('about_proc_text'); ?>
          </p>

          <ul class="process__list items" data-aos="fade-up" data-aos-delay="500">
            <?php if (get_field('about_proc_f' . '_' . 'heading') || get_field('about_proc_f' . '_' . 'text')) : ?>

              <li class="background">
                <div class="items__icon items__icon--location">
                  <h3>
                    <?php echo get_field('about_proc_f' . '_' . 'heading'); ?>
                  </h3>
                </div>

                <p>
                  <?php echo get_field('about_proc_f' . '_' . 'text'); ?>
                </p>

                <?php if (get_field('about_proc_f' . '_' . 'link_text')) : ?>
                  <a href="<?php echo get_field('about_proc_f' . '_' . 'link'); ?>">
                    <?php echo get_field('about_proc_f' . '_' . 'link_text'); ?>
                  </a>
                <?php endif; ?>

              </li>
            <?php endif; ?>

            <?php if (get_field('about_proc_s' . '_' . 'heading') || get_field('about_proc_s' . '_' . 'text')) : ?>

              <li class="background">
                <div class="items__icon items__icon--clipboard">
                  <h3>
                    <?php echo get_field('about_proc_s' . '_' . 'heading'); ?>
                  </h3>
                </div>

                <p>
                  <?php echo get_field('about_proc_s' . '_' . 'text'); ?>
                </p>

                <?php if (get_field('about_proc_s' . '_' . 'link_text')) : ?>
                  <a href="<?php echo get_field('about_proc_s' . '_' . 'link'); ?>">
                    <?php echo get_field('about_proc_s' . '_' . 'link_text'); ?>
                  <?php endif; ?>
                  </a>
              </li>
            <?php endif; ?>

            <?php if (get_field('about_proc_t' . '_' . 'heading') || get_field('about_proc_t' . '_' . 'text')) : ?>

              <li class="background">
                <div class="items__icon items__icon--rent">
                  <h3>
                    <?php echo get_field('about_proc_t' . '_' . 'heading'); ?>
                  </h3>
                </div>

                <p>
                  <?php echo get_field('about_proc_t' . '_' . 'text'); ?>
                </p>

                <?php if (get_field('about_proc_t' . '_' . 'link_text')) : ?>
                  <a href="<?php echo get_field('about_proc_t' . '_' . 'link'); ?>">
                    <?php echo get_field('about_proc_t' . '_' . 'link_text'); ?>
                  <?php endif; ?>
                  </a>
              </li>
            <?php endif; ?>

            <?php if (get_field('about_proc_fr' . '_' . 'heading') || get_field('about_proc_fr' . '_' . 'text')) : ?>
              <li class="background">
                <div class="items__icon items__icon items__icon--drawing">
                  <h3>
                    <?php echo get_field('about_proc_fr' . '_' . 'heading'); ?>
                  </h3>
                </div>

                <p>
                  <?php echo get_field('about_proc_fr' . '_' . 'text'); ?>
                </p>

                <?php if (get_field('about_proc_fr' . '_' . 'link_text')) : ?>
                  <a href="<?php echo get_field('about_proc_fr' . '_' . 'link'); ?>">
                    <?php echo get_field('about_proc_fr' . '_' . 'link_text'); ?>
                  <?php endif; ?>
                  </a>
              </li>
          </ul>
        <?php endif; ?>

          </section>
        <?php endif; ?>

        <?php
        if (get_field('hide_block_how_work') == 'Показать') : ?>
          <section class="work background">

            <h2 data-aos="fade-up">
              <?php the_field('about_work_heading'); ?>
            </h2>

            <div class="work__inner">

              <div class="work__video video" data-aos="fade-right" data-aos-delay="500">
                <img src="<?php the_field('about_work_image'); ?>" alt="Верх здания" width="520">
              </div>

              <ol class="work__list" data-aos="fade-left" data-aos-delay="400">
                <li class="work__item">
                  <h3>
                    <?php echo get_field('about_work_f' . '_' . 'heading'); ?>
                  </h3>
                  <p>
                    <?php echo get_field('about_work_f' . '_' . 'text'); ?>
                  </p>
                </li>

                <li class="work__item">
                  <h3>
                    <?php echo get_field('about_work_s' . '_' . 'heading'); ?>
                  </h3>

                  <p>
                    <?php echo get_field('about_work_s' . '_' . 'text'); ?>
                  </p>
                </li>

                <li class="work__item">
                  <h3>
                    <?php echo get_field('about_work_t' . '_' . 'heading'); ?>
                  </h3>

                  <p>
                    <?php echo get_field('about_work_t' . '_' . 'text'); ?>
                  </p>
                </li>

                <li class="work__item">
                  <h3>
                    <?php echo get_field('about_work_fr' . '_' . 'heading'); ?>
                  </h3>

                  <p>
                    <?php echo get_field('about_work_fr' . '_' . 'text'); ?>
                  </p>
                </li>

                <li class="work__item">
                  <h3>
                    <?php echo get_field('about_work_fv' . '_' . 'heading'); ?>
                  </h3>

                  <p>
                    <?php echo get_field('about_work_fv' . '_' . 'text'); ?>
                  </p>
                </li>
              </ol>
            </div>

          </section>
        <?php endif; ?>

        <?php
        if (get_field('hide_block_team') == 'Показать') : ?>
          <section class="team">
            <h2 data-aos="fade-up">
              <?php the_field('about_team_head'); ?>
            </h2>

            <p data-aos="fade-up" data-aos-delay="500">
              <?php the_field('about_team_text'); ?>
            </p>

            <ul class="team__list" data-aos="fade-up" data-aos-delay="500">

              <li class="team__item" data-aos="fade-up">

                <article class="article">
                  <img src="<?php echo get_field('about_team_f' . '_' . 'image'); ?>" alt="Юрист" height="auto">
                  <h3>
                    <?php echo get_field('about_team_f' . '_' . 'name'); ?>
                  </h3>

                  <p>
                    <?php echo get_field('about_team_f' . '_' . 'position'); ?>
                  </p>
                </article>
              </li>
              <li class="team__item" data-aos="fade-up">

                <article class="article">
                  <img src="<?php echo get_field('about_team_s' . '_' . 'image'); ?>" alt="Юрист" height="auto">
                  <h3>
                    <?php echo get_field('about_team_s' . '_' . 'name'); ?>
                  </h3>

                  <p>
                    <?php echo get_field('about_team_s' . '_' . 'position'); ?>
                  </p>
                </article>
              </li>
            </ul>

          </section>
        <?php endif; ?>

  </div>

</main>



<?php get_footer(); ?>