<?php

namespace App\Blocks;

/**
 * Hero Block - Simple version with ACF Free
 */
class HeroBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/hero', [
            'title' => 'Hero Section',
            'description' => 'Portfolio hero section with profile image and introduction',
            'category' => 'portfolio',
            'icon' => 'admin-users',
            'keywords' => ['hero', 'portfolio', 'intro'],
            'supports' => [
                'align' => false,
                'anchor' => true,
                'customClassName' => false,
            ],
            'attributes' => [
                'display' => [
                    'type' => 'boolean',
                    'default' => true,
                ],
                'name' => [
                    'type' => 'string',
                    'default' => 'Ahmed Chouihi',
                ],
                'title' => [
                    'type' => 'string',
                    'default' => 'Full-Stack PHP Developer',
                ],
                'description' => [
                    'type' => 'string',
                    'default' => 'Passionate PHP developer with expertise in Laravel, WordPress, and modern web technologies. I build robust, scalable applications that solve real-world problems.',
                ],
                'primaryButtonText' => [
                    'type' => 'string',
                    'default' => 'Get In Touch',
                ],
                'primaryButtonLink' => [
                    'type' => 'string',
                    'default' => '#contact',
                ],
                'secondaryButtonText' => [
                    'type' => 'string',
                    'default' => 'View Projects',
                ],
                'secondaryButtonLink' => [
                    'type' => 'string',
                    'default' => '#projects',
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-hero-block',
        ]);
    }

    /**
     * Render the block
     */
    public function render($attributes, $content = '', $block = null)
    {
        // Extract attributes with defaults
        $fields = [
            'display'=>$attributes['display'] ?? true,
            'name' => $attributes['name'] ?? 'Ahmed Chouihi',
            'title' => $attributes['title'] ?? 'Full-Stack PHP Developer',
            'description' => $attributes['description'] ?? 'Passionate PHP developer with expertise in Laravel, WordPress, and modern web technologies. I build robust, scalable applications that solve real-world problems.',
            'avatar_image' => get_theme_file_uri('resources/images/avatar.jpg'),
            'primary_button_text' => $attributes['primaryButtonText'] ?? 'Get In Touch',
            'primary_button_link' => $attributes['primaryButtonLink'] ?? '#contact',
            'secondary_button_text' => $attributes['secondaryButtonText'] ?? 'View Projects',
            'secondary_button_link' => $attributes['secondaryButtonLink'] ?? '#projects',
        ];

        // Prepare context for the view
        $context = [
            'fields' => $fields,
            'block' => $block,
            'is_preview' => defined('REST_REQUEST') && REST_REQUEST,
        ];

        // Render the view
        return view('blocks.hero', $context)->render();
    }
}
