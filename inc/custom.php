<?php

/**
 * Register Custom Post Type
 */
if (!defined('ABSPATH')) {
    exit;
}

function transform_custom_posts()
{
    // register CPT Services
    register_post_type('transform-sevice', array(
        'labels'  =>  array(
            'name'             => esc_html(__('Services', 'transform')),
            'singular_name'    => esc_html(__('Service', 'transform')),
            'add_new'          => esc_html(__('Add New Service', 'transform')),
            'not_found'        => esc_html(__('not found Service', 'transform')),
            'edit_item'        => esc_html(__('Edit Service', 'transform')),
            'add_new_item'     => esc_html(__('Add New Service', 'transform')),
            'featured_image'   => esc_html(__('Service  Image', 'transform')),
            'set_featured_image' => esc_html(__('Set Service  Image', 'transform')),
            'remove_featured_image' => esc_html(__('Remove Service  Image', 'transform')),
        ),
        'menu_icon'      => 'dashicons-admin-tools',
        'rewrite'        => array(
            'slug'             => 'service'
        ),
        'capability_type' => 'page',
        'public'         => true,
        'supports'   => array('title', 'editor', 'thumbnail')
    ));
    // register CPT teams
    register_post_type('transform-teams', array(
        'labels'  =>  array(
            'name'             => esc_html(__('Teams', 'transform')),
            'singular_name'    => esc_html(__('Team', 'transform')),
            'add_new'          => esc_html(__('Add New Team', 'transform')),
            'not_found'        => esc_html(__('not found Team', 'transform')),
            'edit_item'        => esc_html(__('Edit Team', 'transform')),
            'add_new_item'     => esc_html(__('Add New Team', 'transform')),
            'featured_image'   => esc_html(__('Team Member Image', 'transform')),
            'set_featured_image' => esc_html(__('Set Team Member Image', 'transform')),
            'remove_featured_image' => esc_html(__('Remove Team Member Image', 'transform')),
        ),
        'menu_icon'      => 'dashicons-groups',
        'rewrite'        => array(
            'slug'             => 'team'
        ),
        'capability_type' => 'page',
        'public'         => true,
        'supports'   => array('title', 'editor', 'thumbnail')
    ));
    // register CPT FAQs
    register_post_type('transform-faq', array(
        'labels'        =>  array(
            'name'            =>  __('FAQs', 'transform'),
            'singular_name'   =>  __('FAQ', 'transform'),
            'add_new'         =>  __('Add New FAQ', 'transform'),
            'add_new_item'       =>  __('Add New Item FAQ', 'transform'),
            'edit_item'       =>  __('Edit FAQ', 'transform'),
            'view_item'       =>  __('View FAQ', 'transform'),
            'view_items'       =>  __('View FAQ', 'transform'),
            'new_items'       =>  __('New FAQ', 'transform'),
            'not_found'       =>   __('Sorry! Not FAQs Found', 'transform'),
            'item_published'  => __('View FAQs', 'transform'),
            'item_updated'  => __('View FAQs', 'transform'),
        ),
        'public'       =>  true,
        'supports'     =>  array('title', 'editor'),
        'menu_icon'    =>  'dashicons-edit',
        'rewrite'     =>   array('slug' => 'faq'),
        'capability_type'     =>  'page',
        'menu_position'     =>  15,

    ));
};


add_action('init', 'transform_custom_posts');
