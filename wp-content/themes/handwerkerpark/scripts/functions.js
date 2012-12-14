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
        var arrow = '<img class="hidden" id="pointer" rc="wp-content/themes/handwerkerpark/images/arrow_up.png">';
        jQuery('body').append(arrow);
        jQuery('table tr').hover(function(){
            var i = jQuery(this).index();
            var margin = parseInt(jQuery('#wrapper').css('margin-top'))+38;
            var offset = jQuery(this).offset().top-jQuery('header').height()-margin;
            jQuery('#pointer').css('top', jQuery(this).offset().top+13).css('left', '95.7em').show();
            jQuery('aside .inside-hidden .box:eq('+i+')').css('top', offset).stop().fadeIn();
        }, function(){
            var i = jQuery(this).index();
            jQuery('#pointer').hide();
            jQuery('aside .inside-hidden .box:eq('+i+')').stop().hide();
        });
    }

    jQuery('.gallery a').colorbox();


});