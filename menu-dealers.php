<?php
echo "<li><a href='" . home_url() . "' title='" . esc_attr( get_bloginfo( 'name' ) ) . "'>Home</a></li>\n";
if ( is_user_logged_in() ) {
	
$menu_name = 'dealers';
wp_enqueue_style('Mega-Menu-CSS', get_template_directory_uri() . '/css/menus.css');	
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>
<?php
    if (get_theme_mod('mcbra_general_portal')!='') {
		echo "<li><a href='" . get_theme_mod('mcbra_general_portal') . "' title='" . get_theme_mod('mcbra_general_portal_title') . "'>Portal</a></li>\n";
	}
	//echo "<li><a href='" . home_url() . "' title='" . esc_attr( get_bloginfo( 'name' ) ) . "'>Home</a></li>\n";

	$count = 0;
	$submenu = false;
	foreach( $menuitems as $item ):
		$link = $item->url;
		$title = $item->title;
		$target = !empty( $item->target ) ? " target='" . esc_attr($item->target) ."'" : "";
		if ( !$item->menu_item_parent ):
			$parent_id = $item->ID;
			$nmenu .= "<li[%class%]><a href='". $link . "'" . $target . ">" . $title . "</a>";
		endif;
		if ( $parent_id == $item->menu_item_parent ):
                if ( !$submenu ):
			        $submenu = true;
                	$smenu = "<ul>";
                endif;
		    	$smenu .= "<li[%sclass%]><a href='" . $link . "'" . $target . ">" . $title . "</a></li>";
			if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ):
				$smenu .= "</ul>";
				$smenu = str_replace("[%sclass%]", " class='last'", $smenu);
				$nmenu .= $smenu;
				$smenu = "";
				$submenu = false;
			else:
				$smenu = str_replace("[%sclass%]", "", $smenu);
			endif;
        endif;
        if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ):
			$nmenu .= "</li>";
			$submenu = false;
		else:
			$nmenu = str_replace("[%class%]", "", $nmenu);
		endif; 
		$count++;
	endforeach;
	$nmenu = str_replace("[%class%]", " class='last'", $nmenu);
	//echo ($nmenu!="") ? "<li><a href='#'>&Aacute;rea Restrita</a><ul>" . $nmenu . "</ul></li>" : "";
	

}
?>    	