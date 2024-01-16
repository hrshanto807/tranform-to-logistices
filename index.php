<?php
get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php $blog_hero_bg = tranform_get_option('blog-hero-bg');
                                                            if (!empty($blog_hero_bg)) {
                                                                echo esc_url($blog_hero_bg['url']);
                                                            };
                                                            ?>);">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-xl-6 col-md-12 col-sm-12">
                <h6><?php echo get_the_title(get_queried_object_id());?></h6>
                <h1><?php if (!empty(tranform_get_option('blog-hero-title'))) {
                    echo esc_html(tranform_get_option('blog-hero-title'));
                }; ?></h1>
            </div>
        </div>
    </div>
</section>
<!-- tal hero section area end -->
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
                     <?php if(have_posts()):while(have_posts()):the_post();?>
                    <div class="col-12">
                        <div class="single-tal-blog-area">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="single-blog-img">
                                    <?php  if(has_post_thumbnail()){the_post_thumbnail('tal-blog-thumb');};?> 
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="single-blog-content-aarea">
                                        <div class="single-blog-cotent-claender">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <h2><?php the_date();?></h2>
                                        </div>
                                        <div class="single-content-blog-content-area">
                                            <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                                            <p><?php echo wp_trim_words(get_the_content(),20,NULL)?> </p>
                                            
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;endif;?>
                    <!-- single blog end --> 
                </div>
            </div>
            <a href="#" class="tal-btn-2">Read More</a>
        </div>
    </div>
</section>
<!-- tall blog area end -->
<?php get_footer();?>