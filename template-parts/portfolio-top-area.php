<?php
$shmtp_top_title_line_one = get_field('shmtp_top_title_line_one');
$shmtp_top_title_line_two = get_field('shmtp_top_title_line_two');
$shmtp_top_background_image_id = get_field('shmtp_top_background_image');
$shmtp_top_background_image_url = wp_get_attachment_image_url($shmtp_top_background_image_id, 'full');
?>
<div class="portfolio_menu_top_img" style="background-image: url(<?php echo esc_url($shmtp_top_background_image_url); ?>)">
    <div class="portfolio_bg_overlay">
        <div class="et_pb_row et_pb_row_0">
            <div class="row">
                <div class="col-12">
                    <div class="pflio_top_title">
                        <?php
                        if ($shmtp_top_title_line_one) {
                        ?>
                            <h1><?php echo $shmtp_top_title_line_one; ?></h1>
                        <?php
                        }
                        if ($shmtp_top_title_line_two) {
                        ?>
                            <h1><?php echo $shmtp_top_title_line_two; ?></h1>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>