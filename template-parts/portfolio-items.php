<div class="portfolio_menu">
    <div class="et_pb_row et_pb_row_0">
        <div class="row">
            <div class="col-12">
                <div class="menu_box">
                    <ul>
                        <?php
                        $dvc_portfolio_cats = get_terms('dvc_portfolio_cat');
                        foreach ($dvc_portfolio_cats as $key => $single_slug) {
                            $single_slug_name = $single_slug->slug;
                            $single_title_name = $single_slug->name;
                        ?>
                            <li class="scroll_up" data-filter=".<?php echo $single_slug_name; ?>"><?php echo $single_title_name; ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row grid_items">
            <?php
            $portfolio_query = new WP_Query([
                'post_type' => 'dvc-portfolio',
                'posts_per_page' => -1,
            ]);
            $i = 1;
            while ($portfolio_query->have_posts()) {
                $portfolio_query->the_post();
                $terms_array = get_the_terms($post->ID, 'dvc_portfolio_cat');
                $term_slug = "";
                foreach ($terms_array as $single_term) {
                    $term_slug .= $single_term->slug . ' ';
                }
                $shm_portfolio_url = get_field('shm_portfolio_url');
            ?>
                <div class="<?php echo $i; ?> col-sm-12 col-md-6 col-lg-6 col-xl-6 item <?php echo $term_slug; ?>">
                    <?php
                    $num = $i++;
                    if ($num % 2 == 0) {
                    ?>
                        <style>
                            .fix_height {
                                height: 100px;
                                display: block;
                            }
                        </style>
                        <span class="fix_height"></span>
                    <?php
                    }
                    ?>
                    <a href="<?php echo $shm_portfolio_url; ?>">
                        <div class="filter_box">
                            <?php the_post_thumbnail(); ?>
                            <div class="pt_title_n_desc">
                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </a>
                    <?php

                    if ($num % 2 != 0) {
                    ?>
                        <style>
                            .fix_height {
                                height: 80px;
                                display: block;
                            }
                        </style>
                        <span class="fix_height"></span>
                    <?php
                    }
                    ?>
                </div>

            <?php
            }
            wp_reset_query();
            // }
            ?>
        </div>
    </div>
</div>