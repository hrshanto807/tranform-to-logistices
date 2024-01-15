<?php get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php echo get_template_directory_uri()?>/asset/img/blog-details-bg.png);">
    <div class="container">
        <div class="row">
            <div class="tal-hero-area col-12">
                <div class="blog-date-area d-flex gap-2 align-items-center">
                    <img src="<?php echo get_template_directory_uri()?>/asset/img/clender.png" alt="">
                    <h2 class="text-white"><?php echo get_the_date();?></h2>
                </div>
                <h1><?php echo get_the_title(get_queried_object_id());?></h1>
            </div>
        </div>
    </div>
</section>
<!-- tal hero section area end -->
<!-- blog details content area start -->
<section class="blog-details-content-area-all">
    <div class="container">
        <div class="blog-dtails-area">
            <div class="row gap-5">
            <?php if(have_posts()):while(have_posts()):the_post()?>
                <div class="col-xl-7">
                    <div class="blog-details-content">
                       <?php the_content()?>
                    </div>
                    <div class="all-blog-single-social d-flex justify-content-between align-items-center
                            ">
                        <div class="social-icon ">
                            <div class="footer-icon d-flex gap-3">
                            <?php $author_social = get_post_meta(get_the_ID(),'social_repeat_group',true);
                                            if(!empty($author_social)):foreach($author_social as $social_author):
                                                if ( isset( $social_author['social_icon'] ) ) {
                                                   $author_icon = esc_attr( $social_author['social_icon'] );
                                                };
                                                if ( isset( $social_author['social_link'] ) ) {
                                                    $author_link = esc_url( $social_author['social_link'] );
                                                };
                                            ?>
                                     <a class="text-black" href="<?php echo $author_link;?>"><i class="<?php echo $author_icon;?>"></i></a>
                                            <?php endforeach;endif?>       
                            </div>
                        </div>
                        <div class="blog-catagory d-flex">
                            <p>Category : <?php the_category()?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile;endif;?> 
                <!--sidebar area start  -->
                <?php get_sidebar();?>
                <!-- sidebar area end  -->
            </div>
        </div>
    </div>
</section>
<!-- blog details content area end -->
<?php get_footer();?>