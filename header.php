<!DOCTYPE html>

<!--[if IE 9 ]><html class="ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
<meta content="no-cache" http-equiv="cache-control">
<meta content="no-cache" http-equiv="pragma">
<meta name="google" content="notranslate">
<meta name="pinterest" content="nohover">
<meta name="robots" content="noodp,noydir"/>

<meta id="vp" name="viewport" content="width=device-width, initial-scale=1">
<script>
window.onload = function() {
    if (screen.width < 400) {
        var mvp = document.getElementById('vp');
        mvp.setAttribute('content','user-scalable=no,width=400');
    }
}
</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php	

	wp_enqueue_style('CorporateS', get_template_directory_uri() . '/fonts/CorporateS.css');	
	wp_enqueue_style('CorporateA-C', get_template_directory_uri() . '/fonts/CorporateA-C.css');			
	wp_enqueue_style('CorporateS-D', get_template_directory_uri() . '/fonts/CorporateSDemi.css');
	wp_enqueue_script( 'AL-js', get_template_directory_uri() . '/js/almenus.js');
	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_enqueue_style('d-style', get_template_directory_uri() . '/css/d-style.css');
	wp_enqueue_style('r-style', get_template_directory_uri() . '/css/r-style.css');
	wp_enqueue_style('header', get_template_directory_uri() . '/css/home.css' );	
	wp_head();
?>

<!--[if IE ]><script type="text/javascript" src="https://imobiliariaprisma.com/admin/inc/js/css3-mediaqueries.js"></script><![endif]-->
<!--[if lt IE 9]>
<link href="<?=get_template_directory_uri()?>/css/ie8.css" type="text/css" rel="stylesheet">
<link href="<?=get_template_directory_uri()?>/css/ie8-print.css" type="text/css" media="print" rel="stylesheet">
<![endif]-->
<!--[if lte IE 9]>
<link rel="stylesheet" type="text/css" href="<?=get_template_directory_uri()?>/css/vc_lte_ie9.min.css" media="screen"><![endif]-->

<!--[if IE]><link rel="shortcut icon" href="<?=get_template_directory_uri()?>/imgs/favicon-192x192.ico"><![endif]-->
<link rel="icon" href="<?=get_template_directory_uri()?>/imgs/favicon-192x192.png" />

<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="description" content="<? bloginfo('description'); ?>"/>
<link rel="canonical" href="<?=get_template_directory_uri() ?>" />

</head>

<body id="<?php print get_stylesheet(); ?>" <?php body_class('ct-body'); ?>>

<div id="overflow-container" class="overflow-container">
    <header id="site-header" class="site-header" role="banner">
    
	<div id='meta-navigation' class='meta-navigation'>
		<?php if( has_nav_menu( 'meta' ) ) : get_template_part( 'menu', 'meta' ); endif; ?>
        </div>

        <picture id="img-logo">
        <source srcset="<?=get_template_directory_uri()?>/imgs/d.mb.2018.128.fw.png x2" media="(min-width: 768px)">
        <source srcset="<?=get_template_directory_uri()?>/imgs/d.mb.2018.64.fw.png x1" media="(min-width: 768px)">
        <source srcset="<?=get_template_directory_uri()?>/imgs/m.mb.2018.80.fw.png x2" media="(min-width: 480px)">
        <source srcset="<?=get_template_directory_uri()?>/imgs/m.mb.2018.80.fw.png x1" media="(min-width: 480px)">
        <img class="img-responsive" src="<?=get_template_directory_uri()?>/imgs/d.mb.2018.128.fw.png">
        </picture>
        
        <div id="menu-primary" class="menu-container menu-primary" role="navigation" style='display:none'>
            <div id="menu-button"></div>
        	<?php get_template_part( 'menu', 'main' ); ?>
        </div>
        
        <div id="title-info" class="title-info">
		    
		    <div style="clear:both">
				<? if (get_theme_mod('mcbra_logo_img_setting')=='') { ?>
                    <?php get_template_part('logo')  ?>
                    <div id="blog-descrp"><?php bloginfo('description'); ?></div>
                <? } else { ?>
                    <picture id="site-logo">
                        <img src="<? echo get_theme_mod('mcbra_logo_img_setting') ?>">
                    </picture>
                <? } ?>		        
		        </div>
        </div>
        
        <div class="model_navigation" id="model_navigation">         
            <?php get_template_part( 'menu', 'model' ); ?>        
        </div>
    
    </header>
    <div id="main" class="main" role="main">