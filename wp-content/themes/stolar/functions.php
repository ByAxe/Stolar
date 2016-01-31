<?php
/**
 * stolar functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stolar
 */

if (!function_exists('stolar_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function stolar_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on stolar, use a find and replace
         * to change 'stolar' to the name of your theme in all the template files.
         */
        load_theme_textdomain('stolar', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'stolar'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        /*
         * Enable support for Post Formats.
         * See https://developer.wordpress.org/themes/functionality/post-formats/
         */
        add_theme_support('post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('stolar_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif;
add_action('after_setup_theme', 'stolar_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stolar_content_width()
{
    $GLOBALS['content_width'] = apply_filters('stolar_content_width', 640);
}

add_action('after_setup_theme', 'stolar_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stolar_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'stolar'),
        'id' => 'sidebar-1',
        'description' => '',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'stolar_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function stolar_scripts()
{
    wp_enqueue_style('stolar-style', get_stylesheet_uri());

    wp_enqueue_script('stolar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true);

    wp_enqueue_script('stolar-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function kama_breadcrumbs($sep = ' / ')
{

    global $post, $wp_query, $wp_post_types;
    // для локализации
    $l = array(
        'home' => 'Главная'
    , 'paged' => 'Страница %s'
    , '404' => 'Ошибка 404'
    , 'search' => 'Результаты поиска по запросу - <b>%s</b>'
    , 'author' => 'Архив автора: <b>%s</b>'
    , 'year' => 'Архив за <b>%s</b> год'
    , 'month' => 'Архив за: <b>%s</b>'
    , 'day' => ''
    , 'attachment' => 'Медиа: %s'
    , 'tag' => 'Записи по метке: <b>%s</b>'
    , 'tax_tag' => '%s из "%s" по тегу: <b>%s</b>'
    );

    $w1 = '<div class="row">
                <div class="container">
                    <div class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">';
    $w2 = '        </div>
                </div>
           </div>';
    $patt1 = '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">';
    $sep .= '</span>'; // закрываем span после разделителя!
    $patt = $patt1 . '%s</a>';

    if ($paged = $wp_query->query_vars['paged']) {
        $pg_patt = $patt1;
        $pg_end = '</a>' . $sep . sprintf($l['paged'], $paged);
    }

    $out = '';
    if (is_front_page())
        return print $w1 . ($paged ? sprintf($pg_patt, get_bloginfo('url')) : '') . $l['home'] . $pg_end . $w2;

    elseif (is_404())
        $out = $l['404'];

    elseif (is_search()) {
        $out = sprintf($l['search'], strip_tags($GLOBALS['s']));
    } elseif (is_author()) {
        $q_obj = &$wp_query->queried_object;
        $out = ($paged ? sprintf($pg_patt, get_author_posts_url($q_obj->ID, $q_obj->user_nicename)) : '') . sprintf($l['author'], $q_obj->display_name) . $pg_end;
    } elseif (is_year() || is_month() || is_day()) {
        $y_url = get_year_link($year = get_the_time('Y'));
        $m_url = get_month_link($year, get_the_time('m'));
        $y_link = sprintf($patt, $y_url, $year);
        $m_link = sprintf($patt, $m_url, get_the_time('F'));
        if (is_year())
            $out = ($paged ? sprintf($pg_patt, $y_url) : '') . sprintf($l['year'], $year) . $pg_end;
        elseif (is_month())
            $out = $y_link . $sep . ($paged ? sprintf($pg_patt, $m_url) : '') . sprintf($l['month'], get_the_time('F')) . $pg_end;
        elseif (is_day())
            $out = $y_link . $sep . $m_link . $sep . get_the_time('l');
    } // Страницы и древовидные типы записей
    elseif ($wp_post_types[$post->post_type]->hierarchical) {
        $parent = $post->post_parent;
        $crumbs = array();
        while ($parent) {
            $page = &get_post($parent);
            $crumbs[] = sprintf($patt, get_permalink($page->ID), $page->post_title);
            $parent = $page->post_parent;
        }
        $crumbs = array_reverse($crumbs);
        foreach ($crumbs as $crumb)
            $out .= $crumb . $sep;
        $out = $out . $post->post_title;
    } else // Таксономии, вложения и не древовидные типы записей
    {
        // Определяем термины
        if (is_singular()) {
            if (!$taxonomies) {
                $taxonomies = get_taxonomies(array('hierarchical' => true, 'public' => true));
                if (count($taxonomies) == 1) $taxonomies = 'category';
            }
            if ($term = get_the_terms($post->post_parent ? $post->post_parent : $post->ID, $taxonomies)) {
                $term = array_shift($term);
            }
        } else
            $term = &$wp_query->get_queried_object();

        if (!$term && !is_attachment())
            return print "Error: Taxonomy is not defined!";

        $pg_term_start = ($paged && $term->term_id) ? sprintf($pg_patt, get_term_link((int)$term->term_id, $term->taxonomy)) : '';

        if (is_attachment()) {
            if (!$post->post_parent)
                $out = sprintf($l['attachment'], $post->post_title);
            else
                $out = crumbs_tax($term->term_id, $term->taxonomy, $sep, $patt) . sprintf($patt, get_permalink($post->post_parent), get_the_title($post->post_parent)) . $sep . $post->post_title;
        } elseif (is_single())
            $out = crumbs_tax($term->parent, $term->taxonomy, $sep, $patt) . sprintf($patt, get_term_link((int)$term->term_id, $term->taxonomy), $term->name) . $sep . $post->post_title;
        // Метки, архивная страница типа записи, произвольные одноуровневые таксономии
        elseif (!is_taxonomy_hierarchical($term->taxonomy)) {
            // метка
            if (is_tag())
                $out = $pg_term_start . sprintf($l['tag'], $term->name) . $pg_end;
            // архивная страница произвольного типа записи
            elseif (!$term->term_id)
                $home_after = sprintf($patt, '/' . $term->name, $term->label) . $pg_end;
            // таксономия
            else {
                $post_label = $wp_post_types[$post->post_type]->labels->name;
                $tax_label = $GLOBALS['wp_taxonomies'][$term->taxonomy]->labels->name;
                $out = $pg_term_start . sprintf($l['tax_tag'], $post_label, $tax_label, $term->name) . $pg_end;
            }
        } // Рубрики и таксономии
        else
            $out = crumbs_tax($term->parent, $term->taxonomy, $sep, $patt) . $pg_term_start . $term->name . $pg_end;
    }

    // ссылка на архивную страницу произвольно типа поста
    if (!empty($post->post_type) && $post->post_type != 'post' && !is_page() && !is_attachment() && !$home_after)
        $home_after = sprintf($patt, '/' . $post->post_type, $wp_post_types[$post->post_type]->labels->name) . $sep;

    // замена ссылки на архивную страницу для типа записи
    if ($post->post_type == 'book')
        $home_after = sprintf($patt, '/about_book', 'Книжки') . $sep;

    $home = sprintf($patt, get_bloginfo('url'), $l['home']) . $sep . $home_after;

    return print $w1 . $home . $out . $w2;
}

function crumbs_tax($term_id, $tax, $sep, $patt)
{
    $termlink = array();
    while ((int)$term_id) {
        $term2 = &get_term($term_id, $tax);
        $termlink[] = sprintf($patt, get_term_link((int)$term2->term_id, $term2->taxonomy), $term2->name) . $sep;
        $term_id = (int)$term2->parent;
    }
    $termlinks = array_reverse($termlink);
    return implode('', $termlinks);
}

add_action('wp_enqueue_scripts', 'stolar_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
