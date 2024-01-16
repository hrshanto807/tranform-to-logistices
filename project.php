<?php

/**
 * Template Name: Projects
 */
get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php $project_hero_bg = tranform_get_option('contact-hero-bg');
                                                                if (!empty($project_hero_bg)) {
                                                                    echo esc_url($project_hero_bg['url']);
                                                                };
                                                                ?>);">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-xl-6 col-md-12 col-sm-12">
                <h6><?php echo get_the_title(get_queried_object_id()); ?></h6>
                <h1>Our <?php echo get_the_title(get_queried_object_id()); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- project content area all start-->
<section class="tal-project-area-all">
    <div class="container">
        <div class="tal-project-area">
            <div class="row">
                <?php $transform_project = new WP_Query(array(
                    'post_type' => 'tranform-projects',
                    'posts_per_page' => 6,
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
<!-- clients sataisfy number area start -->
<section class="tal-satisfiyd-area-all">
    <div class="container">
        <div class="satisfiyed-area-tal">
            <div class="row">
                <?php $satisfiyed = tranform_get_option('home-skill-repeater');
                if (!empty($satisfiyed)) : foreach ($satisfiyed as $skilled) :;

                ?>
                        <div class="col-xl-3 text-center">
                            <div class="single-satisfiyed-area border-end">
                                <h5><?php if (!empty($skilled)) {
                                        echo esc_html($skilled['home-skill-plus']);
                                    } ?></h5>
                                <h4><?php if (!empty($skilled)) {
                                        echo esc_html($skilled['home-skill-title']);
                                    } ?></h4>
                            </div>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- clients sataisfy number area end -->
<?php get_footer(); ?>