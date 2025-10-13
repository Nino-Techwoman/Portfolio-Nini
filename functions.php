<?php
/**
 * functions.php
 * Utility functions for portfolio site
 */

/**
 * Escape output for safe HTML
 * 
 * @param string $string
 * @return string
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

/**
 * Generate image tag with alt text
 * 
 * @param string $src
 * @param string $alt
 * @param string $class
 * @return string
 */
function img_tag($src, $alt = '', $class = '') {
    return '<img src="' . e($src) . '" alt="' . e($alt) . '" class="' . e($class) . '">';
}

/**
 * Generate anchor link
 * 
 * @param string $href
 * @param string $text
 * @param array $attrs
 * @return string
 */
function a_tag($href, $text, $attrs = []) {
    $attr_string = '';
    foreach ($attrs as $key => $value) {
        $attr_string .= ' ' . e($key) . '="' . e($value) . '"';
    }
    return '<a href="' . e($href) . '"' . $attr_string . '>' . e($text) . '</a>';
}

/**
 * Get project layout class
 * 
 * @param string $layout 'image-left' | 'image-right'
 * @return string
 */
function project_layout_class($layout) {
    switch ($layout) {
        case 'image-left':
            return 'cards container image-left';
        case 'image-right':
            return 'cards container image-right';
        default:
            return 'cards container';
    }
}

/**
 * Format section ID from title
 * e.g. "About Me" => "about-me"
 * 
 * @param string $title
 * @return string
 */
function section_id($title) {
    return strtolower(str_replace(' ', '-', $title));
}
?>
