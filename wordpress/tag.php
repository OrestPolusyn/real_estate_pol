<?php
/*Template name: Шаблон Тега*/
?>

<?php get_header(); ?>
<main class="main tag-page">

  <div class="container">

    <h1 class="tag-page__title">
         <?php echo esc_attr(pll__('Заголовок странице фильтров'))  ?>
        "<?php $tags = get_the_tags();
      if ($tags) {
        foreach ($tags as $tag) {
          echo $tag->name;
        }
      }
      ?>"
    </h1>

    <ul class="filter" data-aos="fade-up">
      <li class="filter__item">
        <a class="filter__link filter__btn tag-cloud-link" href="<?php echo get_page_link(391); ?>">
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
        'number'    => 0, 'form__btn btn
        hide_empty'   => true,
        'format'    => 'list',
        'include'   => $tags_str
      );

      wp_tag_cloud($args);
      ?>
    </ul>


    <ul class="poland__news">
      <?php if (have_posts()) {
        while (have_posts()) {
          the_post(); ?>

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
        }
      } else { ?>

      <?php } ?>



      <?php if (function_exists('wp_corenavi')) {
        wp_corenavi();
      } ?>
    </ul>
  </div>

</main>

<?php get_footer(); ?>