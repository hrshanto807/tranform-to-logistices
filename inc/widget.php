<?php
if (!defined('ABSPATH')) {
    exit;
}

function tranform_widget_init()
{    
    register_sidebar(array(
        'name'    =>   esc_html(__('Sidbar MAin', 'tranform')),
        'id'      =>   'sidebar-1',
        'description'    =>    esc_html(__('Widgets in this area will be shown Sidbar', 'tranform')),
        'before_widget'    => '<div class="id=%s sidebar-area-tal %s">',
        'after_widget'    => '</div>',
        'before_title'    => '<h3>',
        'after_title'    => '</h3>',
    ));
};
add_action('widgets_init', 'tranform_widget_init');
