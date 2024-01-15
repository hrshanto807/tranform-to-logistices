<?php

/**
 * Template Name: Service
 */
get_header();

?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php $service_hero_bg = tranform_get_option('service-hero-bg');
                                                                if (!empty($service_hero_bg)) {
                                                                    echo esc_url($service_hero_bg['url']);
                                                                };
                                                                ?>);">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-xl-6 col-md-12 col-sm-12">
                <h6><?php echo get_the_title(get_queried_object_id()); ?></h6>
                <h1><?php if (!empty(tranform_get_option('service-hero-title'))) {
                        echo esc_html(tranform_get_option('service-hero-title'));
                    }; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- tal hero section area end -->
<!-- service area start -->
<section class="tal-what-we-do-area-all">
    <div class="container">
        <div class="tal-what-we-do-area text-center">
            <div class="row">
                <div class="col-12 service-headeing">
                    <h6><?php if (!empty(tranform_get_option('service-name'))) {
                            echo esc_html(tranform_get_option('service-name'));
                        }; ?></h6>
                    <h2><?php if (!empty(tranform_get_option('service-title'))) {
                            echo esc_html(tranform_get_option('service-title'));
                        }; ?>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row all-single-what-we-do-area">
                            <?php $transform_services = new WP_Query(array(
                                'post_type' => 'transform-sevice',
                                'posts_per_page' => 6,
                                'order' => 'asc'
                            ));
                            if ($transform_services->have_posts()) : while ($transform_services->have_posts()) : $transform_services->the_post();

                            ?>

                                    <!-- single what do we area start -->
                                    <div class="col-xl-4 col-md-6">
                                        <div class="single-what-do-we-do-service">
                                            <?php if (has_post_thumbnail()) {
                                                the_post_thumbnail('tal-service-thumb');
                                            }; ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <h3><?php the_title(); ?></h3>
                                            </a>
                                            <p><?php echo wp_trim_words(get_the_content(), 20, NULL) ?></p>

                                        </div>
                                    </div>
                                    <!-- single what do we area end -->
                            <?php endwhile;
                            endif; ?>

                        </div>
                    </div>

                </div>
            </div>
            <a href="<?php the_permalink(); ?>" class="tall-btn-2">More Work</a>
        </div>
</section>
<!-- service area end -->
<!-- our goodness area start -->
<section class="all-tal-goodness-area-start">
    <div class="container">
        <div class="tal-our-goodness-area">
            <div class="row">
                <div class="col-12 service-headeing">
                    <h6><?php if (!empty(tranform_get_option('our-goodness-name'))) {
                            echo esc_html(tranform_get_option('our-goodness-name'));
                        }; ?></h6>
                    <h2><?php if (!empty(tranform_get_option('our-goodness-title'))) {
                            echo esc_html(tranform_get_option('our-goodness-title'));
                        }; ?>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-xl-8">
                        <img src="<?php $goodness_img = tranform_get_option('our-goodness-thumb');
                                    if (!empty($goodness_img)) {
                                        echo esc_url($goodness_img['url']);
                                    }; ?>" alt="">
                    </div>
                    <div class="col-xl-4">
                        <div class="tal-all-goodness-content-area">
                            <?php $our_goodness_content = tranform_get_option('goodness-repeater');
                            if (!empty($our_goodness_content)) : foreach ($our_goodness_content as $goodness) :;

                            ?>
                                    <!-- single content area start-->
                                    <div class="single-tall-goodness">
                                        <img src="<?php if (!empty($goodness)) {
                                                        echo esc_url($goodness['our-goodness-img']['url']);
                                                    }; ?>" alt="">
                                        <div class="single-goodness-content">
                                            <h3><?php if (!empty($goodness)) {
                                                    echo esc_html($goodness['our-goodness-heading']);
                                                }; ?></h3>
                                            <p><?php if (!empty($goodness)) {
                                                    echo esc_html($goodness['our-goodness-content']);
                                                }; ?></p>
                                        </div>
                                    </div>
                                    <!-- single content area end-->
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- our goodness area end -->
<!-- tall testimonial area start  -->
<section class="tall-testimonial-area-all">
    <div class="container">
        <div class="tal-testimonial-area">
            <h6><?php if (!empty(tranform_get_option('home-Feedback-name'))) {
                            echo esc_html(tranform_get_option('home-Feedback-name'));
                        }; ?></h6>
            <h2><?php if (!empty(tranform_get_option('home-Feedback-title'))) {
                            echo esc_html(tranform_get_option('home-Feedback-title'));
                        }; ?></h2>
            <div class="tall-slide-area-all row owl-carousel">
            <?php $testimonial_content = tranform_get_option('home-Feedback-repeater');
                            if (!empty($testimonial_content)) : foreach ($testimonial_content as $testimonial) :;

                            ?>
                <!-- single owl cerousel area start -->
                <div class="single-testimonial-area col-xl-12">
                    <div class="single-testi-upper-area d-flex justify-content-between align-items-center">
                        <div class="testi-profile-area">
                            <img src="<?php if (!empty($testimonial)) {
                                                        echo esc_url($testimonial['people-img']['url']);
                                                    }; ?>" alt="">
                            <div class="img-testi-area-name">
                                <h4><?php if (!empty($testimonial)) {
                                                    echo esc_html($testimonial['people-name']);
                                                }; ?></h4>
                                <p><?php if (!empty($testimonial)) {
                                                    echo esc_html($testimonial['people-company']);
                                                } ;?></p>
                            </div>
                        </div>
                        <img src="<?php if (!empty($testimonial)) {
                                                        echo esc_url($testimonial['home-Feedback-img']['url']);
                                                    } ?>" alt="">
                    </div>
                    <p><?php if (!empty($testimonial)) {
                                                    echo esc_html($testimonial['home-Feedback-Content']);
                                                } ?></p>
                    <div class="testi-star">
                    <?php $start_icon = $testimonial['feedback-start-repeater'];
                                if (!empty($start_icon)) : foreach ($start_icon as $start) : ?>
                        <i class="<?php if(!empty($start)){
                            echo esc_attr($start['feedback-start']);
                        };?>"></i>
                        <?php endforeach;
                            endif; ?>
                    </div>
                </div>
                <!-- single owl cerousel area end -->
                <?php endforeach;
                            endif; ?>               
            </div>
        </div>
    </div>
</section>
<!-- tall testimonial area end -->
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
                <?php endforeach;endif;?>
            </div>
        </div>
    </div>
</section>
<!-- clients sataisfy number area end -->
<?php get_footer(); ?>