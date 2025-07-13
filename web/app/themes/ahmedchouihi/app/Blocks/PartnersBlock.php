<?php

namespace App\Blocks;

/**
 * Partners Block
 */
class PartnersBlock extends BaseBlock
{
    /**
     * The block name.
     *
     * @var string
     */
    protected $name = 'partners';

    /**
     * The block description.
     *
     * @var string
     */
    protected $description = 'Portfolio partners section with collaboration showcase';

    /**
     * The block icon.
     *
     * @var string
     */
    protected $icon = 'groups';

    /**
     * The block fields.
     *
     * @var array
     */
    protected $fields = [
        'section_title' => 'Proud to Collaborate With',
        'partners' => [],
    ];
} 