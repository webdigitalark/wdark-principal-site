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
      $(context).find("ul.links").once("li").each(function () {
        var $element = $(this);
        var $currentLanguage = settings.path.currentLanguage;
        var $itemActive = $element.find('li[hreflang='+$currentLanguage+']').html();
        $('#block-languageswitcher').find('ul.links').parent().prepend($itemActive);
        var $name = $('#block-languageswitcher').find('ul.links').siblings('a').text();
        $name = $name.slice(0, 2);
        $('#block-languageswitcher').find('ul.links').siblings('a').html($name + '<i class="fa fa-angle-down"></i>');
        console.log($element.html());
      });
      $('.navbar-nav .nav-link').on('click', function(e){
        e.preventDefault();
        var $targetClass = $(this).attr('href');
        $targetClass = $targetClass.replace('#','.');

        // console.log($targetClass);
        // console.log(jQuery("."+$targetClass).position());
        if ($targetClass &&  jQuery($targetClass).position() != undefined) {
          console.log($targetClass);
          jQuery("html").animate({scrollTop: jQuery($targetClass).offset().top-90, duration: 750});
          $('.navbar-nav .nav-link ').removeClass('active');
          $(this).addClass('active');
        }else{
          return true;
        }
      });
      $('.banner-home .field--name-field-ver-mas a, .scroll-down').on('click', function (e) {
        e.preventDefault();
        var $targetClass = $(this).attr('href');
        $targetClass = $targetClass.replace('#', '.');
        if ($targetClass && jQuery($targetClass).position() != undefined) {
          console.log($targetClass);
          jQuery("html").animate({ scrollTop: jQuery($targetClass).offset().top - 90, duration: 750 });
          console.log($(this).html());
          $(this).addClass('is-active');
        } else {
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
            $(this).parents('.navbar-nav').removeClass('show');
          })
        }
    }
  };

})(jQuery, Drupal);
