<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <!-- header Top area start -->
        <section class="header-top-area-all">
            <div class="container">
                <div class="tal-header-top-area d-flex justify-content-between align-items-center">
                    <div class="header-logo-area">
                        <img src="<?php $log_header = tranform_get_option('logo-header');
                                    if (!empty($log_header)) {
                                        echo esc_url($log_header['url']);
                                    };
                                    ?>" alt="">
                    </div>
                    <div class="header-contact-area d-flex justify-content-center gap-5">
                        <!-- single content header start -->
                        <?php $HEADER_LEFT = tranform_get_option('home-header_top-repeater');
                        if (!empty($HEADER_LEFT)) : foreach ($HEADER_LEFT as $header_left) :; ?>
                                <div class="tal-single-header-content">
                                    <i class="<?php if (!empty($header_left)) {
                                    echo esc_attr($header_left['header-left-icon']);
                                } ?>"></i>
                                    <h6 class="text-white"><?php if (!empty($header_left)) {
                                    echo wp_kses($header_left['header-left-content'],transform_allow_tag());
                                } ?>
                                    </h6>
                                </div>
                        <?php endforeach;
                        endif; ?>                       
                    </div>
                </div>
            </div>
        </section>
        <!-- header Top area end -->
        <!-- header bootm area start -->
        <section class="tal-header-main-area-area-all">
            <div class="container">
                <div class="header-tall-header-main-area d-flex align-items-center justify-content-between">
                    <!-- header menu area start -->
                    <div class="header-menu">
                        <nav class="navbar navbar-expand-lg tal-primary-menu">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="menu-toggle">
                                        <i class="fa-solid fa-bars"></i>
                                    </span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <?php wp_nav_menu(array(
                                        'theme_location'  =>  'main-menu',
                                        'menu_class'      =>  'navbar-nav',
                                        "container"       =>  '',
                                        'walker'          => new WP_Bootstrap_Navwalker(),

                                    ));
                                    ?>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- header menu area end -->
                    <!-- header right area start -->
                    <div class="tal-header-right">
                        <div class="tal-header-icon">
                        <?php $HEADER_SOCIAL = tranform_get_option('header-social-repeater');
                        if (!empty($HEADER_SOCIAL)) : foreach ($HEADER_SOCIAL as $heaser_social) :; ?>
                            <a href="<?php if (!empty($header_left)) {
                                    echo esc_url($heaser_social['header_social-link']);
                                } ?>"><i class="<?php if (!empty($heaser_social)) {
                                    echo esc_attr($heaser_social['header_social-icon']);
                                } ?>"></i></a>
                            <?php endforeach;endif;?>                           
                        </div>
                        <a href="<?php the_permalink()?>" class="tal-btn">Request Quote</a>
                    </div>
                    <!-- header right area end -->
                </div>
            </div>
        </section>
        <!-- header bootm area end -->
    </header>
    <main>