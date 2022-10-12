<?php
$shm_oclnt_our_clients = get_field('shm_oclnt_our_clients');
if ($shm_oclnt_our_clients) {
?>
    <div class="our_clients_title mobile_version">
        <h2><?php echo $shm_oclnt_our_clients; ?></h2>
    </div>
<?php
}
?>


<!-- start Our Clients  -->
<div class="our_clients_area">
    <div class="et_pb_row et_pb_row_0">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <?php
                if ($shm_oclnt_our_clients) {
                ?>
                    <div class="our_clients_title others_version">
                        <h2><?php echo $shm_oclnt_our_clients; ?></h2>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="col-sm-12 col-md-9 col-lg-9 col-xl-9">
                <div class="row">
                    <?php
                    // Check rows exists.
                    if (have_rows('shm_oclnt_our_clients_logo')) :
                        // Loop through rows.
                        while (have_rows('shm_oclnt_our_clients_logo')) : the_row();
                            // Load sub field value.
                            $shm_add_client_logo_id = get_sub_field('shm_add_client_logo');
                            $shm_add_client_logo_url = wp_get_attachment_image_url($shm_add_client_logo_id);
                    ?>
                            <?php
                            if ($shm_add_client_logo_url) {
                            ?>
                                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="clients_logo">
                                        <img src="<?php echo $shm_add_client_logo_url; ?>" alt="">

                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                    <?php
                        // End loop.
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>