<?php

use App\Blocks\HeroBlock;
use App\Blocks\SkillsBlock;
use App\Blocks\LanguagesBlock;
use App\Blocks\ProjectsBlock;
use App\Blocks\GalleryBlock;
use App\Blocks\ReviewsBlock;
use App\Blocks\PartnersBlock;
use App\Blocks\ExperienceBlock;
use App\Blocks\ContactBlock;

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
 * Register All Portfolio Blocks
 */
add_action('init', function() {
    $blocks = [
        new HeroBlock(),
        new SkillsBlock(),
        new LanguagesBlock(),
        new ProjectsBlock(),
        new GalleryBlock(),
        new ReviewsBlock(),
        new PartnersBlock(),
        new ExperienceBlock(),
        new ContactBlock(),
    ];

    foreach ($blocks as $block) {
        $block->register();
    }
});

/**
 * Enqueue block editor assets
 */
add_action('enqueue_block_editor_assets', function() {
    // Enqueue all block editor scripts
    $blocks = [
        'hero' => 'portfolio-hero-block',
        'skills' => 'portfolio-skills-block',
        'languages' => 'portfolio-languages-block',
        'projects' => 'portfolio-projects-block',
        'gallery' => 'portfolio-gallery-block',
        'reviews' => 'portfolio-reviews-block',
        'partners' => 'portfolio-partners-block',
        'experience' => 'portfolio-experience-block',
        'contact' => 'portfolio-contact-block',
    ];

    foreach ($blocks as $block => $handle) {
        wp_enqueue_script(
            $handle,
            get_theme_file_uri("/public/js/{$block}-block.js"),
            ['wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n'],
            '1.0.0',
            true
        );
    }
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