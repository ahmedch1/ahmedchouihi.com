<?php

namespace App\Blocks;

/**
 * Partners Block - Simple version with ACF Free
 */
class PartnersBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/partners', [
            'title' => 'Partners Section',
            'description' => 'Portfolio partners section with company logos and collaboration details',
            'category' => 'portfolio',
            'icon' => 'groups',
            'keywords' => ['partners', 'collaboration', 'companies', 'logos'],
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
                    'default' => 'Proud to Collaborate With',
                ],
                'sectionDescription' => [
                    'type' => 'string',
                    'default' => 'Collaboration in term of Freelancing, Full time ...Reach me for details',
                ],
                'partners' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'name' => 'ShyrineProd',
                            'logo' => '',
                            'url' => '',
                            'description' => ''
                        ],
                        [
                            'name' => 'Tanitweb',
                            'logo' => '',
                            'url' => '',
                            'description' => ''
                        ],
                        [
                            'name' => 'Edge studio',
                            'logo' => '',
                            'url' => '',
                            'description' => ''
                        ],
                        [
                            'name' => 'CanIBuy',
                            'logo' => '',
                            'url' => '',
                            'description' => ''
                        ],
                        [
                            'name' => 'FabLab',
                            'logo' => '',
                            'url' => '',
                            'description' => ''
                        ],
                        [
                            'name' => 'Paniola',
                            'logo' => '',
                            'url' => '',
                            'description' => ''
                        ]
                    ],
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-partners-block',
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
            'section_title' => $attributes['sectionTitle'] ?? 'Proud to Collaborate With',
            'section_description' => $attributes['sectionDescription'] ?? 'Collaboration in term of Freelancing, Full time ...Reach me for details',
            'partners' => $attributes['partners'] ?? [
                [
                    'name' => 'ShyrineProd',
                    'logo' => '',
                    'url' => '',
                    'description' => ''
                ],
                [
                    'name' => 'Tanitweb',
                    'logo' => '',
                    'url' => '',
                    'description' => ''
                ],
                [
                    'name' => 'Edge studio',
                    'logo' => '',
                    'url' => '',
                    'description' => ''
                ],
                [
                    'name' => 'CanIBuy',
                    'logo' => '',
                    'url' => '',
                    'description' => ''
                ],
                [
                    'name' => 'FabLab',
                    'logo' => '',
                    'url' => '',
                    'description' => ''
                ],
                [
                    'name' => 'Paniola',
                    'logo' => '',
                    'url' => '',
                    'description' => ''
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
        return view('blocks.partners', $context)->render();
    }
} 