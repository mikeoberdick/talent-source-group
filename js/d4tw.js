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
       if (jQuery(window).scrollTop() > 30){
          jQuery('#hireSomeone').addClass('scrollingTab');
       }
       else if (jQuery(window).scrollTop() < 30){
          jQuery('#hireSomeone').removeClass('scrollingTab');
       }
    });

jQuery(document).on('scroll', function(){
       if (jQuery(window).scrollTop() > 75){
          jQuery('#getHired').addClass('scrollingTab');
       }
       else if (jQuery(window).scrollTop() < 75){
          jQuery('#getHired').removeClass('scrollingTab');
       }
    });

// Apply button functionality

jQuery('#applyBtn').click(function(){

    var $this = jQuery(this);

    if ($this.hasClass('apply')){
      $this.removeClass('apply');
      $this.addClass('closeBtn');
      $this.html('<i class="fa fa-times" aria-hidden="true"></i> Close');
      jQuery( "#application" ).slideDown( "slow", function() {
  });

    } else if ( $this.hasClass( 'closeBtn' ) ) {
      $this.removeClass('closeBtn');
      $this.addClass('apply');
      $this.html('<i class="fa fa-check" aria-hidden="true"></i> Apply');
      jQuery( "#application" ).slideUp( "slow", function() {
  });

    } else if ( $this.hasClass( "formComplete" ) ) {
        jQuery( "#application, .formComplete" ).fadeOut(800, function() { jQuery(this).remove(); });
    }

  });

// Add a class to the apply button after application is submitted
  jQuery( document ).ready( function() {
    jQuery( document )
    .on('click', 'input[type=button]', function() {
    jQuery('#applyBtn').removeClass('closeBtn');
    jQuery('#applyBtn').addClass('formComplete');
    jQuery('#applyBtn').removeAttr('id');
    jQuery('#applyBtn').removeClass('apply');
    });
  });