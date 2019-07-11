(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle").on('click', function(e) {
    e.preventDefault();
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });

  //validation login
  $('#send').click(function(){
    var firstName = $('#firstName').val();
    var lastName = $('#lastName').val();
    var email = $('#inputEmail').val();
    var password = $('#inputPassword').val();
    var confirmPassword = $('#confirmPassword').val();
    var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

    if(firstName == ""){
      $('#mensaje1').fadeIn();
      return false;
    }else{
      $('#mensaje1').fadeOut();

      if(lastName == ""){
        $('#mensaje2').fadeIn();
        return false;
      }else{
        $('#mensaje2').fadeOut();

        if(email && !expr.test(email)){
          $('#mensaje3').fadeIn();
          return false;
        }else{
          $('#mensaje3').fadeOut();

          if(password == ""){
            $('#mensaje4').fadeIn();
            return false;
          }else{
            $('#mensaje4').fadeOut();

            if(confirmPassword != password){
              $('#mensaje5').fadeIn();
              return false;
            }else{
              $('#mensaje5').fadeOut();
            }
          }
        }
      }
    }

  });

})(jQuery); // End of use strict
