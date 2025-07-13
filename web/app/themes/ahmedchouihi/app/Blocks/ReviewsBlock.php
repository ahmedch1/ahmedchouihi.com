<?php

namespace App\Blocks;

/**
 * Reviews Block
 */
class ReviewsBlock extends BaseBlock
{
    /**
     * The block name.
     *
     * @var string
     */
    protected $name = 'reviews';

    /**
     * The block description.
     *
     * @var string
     */
    protected $description = 'Portfolio reviews section with client testimonials';

    /**
     * The block icon.
     *
     * @var string
     */
    protected $icon = 'star-filled';

    /**
     * The block fields.
     *
     * @var array
     */
    protected $fields = [
        'section_title' => 'Client Reviews',
        'reviews' => [],
    ];
} 