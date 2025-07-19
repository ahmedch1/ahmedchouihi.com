<?php

namespace App\Blocks;

/**
 * Contact Block - Simple version with ACF Free
 */
class ContactBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/contact', [
            'title' => 'Contact Section',
            'description' => 'Portfolio contact section with contact information and social links',
            'category' => 'portfolio',
            'icon' => 'email',
            'keywords' => ['contact', 'email', 'social', 'links', 'connect'],
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
                    'default' => 'Let\'s Work Together',
                ],
                'sectionDescription' => [
                    'type' => 'string',
                    'default' => 'I\'m always interested in new opportunities and exciting projects. Whether you have a question or just want to say hi, feel free to reach out!',
                ],
                'email' => [
                    'type' => 'string',
                    'default' => 'ahmed@example.com',
                ],
                'socialLinks' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'platform' => 'GitHub',
                            'url' => 'https://github.com/ahmedchouihi',
                            'icon' => '🐙',
                            'label' => 'GitHub'
                        ],
                        [
                            'platform' => 'LinkedIn',
                            'url' => 'https://linkedin.com/in/ahmedchouihi',
                            'icon' => '💼',
                            'label' => 'LinkedIn'
                        ],
                        [
                            'platform' => 'Twitter',
                            'url' => 'https://twitter.com/ahmedchouihi',
                            'icon' => '🐦',
                            'label' => 'Twitter'
                        ]
                    ],
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-contact-block',
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
            'section_title' => $attributes['sectionTitle'] ?? 'Let\'s Work Together',
            'section_description' => $attributes['sectionDescription'] ?? 'I\'m always interested in new opportunities and exciting projects. Whether you have a question or just want to say hi, feel free to reach out!',
            'email' => $attributes['email'] ?? 'ahmed@example.com',
            'social_links' => $attributes['socialLinks'] ?? [
                [
                    'platform' => 'GitHub',
                    'url' => 'https://github.com/ahmedchouihi',
                    'icon' => '🐙',
                    'label' => 'GitHub'
                ],
                [
                    'platform' => 'LinkedIn',
                    'url' => 'https://linkedin.com/in/ahmedchouihi',
                    'icon' => '💼',
                    'label' => 'LinkedIn'
                ],
                [
                    'platform' => 'Twitter',
                    'url' => 'https://twitter.com/ahmedchouihi',
                    'icon' => '🐦',
                    'label' => 'Twitter'
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
        return view('blocks.contact', $context)->render();
    }
} 