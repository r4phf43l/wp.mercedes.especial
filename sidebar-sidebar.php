<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
<div class="sidebar sidebar-content" id="sidebar-content">
	<?php dynamic_sidebar( 'sidebar' ) ?>
</div>
<script>

	$( document ).ready(function() {
		
		$('#menu-item-1394 > a').html("Peças & Serviços")   
		/* if ($('.corppages .sidebar-content .widget_nav_menu #menu-topo-menus-1 > li.current-menu-ancestor').length >0 || $('.corppages .sidebar-content .widget_nav_menu #menu-topo-menus-1 > li.current-menu-item.menu-item-has-children').length > 0) {
			$('.widget_nav_menu:last-child').hide()
		} else {
			$('.widget_nav_menu:last-child').show()
		} */
	})    
</script>
<?php endif; ?>