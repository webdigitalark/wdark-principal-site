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

    }
  };

})(jQuery, Drupal);
