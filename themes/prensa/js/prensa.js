(function($) {
  Drupal.behaviors.prensa = {
    attach: function (context, settings) {
      $('document', context).ready(function(){
        $('#recent-articles-tabs ul li a', context).click(function(event){
          if ( $(this).parent().hasClass('active') ) {
            // Ignore
          } else {
            // Switch Selected Tab
            current = $('#recent-articles-tabs ul li.active a').attr('href');
            $('#recent-articles-tabs ul li.active').removeClass('active');
            $(this).parent().addClass('active');
            
            // Switch Active Content
            next = $(this).attr('href');
            $(next).addClass('active');
            $(current).removeClass('active');
          }
          event.preventDefault();
        });
      });
      $('.group-image-source span.file a').attr('target', '_blank');
    }
  };
})(jQuery);