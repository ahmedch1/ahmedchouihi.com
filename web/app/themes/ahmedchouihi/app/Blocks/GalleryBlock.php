<?php

namespace App\Blocks;

/**
 * Gallery Block - Simple version with ACF Free
 */
class GalleryBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/gallery', [
            'title' => 'Gallery Section',
            'description' => 'Portfolio gallery section with project images and details',
            'category' => 'portfolio',
            'icon' => 'format-gallery',
            'keywords' => ['gallery', 'portfolio', 'images', 'showcase'],
            'supports' => [
                'align' => false,
                'anchor' => true,
                'customClassName' => false,
            ],
            'attributes' => [
                'sectionTitle' => [
                    'type' => 'string',
                    'default' => 'Project Gallery',
                ],
                'galleryImages' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'title' => 'E-Commerce Platform',
                            'description' => 'Laravel • Vue.js • MySQL',
                            'image' => 'https://via.placeholder.com/400x300/3B82F6/FFFFFF?text=E-Commerce'
                        ],
                        [
                            'title' => 'Task Management App',
                            'description' => 'PHP • Redis • WebSocket',
                            'image' => 'https://via.placeholder.com/400x300/10B981/FFFFFF?text=Task+App'
                        ],
                        [
                            'title' => 'WordPress Theme',
                            'description' => 'WordPress • PHP • Tailwind',
                            'image' => 'https://via.placeholder.com/400x300/8B5CF6/FFFFFF?text=WordPress'
                        ],
                        [
                            'title' => 'Analytics Dashboard',
                            'description' => 'Laravel • Chart.js • MySQL',
                            'image' => 'https://via.placeholder.com/400x300/F59E0B/FFFFFF?text=Analytics'
                        ],
                        [
                            'title' => 'Mobile API',
                            'description' => 'PHP • JWT • PostgreSQL',
                            'image' => 'https://via.placeholder.com/400x300/EF4444/FFFFFF?text=Mobile+API'
                        ],
                        [
                            'title' => 'CMS System',
                            'description' => 'Laravel • Vue.js • MySQL',
                            'image' => 'https://via.placeholder.com/400x300/06B6D4/FFFFFF?text=CMS'
                        ]
                    ],
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-gallery-block',
        ]);
    }

    /**
     * Render the block
     */
    public function render($attributes, $content = '', $block = null)
    {
        // Extract attributes with defaults
        $fields = [
            'section_title' => $attributes['sectionTitle'] ?? 'Project Gallery',
            'gallery_images' => $attributes['galleryImages'] ?? [
                [
                    'title' => 'E-Commerce Platform',
                    'description' => 'Laravel • Vue.js • MySQL',
                    'image' => 'https://via.placeholder.com/400x300/3B82F6/FFFFFF?text=E-Commerce'
                ],
                [
                    'title' => 'Task Management App',
                    'description' => 'PHP • Redis • WebSocket',
                    'image' => 'https://via.placeholder.com/400x300/10B981/FFFFFF?text=Task+App'
                ],
                [
                    'title' => 'WordPress Theme',
                    'description' => 'WordPress • PHP • Tailwind',
                    'image' => 'https://via.placeholder.com/400x300/8B5CF6/FFFFFF?text=WordPress'
                ],
                [
                    'title' => 'Analytics Dashboard',
                    'description' => 'Laravel • Chart.js • MySQL',
                    'image' => 'https://via.placeholder.com/400x300/F59E0B/FFFFFF?text=Analytics'
                ],
                [
                    'title' => 'Mobile API',
                    'description' => 'PHP • JWT • PostgreSQL',
                    'image' => 'https://via.placeholder.com/400x300/EF4444/FFFFFF?text=Mobile+API'
                ],
                [
                    'title' => 'CMS System',
                    'description' => 'Laravel • Vue.js • MySQL',
                    'image' => 'https://via.placeholder.com/400x300/06B6D4/FFFFFF?text=CMS'
                ]
            ],
        ];

        // Prepare context for the view
        $context = [
            'fields' => $fields,
            'block' => $block,
            'is_preview' => defined('REST_REQUEST') && REST_REQUEST,
        ];

        // Render the view
        return view('blocks.gallery', $context)->render();
    }
} 