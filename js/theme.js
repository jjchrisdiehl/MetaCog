/*(function($) {
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
})( jQuery );*/
(function($) {
$(document).ready(function () {
  var trigger = $('.hamburger'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = true;
      } else {   
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = false;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
})( jQuery );