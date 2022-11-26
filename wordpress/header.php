<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="#111111">
  <title><?php bloginfo('name');
          echo " | ";
          bloginfo('description'); ?></title>

  <?php wp_head(); ?>
</head>

<body>
  <div class="site-container">

    <header class="header">

      <div class="container">
        <nav class="header__nav">

          <a class="logo" href="<?php echo home_url(); ?>">
            <img src=" <?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>" alt="Arni Invest" width="150" height="35">
          </a>
          <div class="header__list">
            <?php
            wp_nav_menu([
              'menu'            => 'Main',
              'container'       => false,
              'menu_class'      => ' nav-list',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'depth'           => 0,
              'walker'          => '',
            ]);
            ?>

            <button class="btn" type="button" data-path="modal-form">
              <?php echo esc_attr(pll__('Текст кнопки вызова модального окна (хедер)'))  ?>
            </button>

            <div class="nav-list__item nav-list__item--mobile">
              <a class="nav-list__link" href="tel:<?php the_field('phone_number', 7) ?> rel="nofollow"">
                <?php the_field('phone_number', 7) ?>
              </a>
            </div>

            <ul class="header__messangers">
              <li class="header__messanger">
                <a class="header__messanger-link header__messanger-link--viber" href="viber://chat?number=<?php the_field('phone_number', 7) ?>" target="_blank" rel="nofollow">
                  <span class="sr-only">
                    Viber
                  </span>
                </a>
              </li>

              <li class="header__messanger">
                <a class="header__messanger-link header__messanger-link--telegram" href="<?php the_field('telegram', 7) ?>" target="_blank" rel="nofollow">
                  <span class="sr-only">
                    Telegram
                  </span>
                </a>
              </li>

              <li class="header__messanger">
                <a class="header__messanger-link header__messanger-link--whatsapp" href="https://api.whatsapp.com/send?phone=<?php the_field('phone_number', 7) ?>" target="_blank" rel="nofollow">
                  <span class="sr-only">
                    Whatsapp
                  </span>
                </a>
              </li>
            </ul>
          </div>
          <button class="burger">
            <span class="burger__line"></span>
            <span class="burger__line"></span>
            <span class="burger__line"></span>
          </button>

          <div class="lang">

            <span>
              <?php echo substr(get_bloginfo('language'), 0, 2); ?>
            </span>

            <ul>
              <?php $translations = pll_the_languages(array(
                "raw" => 1,
              )); ?>
              <?php foreach ($translations as $item) : ?>
                <li>
                  <a class=" <?= ($item['current_lang']) ? 'disabled' : '' ?>" href="<?= $item['url'] ?>">
                    <?= $item['slug'] ?>
                  </a>
                <?php endforeach; ?>
                </li>
            </ul>
          </div>
        </nav>

      </div>

    </header>