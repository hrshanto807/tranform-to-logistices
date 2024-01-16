</main>
<footer>
    <section class="tall-footer-all">
        <div class="container">
            <div class="footer-section-area">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="footer-contact-area-logo">
                            <div class="footer-logo">
                                <img src="<?php $log_footer = tranform_get_option('logo-footer');
                                            if (!empty($log_footer)) {
                                                echo esc_url($log_footer['url']);
                                            };
                                            ?>" alt="">
                            </div>
                            <p class="text-white">Leverage agile frameworks to provide a robust synopsis for
                                strategy collaborative thinking to further the overall value proposition.</p>
                            <div class="contact-footer-src">
                                <!-- single contact area start -->
                                <?php $contact_reapeater = tranform_get_option('contact-repeater');
                                if (!empty($contact_reapeater)) : foreach ($contact_reapeater as $contact) :;
                                ?>
                                        <div class="single-tal-contact-area d-flex">
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
                                <!-- single contact area end -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="single-footer-menu-area-mail row">
                            <!-- single footer content area start -->                            
                                <?php
                                if (is_active_sidebar('sidebar-footer')) {
                                    dynamic_sidebar('sidebar-footer');
                                };
                                ?>                            
                            <!-- single footer content area end -->                            
                        </div>
                        <div class="footer-icon d-flex gap-3 text-white mt-5">
                            <?php $HEADER_SOCIAL = tranform_get_option('header-social-repeater');
                            if (!empty($HEADER_SOCIAL)) : foreach ($HEADER_SOCIAL as $heaser_social) :; ?>
                                    <a class="text-white" href="<?php if (!empty($header_left)) {
                                                                    echo esc_url($heaser_social['header_social-link']);
                                                                } ?>"><i class="<?php if (!empty($heaser_social)) {
                                                                                        echo esc_attr($heaser_social['header_social-icon']);
                                                                                    } ?>"></i></a>
                            <?php endforeach;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- coppy right  area start-->
            <div class="row">
                <div class="col">
                    <div class="copyright-area text-center mt-5">
                        <p class="text-white">Copyright © TransitFlow | Designed by VictorFlow - Powered by Webflow.
                        </p>
                    </div>
                </div>
            </div>

            <!-- coppy right  area end-->

        </div>
    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>