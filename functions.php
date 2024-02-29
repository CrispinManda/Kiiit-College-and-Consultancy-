<?php

/**
 * Bootscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bootscore
 * @version 5.3.3
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Load required files
 */
require_once('inc/theme-setup.php');             // Theme setup and custom theme supports
require_once('inc/breadcrumb.php');              // Breadcrumb
require_once('inc/columns.php');                 // Main/sidebar column width and breakpoints
require_once('inc/comments.php');                // Comments
require_once('inc/container.php');               // Container class
require_once('inc/enable-html.php');             // Enable HTML in category and author description
require_once('inc/enqueue.php');                 // Enqueue scripts and styles
require_once('inc/excerpt.php');                 // Adds excerpt to pages
require_once('inc/hooks.php');                   // Custom hooks
require_once('inc/loop.php');                    // Amount of items in the loop before page gets paginated (set to 24)
require_once('inc/pagination.php');              // Pagination for loop and single posts
require_once('inc/password-protected-form.php'); // Form if post or page is protected by password
require_once('inc/template-tags.php');           // Meta information like author, date, comments, category and tags badges
require_once('inc/template-functions.php');      // Functions which enhance the theme by hooking into WordPress
require_once('inc/widgets.php');                 // Register widget area and disables Gutenberg in widgets
require_once('inc/deprecated.php');              // Fallback functions being dropped in v6


function enqueue_custom_styles() {
    // Enqueue Google Fonts
    wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', array(), null );

    // Enqueue Template CSS Style
    wp_enqueue_style( 'template-style', get_template_directory_uri() . '/assets/css/style-liberty.css', array(), '1.0' ); // Make sure to replace '1.0' with your version number if applicable
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );

function enqueue_custom_scripts() {
    // Enqueue jQuery
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true );

    // Enqueue Bootstrap Bundle script from CDN
    wp_enqueue_script( 'bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true );

    // Enqueue theme change script
    wp_enqueue_script( 'theme-change', get_template_directory_uri() . '/assets/js/theme-change.js', array('jquery'), '1.0', true );

    // Enqueue Magnific Popup script
    wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '1.0', true );

    // Enqueue Owl Carousel script
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), '2.3.4', true );

    // Enqueue Bootstrap script
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.6.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_scripts' );



/**
 * Load WooCommerce scripts if plugin is activated
 */
if (class_exists('WooCommerce')) {
  require get_template_directory() . '/woocommerce/wc-functions.php';
}


/**
 * Load Bootstrap 5 Nav Walker and registers menus 
 * Remove this snippet in v6 and add nav-walker to the enqueue list
 * https://github.com/orgs/bootscore/discussions/347
 */
if (!function_exists('register_navwalker')) :
  function register_navwalker() {
    require_once('inc/class-bootstrap-5-navwalker.php');
    // Register Menus
    register_nav_menu('main-menu', 'Main menu');
    register_nav_menu('footer-menu', 'Footer menu');
  }
endif;
add_action('after_setup_theme', 'register_navwalker');


/**
 * Load Jetpack compatibility file
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}


// Add custom user roles
function add_custom_roles() {
    add_role('teacher', 'Teacher', array(
        'read' => true,
        'edit_posts' => false,
        'delete_posts' => false,
    ));
    
    add_role('student', 'Student', array(
        'read' => true,
        'edit_posts' => false,
        'delete_posts' => false,
    ));
}
add_action('init', 'add_custom_roles');

// Restrict access to administrator dashboard for teachers
function restrict_teacher_dashboard_access() {
    if (current_user_can('teacher') && is_admin()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('admin_init', 'restrict_teacher_dashboard_access');

// Add capabilities for students to receive tasks and upload submissions
function add_student_capabilities() {
    $student = get_role('student');
    $student->add_cap('edit_pages');
    $student->add_cap('upload_files');
}
add_action('init', 'add_student_capabilities');
