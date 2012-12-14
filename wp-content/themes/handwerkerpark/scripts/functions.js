jQuery(document).ready(function() {
  
  jQuery('#mainnavigation ul ul').hover(function(){
     jQuery(this).siblings('a').toggleClass('act');
  }, function(){
     jQuery(this).siblings('a').toggleClass('act');
  });


  // Nicht klickbar
  jQuery('#menu-item-31 a:first,#menu-item-29 a:first').click(function(){
    return false;
  });




});