<?php
/**
 * Sanitary District 1 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sanitary_District_1
 */
// Register Custom Navigation Walker
require_once('class-wp-bootstrap-mega-navwalker.php');
if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'sanitary_district_one_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function sanitary_district_one_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Sanitary District 1, use a find and replace
         * to change 'sanitary-district-one' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'sanitary-district-one', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__( 'Primary', 'sanitary-district-one' ),
                'services' => esc_html__( 'Service', 'sanitary-district-one' ),
                'customer-support' => esc_html__( 'Support', 'sanitary-district-one' ),
                'company' => esc_html__( 'Company', 'sanitary-district-one' ),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'sanitary_district_one_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'sanitary_district_one_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sanitary_district_one_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'sanitary_district_one_content_width', 640 );
}
add_action( 'after_setup_theme', 'sanitary_district_one_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sanitary_district_one_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'sanitary-district-one' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'sanitary-district-one' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'sanitary_district_one_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sanitary_district_one_scripts() {
    wp_enqueue_style( 'sanitary-district-one-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/owlcarousel/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'owl-theme-default', get_stylesheet_directory_uri() . '/owlcarousel/assets/owl.theme.default.min.css' );
    wp_style_add_data( 'sanitary-district-one-style', 'rtl', 'replace' );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'sanitary_district_one_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/cmb/page-controller-cmb.php';
require get_template_directory() . '/inc/functions/breadcrumb.php';
require get_template_directory() . '/inc/shortcode/shortcodes.php';
require get_template_directory() . '/inc/cpt/pickup-cpt.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}


//DROPDOWN WALKER

class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth){
        $indent = str_repeat("\t", $depth); // don't output children opening tag (`<ul>`)
    }

    function end_lvl(&$output, $depth){
        $indent = str_repeat("\t", $depth); // don't output children closing tag
    }
    function start_el(&$output, $item, $depth, $args) {
        $url = '#' !== $item->url ? $item->url : '';
        $output .= '<option value="' . $url . '">' . $item->title;
    }
    function end_el(&$output, $item, $depth){
        $output .= "</option>\n"; // replace closing </li> with the option tag
    }
}

//ADDING TAGS TO PAGES


function add_tags_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
}
add_action( 'init', 'add_tags_to_pages');

//CUSTOM SEARCH

function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('pickup'));
    }

    return $query;
}

add_filter('pre_get_posts','searchfilter');

/* MENU */


/**
 * Add custom fields to menu item
 *
 * This will allow us to play nicely with any other plugin that is adding the same hook
 *
 * @param  int $item_id
 * @params obj $item - the menu item
 * @params array $args
 */
function kia_custom_fields( $item_id, $item ) {

    wp_nonce_field( 'custom_menu_meta_nonce', '_custom_menu_meta_nonce_name' );
    $custom_menu_meta = get_post_meta( $item_id, '_custom_menu_meta', true );
    ?>
    <div class="field-custom_menu_meta description-wide" style="margin: 5px 0;">
        <label for="custom-menu-meta-for-<?php echo $item_id ;?>">
            <?php _e( 'Featured Image Link', 'featured-image-link'); ?>
        </label>
        <br />
        <input type="text" name="featured_img_link[<?php echo $item_id ;?>]" class="widefat" id="featured-image-lin-for-<?php echo $item_id ;?>" value="<?php echo esc_attr( $custom_menu_meta ); ?>" />

    </div>

    <?php
}
add_action( 'wp_nav_menu_item_custom_fields', 'kia_custom_fields', 10, 2 );


/**
 * Save the menu item meta
 *
 * @param int $menu_id
 * @param int $menu_item_db_id
 */
function kia_nav_update( $menu_id, $menu_item_db_id ) {

    // Verify this came from our screen and with proper authorization.
    if ( ! isset( $_POST['_custom_menu_meta_nonce_name'] ) || ! wp_verify_nonce( $_POST['_custom_menu_meta_nonce_name'], 'custom_menu_meta_nonce' ) ) {
        return $menu_id;
    }

    if ( isset( $_POST['featured_img_link'][$menu_item_db_id]  ) ) {
        $sanitized_data = sanitize_text_field( $_POST['featured_img_link'][$menu_item_db_id] );
        update_post_meta( $menu_item_db_id, '_custom_menu_meta', $sanitized_data );
    } else {
        delete_post_meta( $menu_item_db_id, '_custom_menu_meta' );
    }
}
add_action( 'wp_update_nav_menu_item', 'kia_nav_update', 10, 2 );

/**
 * Displays text on the front-end.
 *
 * @param string   $title The menu item's title.
 * @param WP_Post  $item  The current menu item.
 * @return string
 */
function kia_custom_menu_title( $title, $item ) {

    if( is_object( $item ) && isset( $item->ID ) ) {

        $custom_menu_meta = get_post_meta( $item->ID, '_custom_menu_meta', true );

        if ( ! empty( $custom_menu_meta ) ) {
            $title .= ' - ' . $custom_menu_meta;
        }
    }
    return $title;
}
add_filter( 'nav_menu_item_title', 'kia_custom_menu_title', 10, 2 );