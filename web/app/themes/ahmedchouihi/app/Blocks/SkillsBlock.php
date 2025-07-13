<?php

namespace App\Blocks;

/**
 * Skills Block
 */
class SkillsBlock extends BaseBlock
{
    /**
     * The block name.
     *
     * @var string
     */
    protected $name = 'skills';

    /**
     * The block description.
     *
     * @var string
     */
    protected $description = 'Portfolio skills section with skill categories and proficiency levels';

    /**
     * The block icon.
     *
     * @var string
     */
    protected $icon = 'admin-tools';

    /**
     * The block fields.
     *
     * @var array
     */
    protected $fields = [
        'section_title' => 'Skills & Expertise',
        'skills' => [],
    ];
} 