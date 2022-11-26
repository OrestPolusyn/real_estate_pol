<?php

show_admin_bar(false);

add_action('after_setup_theme', function () {
  register_nav_menus([
    'menu' => 'Меню'
  ]);
});

if ( !is_admin() ) wp_deregister_script('jquery');


function invest_styles()
{
  wp_enqueue_style('invest-style', get_stylesheet_uri());
  /* Для кастомізації*/
  wp_enqueue_style('vendor-style', get_template_directory_uri() . '/assets/css/vendor.min.css');
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.min.css');
};

function invest_scripts()
{
  wp_enqueue_script('invest-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
};



add_filter('wpcf7_form_tag', function ($tag) {
  $datas = [];
  foreach ((array)$tag['options'] as $option) {
    if (strpos($option, 'data-') === 0) {
      $option = explode(':', $option, 2);
      $datas[$option[0]] = apply_filters('wpcf7_option_value', $option[1], $option[0]);
    }
  }
  if (!empty($datas)) {
    $name = $tag['name'];
    $tag['name'] = $id = uniqid('wpcf');
    add_filter('wpcf7_form_elements', function ($content) use ($name, $id, $datas) {
      return str_replace($id, $name, str_replace("name=\"$id\"", "name=\"$name\" " . wpcf7_format_atts($datas), $content));
    });
  }

  return $tag;
});


add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);

function filter_nav_menu_link_attributes($atts, $item, $args, $depth)
{
  if ($item) {
    $atts['class'] = 'nav-list__link';
    if ($item->current) {
      $atts['class'] .= ' nav-list__link--active';
    }
  }
  return $atts;
}

add_filter('nav_menu_css_class', 'special_nav_class', 10, 3);
function special_nav_class($classes, $item)
{
  $classes = ['nav-list__item'];
  return $classes;
}


function my_excerpt_length($length)
{
  return 15; // Указываем количество слов
}
add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more($more)
{
  return '...';
}


function first_post_image()
{
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches[1][0];
  if (empty($first_img)) {
    $first_img = "/wp-content/themes/armi_invest_pol/assets/img/news/big-wood-house.jpg";
  }
  return $first_img;
}

function wp_corenavi()
{
  global $wp_query;
  $total = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
  $a['type'] = 'list';

  $a['total'] = $total;
  $a['mid_size'] = 1; // сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
  $a['prev_text'] = ''; // текст ссылки "Предыдущая страница"
  $a['next_text'] = ''; // текст ссылки "Следующая страница"

  if ($total > 1) echo '<div class="pagination">';
  echo paginate_links($a);
  if ($total > 1) echo '</div>';
}

add_action('template_redirect', 'fb_change_search_url_rewrite');
add_action('wp_enqueue_scripts', 'invest_styles');
add_action('wp_enqueue_scripts', 'invest_scripts');
add_filter('excerpt_more', 'new_excerpt_more');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('menus');


function default_custom_post_text($content)
{
  $content = "Произвольный текст в начале каждой записи.";
  return $content;
}
add_filter('default_content', 'default_custom_post_text');


// изменение заголовка
function my_change_title_here($placeholder_new_text)
{
  $screen = get_current_screen();
  if ($screen->post_type == "post") {
    $placeholder_new_text = "Заголовок для статьи или вопроса FAQ";
  }
  return $placeholder_new_text;
}
add_filter("enter_title_here", "my_change_title_here");


function fix_post_id_on_preview($null, $post_id)
{
  if (is_preview() && $post_id !== 'options') {
    return get_the_ID();
  } else {
    $acf_post_id = isset($post_id->ID) ? $post_id->ID : $post_id;

    if (!empty($acf_post_id)) {
      return $acf_post_id;
    } else {
      return $null;
    }
  }
}
add_filter('acf/pre_load_post_id', 'fix_post_id_on_preview', 10, 2);



add_filter('acf/settings/remove_wp_meta_box', '__return_false');


function tribalpixel_tag_cloud_class_active($tags_data)
{

  $body_class = get_body_class();

  foreach ($tags_data as $key => $tag) {
    if (in_array('term-' . $tag['id'], $body_class)) {
      $tags_data[$key]['class'] =  $tags_data[$key]['class'] . " filter__link--active";
    }
  }
  return $tags_data;
}

add_filter('wp_generate_tag_cloud_data', 'tribalpixel_tag_cloud_class_active');

/**
 * Fantastic social media share buttons by www.jonakyblog.com
 */
function my_share_buttons()
{
  $url = urlencode(get_the_permalink()); /* Getting the current post link */
  $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')); /* Get the post title */
  $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full')); /* Get the current post image thumbnail */

  include(locate_template('share-buttons-template.php', false, false));
}

add_action('init', 'truemisha_polylang_strings');

function truemisha_polylang_strings()
{

  if (!function_exists('pll_register_string')) {
    return;
  }

  pll_register_string(
    'arni_header_btn_text',
    'Текст кнопки вызова модального окна (хедер)',
    'Дополнительные поля',
    false
  );

  pll_register_string(
    'arni_blog_text', // название строки
    'Текст кнопки в разделе Новости (Главная страница)', // сама строка
    'Дополнительные поля', // категория для удобства
    false // будут ли тут переносы строк в тексте или нет
  );

  pll_register_string(
    'arni_form_title',
    'Заголовок контактной формы',
    'Дополнительные поля',
    false
  );

  pll_register_string(
    'arni_form_text',
    'Текст контактной формы и формы попапа',
    'Дополнительные поля',
    true
  );

  pll_register_string(
    'arni_footer_location',
    'Текст Локация',
    'Дополнительные поля',
    false
  );

  pll_register_string(
    'arni_footer_telephone_text',
    'Текст телефон',
    'Дополнительные поля',
    false
  );

  pll_register_string(
    'arni_messangers',
    'Текст для мессенджеров',
    'Дополнительные поля',
    false
  );

  pll_register_string(
    'arni_modal_title',
    'Заголовок (попап)',
    'Дополнительные поля',
    false
  );

  pll_register_string(
    'arni_modal_text',
    'Текст (попап)',
    'Дополнительные поля',
    false
  );

  pll_register_string(
    'arni_modal_text_btn',
    'Текст кнопки вернутся на главную (попап)',
    'Дополнительные поля',
    false
  );

  pll_register_string(
    'arni_error_title',
    'Заголовок страницы ошибки (404)',
    'Дополнительные поля',
    false
  );

  pll_register_string(
    'arni_error_text_f',
    'Первый абзац страницы ошибки (404)',
    'Дополнительные поля',
    true
  );

  pll_register_string(
    'arni_error_text_s',
    'Второй абзац страницы ошибки (404)',
    'Дополнительные поля',
    true
  );

  pll_register_string(
    'arni_error_btn',
    'Кнопка на главную страницы ошибки (404)',
    'Дополнительные поля',
    true
  );
  
   pll_register_string(
    'arni_news_btn',
    'Ссылка на страницу блога',
    'Дополнительные поля',
    true
  );
  
   pll_register_string(
    'news_filter_title',
    'Заголовок странице фильтров',
    'Дополнительные поля',
    true
  );
}


add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );
function remove_block_css() {
wp_dequeue_style( 'wp-block-library' ); // Wordpress core
wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress core
wp_dequeue_style( 'wc-block-style' ); // WooCommerce
wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
}


function my_jquery_enqueue() {
    wp_deregister_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'my_jquery_enqueue' );