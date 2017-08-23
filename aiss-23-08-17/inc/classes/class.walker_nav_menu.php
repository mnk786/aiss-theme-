<?php
class anza_navigation_walker extends Walker_Nav_Menu {
   function start_lvl( &$output, $depth = 0, $args = array() ){
      $indent = str_repeat("\t", $depth);
      //$output .= "\n$indent<ul class=\"sub-menu\">\n";

      // Change sub-menu to dropdown menu
      $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }

  function start_el ( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
    // Most of this code is copied from original Walker_Nav_Menu
    global $wp_query, $wpdb;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

    $class_names = $value = '';

      
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $classes[] = 'menu-item-' . $item->ID;

      
      
      
      
   

    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

    $has_children = $wpdb->get_var("SELECT COUNT(meta_id)
                            FROM wp_postmeta
                            WHERE meta_key='_menu_item_menu_item_parent'
                            AND meta_value='".$item->ID."'");
      if ( $depth > 0 && $has_children > 0  ) {
        $classes[] = 'dropdown-submenu';
        } 
      
      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = ' class="' . esc_attr( $class_names ) . '"';
      
      
    $output .= $indent . '<li' . $id . $value . $class_names . '>';

    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

    // Check if menu item is in main menu
    if ( $depth == 0 && $has_children > 0  ) {
        // These lines adds your custom class and attribute
        $attributes .= ' class="dropdown-toggle"';
        $attributes .= ' data-toggle="dropdown"';
    }
      
    // Check if menu item is in main menu
    if ( $depth == 0 && !$has_children) {
        // These lines adds your custom class and attribute
        $attributes .= ' ';
    }  

    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'>';

    $item_output .= '<span class="bottom-mover">'.$args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after.'</span>';
    $item_output .= '<span class="top-mover">'.$args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after.'</span>';

    //$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

    // Add the caret if menu level is 0
    if ( $depth == 0 && $has_children > 0  ) {
        $item_output .= ' <b class="caret"></b>';
    }

    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
}