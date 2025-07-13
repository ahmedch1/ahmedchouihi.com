<?php

namespace App\Blocks;

/**
 * Projects Block
 */
class ProjectsBlock extends BaseBlock
{
    /**
     * The block name.
     *
     * @var string
     */
    protected $name = 'projects';

    /**
     * The block description.
     *
     * @var string
     */
    protected $description = 'Portfolio projects section with project showcase and details';

    /**
     * The block icon.
     *
     * @var string
     */
    protected $icon = 'portfolio';

    /**
     * The block fields.
     *
     * @var array
     */
    protected $fields = [
        'section_title' => 'Featured Projects',
        'projects' => [],
    ];
} 