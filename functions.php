<?php

require_once get_theme_file_path('/inc/tgm.php');

if (!current_user_can('administrator') || current_user_can('administrator')) {
    remove_action('admin_menu', 'cptui_plugin_menu');
}



function custom_css_on_header()
{
    if (is_page_template('dv-portfolio-temp.php')) {

?>
        <style>
            .row.grid_items .item:nth-child(odd) {
                padding-right: 35px !important;
                padding-left: 35px !important;
            }

            .row.grid_items .item:nth-child(even) {
                padding-left: 35px !important;
                padding-right: 35px !important;
            }



            .filter_box img {
                width: 100%;
            }

            .et_pb_image_5,
            .et_pb_image_6,
            .et_pb_image_7 {
                filter: opacity(100%) !important;
            }

            .shm-studio-custom-portfolio-item .et_pb_image_5,
            .shm-studio-custom-portfolio-item .et_pb_image_6,
            .shm-studio-custom-portfolio-item .et_pb_image_7 {
                filter: opacity(100%);
                position: inherit !important;

            }


            .shm-studio-custom-portfolio-item .et_pb_image_5,
            .shm-studio-custom-portfolio-item .et_pb_image_6,
            .shm-studio-custom-portfolio-item .et_pb_image_7 {
                position: inherit !important;
                filter: inherit !important;
            }



            footer.et-l.et-l--footer a {
                text-decoration: none;
            }

            .custom_testimonial_slider .et_pb_row.et_pb_row_0 {
                border-top: 15px solid #d1d1d1 !important;
            }

            .menu_box {
                padding: 100px 0px 55px 0px !important;
            }

            .mblv_cc_logo {
                min-height: 300px !important;
                display: flex !important;
                align-items: center !important;
            }

            .custom_dv_client_slider {
                background: #fff !important;
                padding: 80px 115px 60px !important;
                border-top: 15px solid #ddd !important;
            }

            .owl-nav button img {
                opacity: .3;
                transition: .3s;
            }

            .owl-nav button img:hover {
                opacity: .8;
            }

            .our_clients_title h2 {
                font-family: 'GT Haptik Bold' !important;
            }

            .filter_box p {
                font-family: 'Trenda Regular' !important;
            }

            .filter_box h3 {
                font-family: 'GT Haptik Bold' !important;
                color: #444 !important;
            }

            .menu_box ul li {
                font-family: 'GT Haptik Bold' !important;
                font-weight: 500 !important;
            }

            .pflio_top_title h1 {
                font-family: 'GT Haptik Bold' !important;
            }

            .things_content a {
                font-family: 'Trenda Regular' !important;
            }

            .things_content p {
                font-family: 'Trenda Regular' !important;
                width: 60% !important;
            }

            .things_content h2 {
                font-family: 'Trenda Blod', Helvetica, Arial, Lucida, sans-serif !important;
                color: #ffffff !important;
                line-height: 1.2em !important;
            }

            .client_slider_text p {
                font-family: 'Trenda Regular' !important;
                color: #81898d !important;
                font-size: 112.5% !important;
                text-shadow: none !important;
                line-height: 1.8 !important;
                font-weight: 400 !important;
                font-style: normal !important;
                text-decoration: none !important;
                text-align: justify !important;
                letter-spacing: normal !important;
                word-spacing: normal !important;
                text-transform: none !important;
                font-weight: 400 !important;
            }

            .client_slider_text h2 {
                font-family: 'Trenda Blod' !important;
                color: #81898d !important;
                font-size: 112.5% !important;
                text-shadow: none !important;
                line-height: 1.8 !important;
                font-weight: 400 !important;
                font-style: normal !important;
                text-decoration: none !important;
                text-align: inherit !important;
                letter-spacing: normal !important;
                word-spacing: normal !important;
                text-transform: none !important;
                font-weight: 700 !important;
            }

            .et_pb_row.et_pb_row_0 {
                width: 90% !important;
            }

            .et_pb_row {
                padding: 0% 0;
            }

            .for_mobile_version_sldr {
                display: none;
            }

            @media all and (max-width: 800px) {

                ul#mobile_menu1 li a {
                    text-decoration: none !important;
                }

               

                span.fix_height {
                    height: 0px !important;
                }

                .for_desktop_version_sldr {
                    display: none;
                }

                .for_mobile_version_sldr {
                    display: block;
                }

                .slider_clients_logo {
                    display: none !important;
                }

                .mobile_client_logo,
                .our_clients_title.mobile_version {
                    display: block !important;
                }

                .mobile_hddn {
                    display: none !important;
                }

                .menu_box {
                    padding-bottom: 35px;
                }

                .menu_box {
                    padding-top: 60px;
                }

                .things_content p {
                    width: 100% !important;
                }

                .things_change_area {
                    padding: 50px 0px 90px !important;
                }

                .custom_dv_client_slider {
                    padding: 20px 10px !important;
                }

                .custom_dv_client_slider {
                    padding: 25px 20px 25px 20px !important;
                    text-align: center !important;
                }

                .client_slider_text p {
                    font-size: 15px !important;
                }

                .custom_testimonial_slider .owl-nav {
                    position: absolute;
                    top: 80%;
                    right: 20px;
                }


            }
        </style>
    <?php
    }
}
add_action('wp_head', 'custom_css_on_header');



function custom_script()
{
    if (is_page_template('dv-portfolio-temp.php')) {

        wp_enqueue_style('dvchld-parent-style', get_parent_theme_file_uri("/style.css"));
        wp_enqueue_style('dvchld-bootstrap-css', get_theme_file_uri() . '/divi-chld-assets/css/bootstrap.min.css');
        wp_enqueue_style('dvchld-all-min-css', get_theme_file_uri() . '/divi-chld-assets/css/all.min.css');
        wp_enqueue_style('dvchld-carousel-css', get_theme_file_uri() . '/divi-chld-assets/css/owl.carousel.min.css');
        wp_enqueue_style('dvchld-carousel-theme-css', get_theme_file_uri() . '/divi-chld-assets/css/owl.theme.default.css');
        wp_enqueue_style('dvchld-carousel-theme-css', get_theme_file_uri() . '/divi-chld-assets/css/owl.theme.default.css');
        wp_enqueue_style('dvchld-animate-css', get_theme_file_uri() . '/divi-chld-assets/css/animate.min.css');
        wp_enqueue_style('dvchld-custom-style', get_theme_file_uri() . '/divi-chld-assets/css/custom-style.css');




        wp_enqueue_script('jquery');
        wp_enqueue_script('dvchld-bootstrap-js', get_theme_file_uri() . '/divi-chld-assets/js/bootstrap.min.js');
        wp_enqueue_script('dvchld-all-min-js', get_theme_file_uri() . '/divi-chld-assets/js/all.min.js');
        wp_enqueue_script('dvchld-carousel-js', get_theme_file_uri() . '/divi-chld-assets/js/owl.carousel.min.js');
        wp_enqueue_script('dvchld-custom-isotope', get_theme_file_uri() . '/divi-chld-assets/js/isotope.pkgd.min.js', array('jquery'));
        wp_enqueue_script('dvchld-custom-script', get_theme_file_uri() . '/divi-chld-assets/js/custom.js', array('jquery'));
    }
}



add_action('wp_enqueue_scripts', 'custom_script', 9999999);
function custom_js_for_home_gallery()
{
    ?>
    <script>
        jQuery(document).ready(function() {
            jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_4').show();
            jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_5').hide();
            jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_6').hide();
            jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_7').hide();

            jQuery('.shm-studio-custom-portfolio-item .et_pb_column_6 .et_pb_text_11').hover(function() {
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_4').show();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_5').hide();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_6').hide();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_7').hide();
            });
            jQuery('.shm-studio-custom-portfolio-item .et_pb_column_6 .et_pb_text_12').hover(function() {
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_4').hide();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_5').show();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_6').hide();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_7').hide();
            });
            jQuery('.shm-studio-custom-portfolio-item .et_pb_column_6 .et_pb_text_13').hover(function() {
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_4').hide();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_5').hide();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_6').show();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_7').hide();
            });
            jQuery('.shm-studio-custom-portfolio-item .et_pb_column_6 .et_pb_text_14').hover(function() {
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_4').hide();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_5').hide();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_6').hide();
                jQuery('.shm-studio-custom-portfolio-item .et_pb_column_7 .et_pb_image_7').show();
            });

        });
    </script>
<?php
}
add_action('wp_footer', 'custom_js_for_home_gallery');
