<script>
$( document ).ready(function() {
	$("[id*='menu-item-'] a:contains('Seminovos')").parent().removeClass(function() {
			return $( this ).prev().attr( "class" );
		}).addClass( "menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-has-children" );
	
	$("[id*='menu-item-'] a:contains('Seminovos')").show();
	$("[id*='menu-item-'] a:contains('Seminovos')").parent().show();
	$('.widget_nav_menu:last-child').hide();		

<? if (isset($_GET['single_prod_id'])) { ?>
	
	resizethumbs ();

	$('.main-image-block img').attr('style', 'max-width: 100% !important; max-height: 100% !important; width: auto !important; height: auto !important');
	$('.huge-it-catalog-bottom-block').appendTo('.right-block');
	$('.title-block').prependTo('.huge_it_catalog_container');
	$('.description-block').appendTo('.right-block');
	$('.huge_it_catalog_view_tabs_contents').attr('style', 'padding: 0 !important');
	$('.parameter-block').attr('style', 'padding-left: 0 !important');
	$('.value-block:last-child').attr('style', 'padding-left: 0 !important; padding-bottom: 10px !important');
	$('.parameter-block').last().attr('style', 'padding-left: 0 !important; padding-top: 10px !important');
	$('.thumbs-block ul li a img').attr('style', 'width: auto !important; height: auto !important');

	if ($( window ).width()>639) {
		$("#form-seminovos").appendTo(".left-block");
	} else {
		$("#form-seminovos").appendTo(".right-block:after");
	}
	
	$("input[name='modelo']").attr('value', $(".title-block h2").text());
	$("input[name='modelo']").prop('readonly', true);
<? } else { ?>
	$("[class*='element_'] [class*='image-block_'] img").attr('style', 'max-width: 100% !important; max-height: 100% !important; width: auto \9 !important; height: auto !important');
	$("[class*='element_'] [class*='image-block_']").attr('style', 'width: 275px; height: 275px; vertical-align: middle; display: table-cell; text-align: center');
	$("[class*='element_'] [class*='image-block_'] .image-overlay").attr('style', 'width: 320px; height: 320px');
	$("#form-seminovos").hide();			
<? } ?>
})
$( window ).resize(function() {
  resizethumbs();
});
function resizethumbs() {
    if ($( window ).width()>639) {	
		var nw_mib = 'width: 150px !important; height: 150px !important; display: block !important';
	}
	if ($( window ).width()>767) {	
		var nw_mib ='width: 200px !important; height: 200px !important; display: block !important';
	}
	if ($( window ).width()>999) {	
		var nw_mib ='width: 300px !important; height: 300px !important; display: block !important';
	}
	if ($( window ).width()<640) {
	    var nw_mib = 'display: block !important';
		$('.huge_it_catalog_view_tabs_contents li').last().attr('style', 'display: none !important');
		$('.huge_it_catalog_view_tabs_contents li h4').attr('style', 'display: none !important');
	}
	$('.main-image-block').attr('style', nw_mib);
}

</script>