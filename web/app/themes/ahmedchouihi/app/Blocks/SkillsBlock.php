<?php

namespace App\Blocks;

/**
 * Skills Block - Simple version with ACF Free
 */
class SkillsBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/skills', [
            'title' => 'Skills Section',
            'description' => 'Portfolio skills section with skill categories and proficiency levels',
            'category' => 'portfolio',
            'icon' => 'admin-tools',
            'keywords' => ['skills', 'portfolio', 'expertise'],
            'supports' => [
                'align' => false,
                'anchor' => true,
                'customClassName' => false,
            ],
            'attributes' => [
                'sectionTitle' => [
                    'type' => 'string',
                    'default' => 'Skills & Technologies',
                ],
                'skillsData' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'icon' => '🐘',
                            'title' => 'Backend Development',
                            'skills' => ['PHP', 'Laravel', 'MySQL', 'PostgreSQL']
                        ],
                        [
                            'icon' => '⚛️',
                            'title' => 'Frontend Development',
                            'skills' => ['JavaScript', 'React', 'Vue.js', 'HTML/CSS']
                        ],
                        [
                            'icon' => '🚀',
                            'title' => 'DevOps & Tools',
                            'skills' => ['Docker', 'Git', 'Linux', 'AWS']
                        ]
                    ],
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-skills-block',
        ]);
    }

    /**
     * Render the block
     */
    public function render($attributes, $content = '', $block = null)
    {
        // Extract attributes with defaults
        $fields = [
            'section_title' => $attributes['sectionTitle'] ?? 'Skills & Technologies',
            'skills' => $attributes['skillsData'] ?? [
                [
                    'icon' => '🐘',
                    'title' => 'Backend Development',
                    'skills' => ['PHP', 'Laravel', 'MySQL', 'PostgreSQL']
                ],
                [
                    'icon' => '⚛️',
                    'title' => 'Frontend Development',
                    'skills' => ['JavaScript', 'React', 'Vue.js', 'HTML/CSS']
                ],
                [
                    'icon' => '🚀',
                    'title' => 'DevOps & Tools',
                    'skills' => ['Docker', 'Git', 'Linux', 'AWS']
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
        return view('blocks.skills', $context)->render();
    }
} 