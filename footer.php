</div> <!-- .main -->

<footer id="site-footer" class="site-footer">
<div id="site-social">
<!--<div>Redes Sociais</div>
    <p>Nos acompanhe em sua rede social favorita:</p>
    <nav class="mbc-footer-social">
    <ul>    
        <?php /*
		$social_sites = array(
            'facebook',
			'googleplus',
			'twitter',
			'youtube',            
			'pinterest',
			'instagram',
            'foursquare',
			'tumblr',
			'linked-in_icon',
			'telegram'			
        );
		foreach($social_sites as $social_site) {		
			if (get_theme_mod('mcbra_social_'.$social_site.'_setting')!=''):
				echo '<li><a href="' . get_theme_mod('mcbra_social_'.$social_site.'_setting') . '" class="mbc-hover"><span class="mbcom-icon mbcom-icon-'.$social_site.'"></span></a></li>';
			endif;
		}*/
    ?>
    
    <?php /*
		$social_sites = array(
			'twitter',
			'facebook',
			'instagram',
			'youtube'
		);
		foreach($social_sites as $social_site) {		
			if (get_theme_mod('mcbra_social_'.$social_site.'_setting')!=''):
				$social .= '<a href="' . get_theme_mod('mcbra_social_'.$social_site.'_setting') . '" class="'.$social_site.'">'.ucfirst($social_site).'</a>';
		
			endif;
		} */
	?> 
    <? // if ($social!='') { ?>
    <div class='social_links line'>
	<? //echo $social; ?></div>
	<? // } ?>
    
    
    
        </ul>
    </nav>-->
    
    <picture>
        <a href='mercedes.com.br' target="_blank"><img class="rodape-img-responsive" src="<?=get_template_directory_uri()?>/imgs/d.mb.2018.128.fw.png"></a>
        </picture>
</div>

<div id="site-inscricao">
<div>Fique por dentro</div>
<p>Para se manter informado, cadastre seu email.</p>
	<?php $i=4; if ( is_active_sidebar( 'sidebarfooter' ) ) : ?>
	<?php dynamic_sidebar( 'sidebarfooter' ); ?>
	<?php endif; ?>
</div>

<div class="design-credit"><?php //get_template_part( 'menu', 'home' ); ?>
<?php
	$user_footer_text = get_theme_mod('mcbra_footer_text_setting');
	$site_url = 'http://www.rafaantonio.com/mercedes/';
	$footer_text = sprintf( __( 'Comunimax &copy; 2019', 'tracks' ), esc_url( $site_url ) );
	echo ($user_footer_text) ? $user_footer_text . ' | ': '';
	echo $footer_text;
?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>