$(document).ready(function(){       
  $(document).scroll(function() { 
     scroll_start = $(this).scrollTop();
     if(scroll_start > 200) {
         $(".navbar").css('background-color', 'rgba(0,0,0,0.8)');
      } else {
         $('.navbar').css('background-color', 'transparent');
      }
  });
});
