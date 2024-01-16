<?php
get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php $home_hero_bg = tranform_get_option('home-hero-bg');
                                                                if (!empty($home_hero_bg)) {
                                                                    echo esc_url($home_hero_bg['url']);
                                                                };
                                                                ?>;">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-xl-6 col-md-12 col-sm-12">
                <h6><?php echo get_the_title(get_queried_object_id()); ?></h6>
                <h1><?php if (!empty(tranform_get_option('home-hero-heading'))) {
                        echo esc_html(tranform_get_option('home-hero-heading'));
                    }; ?></h1>
                <p class="text-white"><?php if (!empty(tranform_get_option('home-hero-content'))) {
                        echo esc_html(tranform_get_option('home-hero-content'));
                    }; ?></p>
                <a href="<?php if (!empty(tranform_get_option('home-hero-btn-link'))) {
                        echo esc_url(tranform_get_option('home-hero-btn-link'));
                    }; ?>" class="tal-btuon"><?php if (!empty(tranform_get_option('home-hero-btn'))) {
                        echo esc_html(tranform_get_option('home-hero-btn'));
                    }; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- tal hero section area end -->
<!-- what we do area start -->
<section class="tal-what-we-do-area-all">
    <div class="container">
        <div class="tal-what-we-do-area">
            <div class="row">
                <div class="col-xl-4">
                    <h6><?php if (!empty(tranform_get_option('service-name'))) {
                            echo esc_html(tranform_get_option('service-name'));
                        }; ?></h6>
                    <h2><?php if (!empty(tranform_get_option('service-title'))) {
                            echo esc_html(tranform_get_option('service-title'));
                        }; ?>
                    </h2>
                </div>
                <div class="col-xl-8">
                    <div class="row all-single-what-we-do-area">
                        <?php $transform_services = new WP_Query(array(
                            'post_type' => 'transform-sevice',
                            'posts_per_page' => 4,
                            'order' => 'asc'
                        ));
                        if ($transform_services->have_posts()) : while ($transform_services->have_posts()) : $transform_services->the_post();
                        ?>
                                <!-- single what do we area start -->
                                <div class="col-xl-6">
                                    <div class="single-what-do-we-do-area">
                                        <?php if (has_post_thumbnail()) {
                                            the_post_thumbnail('tal-service-thumb');
                                        }; ?>
                                        <div class="single-what-we-do-content">
                                            <a href="<?php the_permalink(); ?>">
                                                <h3><?php the_title(); ?></h3>
                                            </a>
                                            <p><?php echo wp_trim_words(get_the_content(), 20, NULL) ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- single what do we area end -->
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- what we do area end -->
<!-- why us area start -->
<section class="why-us-main-bg" style="background-image: url(<?php $whyus_section_bg = tranform_get_option('home-why-us-section_bg');
                                                                if (!empty($whyus_section_bg)) {
                                                                    echo esc_url($whyus_section_bg['url']);
                                                                };
                                                                ?>);">
</section>
<section class="tal-why-us-area-all">
    <div class="container">
        <div class="tal-why-us-area">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tal-why-us-left-area">
                        <h6><?php if (!empty(tranform_get_option('home-why-us-name'))) {
                        echo esc_html(tranform_get_option('home-why-us-name'));
                    }; ?></h6>
                        <h2><?php if (!empty(tranform_get_option('home-why-us-heading'))) {
                        echo esc_html(tranform_get_option('home-why-us-heading'));
                    }; ?></h2>
                        <p><?php if (!empty(tranform_get_option('home-why-us-content'))) {
                        echo wp_kses(tranform_get_option('home-why-us-content'),transform_allow_tag());
                    }; ?></p>
                    <?php $why_us_area= tranform_get_option('home-why-us-repeater');
                    if(!empty($why_us_area)):foreach($why_us_area as $why_us):;?>
                        <div class="single-whyus">
                            <i class="<?php if(!empty($why_us)){
                                echo esc_attr($why_us['why-us-icon']);
                            };?>"></i>
                            <h3><?php if(!empty($why_us)){
                                echo esc_html($why_us['why-us-title']);
                            };?></h3>
                        </div>
                        <?php endforeach;endif;?>                        
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="why-us-thumb-area" style="background-image: url(<?php $whyus_bg = tranform_get_option('home-why-us-bg');
                                                                if (!empty($whyus_bg)) {
                                                                    echo esc_url($whyus_bg['url']);
                                                                };
                                                                ?>);">
                        <div class="whyus-thumb-img">
                            <img src="<?php $whyus_img = tranform_get_option('home-why-us-img');
                                                                if (!empty($whyus_img)) {
                                                                    echo esc_url($whyus_img['url']);
                                                                };
                                                                ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why us area end -->
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
<!-- tall across area start -->
<section class="tall-across-area-all">
    <div class="container">
        <div class="tall-across-area-heading text-center mb-5">
            <h2>Transporting Across The World</h2>
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
        <div class="tall-across-btn-area text-center ">
            <a href="<?php the_permalink()?>" class="tall-btn-2">More Work</a>
        </div>
    </div>
</section>
<!-- tall across area end -->
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
<!-- why choose we area start -->
<section class="tal-why-choosw-area-all">
    <div class="container">
        <div class="tal-why-chose-area">
            <div class="row">
                <div class="col-xl-8">
                    <div class="tal-why-choose-thumb">
                        <img src="<?php $why_choose_bg = tranform_get_option('why-choose-thumb');
                                                                if (!empty($why_choose_bg)) {
                                                                    echo esc_url($why_choose_bg['url']);
                                                                };
                                                                ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="tal-why-choose-content-area">
                        <h6><?php if (!empty(tranform_get_option('why-choose-name'))) {
                        echo esc_html(tranform_get_option('why-choose-name'));
                    }; ?></h6>
                        <h2><?php if (!empty(tranform_get_option('why-choose-title'))) {
                        echo esc_html(tranform_get_option('why-choose-title'));
                    }; ?></h2>
                        <p><?php if (!empty(tranform_get_option('why-choose-content'))) {
                        echo esc_html(tranform_get_option('why-choose-content'));
                    }; ?></p>
                        <div class="single-all-tal-why-choose-area">
                            <?php $vission = tranform_get_option('why-choose-repeater');
                            if(!empty($vission)):foreach($vission as $VISSION):;?>
                            <!-- single choose area start -->
                            <div class="single-tall-choose-area">
                                <img src="<?php if(!empty($VISSION)){
                                    echo esc_url($VISSION['why-choose-vission-img']['url']);
                                };?>" alt="">
                                <h3><?php if(!empty($VISSION)){
                                    echo esc_html($VISSION['why-choose-vission-name']);
                                };?></h3>
                                <p><?php if(!empty($VISSION)){
                                    echo esc_html($VISSION['why-choose-vission-content']);
                                };?></p>
                            </div>
                            <!-- single choose area end -->
                            <?php endforeach;endif;?>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why choose we area end -->
<!-- tall- team area start -->
<section class="tal-team-area-start-all">
    <div class="container">
        <div class="tall-team-area">
            <!-- team-heading -->
            <div class="row">
                <div class="col-12 tal-headig-blog-area">
                    <h6><?php if (!empty(tranform_get_option('team-name'))) {
                            echo esc_html(tranform_get_option('team-name'));
                        }; ?></h6>
                    <h2><?php if (!empty(tranform_get_option('team-title'))) {
                            echo esc_html(tranform_get_option('team-title'));
                        }; ?></h2>
                </div>
            </div>
            <div class="row team-al-tal-area">
                <?php $team_member = tranform_get_option('team-repeater');
                if (!empty($team_member)) : foreach ($team_member as $Team_Member) :; ?>
                        <!-- single team area start -->
                        <div class="col-xl-4 ">
                            <div class="single-team-area">
                                <img src="<?php if (!empty($Team_Member)) {
                                                echo esc_url($Team_Member['team-member-img']['url']);
                                            }; ?>" alt="">
                                <div class="single-team-full-content-area">
                                    <div class="single-team-area-content">
                                        <h4><?php if (!empty($Team_Member)) {
                                                echo esc_html($Team_Member['team-member-name']);
                                            }; ?></h4>
                                        <p><?php if (!empty($Team_Member)) {
                                                echo esc_html($Team_Member['team-member-pro']);
                                            }; ?></p>
                                    </div>
                                    <div class="single-team-social-area">
                                        <?php $SOCIAL_TEAM = $Team_Member['member-social-repeater'];
                                        if (!empty($SOCIAL_TEAM)) : foreach ($SOCIAL_TEAM as $social_team) :; ?>
                                                <a href="<?php if (!empty($social_team)) {
                                                                echo esc_url($social_team['team-social-link']);
                                                            }; ?>"><i class="<?php if (!empty($social_team)) {
                                                                                    echo esc_attr($social_team['team-social-icon']);
                                                                                }; ?>"></i></a>
                                        <?php endforeach;
                                        endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single team area end -->
                <?php endforeach;
                endif; ?>
                <!-- single team area start -->
            </div>
        </div>
    </div>
</section>
<!-- tall- team area end -->
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
                        <?php $contact = new WP_Query(array(
                            'post_type' => 'page',
                            'pagename' => 'Contact'
                        ));
                        if ($contact->have_posts()) : while ($contact->have_posts()) : $contact->the_post();
                                the_content();
                            endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
            <!-- contact form end -->
        </div>
    </div>
    </div>
</section>
<!-- tall contact form area end -->
<!-- tall blog area start -->
<section class="tal-blog-area-all">
    <div class="container">
        <div class="tal-blog-area">
            <div class="row">
                <div class="col-12 tal-headig-blog-area">
                    <h6><?php if (!empty(tranform_get_option('blog-name'))) {
                            echo esc_html(tranform_get_option('blog-name'));
                        }; ?></h6>
                    <h2><?php if (!empty(tranform_get_option('blog-title'))) {
                            echo esc_html(tranform_get_option('blog-title'));
                        }; ?></h2>
                </div>
            </div>
            <div class="tal-all-single-blog-here">
                <div class="row">
                    <!-- single blog start -->
                    <?php
                    $blog = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                    ));

                    if ($blog->have_posts()) : while ($blog->have_posts()) : $blog->the_post(); ?>
                            <div class="col-12">
                                <div class="single-tal-blog-area">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="single-blog-img">
                                                <?php if (has_post_thumbnail()) {
                                                    the_post_thumbnail('tal-blog-thumb');
                                                }; ?>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="single-blog-content-aarea">
                                                <div class="single-blog-cotent-claender">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    <h2><?php the_date(); ?></h2>
                                                </div>
                                                <div class="single-content-blog-content-area">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <h3><?php the_title(); ?></h3>
                                                    </a>
                                                    <p><?php echo wp_trim_words(get_the_content(), 20, NULL) ?> </p>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php endwhile;
                    endif; ?>
                    <!-- single blog end -->
                </div>
            </div>
            <a href="<?php the_permalink() ?>" class="tal-btn-2">Read More</a>
        </div>
    </div>
</section>
<!-- tall blog area end -->
<?php get_footer(); ?>