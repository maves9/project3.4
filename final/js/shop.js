$( document ).ready(function() {

	$('.browse__explorer').children('h3').click( function() {
		$(this).siblings('ul').slideToggle(200);
	});

	

});


function showLess() {
	//gem explorer
	$('.browse__explorer h3').siblings('ul').slideUp(200);
};
function showMore() {
	//gem explorer
	$('.browse__explorer h3').siblings('ul').slideDown(200);
};

$(window).resize(function() {
	if ($(window).width() < 1024) {
	//call function
	showLess();
}
	else {
		showMore();
	}
});


//add to basket

$('#addToBasket').click( function(){
	var antal = parseInt(document.getElementById('antal').value, 10);
	console.log(antal);
	
	//$('#basketIcon').addClass('changed');
	//$('#basketIcon').html('<span class="antal"> +' + antal + '</span> <a href="somewhere"><img class="header__top--icon" src="img/icon/indkøbskurv.svg" alt="Indkøbskurv">Indkøbskurv</a>');
	$('#basketIcon .antal').text('+' + antal);
	$('#basketIcon .antal').css('opacity', '1');
	$('.antal').fadeTo(3000, 0.0);
});