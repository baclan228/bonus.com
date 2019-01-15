function pok (){
	$('#text').slideUp(1000, function() {
		$('#zak').show();
		$('#pok').hide();
	});
}

function zak (){
	$('#text').slideDown(1000, function() {
		$('#zak').hide();
		$('#pok').show();
	});
}


$(document).ready(function() {
	$('#pok').click(pok);
	$('#zak').click(zak);
});
