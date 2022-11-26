<?php get_header(); ?>

<main class="main single">
  <div class="container">
    <article class="single-article">
      <div class="single-article__back">
        <?php
        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        echo "<a href='$url'>"
        ?>
        <svg class="icon icon--rotate">
          <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow-right"></use>
        </svg>
        блог
        </a>
      </div>
      
      <div class="single-article__about">

        <h1>
          <?php the_title(); ?>
        </h1>

        <p >
          <?php the_field('single_before'); ?> </p>

        <ul class="single-article__socials">
          <li>
            <a class="share-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=arni_invest" title="Share on Linkedin" target="_blank">

              <span class="sr-only">
                linked
              </span>

              <svg class="icon icon--social">
                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#linkedin"></use>
              </svg>
            </a>
          </li>

          <li>
            <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Share on Facebook" target="_blank">
              <span class="sr-only">
                facebook
              </span>

              <svg class="icon icon--social">
                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#facebook"></use>
              </svg>
            </a>
          </li>
        </ul>
      </div>

      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else : ?>

        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/news/big-wood-house.jpg" alt="<?php the_title(); ?>">
      <?php endif; ?>

      <div class="single-article__box">
        <?php the_content(); ?>
      </div>

      <div class="single-article__footer">
        <ul >
          <?php the_tags('<li>', '</li><li>', '</li>'); ?>
        </ul>

        <ul class="single-article__socials">
          <li>
            <a class="share-linkedin" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&source=arni_invest" title="Share on Linkedin" target="_blank">

              <span class="sr-only">
                linked
              </span>

              <svg class="icon icon--social">
                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#linkedin"></use>
              </svg>
            </a>
          </li>

          <li>
            <a class="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Share on Facebook" target="_blank">
              <span class="sr-only">
                facebook
              </span>

              <svg class="icon icon--social">
                <use xlink:href="<?php echo bloginfo('template_url'); ?>/assets/img/sprite.svg#facebook"></use>
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </article>
  </div>
</main>


<?php get_footer(); ?>