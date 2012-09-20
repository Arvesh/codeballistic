jQuery(function(){

	
	$('ul.menu-top').find('li').mouseover(function(){

		$(this).find('a').css('color','#c1e05d');
		$('div#open-bracket img').attr('src','images/open-bracket-hover.png').fadeIn(200);
		$('div#close-bracket img').attr('src','images/close-bracket-hover.png').fadeIn(200);


	}).mouseout(function(){
		//alert(2);

		$(this).find('a').css('color','#646464');
		$('div#open-bracket img').attr('src','images/open-bracket.png').fadeIn(200);
		$('div#close-bracket img').attr('src','images/close-bracket.png').fadeIn(200);
	});
	
	
});