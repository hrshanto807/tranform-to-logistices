<?php
get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php $service_single_hero_bg = tranform_get_option('service-single-hero-bg');
                                                                if (!empty($service_single_hero_bg)) {
                                                                    echo esc_url($service_single_hero_bg['url']);
                                                                };
                                                                ?>);">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-xl-6 col-md-12 col-sm-12">
                <h6><?php echo get_the_date(); ?></h6>
                <h1><?php echo get_the_title(get_queried_object_id()); ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- tal hero section area end -->
<section class="tal-service-details-area-all">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="tal-service-details-area">
                    <div class="row">
                        <div class="col-12">
                            <div class="service-details-heading">
                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('tal-service-thumb');
                                            }; ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <h3><?php the_title(); ?></h3>
                                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php the_content(); ?>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>