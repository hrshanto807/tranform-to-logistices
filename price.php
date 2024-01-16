<?php

/**
 * Template Name: Prices
 */
get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area mb-5 pb-5" style="background-image: url(<?php $price_hero_bg = tranform_get_option('price-hero-bg');
                                                                if (!empty($price_hero_bg)) {
                                                                    echo esc_url($price_hero_bg['url']);
                                                                };
                                                                ?>);">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-xl-6 col-md-12 col-sm-12">
                <h6><?php echo get_the_title(get_queried_object_id()); ?></h6>
                <h1><?php if (!empty(tranform_get_option('price-hero-title'))) {
                        echo esc_html(tranform_get_option('price-hero-title'));
                    }; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- tal hero section area end -->
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
                                            }; ?></p>
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
                                        <i class="<?php if (!empty($start)) {
                                                        echo esc_attr($start['feedback-start']);
                                                    }; ?>"></i>
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
<?php get_footer(); ?>