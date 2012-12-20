jQuery(function($) {


function expectDelays(){
	$.backstretch(
		"http://localhost:8888/chaya/wp-content/themes/chaya/images/window.jpg",
		 { fade: 2250 });	
}

setTimeout(expectDelays, 1700);

 
	console.log('starting');

	var kitchenSink = $('.site-title, nav, #primary, #colophon, img.featured'),
		title = $('.title'),
		nav = $('.site-navigation'),
		content = $('#primary'),
		img = $('img.featured');

	kitchenSink.hide();

	$(".loader").fadeIn(100).fadeOut(100).fadeIn(200).fadeOut(100).fadeIn(200).fadeOut(200).fadeIn(1100).fadeOut(1200);


	title.delay(1400).fadeIn(1000,function(){
		nav.fadeIn(1000, function(){
			content.fadeIn(500);
			img.delay(500).fadeIn(1000);
		});
	})
 
 

      
}); //Last