<?php

// Evita que se acceda directamente al archivo.
if (!defined('ABSPATH')) {
    exit;
}

// Autoload clases 
require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

// Incluye los archivos necesarios.
// require_once plugin_dir_path(__FILE__) . 'includes/post-type.php';
// require_once plugin_dir_path(__FILE__) . 'includes/taxonomies/bloque.php';
// require_once plugin_dir_path(__FILE__) . 'includes/taxonomies/idioma.php';
// require_once plugin_dir_path(__FILE__) . 'includes/meta-boxes.php';
// require_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';
// require_once plugin_dir_path(__FILE__) . 'includes/helpers.php';


// Activación y desactivación del plugin.

function wp_my_plugin_activate()
{
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'wp_my_plugin_activate');

/**
 * Deactivation hook.
 */
function wp_my_plugin_deactivate()
{
    flush_rewrite_rules();
}
register_deactivation_hook(__FILE__, 'wp_my_plugin_deactivate');


/**
 * Añadir Scripts Admin
 */
function my_plugin_enqueue_admin_scripts()
{
    wp_enqueue_script('my-plugin-admin-scripts', plugin_dir_url(__FILE__) . 'js/admin_scripts.js');
    wp_enqueue_style('my-plugin-admin-styles', plugin_dir_url(__FILE__) . 'styles/admin_styles.css');
}
add_action('admin_enqueue_scripts', 'my_plugin_enqueue_admin_scripts');


/**
 * Añadir Scripts Site
 */
function my_plugin_enqueue_site_scripts()
{
    wp_enqueue_script('my-plugin-site-scripts', plugin_dir_url(__FILE__) . 'js/site_scripts.js');
    wp_enqueue_style('my-plugin-site-styles', plugin_dir_url(__FILE__) . 'styles/site_styles.css');
}
add_action('admin_enqueue_scripts', 'my_plugin_enqueue_site_scripts');
