<?php

namespace App\Blocks;

/**
 * Languages Block
 */
class LanguagesBlock extends BaseBlock
{
    /**
     * The block name.
     *
     * @var string
     */
    protected $name = 'languages';

    /**
     * The block description.
     *
     * @var string
     */
    protected $description = 'Portfolio languages section with language proficiency levels';

    /**
     * The block icon.
     *
     * @var string
     */
    protected $icon = 'translation';

    /**
     * The block fields.
     *
     * @var array
     */
    protected $fields = [
        'section_title' => 'Languages',
        'languages' => [],
    ];
} 