<?php

namespace App\Blocks;

/**
 * Projects Block - Simple version with ACF Free
 */
class ProjectsBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/projects', [
            'title' => 'Projects Section',
            'description' => 'Portfolio projects section with project cards and technologies',
            'category' => 'portfolio',
            'icon' => 'portfolio',
            'keywords' => ['projects', 'portfolio', 'work', 'showcase'],
            'supports' => [
                'align' => false,
                'anchor' => true,
                'customClassName' => false,
            ],
            'attributes' => [
                'sectionTitle' => [
                    'type' => 'string',
                    'default' => 'Featured Projects',
                ],
                'projectsData' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'icon' => '🚀',
                            'title' => 'E-Commerce Platform',
                            'description' => 'A full-featured e-commerce solution built with Laravel, featuring user authentication, payment processing, and admin dashboard.',
                            'technologies' => [
                                ['technology' => 'Laravel'],
                                ['technology' => 'MySQL'],
                                ['technology' => 'Vue.js']
                            ],
                            'link' => '#',
                            'gradient' => 'from-blue-400 to-purple-500'
                        ],
                        [
                            'icon' => '📱',
                            'title' => 'Task Management App',
                            'description' => 'A collaborative task management application with real-time updates, team collaboration, and progress tracking.',
                            'technologies' => [
                                ['technology' => 'PHP'],
                                ['technology' => 'Redis'],
                                ['technology' => 'WebSocket']
                            ],
                            'link' => '#',
                            'gradient' => 'from-green-400 to-blue-500'
                        ],
                        [
                            'icon' => '🌐',
                            'title' => 'WordPress Theme',
                            'description' => 'Custom WordPress theme with modern design, SEO optimization, and advanced customization options.',
                            'technologies' => [
                                ['technology' => 'WordPress'],
                                ['technology' => 'PHP'],
                                ['technology' => 'Tailwind']
                            ],
                            'link' => '#',
                            'gradient' => 'from-purple-400 to-pink-500'
                        ]
                    ],
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-projects-block',
        ]);
    }

    /**
     * Render the block
     */
    public function render($attributes, $content = '', $block = null)
    {
        // Extract attributes with defaults
        $fields = [
            'section_title' => $attributes['sectionTitle'] ?? 'Featured Projects',
            'projects' => $attributes['projectsData'] ?? [
                [
                    'icon' => '🚀',
                    'title' => 'E-Commerce Platform',
                    'description' => 'A full-featured e-commerce solution built with Laravel, featuring user authentication, payment processing, and admin dashboard.',
                    'technologies' => [
                        ['technology' => 'Laravel'],
                        ['technology' => 'MySQL'],
                        ['technology' => 'Vue.js']
                    ],
                    'link' => '#',
                    'gradient' => 'from-blue-400 to-purple-500'
                ],
                [
                    'icon' => '📱',
                    'title' => 'Task Management App',
                    'description' => 'A collaborative task management application with real-time updates, team collaboration, and progress tracking.',
                    'technologies' => [
                        ['technology' => 'PHP'],
                        ['technology' => 'Redis'],
                        ['technology' => 'WebSocket']
                    ],
                    'link' => '#',
                    'gradient' => 'from-green-400 to-blue-500'
                ],
                [
                    'icon' => '🌐',
                    'title' => 'WordPress Theme',
                    'description' => 'Custom WordPress theme with modern design, SEO optimization, and advanced customization options.',
                    'technologies' => [
                        ['technology' => 'WordPress'],
                        ['technology' => 'PHP'],
                        ['technology' => 'Tailwind']
                    ],
                    'link' => '#',
                    'gradient' => 'from-purple-400 to-pink-500'
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
        return view('blocks.projects', $context)->render();
    }
} 