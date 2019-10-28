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
        $('.about-block .field--name-field-ver-mas a').append('<i class="fa fa-angle-right"></i>');
      }

    }
  };

})(jQuery, Drupal);
