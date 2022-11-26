<?php
/*
Template Name: Блог
*/
?>

<?php get_header(); ?>

<main class="main">
  <div class="wrapper">
    <?php
    if (get_field('hide_block_blog_baner') == 'Показать') : ?>
      <section class="adv adv--poland background">
        <div class="adv__content">
          <h1 data-aos="fade-up" data-aos-duration="1000">
            <?php echo get_field('baner_blog' . '_' . 'heading'); ?>
          </h1>

          <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1200">
            <?php echo get_field('baner_blog' . '_' . 'text'); ?>
          </div>
        </div>

        <div class="adv__picture" data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-delay="600" data-aos-duration="1700">
          <img src="<?php echo get_field('baner_blog' . '_' . 'image'); ?>" alt="Недвижимость в Польше" height="" width="430">
        </div>
      </section>
    <?php endif; ?>

  </div>

  <h2 class="sr-only">
    <?php the_field('blog_subtitle') ?>
  </h2>

  <div class="container">
    <?php
    if (get_field('hide_block_blog_baner') == 'Показать') : ?>
      <ul class="filter" data-aos="fade-up">
      <?php else : ?>
        <ul class="filter" data-aos="fade-up" style="padding-top:50px">
        <?php endif; ?>


        <li class="filter__item">
          <a class="filter__link filter__link--active filter__btn tag-cloud-link" href="<?php echo get_page_link(391); ?>">
            все
          </a>
        </li>

        <?php
        $custom_query = new WP_Query('posts_per_page=-1&cat=44');
        if ($custom_query->have_posts()) :
          while ($custom_query->have_posts()) : $custom_query->the_post();
            $posttags = get_the_tags();
            if ($posttags) {
              foreach ($posttags as $tag) {
                $all_tags[] = $tag->term_id;
              }
            }
          endwhile;
        endif;

        $tags_arr = array_unique($all_tags);
        $tags_str = implode(",", $tags_arr);

        $args = array(
          'smallest'  => 14,
          'largest'   => 14,
          'unit'      => 'px',
          'number'    => 0, '
        hide_empty'   => true,
          'format'    => 'list',
          'include'   => $tags_str
        );
        wp_tag_cloud($args);
        ?>
        </ul>

        <ul class="poland__news">
          <?php
          $args = array(
            'paged'         => (get_query_var('paged') ? get_query_var('paged') : 1),
            'posts_per_page' => '9', // кол-во записей на страницу
            'post_type'   => 'post',
            'cat' => '44',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          );
          query_posts($args);
          while (have_posts()) {
            the_post();
          ?>
            <li class="poland-news__item" data-aos="fade-up">
              <article class="article">

                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>

                  <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/big-wood-house.jpg" alt="<?php the_title(); ?>" height="240" width="350">
                <?php endif; ?>

                <h3>
                  <a href="<?php echo get_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>

                <div><?php the_excerpt(); ?></div>
              </article>
            </li>
          <?php
          } ?>
        </ul>

        <?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>

        <?php
        wp_reset_query();
        ?>

  </div>
</main>

<?php get_footer(); ?>