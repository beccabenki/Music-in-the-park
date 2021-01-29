<?php
// Intented to use bootstrap 3.
// Location is like a 'primary'
// After, you print menu just add create_bootstrap_menu("primary") in your preferred position;
  
#add this function in your theme functions.php


  
function create_bootstrap_menu( $theme_location, $thePostID ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
   
        $menu_list  = '<nav class="navbar second-nav" role="navigation">' ."\n";
        $menu_list .= '<div class="container-fluid">' ."\n";

        $menu_list .= '<div class="menu-container">' ."\n"; // menu container

        $menu_list .= '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">' ."\n";
        $menu_list .= '<span class="sr-only">Toggle navigation</span>' ."\n";
        $menu_list .= '<span class="toggle-icon"></span>' ."\n";
        $menu_list .= '</button>' ."\n";

        $menu_list .= '<div class="logo">' ."\n"; // logo 
        if ( get_theme_mod( 'pent_logo' ) ) :
            $menu_list .= '<a class="logo-wrap" href='.esc_url( home_url( '/' ) ).' title='.esc_attr( get_bloginfo( 'name', 'display' ) ).' rel="home">' . "\n";
            $menu_list .= '<img class="site-logo img-responsive" src="'.esc_url(get_theme_mod('pent_logo')).'" alt="'.esc_attr(get_bloginfo('name','display')).'" />'. "\n";

            $menu_list .= '<div class="visible-xs mobile-logo"></div>';

            $menu_list .= '</a>';
        else :
            $menu_list .= '<p class="site-title">' . "\n";
            $menu_list .= '<a href="'. esc_url( home_url( '/' ) ) .'" title="'. esc_attr( get_bloginfo( 'name', 'display' ) ) .'" rel="home">'. bloginfo( 'name' ) .'</a>' ."\n";
            $menu_list .= '</p>' ."\n";
        endif;
        $menu_list .= '</div>' ."\n"; // end logo


        $menu_list .= '</div>' ."\n"; // end menu container
         
        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);
 
        $menu_list .= '<div class="collapse navbar-collapse nav-collapse">' ."\n";
        $menu_list .= '<div class="menu-container">' ."\n";
        $menu_list .= '<ul class="navbar-nav navbar-nav-right">' ."\n";



        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {
                 
                $parent = $menu_item->ID;
                
                $bool = false;
                $menu_array = array();
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        if ($submenu->title === '-') {
                            $menu_array[] = '<li class="divider"></li>' ."\n";
                        } else {
                            $menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
                        }
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {
                     
                    $menu_list .= '<li class="nav-item dropdown">' ."\n";
                    $menu_list .= '<a class="nav-item-child nav-item-hover" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $menu_item->title . ' <span class="caret"></span></a>' ."\n";
                     
                    $menu_list .= '<ul class="dropdown-menu">' ."\n";
                    $menu_list .= implode( "\n", $menu_array );
                    $menu_list .= '</ul>' ."\n";
                     
                } else {
                    if ($menu_item->object_id == $thePostID) {
                        $menu_list .= '<li class="active">' ."\n";
                    } else {
                        $menu_list .= '<li class="nav-item">' ."\n";
                        
                    }
                    $menu_list .= '<a class="nav-item-child nav-item-hover" href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
                }
                 
            }
             
            // end <li>
            $menu_list .= '</li>' ."\n";

        }
        $menu_list .= '</div><!-- /.menu-container -->' ."\n";
        $menu_list .= '</div><!-- /.collapse -->' ."\n";
        $menu_list .= '</ul>' ."\n";
        $menu_list .= '</div><!-- /.container -->' ."\n";
        $menu_list .= '</nav>' ."\n";
  
    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }
     
    echo $menu_list;
}