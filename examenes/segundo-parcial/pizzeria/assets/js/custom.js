jQuery(document).ready(function($) {
	
	$("#tamano").material_select();
	$('#tamano[required]').css({
	    display: 'inline',
	    position: 'absolute',
	    float: 'left',
	    padding: 0,
	    margin: 0,
	    border: '1px solid rgba(255,255,255,0)',
	    height: 0, 
	    width: 0,
	    top: '2em',
	    left: '3em'
	});
	$('#ingredientes').material_select();
	$('#ingredientes[required]').css({
	    display: 'inline',
	    position: 'absolute',
	    float: 'left',
	    padding: 0,
	    margin: 0,
	    border: '1px solid rgba(255,255,255,0)',
	    height: 0, 
	    width: 0,
	    top: '2em',
	    left: '3em'
	});
});