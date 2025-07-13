<?php

namespace App\Blocks;

/**
 * Gallery Block
 */
class GalleryBlock extends BaseBlock
{
    /**
     * The block name.
     *
     * @var string
     */
    protected $name = 'gallery';

    /**
     * The block description.
     *
     * @var string
     */
    protected $description = 'Portfolio gallery section with image showcase';

    /**
     * The block icon.
     *
     * @var string
     */
    protected $icon = 'format-gallery';

    /**
     * The block fields.
     *
     * @var array
     */
    protected $fields = [
        'section_title' => 'Gallery',
        'gallery_images' => [],
    ];
} 