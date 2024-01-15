<?php

/**
 * Template Name: Contact
 */
get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php $contact_hero_bg = tranform_get_option('contact-hero-bg');
                                                                if (!empty($contact_hero_bg)) {
                                                                    echo esc_url($contact_hero_bg['url']);
                                                                };
                                                                ?>);">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-xl-6 col-md-12 col-sm-12">
                <h6><?php echo get_the_title(get_queried_object_id()); ?></h6>
                <h1><?php echo get_the_title(get_queried_object_id()); ?> Us</h1>
            </div>
        </div>
    </div>
</section>
<!-- tal hero section area end -->
<!-- tall contact form area start -->
<section class="tall-all-contact-form-all">
    <div class="container">
        <div class="contact-form-area">
            <div class="row">
                <!-- contact form start -->
                <div class="col-xl-12">
                    <div class="contact-heading-content-area text-center">
                        <h6 class="text-white"><?php echo get_the_title(get_queried_object_id()); ?></h6>
                        <h2 class="text-white"><?php if (!empty(tranform_get_option('contact-us-title'))) {
                                                    echo esc_html(tranform_get_option('contact-us-title'));
                                                }; ?></h2>
                        <p class="text-white"><?php if (!empty(tranform_get_option('contact-us-content'))) {
                                                    echo esc_html(tranform_get_option('contact-us-content'));
                                                }; ?></p>
                        <div class="single-contact-area d-flex justify-content-around mb-5">
                            <?php $contact_reapeater = tranform_get_option('contact-repeater');
                            if (!empty($contact_reapeater)) : foreach ($contact_reapeater as $contact) :;
                            ?>
                                    <div class="single-tal-contact-area d-flex flex-column">
                                        <i class="<?php if (!empty($contact)) {
                                                        echo esc_attr($contact['contact-icon']);
                                                    }; ?>"></i>
                                        <a href="<?php if (!empty($contact)) {
                                                        echo esc_url($contact['contact-link']);
                                                    }; ?>"><?php if (!empty($contact)) {
                                                        echo esc_html($contact['contact-title']);
                                                    }; ?><br>
                                            <span><?php if (!empty($contact)) {
                                                        echo esc_html($contact['contact-content']);
                                                    }; ?></span></a>
                                    </div>
                                    <!-- single contact area end -->
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                    <div class="contact-form">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
            <!-- contact form end -->
        </div>
    </div>
    </div>
</section>
<!-- tall contact form area end -->
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
            if(!empty($brand_loago)):foreach($brand_loago as $brand_logo):;?>
            <img src="<?php if(!empty($brand_logo)){
                echo esc_url($brand_logo['brand-logo']['url']);
            }?>" alt="">
            <?php endforeach;endif;?>           
        </div>
    </div>
</section>
<!-- brand logo area end  -->
<?php get_footer(); ?>