<div class="custom_testimonial_slider">
    <div class="et_pb_row et_pb_row_0">
        <div class="owl-carousel custom_dv_client_slider">
            <?php

            // Check rows exists.
            if (have_rows('sgm_custom_slider')) :

                // Loop through rows.
                while (have_rows('sgm_custom_slider')) : the_row();

                    // Load sub field value.
                    $shm_sl_slider_logo_id = get_sub_field('shm_sl_slider_logo');
                    $shm_sl_slider_text = get_sub_field('shm_sl_slider_text');
                    $shm_sl_slider_person_name = get_sub_field('shm_sl_slider_person_name');
                    $shm_sl_slider_logo_url = wp_get_attachment_image_url($shm_sl_slider_logo_id);
            ?>
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 cc_logo mobile_hddn">
                            <?php
                            if ($shm_sl_slider_logo_url) {
                            ?>
                                <div class="slider_clients_logo">
                                    <img src="<?php echo $shm_sl_slider_logo_url; ?>" alt="">
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7 mblv_cc_logo">
                            <div class="client_slider_text">
                                <?php
                                if ($shm_sl_slider_text) {
                                ?>
                                    <p><?php echo $shm_sl_slider_text; ?></p>
                                <?php
                                }
                                if ($shm_sl_slider_person_name) {
                                ?>
                                    <h2><?php echo $shm_sl_slider_person_name; ?></h2>
                                <?php
                                }
                                ?>
                                <?php
                                if ($shm_sl_slider_logo_url) {
                                ?>
                                    <div class="slider_clients_logo mobile_client_logo">
                                        <img src="<?php echo $shm_sl_slider_logo_url; ?>" alt="">
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <!-- end item  -->

            <?php

                // End loop.
                endwhile;
            endif;
            ?>




        </div>
    </div>
</div>

<!-- end slider  -->