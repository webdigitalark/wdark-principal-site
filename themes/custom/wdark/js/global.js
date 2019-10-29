/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.wdark = {
    attach: function (context, settings) {
      
        if($('#page')){
          $('#page').attr('class', 'content--canvas')	
        }
        if($('.about-block')){
          $('.about-block .field--name-field-ver-mas a').once().append('<i class="fa fa-angle-right"></i>');
        }
        if($('.services-block')){
          $('.services-block .field--name-field-url').on('click',function(e){
            e.preventDefault();
            $("html, body").animate({
              scrollTop: $(".contact-block").offset().top
            }, 700);
          })
        }
        
        if($('ul.language-switcher-language-url')){
          var $itemActive = $('ul.language-switcher-language-url li.is-active').html();          
          jQuery('ul.language-switcher-language-url').parent().prepend($itemActive);
          var $name = jQuery('ul.language-switcher-language-url').siblings('a').text();
          $name = $name.slice(0,2);
          jQuery('ul.language-switcher-language-url').siblings('a').html($name+'<i class="fa fa-angle-down"></i>');
        }      
      	$('.navbar-nav .nav-link').on('click', function(e){
      		e.preventDefault();
      		var $targetClass = $(this).attr('href');          
          $targetClass = $targetClass.replace('#','.');
      		// console.log($targetClass);
      		// console.log(jQuery("."+$targetClass).position());
      		if ($targetClass &&  jQuery($targetClass).position() != undefined) {
      			jQuery("html").animate({scrollTop: jQuery($targetClass).position().top-100, duration: 750});	
            $('.navbar-nav .nav-link '+$targetClass).addClass('is-active');
      		}else{
      			return true;
      		}
      	    
      	}); 
        if($('.navbar-nav .nav-item .dropdown-menu')){
          $('.navbar-nav').hover(function(){
            $(this).find('.dropdown-menu:first').addClass('show');
            $(this).parents('.navbar-nav').addClass('show');
            //.toogleClass('show')
          },function(){
            $(this).find('.dropdown-menu:first').removeClass('show');
            $(this).parents('..navbar-nav').removeClass('show');
          })
        }       
    }
  };

})(jQuery, Drupal);
