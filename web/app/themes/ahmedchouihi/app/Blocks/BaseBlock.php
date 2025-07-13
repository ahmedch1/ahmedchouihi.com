<?php

namespace App\Blocks;

use Roots\Acorn\Application;

/**
 * Base Block class that all blocks extend
 */
abstract class BaseBlock
{
    /**
     * The block name.
     *
     * @var string
     */
    protected $name;

    /**
     * The block description.
     *
     * @var string
     */
    protected $description;

    /**
     * The block category.
     *
     * @var string
     */
    protected $category = 'portfolio';

    /**
     * The block icon.
     *
     * @var string
     */
    protected $icon = 'admin-page';

    /**
     * The block supports.
     *
     * @var array
     */
    protected $supports = [
        'align' => false,
        'mode' => false,
        'jsx' => true,
    ];

    /**
     * The block fields.
     *
     * @var array
     */
    protected $fields = [];

    /**
     * Register the block
     */
    public function register()
    {
        if (function_exists('acf_register_block_type')) {
            acf_register_block_type([
                'name' => $this->name,
                'title' => $this->getTitle(),
                'description' => $this->description,
                'category' => $this->category,
                'icon' => $this->icon,
                'keywords' => $this->getKeywords(),
                'supports' => $this->supports,
                'render_callback' => [$this, 'render'],
                'enqueue_style' => get_template_directory_uri() . '/public/css/app.css',
                'enqueue_script' => get_template_directory_uri() . '/public/js/app.js',
            ]);
        }
    }

    /**
     * Render the block
     */
    public function render($block, $content = '', $is_preview = false, $post_id = 0)
    {
        $context = [
            'block' => $block,
            'content' => $content,
            'is_preview' => $is_preview,
            'post_id' => $post_id,
            'fields' => get_fields() ?: [],
        ];

        echo view('blocks.' . $this->name, $context)->render();
    }

    /**
     * Get the block title
     */
    protected function getTitle()
    {
        return ucwords(str_replace('-', ' ', $this->name));
    }

    /**
     * Get the block keywords
     */
    protected function getKeywords()
    {
        return [
            'portfolio',
            $this->name,
        ];
    }
} 