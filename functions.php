<?php
if( ! function_exists( 'ct_mcbra_theme_setup' ) ) {
    function ct_mcbra_theme_setup() {
        register_nav_menus( array(
            'meta'       => __( 'Topo', 'mcbra' ),
			'main'   => __( 'Principal', 'mcbra' ),
            'home'      => __( 'Link Direto', 'mcbra' ),
			'dealers' => __( 'Concessionárias', 'mcbra' ),
        ) );
        foreach ( glob( trailingslashit( get_template_directory() ) . 'inc/*.php' ) as $filename ) {
            include $filename;
        }
    }
}

add_action( 'after_setup_theme', 'ct_mcbra_theme_setup', 10 );

if (function_exists('register_sidebar')) {
	register_sidebar( array(
		'name'         => __( 'Corporativo/Institucional', 'mcbra' ),
		'id'           => 'sidebar',
		'description'  => __( 'Widgets nesta área aparecerão nos posts corporativos do site', 'mcbra' )
	) );
	register_sidebar( array(
		'name'         => __( 'Páginas', 'mcbra' ),
		'id'           => 'sidebarpage',
		'description'  => __( 'Widgets nesta área aparecerão nas páginas do site', 'mcbra' )
	) );
	register_sidebar( array(
		'name'         => __( 'Clientes', 'mcbra' ),
		'id'           => 'sidebarcliente',
		'description'  => __( 'Widgets nesta área aparecerão nas páginas dos Clientes do site', 'mcbra' )
	) );
	register_sidebar( array(
		'name'         => __( 'Formulário Rodapé', 'mcbra' ),
		'id'           => 'sidebarfooter',
		'description'  => __( 'Widgets nesta área aparecerão no rodapé do site', 'mcbra' )
	) );
	
	$gtm[1] = ((get_theme_mod('mcbra_block_setting_1')!='') ? get_theme_mod('mcbra_block_setting_1') : '#1');
	$gtm[2] = ((get_theme_mod('mcbra_block_setting_2')!='') ? get_theme_mod('mcbra_block_setting_2') : '#2');
	$gtm[3] = ((get_theme_mod('mcbra_block_setting_3')!='') ? get_theme_mod('mcbra_block_setting_3') : '#3');
	$gtm[4] = ((get_theme_mod('mcbra_block_setting_4')!='') ? get_theme_mod('mcbra_block_setting_4') : '#4');
	$gtm[5] = ((get_theme_mod('mcbra_block_setting_5')!='') ? get_theme_mod('mcbra_block_setting_5') : '#5');
	
	if (get_theme_mod('mcbra_full_setting_cat_5')==1) {
		register_sidebar( array(
			'name'         => __( 'Agricol ' . $gtm[1] , 'mcbra' ),
			'id'           => 'block51',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[1] . ' da página Agricol', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Agricol ' . $gtm[2], 'mcbra' ),
			'id'           => 'block52',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[2] . ' da página Agricol', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Agricol ' . $gtm[3], 'mcbra' ),
			'id'           => 'block53',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[3] . ' da página Agricol', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Agricol ' . $gtm[4], 'mcbra' ),
			'id'           => 'block54',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[4] . ' da página Agricol', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Agricol ' . $gtm[5], 'mcbra' ),
			'id'           => 'block55',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[5] . ' da página Agricol', 'mcbra' ),
		) );				
	}
/*	
	if (get_theme_mod('mcbra_full_setting_cat_2')==1) {
		register_sidebar( array(
			'name'         => __( 'Ônibus ' . $gtm[1], 'mcbra' ),
			'id'           => 'block21',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[1] . ' da página Ônibus', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Ônibus ' . $gtm[2], 'mcbra' ),
			'id'           => 'block22',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[2] . ' da página Ônibus', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Ônibus ' . $gtm[3], 'mcbra' ),
			'id'           => 'block23',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[3] . ' da página Ônibus', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Ônibus ' . $gtm[4], 'mcbra' ),
			'id'           => 'block24',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[4] . ' da página Ônibus', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Ônibus ' . $gtm[5], 'mcbra' ),
			'id'           => 'block25',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[5] . ' da página Ônibus', 'mcbra' ),
		) );			
	}
	
	if (get_theme_mod('mcbra_full_setting_cat_3')==1) {
		register_sidebar( array(
			'name'         => __( 'Vans ' . $gtm[1], 'mcbra' ),
			'id'           => 'block31',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[1] . ' da página Vans', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Vans ' . $gtm[2], 'mcbra' ),
			'id'           => 'block32',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[2] . ' da página Vans', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Vans ' . $gtm[3], 'mcbra' ),
			'id'           => 'block33',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[3] . ' da página Vans', 'mcbra' ),
		) );
				register_sidebar( array(
			'name'         => __( 'Vans ' . $gtm[4], 'mcbra' ),
			'id'           => 'block34',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[4] . ' da página Vans', 'mcbra' ),
		) );
				register_sidebar( array(
			'name'         => __( 'Vans ' . $gtm[5], 'mcbra' ),
			'id'           => 'block35',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[5] . ' da página Vans', 'mcbra' ),
		) );				
	}
		
	if (get_theme_mod('mcbra_full_setting_cat_4')==1) {
		register_sidebar( array(
			'name'         => __( 'AMG ' . $gtm[1], 'mcbra' ),
			'id'           => 'block41',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[1] . ' da página AMG', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'AMG ' . $gtm[2], 'mcbra' ),
			'id'           => 'block42',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[2] . ' da página AMG', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'AMG ' . $gtm[3], 'mcbra' ),
			'id'           => 'block43',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[3] . ' da página AMG', 'mcbra' ),
		) );
				register_sidebar( array(
			'name'         => __( 'AMG ' . $gtm[4], 'mcbra' ),
			'id'           => 'block44',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[4] . ' da página AMG', 'mcbra' ),
		) );
				register_sidebar( array(
			'name'         => __( 'AMG ' . $gtm[5], 'mcbra' ),
			'id'           => 'block45',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[5] . ' da página AMG', 'mcbra' ),
		) );	
	}
	
	if (get_theme_mod('mcbra_full_setting_cat_1')==1) {
		register_sidebar( array(
			'name'         => __( 'Automóveis ' .$gtm[1], 'mcbra' ),
			'id'           => 'block11',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[1] . ' da página Automóveis', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Automóveis ' .$gtm[2], 'mcbra' ),
			'id'           => 'block12',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[2] . ' da página Automóveis', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Automóveis ' .$gtm[3], 'mcbra' ),
			'id'           => 'block13',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[3] . ' da página Automóveis', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Automóveis ' .$gtm[4], 'mcbra' ),
			'id'           => 'block14',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[4] . ' da página Automóveis', 'mcbra' ),
		) );
		register_sidebar( array(
			'name'         => __( 'Automóveis ' .$gtm[5], 'mcbra' ),
			'id'           => 'block15',
			'description'  => __( 'Widgets desta área aparecerão no bloco ' . $gtm[5] . ' da página Automóveis', 'mcbra' ),
		) );							
	}
*/	
		
}

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1000, 1000, true );	
	add_image_size( 'thumbnail', 150, 9999 );
	add_image_size( 'img_gal', 230, 130 );
	add_image_size( 'medium', 300, 9999 );
	add_image_size( 'large', 640, 9999 );
	add_image_size( 'full', 9999, 9999 );
}

add_filter( 'wp_title', 'title_for_home' );

function title_for_home( $title ) {
  if ( empty( $title ) && ( is_home() || is_front_page() ) ) {
    $title = get_bloginfo( 'name' );
  } else {
	$title = the_title() . ' :: ' . get_bloginfo( 'name' );
  }

  return $title;
}

add_action('after_setup_theme', 'linkable_text');

function linkable_text() {
	if (!class_exists('LinkableTitleHtmlAndPhpWidget')) {
		include_once(TEMPLATEPATH.'/plugins/linkable_text.php');
	}
}

add_action('after_setup_theme', 'category_featured');

function category_featured() {
	if (!class_exists('category_featured_images')) {
		include_once(TEMPLATEPATH.'/plugins/category-featured-images.php');
	}
}

function create_my_cat () {
    if (file_exists (ABSPATH.'/wp-admin/includes/taxonomy.php')) {
        require_once (ABSPATH.'/wp-admin/includes/taxonomy.php'); 
 
       /*if ( ! get_cat_ID( 'Automóveis' ) ) {
            wp_create_category( 'Automóveis' );
        }
        if ( ! get_cat_ID( 'Ônibus' ) ) {
            wp_create_category( 'Ônibus' );
        }
        if ( ! get_cat_ID( 'Vans' ) ) {
            wp_create_category( 'Vans' );
        }
        if ( ! get_cat_ID( 'AMG' ) ) {
            wp_create_category( 'AMG' );
        }*/
        if ( ! get_cat_ID( 'Agricol' ) ) {
            wp_create_category( 'Agricol' );
        }

    }
}
add_action ( 'after_setup_theme', 'create_my_cat' );

add_filter( 'kdmfi_featured_images', function( $featured_images ) {
  $args = array(
    'id' => 'miniatura',
    'desc' => 'Miniatura de exibição.',
    'label_name' => 'Miniatura',
    'label_set' => 'Defina uma miniatura',
    'label_remove' => 'Remova a miniatura',
    'label_use' => 'Defina uma miniatura',
    'post_type' => array( 'page','post' ),
  );

  $featured_images[] = $args;

  return $featured_images;
});

add_theme_support( 'title-tag' );
/*
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") .
        "://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}*/

//custom admin login logo
function custom_login_logo() {
          echo '<style type="text/css">
            h1 a { background-image: url(' .get_bloginfo('template_directory').'/imgs/agricol-logo.png) !important;}
          </style>';
}
add_action('login_head', 'custom_login_logo');