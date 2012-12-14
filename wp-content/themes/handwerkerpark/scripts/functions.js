jQuery(document).ready(function() {
  
  jQuery('#mainnavigation ul ul').hover(function(){
     jQuery(this).siblings('a').toggleClass('act');
  }, function(){
     jQuery(this).siblings('a').toggleClass('act');
  });


  // Nicht klickbar
  jQuery('#mainnavigation ul li.page-item-2 a:first,#mainnavigation ul li.page-item-8 a:first').click(function(){
    return false;
  });




});