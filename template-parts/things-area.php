<div class="things_change_area">
    <div class="et_pb_row et_pb_row_0">
        <div class="row">
            <div class="col-12">
                <div class="things_content">
                    <?php
                    $things_had_to_change = get_field('things_had_to_change');
                    $things_had_to_change_content = get_field('things_had_to_change_content');
                    $things_about_us_url = get_field('things_about_us_url');
                    if ($things_had_to_change) {
                    ?>
                        <h2><?php echo $things_had_to_change; ?></h2>
                    <?php
                    }
                    if ($things_had_to_change_content) {
                    ?>
                        <p><?php echo $things_had_to_change_content; ?></p>
                    <?php
                    }
                    if ($things_about_us_url) {
                    ?>
                        <a href="<?php echo $things_about_us_url; ?>">ABOUT US <i class="fas fa-long-arrow-alt-right"></i></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>