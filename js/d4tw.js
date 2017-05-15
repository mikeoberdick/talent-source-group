//Automatically generate filler content height to ensure footer is on bottom of the page
jQuery(document).ready(function() {
	jQuery('#js-heightControl').css('height', jQuery(window).height() - jQuery('html').height() +'px');
});

//Dropdown on hover
jQuery('ul.navbar-nav li.dropdown').hover(function() {
	jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
	jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

//Change color of side tabs after srolling past the header
jQuery(document).on('scroll', function(){
       if (jQuery(window).scrollTop() > 28){
          jQuery('#hireSomeone').addClass('scrollingBtn');
       }
       else if (jQuery(window).scrollTop() < 28){
          jQuery('#hireSomeone').removeClass('scrollingBtn');
       }
    });

jQuery(document).on('scroll', function(){
       if (jQuery(window).scrollTop() > 95){
          jQuery('#getHired').addClass('scrollingBtn');
       }
       else if (jQuery(window).scrollTop() < 95){
          jQuery('#getHired').removeClass('scrollingBtn');
       }
    });