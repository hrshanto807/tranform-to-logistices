<?php
get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php $project_single_hero_bg = tranform_get_option('project-single-hero-bg');
                                                                if (!empty($project_single_hero_bg)) {
                                                                    echo esc_url($project_single_hero_bg['url']);
                                                                };
                                                                ?>);">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-xl-6 col-md-12 col-sm-12">
                <h6><?php if (!empty(tranform_get_option('project-single-hero-name'))) {
                        echo esc_html(tranform_get_option('project-single-hero-name'));
                    }; ?></h6>
                <h1><?php echo get_the_title(get_queried_object_id()); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- tal hero section area end -->
<!-- Projects Details area start  -->
<section class="project-details-heading-area-all">
    <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="project-details-area-heading">
            <div class="row text-center">
                <div class="col-xl-6">
                    <div class="project-details-thumb">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/project-1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 d-flex align-items-center">
                    <div class="project-details-hedaing-content-area">
                        <div class="single-project-details-heading">
                            <h4>Customer :</h4>
                            <a href="#"><?php $customaer_name = get_post_meta(get_the_ID(),'customar_name',true);
                        if(!empty($customaer_name)){echo esc_html($customaer_name);};?></a>
                        </div>
                        <div class="single-project-details-heading">
                            <h4>Category :</h4>
                            <?php $custom_post_cats = get_the_terms(get_the_ID(), 'project-cat');
                            if (!empty($custom_post_cats)) : foreach ($custom_post_cats as $cats) : ?>
                                    <a href="<?php echo esc_html($cats->slug); ?>"><?php echo esc_html($cats->name); ?></a>
                            <?php endforeach;
                            endif; ?>
                        </div>
                        <div class="single-project-details-heading">
                            <h4>Date :</h4>
                            <a href="<?php the_permalink();?>"><?php echo get_the_date();?></a>
                        </div>
                        <div class="single-project-details-heading">
                            <h4>Status :</h4>
                            <a href="#"><?php $post_status= get_post_meta(get_the_ID(),'post_status',true);
                        if(!empty($post_status)){echo esc_html($post_status);};?></a>
                        </div>
                        <div class="single-project-details-heading">
                            <h4>Tags :</h4>
                            <?php $custom_post_tags = get_the_terms(get_the_ID(), 'tal_portofollio_tags');
                            if (!empty($custom_post_tags)) : foreach ($custom_post_tags as $tag) : ?>
                                    <a href="<?php echo esc_html($tag->slug); ?>"><?php echo esc_html($tag->name); ?></a>
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <?php endwhile;endif;?>
    </div>
</section>
<!-- Projects Details area end  -->
<!-- project details cotnent area start -->
<section class="project-dtails-content-area-all">
    <div class="container">
        <div class="project-details-content-area">
            <div class="row">
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>
<section class="video-content-project-details">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-video-content-area" style="background-image: url(<?php $video_bg = get_post_meta(get_the_ID(),'project_video_bg',true);
                        if(!empty($video_bg)){echo esc_url($video_bg);};?>);">
                    <a class="popup-youtube" href="<?php $video = get_post_meta(get_the_ID(),'project-video',true);
                        if(!empty($video)){echo esc_url($video);};?>"><img src="<?php $video_img = get_post_meta(get_the_ID(),'project_video_img',true);
                     if(!empty($video_img)){echo esc_url($video_img);};?>" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project details cotnent area start -->
<!-- project content area all start-->
<section class="tal-project-area-all">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="projects-heading">
                    <h2>Related Project</h2>
                </div>
            </div>
        </div>
        <div class="tal-project-area">
            <div class="row">
                <?php $transform_project = new WP_Query(array(
                    'post_type' => 'tranform-projects',
                    'posts_per_page' => 3,
                    'order' => 'asc'
                ));
                if ($transform_project->have_posts()) : while ($transform_project->have_posts()) : $transform_project->the_post();
                ?>
                        <!-- single project img start -->
                        <div class="col-xl-4 col-md-6">
                            <div class="project-thumb position-relative">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('tal-project-thumb');
                                }; ?>
                                <a href="<?php the_permalink() ?>"><i class="fa-solid fa-up-right-from-square"></i></a>
                            </div>
                        </div>
                        <!-- single project img end -->
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- project content area all end-->
<?php get_footer(); ?>