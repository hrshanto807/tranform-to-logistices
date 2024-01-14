<?php
// blog page Meta List

function aepexpart_blog_post_fileds()
{
    $blog_post = new_cmb2_box(array(
        'id' => 'meta-blog-list',
        'title' => esc_html(__('Meta List', 'tranform')),
        'object_types'  => array('post'),


    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Profile Image', 'tranform'),
        'desc' => esc_html__('Upload an image or enter a URL.', 'tranform'),
        'id'   => 'image-profile',
        'type' => 'file',
    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Name Author', 'tranform'),
        'desc' => esc_html__('name your author', 'tranform'),
        'id'   => 'name-author',
        'type' => 'text',
    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Position Author', 'tranform'),
        'desc' => esc_html__('Position your author', 'tranform'),
        'id'   => 'position-author',
        'type' => 'text',
    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Some Text About Your Author', 'tranform'),
        'desc' => esc_html__('Write Your about Author', 'tranform'),
        'id'   => 'content-author',
        'type' => 'textarea',
    ));
    // Autor Social Link
    $blog_post->add_field(array(
        'id'          => 'social_repeat_group',
        'type'        => 'group',
        'description' => __('You Can Only 4 Social link Add Here', 'tranform'),
        'repeatable'  => true,
        'options'     => array(
            'group_title'       => __('Social {#}', 'tranform'),
            'add_button'        => __('Add Another Social', 'tranform'),
            'remove_button'     => __('Remove Social', 'tranform'),
            'sortable'          => true,
        ),
    ));
    $blog_post->add_group_field(
        'social_repeat_group',
        array(
            'name' => 'Social Icon',
            'id'   => 'social_icon',
            'type' => 'faiconselect',
            'options_cb' => 'returnRayFapsa',
            'attributes' => array(
                'faver' => 5
            ),
            'sortable' => true,
            'limit'         => 4,

        )
    );
    $blog_post->add_group_field('social_repeat_group', array(
        'name' => 'Social Link',
        'id'   => 'social_link',
        'type' => 'text',
        'sortable' => true,
        'limit'         => 4
    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Date', 'tranform'),
        'desc' => esc_html__('Date Input Here', 'tranform'),
        'id'   => 'date-create-post',
        'type' => 'text_date',
    ));
    $blog_post->add_field(array(
        'name' => esc_html__('Button Link', 'tranform'),
        'desc' => esc_html__('field description', 'tranform'),
        'id'   => 'button-link',
        'type' => 'text_url',

    ));

    $blog_post->add_field(array(
        'name' => esc_html__('Write Button Name', 'tranform'),
        'desc' => esc_html__('Write Button Name', 'tranform'),
        'id'   => 'button-name',
        'type' => 'text',
    ));
}
add_action('cmb2_admin_init', 'aepexpart_blog_post_fileds');


// Team page Meta List

function aepexpart_team_post_fileds()
{
    $team_post = new_cmb2_box(array(
        'id' => 'meta-team-social-list',
        'title' => esc_html(__('Social List', 'tranform')),
        'object_types'  => array('tranform-teams'),


    ));
    // single page meta
    $team_post->add_field(array(
        'name' => esc_html__('Thumbnail Uper BG', 'tranform'),
        'desc' => esc_html__('Thumbnail Uper BG', 'tranform'),
        'id'   => 'thumb-bg',
        'type' => 'file',
    ));
    $team_post->add_field(array(
        'name' => esc_html__('Position Member', 'tranform'),
        'desc' => esc_html__('Position your Member', 'tranform'),
        'id'   => 'position-team',
        'type' => 'text',
    ));   
    // team Social Link
    $team_post->add_field(array(
        'id'          => 'team-social_repeat_group',
        'type'        => 'group',
        'description' => __('You Can Only 4 Social link Add Here', 'tranform'),
        'repeatable'  => true,
        'options'     => array(
            'group_title'       => __('Social {#}', 'tranform'),
            'add_button'        => __('Add Another Social', 'tranform'),
            'remove_button'     => __('Remove Social', 'tranform'),
            'sortable'          => true,
        ),
    ));
    $team_post->add_group_field(
        'team-social_repeat_group',
        array(
            'name' => 'Social Icon',
            'id'   => 'team-social_icon',
            'type' => 'faiconselect',
            'options_cb' => 'returnRayFapsa',
            'attributes' => array(
                'faver' => 5
            ),
            'sortable' => true,
            'limit'         => 4,

        )
    );
    $team_post->add_group_field('team-social_repeat_group', array(
        'name' => 'Social Link',
        'id'   => 'team-social_link',
        'type' => 'text',
        'sortable' => true,
        'limit'         => 4
    ));
   
}
add_action('cmb2_admin_init', 'aepexpart_team_post_fileds');

// Team page Meta List

function aepexpart_portfollio_fileds()
{
    $team_post = new_cmb2_box(array(
        'id' => 'meta-button',
        'title' => esc_html(__('Button Name Link', 'tranform')),
        'object_types'  => array('aep-portfolio'),


    ));
    // single page meta
    $team_post->add_field(array(
        'name' => esc_html__('Button NAme', 'tranform'),
        'desc' => esc_html__('Write Name Your Button', 'tranform'),
        'id'   => 'port-btn',
        'type' => 'text',
    ));
    $team_post->add_field(array(
        'name' => esc_html__('Button Link', 'tranform'),
        'desc' => esc_html__('Set Button Link', 'tranform'),
        'id'   => 'port-btn-link',
        'type' => 'text',
    ));   
   
}
add_action('cmb2_admin_init', 'aepexpart_portfollio_fileds');
// Testi icon

function aepexpart_testimonial_fileds()
{
    $team_post = new_cmb2_box(array(
        'id' => 'testi-icon',
        'title' => esc_html(__('TestiMonial Icon', 'tranform')),
        'object_types'  => array('tranform-testimonial'),


    ));
    // single page meta
    $team_post->add_field(array(
        'name' => esc_html__('Icon', 'tranform'),
        'desc' => esc_html__('Slect Your Icon', 'tranform'),
        'id'   => 'test-icon',
        'type' => 'faiconselect',
        'options_cb' => 'returnRayFapsa',
        'attributes' => array(
            'faver' => 5
        ),
    ));

}
add_action('cmb2_admin_init', 'aepexpart_testimonial_fileds');
