<?php
/*Template name: 404 (Ошибка)*/
?>

<?php get_header(); ?>

<main class="main">
  <div class="container">

    <div class="no-page">
      <div class="no-page__content">
        <h1>
          <?php echo esc_attr(pll__('Страница не найдена'))  ?>

        </h1>

        <p>
          <?php echo esc_attr(pll__('К сожалению, мы не смогли найти запрашиваемую страницу. Видимо, её больше не существует...'))  ?>
        </p>

        <p>
          <?php echo esc_attr(pll__('Вернитесь на главную, чтобы продолжить пользоваться сайтом.'))  ?>
        </p>

        <a class="btn  btn--reverse" href="<?php echo home_url(); ?>">
          <?php echo esc_attr(pll__('На главную'))  ?>
        </a>
      </div>

      <div class="no-page__image">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/404.jpg" alt="Image error" width="540" height="750">
      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>