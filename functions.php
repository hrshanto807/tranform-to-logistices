<?php
define('TRANSFORM_THEME_INC', get_template_directory());
// GEnarel Here

function all_tranform_theme_genarel(){
    add_theme_support('post-thumbnails');
    add_image_size('tal-blog-thumb', 453, 308,true);
    add_image_size('tal-service-thumb', 50, 56,false);
    add_image_size('tal-project-thumb', 379, 346,false);

};
add_action('after_setup_theme','all_tranform_theme_genarel');
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


// A Custom function for get an option
if (!function_exists('tranform_get_option')) {
    function tranform_get_option($option = '', $default = null)
    {
        $options = get_option('tranform_framwork'); // Attention: Set your unique id of the framework
        return (isset($options[$option])) ? $options[$option] : $default;
    }
}


// fix for $asset_path_issue
function aep_social_meta_icon() {
    return get_template_directory_uri() . '/inc/cmb2-aiconselect'; //Change to correct path.
}

add_filter( 'sa_cmb2_field_faiconselect_asset_path', 'aep_social_meta_icon' );

//  allow html tag
function transform_allow_tag()
{
    $allow_tags = array(
        'br'  => array(),
    );
    return $allow_tags;
};

// file inclclude area here
require_once TRANSFORM_THEME_INC . '/inc/codestar-framework/codestar-framework.php';
require_once TRANSFORM_THEME_INC . '/inc/codestar-framework/theme-option.php';
require_once TRANSFORM_THEME_INC . '/inc/CMB2-develop/init.php';
require_once TRANSFORM_THEME_INC . '/inc/CMB2-develop/meta-option-fild.php';
require_once TRANSFORM_THEME_INC . '/inc/cmb2-aiconselect/iconselect.php';
require_once TRANSFORM_THEME_INC . '/inc/widget.php';
require_once TRANSFORM_THEME_INC . '/inc/custom.php';
require_once TRANSFORM_THEME_INC . '/inc/shortcode.php';
