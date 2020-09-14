<?

wp_enqueue_style('Mercedes-Menu-CSS', get_template_directory_uri() . '/css/menus.css');

?>
<div id='cssmenu' class='menu-wrap-<? echo $menu_name ?>'>
<ul>
<div id='close_menu'><div class="closeimg" style="left: 100%;position: relative;" onclick="$(function() { $('#menu-button').trigger('click'); })"></div></div>
<?php get_template_part( 'menu', 'dealers' ); ?>

<?
class IBenic_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $permalink = $item->url;
        $parent = $item->menu_item_parent;
        
        $output .= "<li>";
        $output .= '<a href="' . (( $permalink && $permalink != '#' ) ? $permalink : 'javascript:;') . '">';
        $output .= $title;
        $output .= '</a>';
    }
}

$teste = wp_nav_menu( array(
	'theme_location' => 'main',
	'walker' => new IBenic_Walker(),
	'container' => false,
	'items_wrap' => '<ul>%3$s</ul>',
	'echo' => false
 ) );
 
$teste = str_replace(' class="sub-menu"','', $teste);
$teste = preg_replace('/^<ul>/','', $teste);

echo $teste;
?>
</div>