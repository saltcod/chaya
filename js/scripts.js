jQuery(function($) {


// // Delete this instance after
// $.backstretch(
//   		"zzzzzzzzzzzzhttp://localhost:8888/chaya/wp-content/themes/chaya/images/window.jpg",
//   		 { fade: 50 });	


// Delay backstretch fadein on the frontpage only

function backstretch(){
	if( $('body').hasClass('home') || $('body').hasClass('page-biography') ){
		$.backstretch(
			"http://localhost:8888/chaya/wp-content/themes/chaya/images/window.jpg",
			{ fade: 2250 });	
	}
}	

	if( $('body').hasClass('home') ){
		setTimeout(backstretch, 1700);
		} else {
			setTimeout(backstretch, 0);
	}




// Scrollspy
$('body').scrollspy();

// Fixed-floating scrollspy menu 
$(document).ready(function () {  
	var top = $('.nav').offset().top - parseFloat($('.nav').css('marginTop').replace(/auto/, 0));
	$(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();

    // whether that's below the form
    if (y >= top) {
      // if so, ad the fixed class
      $('.nav').addClass('fixed');
  } else {
      // otherwise remove it
      $('.nav').removeClass('fixed');
  }
	});
});



// Fade in images slowly when a page loads
$('.fade-in').animate({ 'opacity': 1 }, 1500);
$('.entry-title').animate({ 'opacity': 1 }, 800);

(function(){
	
	var hidey = {
		
		kitchenSink: $('.site-title, .site-navigation, #primary, #colophon, img.featured'),
		title: $('.site-title'),
		nav: $('.site-navigation'),
		content: $('#primary'),
		img: $('img.featured'), 
		footer: $('#colophon'),

		hideIt: function(){
			this.kitchenSink.hide();
			$(".loader").css('opacity', 1).fadeIn(100).fadeOut(100).fadeIn(200).fadeOut(100).fadeIn(200).fadeOut(200).fadeIn(1100).fadeOut(1200);
			console.log('not here?');
		},

		showIt: function(){
			this.title.delay(4400).fadeIn(1000,function(){
				hidey.nav.delay(2000).fadeIn(1000, function(){
					hidey.content.delay(1000).fadeIn(800).animate({'margin-top': 100}, { queue: false, duration: 800 });
					hidey.footer.fadeIn(500);
				});
			});
		}
	};

	if( $('body').hasClass('home') ){
		hidey.hideIt();
		hidey.showIt();
	}

})();




// Toggle the Footer when you click on Contact + 
$('footer a.tab').on('click', function( e ){
	e.preventDefault();
	$('#colophon').animate({'bottom': 0 }, 600);
})





}); //Last