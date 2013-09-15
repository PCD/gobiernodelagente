(function($) {
  Drupal.behaviors.prensa = {
    attach: function (context, settings) {
      $('document', context).ready(function(){
        //$('#recent-articles-tabs', context).tabs();
      });
      $('.group-image-source span.file a').attr('target', '_blank');
    }
  };
})(jQuery);