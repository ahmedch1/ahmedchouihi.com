<?php
/**
 * Template Name: Portfolio with Blocks
 * 
 * This template allows you to build your portfolio page using Gutenberg blocks.
 * You can add and arrange the portfolio blocks through the WordPress editor.
 */

// Enable Gutenberg for this page
add_filter('use_block_editor_for_post', '__return_true');

// Ensure all blocks are available
add_filter('allowed_block_types_all', function($allowed_blocks, $block_editor_context) {
    // Allow all blocks including our custom portfolio blocks
    return $allowed_blocks;
}, 10, 2);

// Include the view
echo view('page-portfolio-blocks')->render(); 