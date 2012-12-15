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
        jQuery('#content').append(arrow);
        jQuery('table tr').hover(function(){
            var i = jQuery(this).index();
            var margin = parseInt(jQuery('#wrapper').css('margin-top'))+38;
            var offset = jQuery(this).offset().top-jQuery('header').height()-margin;
            jQuery('#pointer').css('top', offset+12).css('left', jQuery(this).css('width')).show();
            jQuery('aside .inside-hidden .box:eq('+i+')').css('top', offset).stop().fadeIn();
        }, function(){
            var i = jQuery(this).index();
            jQuery('#pointer').hide();
            jQuery('aside .inside-hidden .box:eq('+i+')').stop().hide();
        });
    }

    jQuery('.gallery a').colorbox({
        opacity : '0.75'
    });


});

jQuery(function() {

   /**
    * Overwrite of wp-content/plugins/contact-form-7/includes/js/scripts.js
    **/
    jQuery.fn.wpcf7NotValidTip = function(message) {
        return this.each(function() {
            var label = jQuery(this).siblings('label');
            var input = jQuery(this).find('input');
            if(input.length < 1) {
                input = jQuery(this).find('select');
            }
            label.addClass('error');
            input.addClass('error');

            input.focus(function(){
                input.removeClass('error');
                label.removeClass('error');
            });
        });
    }
});