<?php // sidebar widget shortcode
function tranform_about_tab_shortcode()
{
    ob_start(); ?>
         <ul class="tabs">
                                <li class="tab" onclick="showTab('tab1')">Our Approch</li>
                                <li class="tab" onclick="showTab('tab2')">Our Approch</li>
                                <li class="tab" onclick="showTab('tab3')">Our Approch</li>
                            </ul>

                            <div id="tab1" class="tab-content active-tab-content">
                                <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae dicta sunt,
                                    explicabo. Nemo enim ipsam voluptatem quia voluptassit.</p>
                            </div>

                            <div id="tab2" class="tab-content">
                                <p>ted ut perspiciatis, unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae dicta sunt,
                                    explicabo. Nemo enim ipsam voluptatem quia voluptassit.</p>
                            </div>

                            <div id="tab3" class="tab-content">
                                <p>led ut perspiciatis, unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab
                                    illo inventore veritatis et quasi architecto beatae vitae dicta sunt,
                                    explicabo. Nemo enim ipsam voluptatem quia voluptassit.</p>
                            </div>
<?php
    return ob_get_clean();
}
add_shortcode('about_tab','tranform_about_tab_shortcode');

?>