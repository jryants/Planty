<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'planty_style' );
				function planty_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
				}

/**
 * Your code goes below.
 */


add_filter('wp_nav_menu_items', 'add_admin_nav_link', 10, 2);

function add_admin_nav_link($items, $args) {

    // Only show to logged-in administrators
    if (!current_user_can('manage_options')) {
        return $items;
    }

    // Build the Admin menu item
    // Same classes as "Nous rencontrer" so it looks identical
    $admin_item  = '<li class="menu-item menu-item-type-custom menu-item-object-custom parent hfe-creative-menu admin-nav-link">';
    $admin_item .= '<a href="' . admin_url() . '" class="hfe-menu-item" style="font-family: inherit; font-weight: inherit;">';
    $admin_item .= 'Admin';
    $admin_item .= '</a>';
    $admin_item .= '</li>';

    // Find the "Commander" menu item (id="menu-item-25")
    // and insert the Admin item right before it
    $commander_pattern = '/(<li[^>]*id="menu-item-25"[^>]*>)/i';
    $items = preg_replace($commander_pattern, $admin_item . '$1', $items);

    return $items;
}