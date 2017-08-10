<?php

function simple_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) )
    {
        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        wp_nav_menu(array(
            'menu'    => $menu->term_id,
            'walker'  => new Clean_Nav_Walker()
        ));
    }
}