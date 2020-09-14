<?php

$acat = single_cat_title("", false) ? strtolower(single_cat_title("", false)) : get_theme_mod('mcbra_models_cat_default');
$acat = (strpos($acat, 'autom')) ? 'automoveis' : $acat;
$acat = (strpos($acat, 'nibus')) ? 'onibus' : $acat;
$acat = (strpos($acat, 'camin')) ? 'caminhoes' : $acat;

if (is_home() || (single_cat_title("", false)!='' && !strpos(single_cat_title("", false),'deos'))) {
	$models = get_theme_mod('mcbra_models_count_setting')!="" && get_theme_mod('mcbra_models_count_setting')>0 ? get_theme_mod('mcbra_models_count_setting') : 10;
	
	for ($i=1; $i<=$models; $i++) {	
		if (get_theme_mod('mcbra_models_active_setting_' . $i)!=1) {			
			$im[get_theme_mod('mcbra_models_classe_setting_' . $i)]++;			
			$c[$i] = (str_replace("_".$acat, "", get_theme_mod('mcbra_models_classe_setting_' . $i)));
			$cn[$i] = ((($acat=='automoveis') && (strlen($c[$i])==1)) ? "Classe " : "");
			$cn[$i] .= $c[$i];			
			$fly[get_theme_mod('mcbra_models_classe_setting_' . $i)] .=		
				"<div class='flyout_content' id='flyout_" . str_replace(" ", "-", get_theme_mod('mcbra_models_classe_setting_' . $i)) . "_" . $im[get_theme_mod('mcbra_models_classe_setting_' . $i)] . "'
				style=\"background:url('" . get_theme_mod('mcbra_models_img_setting_' . $i) . "');\">
				  <h2>" . $cn[$i] . "</h2>
				  <div id='closemodel' style='display:none'><a href='#'>Fechar</a></div>
				  <div class='modelo'><ul>--MODELO--</ul></div>
				  <div class='destaques'>
				  	<strong>" . get_theme_mod('mcbra_models_url_4_setting_' . $i) . "</strong><br>
				  	" . get_theme_mod('mcbra_models_url_5_setting_' . $i) . "<br><br>
				  	<button class='btn_models'><a href='" . get_theme_mod('mcbra_models_url_3_setting_' . $i) . "' target='_blank'>" .
				  	
				  		$cn[$i] . ((get_theme_mod('mcbra_models_title_setting_' . $i)!=$cn[$i]) ? " " . get_theme_mod('mcbra_models_title_setting_' . $i) : "") . "</a></button><br>
				  		 
				  	<span><a href='" . get_theme_mod('mcbra_models_url_1_setting_' . $i) . "' target='" . ((get_theme_mod('mcbra_models_link_1_setting_' . $i)!=1)?'_self':'_blank') . "'>Dados Técnicos</a></span>
				  	<span><a href='" . get_theme_mod('mcbra_models_url_2_setting_' . $i) . "' target='" . ((get_theme_mod('mcbra_models_link_2_setting_' . $i)!=1)?'_self':'_blank') . "'>Galeria de Fotos</a></span>" .
				  	(get_theme_mod('mcbra_models_url_6_setting_' . $i)!='' ? 
				  	"<span><a href='" . get_theme_mod('mcbra_models_url_6_setting_' . $i) . "' target='" . ((get_theme_mod('mcbra_models_link_6_setting_' . $i)!=1)?'_self':'_blank') . "'>Cat&aacute;logo de Implementa&ccedil;&atilde;o</a></span>" :
				  	"") .				  	
				  	"</div>
				</div>";
			
			if (get_theme_mod('mcbra_models_active_0_setting_' . $i)!=1) {					
				$modelos[get_theme_mod('mcbra_models_classe_setting_' . $i)] .=
				"<li class='flayout_clk' rel='flyout_" . str_replace(" ", "-", get_theme_mod('mcbra_models_classe_setting_' . $i)) . "_" . $im[get_theme_mod('mcbra_models_classe_setting_' . $i)] . "'>
					<a href='" . get_theme_mod('mcbra_models_url_3_setting_' . $i) . "' target='_blank'>" . get_theme_mod('mcbra_models_title_setting_' . $i) . "</a></li>";
			}	
					
		}	
	}
	
	$cclasses = get_theme_mod('mcbra_classes_count_setting')!="" && get_theme_mod('mcbra_classes_count_setting')>0 ? get_theme_mod('mcbra_classes_count_setting') : 10;	
	
	echo (get_theme_mod('mcbra_classes_count_setting')>0) ? "<span style='color: #FFFFFF; line-height: 22px; padding: 0 15px 0 22px; float: left; font-size: 11px;'>Produtos em Destaque:</span>
	<div id='openmodels' style='display:none'>
		<a href='#'>Ver Modelos</a></div>
		<ul class='lista_modelos'>		
			<div id='closemodels' style='display:none'><a href='#'>Fechar</a></div>" : "";
			
	
	for ($i=1; $i<=$cclasses; $i++) {
		if ((get_theme_mod('mcbra_classes_cats_setting_' . $i)==$acat) && (get_theme_mod('mcbra_classes_active_setting_' . $i)!=1)) {		  
			$fly[get_theme_mod('mcbra_classes_count_setting_' . $i)."_".$acat] = str_replace("--MODELO--", $modelos[get_theme_mod('mcbra_classes_count_setting_' . $i)."_".$acat], $fly[get_theme_mod('mcbra_classes_count_setting_' . $i)."_".$acat]);		 
			echo "<li class='flayout_nav' rel='flyout_" . str_replace(" ", "-", get_theme_mod('mcbra_classes_count_setting_' . $i)) . "_" . $acat . "_1'><a href='#'>" . get_theme_mod('mcbra_classes_count_setting_' . $i) . "</a>" . $fly[get_theme_mod('mcbra_classes_count_setting_' . $i)."_".$acat] . "</li>";		
		}		
	}
	echo "</ul>";
	?>
	
	<script>
	$( document ).ready( function() {	
		if ($( window ).width()>639) {
			$('.flayout_nav').hover(    
			    function () { var page = '#' + $(this).attr('rel'); $(page).fadeIn(); },	    
			    function () { $('.flyout_content').fadeOut(); }
			)
			$('.flayout_clk').hover( function () {
				var page = '#' + $(this).attr('rel');
				var paren = '#' + $(this).parent().parent().parent().attr('id');			    	
				if (page !== paren) { $(paren).fadeOut(); $(page).fadeIn(); }
			})
		} else {	
			$('.flayout_nav a').click( function () {	    	    	    	
				var page = '#' + $(this).parent().attr('rel');    	
				$(page).fadeIn();
				return false;
			})	    
			$('.flayout_clk a').click( function () {
					var page = '#' + $(this).parent().attr('rel');
					var paren = '#' + $(this).parent().parent().parent().parent().attr('id');
					
					if (page !== paren) {	    	
					    	$(paren).fadeOut();		    	
					    	$(page).fadeIn();
					}
				return false;
			})	    
			$('#openmodels a').click( function () { $('.lista_modelos').fadeIn("slow", function() { $('.lista_modelos').fadeIn()  }); })
			$('.lista_modelos #closemodels a').click( function () { $('.lista_modelos').fadeOut("slow", function() { $('.lista_modelos').fadeOut()  }); })    
		    
		    $('#closemodel a').click( function () { $('.flyout_content').fadeOut() }) 
		    
		}
	})
	</script>
<? } ?>