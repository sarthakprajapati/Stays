// HTML document is loaded. DOM is ready.
$(function() {

    $('#hotelCarTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })

    $('.date').datetimepicker({
        format: 'MM/DD/YYYY'
    });
    $('.date-time').datetimepicker();
   
    // https://css-tricks.com/snippets/jquery/smooth-scrolling/
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
});

// Load Flexslider when everything is loaded.
$(window).load(function() {	  		
    $('.flexslider').flexslider({
        controlNav: false
    });
  });