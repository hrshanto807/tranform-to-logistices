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

     // Register CPT Project 

     register_post_type('tranform-projects', array(
        'labels'     => array(
            'name'             => esc_html(__('projects', 'tranform')),
            'singular_name'    => esc_html(__('project', 'tranform')),
            'add_new'          => esc_html(__('Add New project', 'tranform')),
            'not_found'        => esc_html(__('not project found', 'tranform')),
            'add_new_item'     => esc_html(__('Add New project', 'tranform')),
            'edit_item'        => esc_html(__('Edit project', 'tranform')),


        ),
        'public'     => true,
        'rewrite'    => array(
            'slug'               => 'project'
        ),
        'menu_icon'  =>  'dashicons-editor-spellcheck',
        'capability_type' => 'page',
        'supports'     =>  array('title', 'editor', 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes', 'thumbnail', 'custom-fields', 'post-formats'),

    ));
    register_taxonomy(
        'project-cat',   // register name
        'tranform-projects', // Post Type
        array(
            'hierarchical'   => true,
            'label'          => 'Categories', // Display Name
            'query_var'      => true,
            'show_admin_column' =>true,
            'rewrite'       => array( 
                'slug'     =>  'project-catagory',// ths controls the base slug that will display before each term
                'with_front'=> true // Don't display the catagory base before
            )
        ),
    );
     // resister tag
     register_taxonomy(
        'tal_portofollio_tags',  // Change this to your desired taxonomy name
        'tranform-projects',  // Change this to your custom post type name
        array(
            'label' => 'Custom Post Tags',
            'hierarchical' => false,
            'public' => true,
            'rewrite' => array('slug' => 'project_tags'),
        )
    );

};

add_action('init', 'transform_custom_posts');
