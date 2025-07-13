<?php

namespace App\Blocks;

/**
 * Reviews Block - Simple version with ACF Free
 */
class ReviewsBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/reviews', [
            'title' => 'Reviews Section',
            'description' => 'Portfolio reviews section with client testimonials and ratings',
            'category' => 'portfolio',
            'icon' => 'star-filled',
            'keywords' => ['reviews', 'testimonials', 'clients', 'ratings'],
            'supports' => [
                'align' => false,
                'anchor' => true,
                'customClassName' => false,
            ],
            'attributes' => [
                'sectionTitle' => [
                    'type' => 'string',
                    'default' => 'Client Reviews',
                ],
                'reviews' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'name' => 'John Doe',
                            'position' => 'CEO, TechStart Inc.',
                            'initials' => 'JD',
                            'rating' => 5,
                            'review' => 'Ahmed delivered an exceptional e-commerce platform that exceeded our expectations. His attention to detail and technical expertise made the entire process smooth and professional.',
                            'color' => 'blue'
                        ],
                        [
                            'name' => 'Sarah Miller',
                            'position' => 'Product Manager, InnovateCorp',
                            'initials' => 'SM',
                            'rating' => 5,
                            'review' => 'Working with Ahmed was a pleasure. He built our task management app with real-time features that our team loves. Highly recommended for any complex web application.',
                            'color' => 'green'
                        ],
                        [
                            'name' => 'Mike Johnson',
                            'position' => 'Founder, DigitalAgency',
                            'initials' => 'MJ',
                            'rating' => 5,
                            'review' => 'Ahmed created a stunning WordPress theme for our agency. The design is modern, the code is clean, and the performance is outstanding. Perfect partner for web development projects.',
                            'color' => 'purple'
                        ]
                    ],
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-reviews-block',
        ]);
    }

    /**
     * Render the block
     */
    public function render($attributes, $content = '', $block = null)
    {
        // Extract attributes with defaults
        $fields = [
            'section_title' => $attributes['sectionTitle'] ?? 'Client Reviews',
            'reviews' => $attributes['reviews'] ?? [
                [
                    'name' => 'John Doe',
                    'position' => 'CEO, TechStart Inc.',
                    'initials' => 'JD',
                    'rating' => 5,
                    'review' => 'Ahmed delivered an exceptional e-commerce platform that exceeded our expectations. His attention to detail and technical expertise made the entire process smooth and professional.',
                    'color' => 'blue'
                ],
                [
                    'name' => 'Sarah Miller',
                    'position' => 'Product Manager, InnovateCorp',
                    'initials' => 'SM',
                    'rating' => 5,
                    'review' => 'Working with Ahmed was a pleasure. He built our task management app with real-time features that our team loves. Highly recommended for any complex web application.',
                    'color' => 'green'
                ],
                [
                    'name' => 'Mike Johnson',
                    'position' => 'Founder, DigitalAgency',
                    'initials' => 'MJ',
                    'rating' => 5,
                    'review' => 'Ahmed created a stunning WordPress theme for our agency. The design is modern, the code is clean, and the performance is outstanding. Perfect partner for web development projects.',
                    'color' => 'purple'
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
        return view('blocks.reviews', $context)->render();
    }
} 