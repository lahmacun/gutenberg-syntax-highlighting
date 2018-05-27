<?php
/**
 * Plugin Name: Gutenberg Syntax Highlighter
 * Description: Adds syntax highlighting support for Gutenberg's code block
 * Version: 1.0.0
 * Author: Mustafa Zahid EFE
 * Author URI: https://zahidefe.net
 * Plugin URI: https://github.com/lahmacun/gutenberg-syntax-highlighting
 */

add_action('enqueue_block_assets', 'lahmacun_enqueue_scripts');

function lahmacun_enqueue_scripts()
{
	wp_enqueue_style('highlightjs_style', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css');
	wp_enqueue_script('highlightjs_script', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js');
	wp_enqueue_script('highlightjs_php_mode', 'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/languages/php.min.js');
	wp_enqueue_script('lahmacun_highlighter', plugin_dir_url(__FILE__) . 'assets/js/highlight.js');
}