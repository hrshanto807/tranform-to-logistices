<?php

/**
 * Template Name:  About
 */
get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php $about_hero_bg = tranform_get_option('about-hero-bg');
                                                                if (!empty($about_hero_bg)) {
                                                                    echo esc_url($about_hero_bg['url']);
                                                                };
                                                                ?>);">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-xl-6 col-md-12 col-sm-12">
                <h6><?php echo get_the_title(get_queried_object_id()); ?></h6>
                <h1><?php if (!empty(tranform_get_option('about-hero-title'))) {
                        echo esc_html(tranform_get_option('about-hero-title'));
                    }; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- tal hero section area end -->
<!-- about us section satart-->
<section class="tall-about-us-all-area">
    <div class="container">
        <div class="tall-about-us-area">
            <div class="row">
                <div class="col-xl-8">
                    <div class="about-us-thumb-area">
                        <img src="<?php $about_thumb= tranform_get_option('about-thumb');
                                                                if (!empty($about_thumb)) {
                                                                    echo esc_url($about_thumb['url']);
                                                                };
                                                                ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="about-us-tal-content-area-all mt-5">
                        <h6><?php if (!empty(tranform_get_option('about-name'))) {
                        echo esc_html(tranform_get_option('about-name'));
                    }; ?></h6>
                        <h2><?php if (!empty(tranform_get_option('about-title'))) {
                        echo esc_html(tranform_get_option('about-title'));
                    }; ?></h2>
                        <p><?php if (!empty(tranform_get_option('about-content'))) {
                        echo esc_html(tranform_get_option('about-content'));
                    }; ?></p>
                        <div class="about-us-tab-area-start">
                        <?php the_content();?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about us section end-->
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
<!-- tall- team area start -->
<section class="tal-team-area-start-all">
    <div class="container">
        <div class="tall-team-area">
            <!-- team-heading -->
            <div class="row">
                <div class="col-12 tal-headig-blog-area">
                    <h6>The Transporters</h6>
                    <h2>Meet Expert Team</h2>
                </div>
            </div>
            <div class="row team-al-tal-area">
                <!-- single team area start -->
                <div class="col-xl-4 ">
                    <div class="single-team-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/team-1.png" alt="">
                        <div class="single-team-full-content-area">
                            <div class="single-team-area-content">
                                <h4>Jessca Arow</h4>
                                <p>Designer</p>
                            </div>
                            <div class="single-team-social-area">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single team area end -->
                <!-- single team area start -->
                <div class="col-xl-4">
                    <div class="single-team-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/team-2.png" alt="">
                        <div class="single-team-full-content-area">
                            <div class="single-team-area-content">
                                <h4>Jessca Arow</h4>
                                <p>Designer</p>
                            </div>
                            <div class="single-team-social-area">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single team area end -->
                <!-- single team area start -->
                <div class="col-xl-4">
                    <div class="single-team-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/team-3.png" alt="">
                        <div class="single-team-full-content-area">
                            <div class="single-team-area-content">
                                <h4>Jessca Arow</h4>
                                <p>Designer</p>
                            </div>
                            <div class="single-team-social-area">
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single team area end -->
            </div>
        </div>
    </div>
</section>
<!-- tall- team area end -->
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
<!-- pricing area start -->
<section class="tal-pricing-area-all mt-5 pt-5">
    <div class="container">
        <div class="pricing-tal-area">
            <div class="row">
                <div class="col-12 service-headeing">
                    <h6><?php if (!empty(tranform_get_option('price-name'))) {
                        echo esc_html(tranform_get_option('price-name'));
                    }; ?></h6>
                    <h2><?php if (!empty(tranform_get_option('price-title'))) {
                        echo esc_html(tranform_get_option('price-title'));
                    }; ?></h2>
                </div>
            </div>
            <div class="all-single-price-list-area row">
                <?php $price_reapeter = tranform_get_option('price-repeater');
                if(!empty($price_reapeter)):foreach($price_reapeter as $price_list):;?>
                <!-- single pricing list area -->
                <div class="col-xl-4">
                    <div class="single-price-list-area">
                        <h3><?php if(!empty($price_list)){
                            echo esc_html($price_list['price-plan']);
                        };?></h3>
                        <div class="price-tal">
                            <h2><?php if(!empty($price_list)){
                            echo esc_html($price_list['price-doller']);
                        };?></h2>
                            <p><?php if(!empty($price_list)){
                            echo esc_html($price_list['price-date']);
                        };?></p>
                        </div>
                        <div class="price-list-support">
                            <?php 
                            $list_price = $price_list['price-support-repeater'];
                            if(!empty($list_price)):foreach($list_price as $list):;?>
                            <li><?php if(!empty($list)){
                                echo esc_html($list['price-support']);
                            };?></li>
                            <?php endforeach;endif;?>                            
                        </div>
                        <a href="<?php if(!empty($price_list)){
                            echo esc_url($price_list['price-button-link']);
                        };?>" class="tal-btn-2"><?php if(!empty($price_list)){
                            echo esc_html($price_list['price-button']);
                        };?></a>
                    </div>
                </div>
                <!-- single price list end -->
                <?php endforeach;endif;?>               
            </div>
        </div>
    </div>
</section>
<!-- pricing area end -->
<!-- faq area satrt  -->
<section class="tall-faq-area-all">
    <div class="container">
        <div class="faq-area-tal">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tal-testimonial-area">
                        <h6><?php if (!empty(tranform_get_option('faqs-name'))) {
                                                    echo esc_html(tranform_get_option('faqs-name'));
                                                }; ?></h6>
                        <h2><?php if (!empty(tranform_get_option('faqs-title'))) {
                                                    echo esc_html(tranform_get_option('faqs-title'));
                                                }; ?></h2>
                    </div>
                    <!-- faq section area start -->
                    <div class="tal-faq-content-area-all">
                        <!-- single faq start -->
                        <?php $faqs_area = tranform_get_option('faqs-repeater');
            if(!empty($faqs_area)):foreach($faqs_area as $faqs):;?>
                        <div class="single-accordian">
                            <div class="single-accordian-tittle">
                                <h4><?php if(!empty($faqs)){
                                    echo esc_html($faqs['faqs_heading']);
                                };?></h4>
                                <i class="fa-solid fa-chevron-right"></i>
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                            <div class="single-accordian-content">
                                <p><?php if(!empty($faqs)){
                                    echo esc_html($faqs['faqs_Content']);
                                };?>
                                </p>
                            </div>
                        </div>
                        <?php endforeach;endif;?>
                        <!-- single end -->                       
                    </div>
                    <!-- faq section area end -->
                </div>

                <div class="col-xl-6">
                    <div class="faq-thumb">
                        <img src="<?php $faqs_thumb = tranform_get_option('faqs-thumb');
                                                                if (!empty($faqs_thumb)) {
                                                                    echo esc_url($faqs_thumb['url']);
                                                                };
                                                                ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq area end -->
<!-- brand logo area start  -->
<section class="tal-brand-logo-all">
    <div class="container">
        <div class="brand-logo-img">
            <?php $brand_loago = tranform_get_option('logo-repeater');
            if (!empty($brand_loago)) : foreach ($brand_loago as $brand_logo) :; ?>
                    <img src="<?php if (!empty($brand_logo)) {
                                    echo esc_url($brand_logo['brand-logo']['url']);
                                } ?>" alt="">
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>
<!-- brand logo area end  -->
<?php get_footer(); ?>