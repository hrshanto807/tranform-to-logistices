<?php wp_head();?>
<!-- eroor page satrt  -->
<section class="error-page-tal text-center" style="padding-top: 121px;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="error-page">
                    <img src="<?php $error_bg = tranform_get_option('error-thumb');
                                                                if (!empty($error_bg)) {
                                                                    echo esc_url($error_bg['url']);
                                                                };
                                                                ?>" alt="">
                    <h1><?php if (!empty(tranform_get_option('error-title'))) {
                        echo esc_html(tranform_get_option('error-title'));
                    }; ?></h1>
                    <p><?php if (!empty(tranform_get_option('error-content'))) {
                        echo esc_html(tranform_get_option('error-content'));
                    }; ?></p>
                    <a href="<?php if (!empty(tranform_get_option('error-btn-link'))) {
                        echo esc_url(tranform_get_option('error-btn-link'));
                    }; ?>" class="tal-btn-2"><?php if (!empty(tranform_get_option('error-btn'))) {
                        echo esc_html(tranform_get_option('error-btn'));
                    }; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- eroor page end -->
<?php wp_footer();?>