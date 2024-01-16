<?php

/**
 * Template Name: Team
 */
get_header();
?>
<!-- tal hero section area start -->
<section class="tal-all-hero-area" style="background-image: url(<?php $team_hero_bg = tranform_get_option('team-hero-bg');
                                                                if (!empty($team_hero_bg)) {
                                                                    echo esc_url($team_hero_bg['url']);
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
<!-- tal hero section area end -->
<!-- tall- team area start -->
<section class="tal-team-area-start-all">
    <div class="container">
        <div class="tall-team-area">
            <!-- team-heading -->
            <div class="row">
                <div class="col-12 tal-headig-blog-area">
                    <h6><?php if (!empty(tranform_get_option('team-name'))) {
                        echo esc_html(tranform_get_option('team-name'));
                    };?></h6>
                    <h2><?php if (!empty(tranform_get_option('team-title'))) {
                        echo esc_html(tranform_get_option('team-title'));
                    };?></h2>
                </div>
            </div>
            <div class="row team-al-tal-area">
                <?php $team_member = tranform_get_option('team-repeater');
                if(!empty($team_member)):foreach($team_member as $Team_Member):;?>
                <!-- single team area start -->
                <div class="col-xl-4 ">
                    <div class="single-team-area">
                        <img src="<?php if(!empty($Team_Member)){
                            echo esc_url($Team_Member['team-member-img']['url']);
                        };?>" alt="">
                        <div class="single-team-full-content-area">
                            <div class="single-team-area-content">
                                <h4><?php if(!empty($Team_Member)){
                            echo esc_html($Team_Member['team-member-name']);
                        };?></h4>
                                <p><?php if(!empty($Team_Member)){
                            echo esc_html($Team_Member['team-member-pro']);
                        };?></p>
                            </div>
                            <div class="single-team-social-area">
                                <?php $SOCIAL_TEAM = $Team_Member['member-social-repeater'];
                                if(!empty($SOCIAL_TEAM)):foreach($SOCIAL_TEAM as $social_team):;?>
                                <a href="<?php if(!empty($social_team)){
                                    echo esc_url($social_team['team-social-link']);};?>"><i class="<?php if(!empty($social_team)){
                                        echo esc_attr($social_team['team-social-icon']);};?>"></i></a>
                                <?php endforeach;endif;?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single team area end -->
                <?php endforeach;endif;?>
                <!-- single team area start -->             
            </div>
        </div>
    </div>
</section>
<!-- tall- team area end -->
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