<?php get_header();  
$acat = single_cat_title("", false) ? strtolower(single_cat_title("", false)) : get_theme_mod('mcbra_models_cat_default');
$acat = (strpos($acat, 'autom')) ? 'automoveis' : $acat;
$acat = (strpos($acat, 'nibus')) ? 'onibus' : $acat;
$acat = (strpos($acat, 'camin')) ? 'caminhoes' : $acat;  
$cat = array( 'automoveis' => 1, 'onibus' => 2, 'vans' => 3, 'amg' => 4, 'caminhoes' => 5);
$c = $cat[$acat];      
$dt = array ( 1 => 'Novidades', 2 => 'Serviços', 3 => 'Notícias' );
?>
        
<div class='home_slider'>
    <?php get_template_part( 'slider' ); ?>

</div>

    <div class='home_thumbs<? if (get_theme_mod('mcbra_pages_setting')==1) { echo " alle-active";} ?>'>
    	<?php get_template_part( 'pages' ); ?>
	<?php get_template_part( 'teaser' ); ?>        
        <div style='clear:both'></div>
    </div>
       
<? for($i=1;$i<6;$i++) { ?>    
    <div class="sidebar sidebar-home" id="sidebar-block<?=$i?>">
        <!--<h2>
            <?=((get_theme_mod('mcbra_block_setting_'.$i)!='') ? get_theme_mod('mcbra_block_setting_'.$i) : $dt[$i])?>
        </h2> -->     
	<?php if ( is_active_sidebar( 'block'.$c.$i ) ) : ?>
	<?php dynamic_sidebar( 'block'.$c.$i ); ?>
	<?php endif; ?>
    </div>
<? } ?>
    
<div style="clear:both"></div>

<div class="welcome-layer">
<div class="wl-background" onclick="javascript:newsx();"></div>
<div class="wl-painel">
    <h2>Cadastre seu e-mail para receber descontos exclusivos!</h2>
    <div class="wl-form">
		<? es_subbox( $namefield = "NO", $desc = "", $group = "" ); ?>        
	</div>
    <div class="wl-no"><a href='#' onclick="javascript:newsno();">Não quero receber descontos</a></div>
    </div>
</div>

<script src="<?=get_template_directory_uri() ?>/js/cookies/src/js.cookie.js"></script>

<script>
	$(document).ready(function(){
    	$('.wl-painel .es_txt_email').attr('placeholder','Digite aqui seu email');
        $('.wl-painel .es_submit_button').attr('value','Quero receber descontos');
		if ( Cookies.get('wl-page') !== 1) { $('.welcome-layer').show('fast'); }
		$("body").on('DOMSubtreeModified', ".wl-painel", function() {
		 	if (($('.es_subscription_message').is(':visible')) && ($('.es_subscription_message').html()=='Assinado com Sucesso.')) {
				setTimeout(function(){ $('.welcome-layer').hide('slow')}, 3000 )
			}
		})
	})  
	function newsno() {
		Cookies.set("wl-page", 1);
		$('.welcome-layer').hide('fast');
	}
	function newsx() {
		$('.welcome-layer').hide('fast');
	}
</script>

<?php get_footer(); ?>