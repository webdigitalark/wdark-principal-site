/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';
  var preloader;

  function preload(opacity) {
    if (opacity <= 0) {
      showContent();
    }
    else {
      preloader.style.opacity = opacity;
      window.setTimeout(function () { preload(opacity - 0.05) }, 100);
    }
  }

  function showContent() {
    preloader.style.display = 'none';
    document.getElementById('page-wrapper').style.display = 'block';
  }

  document.addEventListener("DOMContentLoaded", function () {
    preloader = document.getElementById('preloader');
    preload(1);
  });
  if (window.location.hash.length > 0){
    var $targetClass = window.location.hash.replace('#', '.');
    if ($($targetClass).length > 0){
      setTimeout(function () {
        jQuery("html").animate({ scrollTop: jQuery($targetClass).offset().top - 90, duration: 750 });
      }, 1000)
    }
  }
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
      $('.menu--main .navbar-nav li').once('a').each(function(index){

        var $parentTarget = $(this).find('a');
        var $item = $(this).find('a').attr('href');
        var $targetClass = $item.replace('#', '.');
        // console.log($targetClass.includes("."));
        if ($targetClass.includes(".") && $($targetClass).length == 0){
          $(this).find('a').attr('href', '/' + $item);
        } else if($targetClass.includes(".")){
          $($targetClass).hover(function(){
            $('.navbar-nav .nav-link').removeClass('active');
            $parentTarget.addClass('active');
          });
          $(this).on('click', function (e) {
            if ($targetClass.includes(".") && jQuery($targetClass).position() != undefined) {
              e.preventDefault();
              jQuery("html").animate({ scrollTop: jQuery($targetClass).offset().top - 90, duration: 750 });
              $('.navbar-nav .nav-link').removeClass('active');
              $(this).find('a').addClass('active');
            } else {
              return true;
            }
          });
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
