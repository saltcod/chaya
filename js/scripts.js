jQuery(function($) {

// Hide the fancy from older IE and mobile devices 
var newBrowser;

if( navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPod/i) ||
    navigator.userAgent.match(/iPad/i) ||
    navigator.userAgent.match(/BlackBerry/)
|| $('body').hasClass('lte9')){
  newBrowser = true;
}


 
function backstretch(){
	if( $('body').hasClass('home') ){
		$.backstretch(
			"http://chayaczernowin.com/wp-content/themes/chaya/images/window-colour.jpg",
			{ fade: 0 });	
	
	}  else if ( $('body').hasClass('page-biography') ) {
		$.backstretch(
			"http://chayaczernowin.com/wp-content/themes/chaya/images/field-landscape.jpg",
			{ fade: 0 });	

	}  else if ( $('body').hasClass('page-music') ){
		console.log('bio');
		$.backstretch(
			"http://chayaczernowin.com/wp-content/themes/chaya/images/scores.jpg",
			{ fade: 0 });	
	
	} else {
		$.backstretch(
			"http://chayaczernowin.com/wp-content/themes/chaya/images/window-colour.jpg",
			{ fade: 0 });	
		}
}	



 // Add class last to the last menu item in <nav>
 $('.site-navigation li:last').addClass('last');
 
 

// Scrollspy
$('body').scrollspy();


// Fixed-floating scrollspy menu 
if ( $('.nav').length !== 0 ){
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
}


// Only do fancy things for gtIE9 
if ( ! newBrowser ){


	function backstretch_good_browsers(){
	if( $('body').hasClass('home') ){
		$.backstretch(
			"http://chayaczernowin.com/wp-content/themes/chaya/images/window-colour.jpg",
			{ fade: 2250 });	
	
		}  else if ( $('body').hasClass('page-biography') ) {
			$.backstretch(
				"http://chayaczernowin.com/wp-content/themes/chaya/images/field-landscape.jpg",
				{ fade: 400 });	

		}  else if ( $('body').hasClass('page-music') ){
			console.log('bio');
			$.backstretch(
				"http://chayaczernowin.com/wp-content/themes/chaya/images/scores.jpg",
				{ fade: 400 });	
		
		} else {
			$.backstretch(
				"http://chayaczernowin.com/wp-content/themes/chaya/images/window-colour.jpg",
				{ fade: 400 });	
			}
	}	

	// Fade in extra long on homepage
	if( $('body').hasClass('home') ){
		setTimeout(backstretch, 1700);
		} else {
			setTimeout(backstretch, 0);
	}



	// Fade out header elements when the window scrolls

	var windowScroll, 
	masthead = $('#masthead'), 
	main = $('#main'); 

	$(window).scroll(function(){

	    //Get scroll position of window
	    windowScroll = $(this).scrollTop();


	    //Fade the .nav out
	    masthead.css({
	    	'opacity' : 1-(windowScroll/500),
	    	'margin-top': -(windowScroll/3)
	    });
 

	    $('#fadey-nav').css({
	    	'opacity' : 0 +(windowScroll/600)
	    });  
 

	});






	// Fade in images slowly when a page loads
	$('.fade-in').animate({ 'opacity': 1 }, 1500);
	$('.entry-title').animate({ 'opacity': 1 }, 800);

	(function(){
		
		var hidey = {
			
			kitchenSink: $('.site-title, .page-break, .site-navigation, #colophon, img.featured'),
 			title: $('.site-title'),
 			hgroup: $('hgroup'),
			nav: $('.site-navigation'),
			content: $('#primary'),
			img: $('img.featured'), 
			footer: $('#colophon'),
			pageBreak: $('.page-break'),

			opacify: function(){
				hidey.content.css('opacity', 0);	
			},

			hideIt: function(){
				this.kitchenSink.hide();
				$(".loader").css('opacity', 1).fadeIn(100).fadeOut(100).fadeIn(200).fadeOut(100).fadeIn(200).fadeOut(200).fadeIn(1100).fadeOut(1200);
				console.log('not here?');
			},

			showIt: function(){
				this.title.delay(4400).fadeIn(1000,function(){
					hidey.nav.delay(1000).fadeIn(1000, function(){
						hidey.content.delay(500).animate({
							'opacity': 1, 
							'margin-top': '7em' 
						}, 1000, function(){
							console.log('pagebreak? ');
							hidey.pageBreak.fadeIn(1000, function(){
								hidey.footer.fadeIn(500);
							});
						} );
						
 					});
				});
			}
		};

		if( ! $('html').hasClass('lte9') && $('body').hasClass('home') ){
			hidey.opacify();
			hidey.hideIt();
			hidey.showIt();
		}

	})();

} // newBrowser



 




}); //Last