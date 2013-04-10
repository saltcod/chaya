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





 // Isotope setup for Works page
 if ($('body').hasClass('page-works')) {
 	$(function(){

 		var $container = $('#works-container');

 		$container.isotope({
 			itemSelector : '.work' 

 		});


 		var $optionSets = $('#works-filter .option-set'),
 		$optionLinks = $optionSets.find('a');

 		$optionLinks.click(function(){
 			var $this = $(this);
	        // don't proceed if already selected
	        if ( $this.hasClass('selected') ) {
	        	return false;
	        }
	        var $optionSet = $this.parents('.option-set');
	        $optionSet.find('.selected').removeClass('selected');
	        $this.addClass('selected');

	        // make option object dynamically, i.e. { filter: '.my-filter-class' }
	        var options = {},
	        key = $optionSet.attr('data-option-key'),
	        value = $this.attr('data-option-value');
	        // parse 'false' as false boolean
	        value = value === 'false' ? false : value;
	        options[ key ] = value;
	        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
	          // changes in layout modes need extra logic
	          changeLayoutMode( $this, options )
	      } else {
	          // otherwise, apply new options
	          $container.isotope( options );
	      }

	      return false;
	  });   
 	});
};




 // Add class last to the last menu item in <nav>
 $('.site-navigation li:last').addClass('last');
 
 

// Scrollspy
$('body.page-biography').scrollspy();


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



// Scrollspy
$('body.page-concerts-and-presentations').scrollspy();
// Fixed-floating scrollspy menu 
if ( $('.featured-sidebar').length !== 0 ){
	$(document).ready(function () {  
		var top = $('.featured-sidebar').offset().top -  20;
		$(window).scroll(function (event) {
		    // what the y position of the scroll is
		    var y = $(this).scrollTop();

		    // whether that's below the form
		    if (y >= top) {
		      // if so, ad the fixed class
		      $('.featured-sidebar img').addClass('fixed');
		  } else {
		      // otherwise remove it
		      $('.featured-sidebar img').removeClass('fixed');
		  }
		});
	});
}


// Scrollspy
$('body.page-works').scrollspy();
// Fixed-floating scrollspy menu 
if ( $('.works-filter-wrap').length !== 0 ){
	$(document).ready(function () {  
		var top = $('.works-filter-wrap').offset().top -  30;
		$(window).scroll(function (event) {
		    // what the y position of the scroll is
		    var y = $(this).scrollTop();

		    // whether that's below the form
		    if (y >= top) {
		      // if so, ad the fixed class
		      $('.works-filter-wrap').addClass('fixed');
		  } else {
		      // otherwise remove it
		      $('.works-filter-wrap').removeClass('fixed');
		  }
		});
	});
}



function backstretch(){
	if( $('body').hasClass('home') ){
		$.backstretch(
			"http://chayaczernowin.com/wp-content/themes/chaya/images/window-colour.jpg",
			{ fade: 1110 });	

	}  else if ( $('body').hasClass('page-biography') ) {
		$.backstretch(
			"http://chayaczernowin.com/wp-content/themes/chaya/images/field-portrait.jpg",
			{ fade: 0 });	

	}  else if ( $('body').hasClass('page-discography') ) {
		$.backstretch(
			"http://chayaczernowin.com/wp-content/themes/chaya/images/field-portrait.jpg",
			{ fade: 0 });	

	}  else if ( $('body').hasClass('page-works') ){
		console.log('bio');
		$.backstretch(
			"http://chayaczernowin.com/wp-content/themes/chaya/images/scores.jpg",
			{ fade: 0 });	

	} 
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
				{ fade: 0 });	

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
		setTimeout(backstretch, 1500);
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
	$('.entry-title').animate({ 'opacity': 1 }, 1800);

	(function(){
		
		var Hidey = {
			
			kitchenSink: $('.site-title, .page-break, .site-navigation, #colophon, .colophon, img.featured'),
			title: $('.site-title'),
			hgroup: $('hgroup'),
			nav: $('.site-navigation'),
			content: $('#primary'),
			img: $('img.featured'), 
			footer: $('#colophon'),
			headerColophon: $('.colophon'),
			pageBreak: $('.page-break'),
			biograghyMenuItem: $('.menu .menu-item-biography'),

			opacify: function(){
				Hidey.content.css('opacity', 0);	
			},

			hideIt: function(){
				this.kitchenSink.hide();
				$(".loader").css('opacity', 1).fadeIn(100).fadeOut(100).fadeIn(200).fadeOut(100).fadeIn(200).fadeOut(200).fadeIn(1100).fadeOut(1200);
			},

			showIt: function(){
				this.headerColophon.delay(3400).fadeIn(800,function(){
					Hidey.title.delay(500).fadeIn(1000, function(){
						Hidey.nav.delay(500).fadeIn(1000, function(){
							Hidey.content.delay(800).animate({
								'opacity': 1, 
								'margin-top': '10em' 
							}, 1000 );
						});
					});
				});
			}

		};

		if( ! $('html').hasClass('lte9') && $('body').hasClass('home') ){
			Hidey.opacify();
			Hidey.hideIt();
			Hidey.showIt();

		}

	})();

} // newBrowser






}); //Last