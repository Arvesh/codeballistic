jQuery(function(){

	
	$('ul.menu-top').find('li').mouseover(function(){

		$(this).find('a').css('color','#c1e05d');
		$('div#open-bracket img').attr('src','images/open-bracket-hover.png').hide().fadeIn(1000);
		$('div#close-bracket img').attr('src','images/close-bracket-hover.png').hide().fadeIn(1000);


	}).mouseout(function(){
		
		$(this).find('a').css('color','#646464');
		$('div#open-bracket img').attr('src','images/open-bracket.png').hide().fadeIn(1000);
		$('div#close-bracket img').attr('src','images/close-bracket.png').hide().fadeIn(1000);
	});
	
	
});