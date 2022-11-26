<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>

<main class="main">
  <div class="container">
    <section class="faq">

      <h1 data-aos="fade-up">
        <?php the_title(); ?>
      </h1>

      <ul class="filter" data-aos="fade-up"></ul>

      <ul class="faq__tabs" data-aos="fade-up">

        <?php $posts = get_posts("category=46&orderby=date&numberposts=100"); ?>
        <?php if ($posts) : ?>
          <?php foreach ($posts as $post) : setup_postdata($post); ?>

            <li class="faq__tab faq__tab--open"             
            <?php $tags = get_the_tags();
            if ($tags) {
              foreach ($tags as $tag) {
                if (has_tag()) {
                  echo 'data-faq="' . $tag->name . '"';
                }
              }
            }
            ?>
            >
              <h2 class="faq__title">
                <?php the_title() ?>
              </h2>

              <button class="faq__btn" type="button">
                <span class="sr-only">
                  Show/hide text
                </span>
              </button>

              <div class="faq__text">
                <?php the_content() ?>
              </div>
            </li>
          <?php endforeach; ?>
        <?php endif; ?>
      </ul>
    </section>
  </div>
</main>


<?php get_footer(); ?>