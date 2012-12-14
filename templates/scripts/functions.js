$.noConflict();
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

    if(jQuery('aside .inside-hidden').length > 0) {
        jQuery('table tr').hover(function(){
            var i = jQuery(this).index();
            var margin = parseInt(jQuery('#wrapper').css('margin-top'))+37;
            var offset = jQuery(this).offset().top-jQuery('header').height()-margin;
            jQuery('aside .inside-hidden .box:eq('+i+')').css('top', offset).stop().fadeIn();
        }, function(){
            var i = jQuery(this).index();
            jQuery('aside .inside-hidden .box:eq('+i+')').stop().hide();
        });
    }



});