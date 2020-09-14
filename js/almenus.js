( function( $ ) {
$( document ).ready(function() {
	$('#menu-button').on('click', function(){
		var menu = $('#cssmenu ul');
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
		else {
			menu.addClass('open');
		}
	});
	$('#menu-primary').fadeIn('slow');
	$('#menu-meta').fadeIn('slow');
	
	$('.menu-institucional-container .menu-item-has-children a').on('click', function(event){
	    
	     if ($(this).attr("href")==undefined) {
    	    if ($(this).css('box-shadow')=='none') {
    	        $(this).addClass('menu-item-open');
    	        $(this).removeClass('menu-item-close');
    	    } else {
    	        $(this).removeClass('menu-item-open');
    	        $(this).parents().removeClass('current-menu-parent');
    	        $(this).addClass('menu-item-close');
    	    }
    	    $(this).siblings('ul').slideToggle('slow');
	    }
	})
	
});
} )( jQuery );
