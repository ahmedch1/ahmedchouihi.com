<?php

namespace App\Blocks;

/**
 * Contact Block
 */
class ContactBlock extends BaseBlock
{
    /**
     * The block name.
     *
     * @var string
     */
    protected $name = 'contact';

    /**
     * The block description.
     *
     * @var string
     */
    protected $description = 'Portfolio contact section with contact form and information';

    /**
     * The block icon.
     *
     * @var string
     */
    protected $icon = 'email';

    /**
     * The block fields.
     *
     * @var array
     */
    protected $fields = [
        'section_title' => 'Get In Touch',
        'contact_description' => 'Ready to start your next project? Let\'s work together!',
        'show_contact_form' => true,
        'contact_email' => 'ahmed@example.com',
        'contact_phone' => '+1 (555) 123-4567',
    ];
} 