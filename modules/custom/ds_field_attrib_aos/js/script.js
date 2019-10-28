/**
 * @file
 * JavaScript file for the AOS module.
 */

(function ($, Drupal, drupalSettings) {

  Drupal.behaviors.ds_field_attrib_aos = {
    attach: function attach(context, settings) {
      AOS.init({
        mirror: true
      });
      console.log("ios init");
      
    }
  };

})(jQuery, Drupal, drupalSettings);
