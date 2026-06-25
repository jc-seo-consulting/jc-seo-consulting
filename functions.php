<?php
/**
 * Theme setup for JC SEO Consulting.
 */

// Let WordPress generate the <title> tag automatically (better for SEO/plugins
// like Yoast than a hardcoded <title> in the template).
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
});

// Enqueue the theme's stylesheet so caching/versioning works correctly.
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'jc-seo-consulting-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
});
