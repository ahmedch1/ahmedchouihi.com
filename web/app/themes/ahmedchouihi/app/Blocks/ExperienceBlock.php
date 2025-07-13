<?php

namespace App\Blocks;

/**
 * Experience Block - Simple version with ACF Free
 */
class ExperienceBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/experience', [
            'title' => 'Experience Section',
            'description' => 'Portfolio experience section with job history and descriptions',
            'category' => 'portfolio',
            'icon' => 'businessman',
            'keywords' => ['experience', 'work', 'jobs', 'career', 'employment'],
            'supports' => [
                'align' => false,
                'anchor' => true,
                'customClassName' => false,
            ],
            'attributes' => [
                'sectionTitle' => [
                    'type' => 'string',
                    'default' => 'Experience',
                ],
                'experiences' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'title' => 'Senior PHP Developer',
                            'period' => '2022 - Present',
                            'description' => 'Leading development of enterprise-level applications using Laravel and modern PHP practices. Mentoring junior developers and implementing best practices for code quality and performance.',
                            'company' => '',
                            'location' => '',
                            'technologies' => ''
                        ],
                        [
                            'title' => 'Full-Stack Developer',
                            'period' => '2020 - 2022',
                            'description' => 'Developed and maintained multiple web applications using PHP, JavaScript, and various frameworks. Collaborated with design and product teams to deliver high-quality user experiences.',
                            'company' => '',
                            'location' => '',
                            'technologies' => ''
                        ],
                        [
                            'title' => 'WordPress Developer',
                            'period' => '2018 - 2020',
                            'description' => 'Created custom WordPress themes and plugins for clients across various industries. Specialized in performance optimization and SEO-friendly development practices.',
                            'company' => '',
                            'location' => '',
                            'technologies' => ''
                        ]
                    ],
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-experience-block',
        ]);
    }

    /**
     * Render the block
     */
    public function render($attributes, $content = '', $block = null)
    {
        // Extract attributes with defaults
        $fields = [
            'section_title' => $attributes['sectionTitle'] ?? 'Experience',
            'experiences' => $attributes['experiences'] ?? [
                [
                    'title' => 'Senior PHP Developer',
                    'period' => '2022 - Present',
                    'description' => 'Leading development of enterprise-level applications using Laravel and modern PHP practices. Mentoring junior developers and implementing best practices for code quality and performance.',
                    'company' => '',
                    'location' => '',
                    'technologies' => ''
                ],
                [
                    'title' => 'Full-Stack Developer',
                    'period' => '2020 - 2022',
                    'description' => 'Developed and maintained multiple web applications using PHP, JavaScript, and various frameworks. Collaborated with design and product teams to deliver high-quality user experiences.',
                    'company' => '',
                    'location' => '',
                    'technologies' => ''
                ],
                [
                    'title' => 'WordPress Developer',
                    'period' => '2018 - 2020',
                    'description' => 'Created custom WordPress themes and plugins for clients across various industries. Specialized in performance optimization and SEO-friendly development practices.',
                    'company' => '',
                    'location' => '',
                    'technologies' => ''
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
        return view('blocks.experience', $context)->render();
    }
} 