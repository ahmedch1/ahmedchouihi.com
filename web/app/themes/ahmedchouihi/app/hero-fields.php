<?php

/**
 * ACF Fields for Hero Block (Free Version)
 */

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group([
        'key' => 'group_hero_block',
        'title' => 'Hero Block',
        'fields' => [
            [
                'key' => 'field_hero_name',
                'label' => 'Name',
                'name' => 'name',
                'type' => 'text',
                'default_value' => 'Ahmed Chouihi',
                'placeholder' => 'Enter your name',
                'required' => 0,
            ],
            [
                'key' => 'field_hero_title',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'default_value' => 'Full-Stack PHP Developer',
                'placeholder' => 'Enter your title',
                'required' => 0,
            ],
            [
                'key' => 'field_hero_description',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'default_value' => 'Passionate PHP developer with expertise in Laravel, WordPress, and modern web technologies. I build robust, scalable applications that solve real-world problems.',
                'placeholder' => 'Enter your description',
                'rows' => 4,
                'required' => 0,
            ],
            [
                'key' => 'field_hero_avatar_image',
                'label' => 'Avatar Image',
                'name' => 'avatar_image',
                'type' => 'image',
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'required' => 0,
            ],
            [
                'key' => 'field_hero_primary_button_text',
                'label' => 'Primary Button Text',
                'name' => 'primary_button_text',
                'type' => 'text',
                'default_value' => 'Get In Touch',
                'placeholder' => 'Enter button text',
                'required' => 0,
            ],
            [
                'key' => 'field_hero_primary_button_link',
                'label' => 'Primary Button Link',
                'name' => 'primary_button_link',
                'type' => 'url',
                'default_value' => '#contact',
                'placeholder' => 'Enter button URL',
                'required' => 0,
            ],
            [
                'key' => 'field_hero_secondary_button_text',
                'label' => 'Secondary Button Text',
                'name' => 'secondary_button_text',
                'type' => 'text',
                'default_value' => 'View Projects',
                'placeholder' => 'Enter button text',
                'required' => 0,
            ],
            [
                'key' => 'field_hero_secondary_button_link',
                'label' => 'Secondary Button Link',
                'name' => 'secondary_button_link',
                'type' => 'url',
                'default_value' => '#projects',
                'placeholder' => 'Enter button URL',
                'required' => 0,
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/hero',
                ],
            ],
        ],
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ]);
} 