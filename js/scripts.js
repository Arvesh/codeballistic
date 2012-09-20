jQuery(function(){

	Cufon.replace('h1,h2,h3,h4,h5,h6',{fontFamily:'Trajan Pro'});
	Cufon.replace('p',{fontFamily:'Open Sans'});
	
	/*=====================DETECT ACTIVE MENU AND ADD ACTIVE CLASS================*/

	var menuActive = $('#menu-active').val();
	$('li#'+menuActive).addClass('active');

	menuActive = menuActive.toLowerCase().replace(/\b[a-z]/g, function(letter) {

    	return letter.toUpperCase();

	});
	
	$('title').html('CodeBallistic - '+menuActive);
	/*============================================================================*/

	$('ul.menu-top').find('li:not(.active)').mouseover(function(){

		$(this).find('a').css('color','#c1e05d');
		$('div#open-bracket img').attr('src','images/open-bracket-hover.png').fadeIn(200);
		$('div#close-bracket img').attr('src','images/close-bracket-hover.png').fadeIn(200);


	}).mouseout(function(){
		//alert(2);

		$(this).find('a').css('color','#646464');
		$('div#open-bracket img').attr('src','images/open-bracket.png').fadeIn(200);
		$('div#close-bracket img').attr('src','images/close-bracket.png').fadeIn(200);
	});

	$('.enlarge-pic').colorbox();

	
	if($('.error').length)
        $.colorbox({html:$('.error-container'),open:true});

    if($('.success').length)
        $.colorbox({html:$('.success'),open:true});
});