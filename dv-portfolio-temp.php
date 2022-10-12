    <?php

    /**
     * Template name: Portfolio
     */
    get_header();
    if (function_exists('get_field')) {
        $shm_portfolio_header_showhide = get_field('shm_portfolio_header_showhide');
        if (1 == $shm_portfolio_header_showhide) {
            get_template_part('template-parts/portfolio-top-area');
        }
        get_template_part('template-parts/portfolio-items');
        $shm_our_clients_showhide = get_field('shm_our_clients_showhide');
        if (1 == $shm_our_clients_showhide) {
            get_template_part('template-parts/our-clients');
        }
        $shm_slider_showhide = get_field('shm_slider_showhide');
        if (1 == $shm_slider_showhide) {
            $insert_slider_shortcode = get_field('insert_slider_shortcode');
    ?>
            <div class="custom_testimonial_slider">
                <div class="et_pb_row et_pb_row_0">
                    <?php
                    echo do_shortcode($insert_slider_shortcode);
                    ?>
                </div>
            </div>

    <?php
            // get_template_part('template-parts/testimonial-slider');
        }
        $shm_section_showhide = get_field('shm_section_showhide');
        if (1 == $shm_section_showhide) {
            get_template_part('template-parts/things-area');
        }
    }
    get_footer();
