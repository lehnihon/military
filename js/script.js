( function( $ ) {
    $(window).on('load', function() { // makes sure the whole site is loaded 
      $('#status').fadeOut(); // will first fade out the loading animation 
      $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
      $('body').delay(400).queue(function (next) { 
        $(this).css({'overflow':'visible'}); next(); 
      });

    })

    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    var $meuMenu = $('#header');
    $(document).on('scroll', function () {
        if (1 <= $(window).scrollTop()) {
            $meuMenu.addClass('fixar');
             $meuMenu.find('a').addClass('animated fadeIn');
        } else {
            $meuMenu.removeClass('fixar');
            $meuMenu.find('a').removeClass('animated fadeIn');
        }

    });

} )( jQuery );