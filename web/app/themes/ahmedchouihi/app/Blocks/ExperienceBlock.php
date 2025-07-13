<?php

namespace App\Blocks;

/**
 * Experience Block
 */
class ExperienceBlock extends BaseBlock
{
    /**
     * The block name.
     *
     * @var string
     */
    protected $name = 'experience';

    /**
     * The block description.
     *
     * @var string
     */
    protected $description = 'Portfolio experience section with work history and achievements';

    /**
     * The block icon.
     *
     * @var string
     */
    protected $icon = 'businessman';

    /**
     * The block fields.
     *
     * @var array
     */
    protected $fields = [
        'section_title' => 'Experience',
        'experiences' => [],
    ];
} 