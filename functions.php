<?php
define('TRANSFORM_THEME_INC', get_template_directory());
// functions all scripts here
function transform_scripts_all()
{
    // all style fill enqueue here
    wp_enqueue_style('bootstrap', get_theme_file_uri('/asset/css/bootstrap.min.css'));
    wp_enqueue_style('fontawsome', get_theme_file_uri('/asset/fontawsome/css/all.min.css'));
    wp_enqueue_style('owl-carousel', get_theme_file_uri('/asset/css/owl.carousel.min.css'));
    wp_enqueue_style('owl-theme-default', get_theme_file_uri('/asset/css/owl.theme.default.min.css'));
    wp_enqueue_style('magnific-popup', get_theme_file_uri('/asset/css/magnific-popup.css'));
    wp_enqueue_style('tal-main-css', get_theme_file_uri('/asset/css/main.css'));

    // all scripts fill enqueue here
    wp_enqueue_script('magnific-popup', get_theme_file_uri('/asset/js/jquery.magnific-popup.min.js'), array('jquery'), '3.7.1', true);

    wp_enqueue_script('bootstrap', get_theme_file_uri('/asset/js/bootstrap.bundle.min.js'), array('jquery'), '3.7.1', true);

    wp_enqueue_script('owl-carousel', get_theme_file_uri('/asset/js/owl.carousel.min.js'), array('jquery'), '3.7.1', true);

    wp_enqueue_script('tal-custom-js', get_theme_file_uri('/asset/js/custom.js'), array('jquery'), '3.7.1', true);
};
add_action('wp_enqueue_scripts', 'transform_scripts_all');

// file inclclude area here
require_once TRANSFORM_THEME_INC . '/inc/codestar-framework/codestar-framework.php';
require_once TRANSFORM_THEME_INC . '/inc/codestar-framework/theme-option.php';
require_once TRANSFORM_THEME_INC . '/inc/CMB2-develop/init.php';
require_once TRANSFORM_THEME_INC . '/inc/CMB2-develop/meta-option-fild.php';
require_once TRANSFORM_THEME_INC . '/inc/cmb2-aiconselect/iconselect.php';
//require_once TRANSFORM_THEME_INC . '/inc/CMB2-develop/meta-option-fild.php';
