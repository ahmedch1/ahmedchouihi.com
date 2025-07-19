<?php

namespace App\Blocks;

/**
 * Languages Block - Simple version with ACF Free
 */
class LanguagesBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/languages', [
            'title' => 'Languages Section',
            'description' => 'Portfolio languages section with programming and human languages',
            'category' => 'portfolio',
            'icon' => 'translation',
            'keywords' => ['languages', 'portfolio', 'programming', 'human'],
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
                'sectionTitle' => [
                    'type' => 'string',
                    'default' => 'Languages',
                ],
                'programmingLanguagesData' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'name' => 'PHP',
                            'level' => 'Expert',
                            'percentage' => 95,
                            'color' => '#777BB4'
                        ],
                        [
                            'name' => 'JavaScript',
                            'level' => 'Advanced',
                            'percentage' => 85,
                            'color' => '#F7DF1E'
                        ],
                        [
                            'name' => 'SQL',
                            'level' => 'Advanced',
                            'percentage' => 90,
                            'color' => '#336791'
                        ]
                    ],
                ],
                'humanLanguagesData' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'language' => 'Arabic',
                            'level' => 'Native',
                            'percentage' => 100
                        ],
                        [
                            'language' => 'English',
                            'level' => 'Professional',
                            'percentage' => 90
                        ],
                        [
                            'language' => 'French',
                            'level' => 'Intermediate',
                            'percentage' => 75
                        ]
                    ],
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-languages-block',
        ]);
    }

    /**
     * Render the block
     */
    public function render($attributes, $content = '', $block = null)
    {
        // Extract attributes with defaults
        $fields = [
            'display' => $attributes['display'] ?? true,
            'section_title' => $attributes['sectionTitle'] ?? 'Languages',
            'programming_languages' => $attributes['programmingLanguagesData'] ?? [
                [
                    'name' => 'PHP',
                    'level' => 'Expert',
                    'percentage' => 95,
                    'color' => '#777BB4'
                ],
                [
                    'name' => 'JavaScript',
                    'level' => 'Advanced',
                    'percentage' => 85,
                    'color' => '#F7DF1E'
                ],
                [
                    'name' => 'SQL',
                    'level' => 'Advanced',
                    'percentage' => 90,
                    'color' => '#336791'
                ]
            ],
            'languages' => $attributes['humanLanguagesData'] ?? [
                [
                    'language' => 'Arabic',
                    'level' => 'Native',
                    'percentage' => 100
                ],
                [
                    'language' => 'English',
                    'level' => 'Professional',
                    'percentage' => 90
                ],
                [
                    'language' => 'French',
                    'level' => 'Intermediate',
                    'percentage' => 75
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
        return view('blocks.languages', $context)->render();
    }
} 