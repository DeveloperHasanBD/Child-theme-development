<?php

function dvchld_portfolio()
{
    if (function_exists('acf_add_local_field_group')) :

        acf_add_local_field_group(array(
            'key' => 'group_616a45b7763a9',
            'title' => 'Portfolio header area content',
            'fields' => array(
                array(
                    'key' => 'field_616a56635950a',
                    'label' => 'Portfolio header show/hide',
                    'name' => 'shm_portfolio_header_showhide',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_616a460fd79f5',
                    'label' => 'Top title #1 line',
                    'name' => 'shmtp_top_title_line_one',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_616a463cd79f6',
                    'label' => 'Top title #2 line',
                    'name' => 'shmtp_top_title_line_two',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_616a555a9bccb',
                    'label' => 'Background Image',
                    'name' => 'shmtp_top_background_image',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'id',
                    'preview_size' => 'full',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'dv-portfolio-temp.php',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => array(
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'discussion',
            ),
            'active' => true,
            'description' => '',
        ));

        acf_add_local_field_group(array(
            'key' => 'group_616a4570716ed',
            'title' => 'Portfolio URL',
            'fields' => array(
                array(
                    'key' => 'field_616a459205a28',
                    'label' => 'Portfolio URL',
                    'name' => 'shm_portfolio_url',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'dvc-portfolio',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

        acf_add_local_field_group(array(
            'key' => 'group_616a469cd7ad1',
            'title' => 'Our Clients',
            'fields' => array(
                array(
                    'key' => 'field_616a56c87ee11',
                    'label' => 'Our Clients show/hide',
                    'name' => 'shm_our_clients_showhide',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_616a46b002ba2',
                    'label' => 'Our Clients',
                    'name' => 'shm_oclnt_our_clients',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_616a46c502ba3',
                    'label' => 'Client logo',
                    'name' => 'shm_oclnt_our_clients_logo',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'table',
                    'button_label' => '',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_616a46da02ba4',
                            'label' => 'Add client logo',
                            'name' => 'shm_add_client_logo',
                            'type' => 'image',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'return_format' => 'id',
                            'preview_size' => 'medium',
                            'library' => 'all',
                            'min_width' => '',
                            'min_height' => '',
                            'min_size' => '',
                            'max_width' => '',
                            'max_height' => '',
                            'max_size' => '',
                            'mime_types' => '',
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'dv-portfolio-temp.php',
                    ),
                ),
            ),
            'menu_order' => 2,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => array(
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'discussion',
            ),
            'active' => true,
            'description' => '',
        ));

        acf_add_local_field_group(array(
            'key' => 'group_616a4727958e7',
            'title' => 'Slider',
            'fields' => array(
                array(
                    'key' => 'field_616a56ed179c6',
                    'label' => 'Slider show/hide',
                    'name' => 'shm_slider_showhide',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_616ba976fcee6',
                    'label' => 'Insert slider shortcode',
                    'name' => 'insert_slider_shortcode',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'dv-portfolio-temp.php',
                    ),
                ),
            ),
            'menu_order' => 4,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => array(
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'discussion',
            ),
            'active' => true,
            'description' => '',
        ));

        acf_add_local_field_group(array(
            'key' => 'group_616a483883dde',
            'title' => 'Things had to change',
            'fields' => array(
                array(
                    'key' => 'field_616a570f51ece',
                    'label' => 'Section show/hide',
                    'name' => 'shm_section_showhide',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
                array(
                    'key' => 'field_616a4852393fa',
                    'label' => 'Title',
                    'name' => 'things_had_to_change',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array(
                    'key' => 'field_616a485f393fb',
                    'label' => 'Description',
                    'name' => 'things_had_to_change_content',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
                array(
                    'key' => 'field_616a4872393fc',
                    'label' => 'About Us URL',
                    'name' => 'things_about_us_url',
                    'type' => 'text',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'dv-portfolio-temp.php',
                    ),
                ),
            ),
            'menu_order' => 6,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen' => array(
                0 => 'the_content',
                1 => 'excerpt',
                2 => 'discussion',
            ),
            'active' => true,
            'description' => '',
        ));

    endif;
}
add_action('init', 'dvchld_portfolio');


function dvc_cptui_register_my_cpts()
{

    /**
     * Post Type: Portfolio.
     */

    $labels = [
        "name" => __("Portfolio", "custom-post-type-ui"),
        "singular_name" => __("Add portfolio", "custom-post-type-ui"),
    ];

    $args = [
        "label" => __("Portfolio", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "dvc-portfolio", "with_front" => true],
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("dvc-portfolio", $args);
}

add_action('init', 'dvc_cptui_register_my_cpts');



function dvchld_cptui_register_my_taxes()
{

    /**
     * Taxonomy: Categories.
     */

    $labels = [
        "name" => __("Categories", "custom-post-type-ui"),
        "singular_name" => __("Add category", "custom-post-type-ui"),
    ];


    $args = [
        "label" => __("Categories", "custom-post-type-ui"),
        "labels" => $labels,
        "public" => true,
        "publicly_queryable" => true,
        "hierarchical" => true,
        "show_ui" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "query_var" => true,
        "rewrite" => ['slug' => 'dvc_portfolio_cat', 'with_front' => true,],
        "show_admin_column" => false,
        "show_in_rest" => true,
        "show_tagcloud" => false,
        "rest_base" => "dvc_portfolio_cat",
        "rest_controller_class" => "WP_REST_Terms_Controller",
        "show_in_quick_edit" => false,
        "show_in_graphql" => false,
    ];
    register_taxonomy("dvc_portfolio_cat", ["dvc-portfolio"], $args);
}
add_action('init', 'dvchld_cptui_register_my_taxes');
