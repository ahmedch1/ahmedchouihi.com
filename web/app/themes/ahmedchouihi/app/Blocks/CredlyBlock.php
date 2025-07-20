<?php

namespace App\Blocks;

/**
 * Credly Block - Manual badges management with carousel
 */
class CredlyBlock
{
    /**
     * Register the block
     */
    public function register()
    {
        // Register block using WordPress native register_block_type
        register_block_type('portfolio/credly', [
            'title' => 'Credly Badges',
            'description' => 'Display Credly badges and certifications with carousel',
            'category' => 'portfolio',
            'icon' => 'awards',
            'keywords' => ['credly', 'badges', 'certifications', 'awards', 'carousel'],
            'supports' => [
                'align' => false,
                'anchor' => true,
                'customClassName' => true,
            ],
            'attributes' => [
                'display' => [
                    'type' => 'boolean',
                    'default' => true,
                ],
                'sectionTitle' => [
                    'type' => 'string',
                    'default' => 'Certifications & Badges',
                ],
                'sectionDescription' => [
                    'type' => 'string',
                    'default' => 'Professional certifications and achievements earned through continuous learning and skill development.',
                ],
                'credlyProfileUrl' => [
                    'type' => 'string',
                    'default' => 'https://www.credly.com/users/ahmed-chouihi',
                ],
                'badgesData' => [
                    'type' => 'array',
                    'default' => [
                        [
                            'image' => 'https://images.credly.com/size/680x680/images/0e284b3d-5164-4b21-8660-0d84737941bc/image.png',
                            'title' => 'AWS Certified Solutions Architect',
                            'issuer' => 'Amazon Web Services',
                            'issuedDate' => '2023-12-15',
                            'credentialUrl' => 'https://www.credly.com/badges/example1'
                        ],
                        [
                            'image' => 'https://images.credly.com/size/680x680/images/be8fcaeb-c769-4859-b87f-93d9720044f5/azure-solutions-architect-expert-600x600.png',
                            'title' => 'Microsoft Azure Solutions Architect',
                            'issuer' => 'Microsoft',
                            'issuedDate' => '2023-11-20',
                            'credentialUrl' => 'https://www.credly.com/badges/example2'
                        ],
                        [
                            'image' => 'https://images.credly.com/size/680x680/images/00634f82-b07f-4bbd-a6bb-53de397fc3a6/image.png',
                            'title' => 'Google Cloud Professional Cloud Architect',
                            'issuer' => 'Google Cloud',
                            'issuedDate' => '2023-10-10',
                            'credentialUrl' => 'https://www.credly.com/badges/example3'
                        ]
                    ],
                ],
                'carouselSettings' => [
                    'type' => 'object',
                    'default' => [
                        'slidesToShow' => 3,
                        'autoplay' => true,
                        'autoplaySpeed' => 2000
                    ],
                ],
            ],
            'render_callback' => [$this, 'render'],
            'editor_script' => 'portfolio-credly-block',
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
            'section_title' => $attributes['sectionTitle'] ?? 'Certifications & Badges',
            'section_description' => $attributes['sectionDescription'] ?? 'Professional certifications and achievements earned through continuous learning and skill development.',
            'credly_profile_url' => $attributes['credlyProfileUrl'] ?? 'https://www.credly.com/users/ahmed-chouihi',
            'badges' => $attributes['badgesData'] ?? [
                [
                    'image' => 'https://images.credly.com/size/680x680/images/0e284b3d-5164-4b21-8660-0d84737941bc/image.png',
                    'title' => 'AWS Certified Solutions Architect',
                    'issuer' => 'Amazon Web Services',
                    'issuedDate' => '2023-12-15',
                    'credentialUrl' => 'https://www.credly.com/badges/example1'
                ],
                [
                    'image' => 'https://images.credly.com/size/680x680/images/be8fcaeb-c769-4859-b87f-93d9720044f5/azure-solutions-architect-expert-600x600.png',
                    'title' => 'Microsoft Azure Solutions Architect',
                    'issuer' => 'Microsoft',
                    'issuedDate' => '2023-11-20',
                    'credentialUrl' => 'https://www.credly.com/badges/example2'
                ],
                [
                    'image' => 'https://images.credly.com/size/680x680/images/00634f82-b07f-4bbd-a6bb-53de397fc3a6/image.png',
                    'title' => 'Google Cloud Professional Cloud Architect',
                    'issuer' => 'Google Cloud',
                    'issuedDate' => '2023-10-10',
                    'credentialUrl' => 'https://www.credly.com/badges/example3'
                ]
            ],
            'carousel_settings' => $attributes['carouselSettings'] ?? [
                'slidesToShow' => 3,
                'autoplay' => true,
                'autoplaySpeed' => 2000
            ],
        ];

        // Prepare context for the view
        $context = [
            'fields' => $fields,
            'block' => $block,
            'is_preview' => defined('REST_REQUEST') && REST_REQUEST,
        ];

        // Render the view
        return view('blocks.credly', $context)->render();
    }
} 