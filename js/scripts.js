jQuery(function($) {

// Hide the fancy from older IE and mobile devices 
// var mobileBrowser;

// if( navigator.userAgent.match(/Android/i) ||
// 	navigator.userAgent.match(/webOS/i) ||
// 	navigator.userAgent.match(/iPhone/i) ||
// 	navigator.userAgent.match(/iPod/i) ||
// 	navigator.userAgent.match(/iPad/i) ||
// 	navigator.userAgent.match(/BlackBerry/)
// 	|| $('body').hasClass('lte9')){
// 	mobileBrowser = true;
// }





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

backstretch();


	 

	// Fade in images slowly when a page loads
	$('.fade-in').animate({ 'opacity': 1 }, 1500);
	$('.entry-title').animate({ 'opacity': 1 }, 1800);
 




}); //Last