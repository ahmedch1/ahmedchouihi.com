<?php

use App\Blocks\HeroBlock;

/**
 * Register custom block category
 */
add_filter('block_categories_all', function ($categories) {
    $categories[] = [
        'slug' => 'portfolio',
        'title' => 'Portfolio Blocks',
        'icon' => 'portfolio',
    ];
    return $categories;
});

/**
 * Register Hero Block
 */
add_action('init', function() {
    $heroBlock = new HeroBlock();
    $heroBlock->register();
});

/**
 * Enqueue block editor assets
 */
add_action('enqueue_block_editor_assets', function() {
    wp_enqueue_script(
        'portfolio-hero-block',
        get_theme_file_uri('/public/js/hero-block.js'),
        ['wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n'],
        '1.0.0',
        true
    );
});

/**
 * Add block supports
 */
add_action('after_setup_theme', function() {
    // Add theme support for editor color palette
    add_theme_support('editor-color-palette', [
        [
            'name' => 'Blue',
            'slug' => 'blue',
            'color' => '#2563eb',
        ],
        [
            'name' => 'Gray',
            'slug' => 'gray',
            'color' => '#6b7280',
        ],
        [
            'name' => 'White',
            'slug' => 'white',
            'color' => '#ffffff',
        ],
        [
            'name' => 'Black',
            'slug' => 'black',
            'color' => '#000000',
        ],
    ]);

    // Add theme support for responsive embeds
    add_theme_support('responsive-embeds');
    
    // Add theme support for wide alignment
    add_theme_support('align-wide');
}); 