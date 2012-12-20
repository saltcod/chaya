jQuery(function($) {


// // Delete this instance after
// $.backstretch(
//   		"zzzzzzzzzzzzhttp://localhost:8888/chaya/wp-content/themes/chaya/images/window.jpg",
//   		 { fade: 50 });	
 






function expectDelays(){
	$.backstretch(
		"http://localhost:8888/chaya/wp-content/themes/chaya/images/window.jpg",
		 { fade: 2250 });	
}

setTimeout(expectDelays, 1700);


(function(){
	console.log('starting');

	var kitchenSink = $('.site-title, .site-navigation, #primary, #colophon, img.featured'),
	title = $('.site-title'),
	nav = $('.site-navigation'),
	content = $('#primary'),
	img = $('img.featured'), 
	footer = $('#colophon');

	kitchenSink.hide();

	$(".loader").fadeIn(100).fadeOut(100).fadeIn(200).fadeOut(100).fadeIn(200).fadeOut(200).fadeIn(1100).fadeOut(1200);

	console.log('not here?');

	title.delay(4400).fadeIn(1000,function(){
		nav.delay(2000).fadeIn(1000, function(){
			content.fadeIn(1000);
			footer.fadeIn(500);

		});
	})

})();



// Toggle the Footer when you click on Contact + 
$('footer a.tab').on('click', function( e ){
	e.preventDefault();
	$('#colophon').animate({'bottom': 0 }, 600);
})




      
}); //Last