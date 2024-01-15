<?php
// blog page Meta List

function transform_blog_post_fileds()
{
    $blog_post = new_cmb2_box(array(
        'id' => 'meta-blog-list',
        'title' => esc_html(__('Meta List', 'tranform')),
        'object_types'  => array('post'),
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
}
add_action('cmb2_admin_init', 'transform_blog_post_fileds');


// project page Meta List

function transform_project_post_fileds()
{
    $project = new_cmb2_box(array(
        'id' => 'meta-project-list',
        'title' => esc_html(__('Meta List', 'tranform')),
        'object_types'  => array('tranform-projects'),
    ));    
    // projects meta
    $project->add_field(array(
        'id' => 'customar_name',
        'name' => __('customar name', 'Transform'),
        'desc' => __('customar name'),
        'type' => 'text',
    ));
    $project->add_field(array(
        'id' => 'post_status',
        'name' => __('Post Status', 'Transform'),
        'desc' => __('Post Status'),
        'type' => 'text',
    ));
    $project->add_field(array(
        'id' => 'project_video_bg',
        'name' => __('Project Video Bg', 'Transform'),
        'desc' => __('Project Video Bg'),
        'type' => 'file',
    ));
    $project->add_field(array(
        'id' => 'project_video_img',
        'name' => __('Project Video img', 'Transform'),
        'desc' => __('Project Video img'),
        'type' => 'file',
    ));
    $project->add_field(array(
        'id' => 'project-video',
        'name' => __('Project Video', 'transform'),
        'desc' => __('Input Your Project Video'),
        'type' => 'oembed',
    ));

}
add_action('cmb2_admin_init', 'transform_project_post_fileds');


