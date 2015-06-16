$(function(){
	
	$('span.mailme').mailme();
	
	$('#choix_cat').change(function() {
		val=$('#choix_cat').val();
		tab_val=val.split('|');
	  document.location.href=tab_val[1]+'-zinguerie-tolerie-'+tab_val[0]+'.html';
	});
		
		
});