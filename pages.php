<?
	
$o = array (1=>5,2=>2,3=>3,4=>4,5=>1);
if (get_theme_mod('mcbra_pages_setting')==1) {
	$i=1;
	
	for ($i=1; $i<=5; $i++) {
		if((get_theme_mod('mcbra_pages_active_setting_'.$o[$i])!=1) && (get_theme_mod('mcbra_pages_url_setting_'.$o[$i])!='')) {    	
		    	
			if(get_theme_mod('mcbra_pages_img_setting_'.$o[$i])) { $thumbnail = get_theme_mod('mcbra_pages_img_setting_'.$o[$i]); } else { $thumbnail = ""; }			
			if ($thumbnail=='') { $css=' class="pageslink"'; } else { $css=''; }			
			$pagespanel .= '<li' . $css . '><a href="' . get_theme_mod('mcbra_pages_url_setting_'.$o[$i]) . '" target="' . ((get_theme_mod('mcbra_pages_link_setting_'.$o[$i])==1) ? '_blank' : '_self' ) . '">';			
			if ($thumbnail!='') { $pagespanel .= '<img src="' . $thumbnail . '" alt="'. get_theme_mod('mcbra_pages_title_setting_'.$o[$i]) . '" />'; }			
			$pagespanel .= '<span>'.get_theme_mod('mcbra_pages_title_setting_'.$o[$i]).'</span>';		
			$pagespanel .= '</a></li>';
		}		
	}
	
	$pagespanel = trim(preg_replace('/\s\s+/', ' ', $pagespanel));
	if ($pagespanel!='') { ?>
		<div id='alle'>
			<ul id="menu-pages">
				<?=$pagespanel; ?>
			</ul>
		</div>
<?
 	}
}
?>

<script>
$(document).ready(function() {
   $("#menu-pages [href]").each(function() {   	
        if (this.href == window.location.href) {
            $(this).addClass("active");
        }
    });
});
</script>