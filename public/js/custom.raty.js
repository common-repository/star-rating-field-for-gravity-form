jQuery( document ).ready(function() {
    // console.log( "star ready!" );
    
    jQuery('.star_rating_class').each(function(index, value) {
        // console.log(value);
        var rating_icon_on = jQuery(this).attr("rating_icon_on");
        var icon_on = rating_icon_on+'.png';
        var rating_icon_off = jQuery(this).attr("rating_icon_off");
        var icon_off = rating_icon_off+'.png';
        var max_size = jQuery(this).attr("max_size");
        var btn_position = jQuery(this).attr("btn_position");
        var disable_cancel = jQuery(this).attr("disable_cancel");
        var disable_cancel = jQuery(this).attr("disable_cancel");
        var single_star_selection = jQuery(this).attr("single_star_selection");

        if(single_star_selection == 'yes'){
            single_star_selections = true;
        }
        if(single_star_selection == 'no'){
            single_star_selections = false;
        }

        var ratngfieldName = jQuery(this).find('.rating_vals').attr('name');

        if(disable_cancel == 'no') { 
            jQuery(jQuery(this)).raty({
                targetType:   'score',
                cancelButton:  true,
                cancelPlace: btn_position,
                cancelOff:   'cancel-off.png',
                cancelOn:    'cancel-on.png',
                starOff:     icon_off,
                starOn:     icon_on,
                path: rating_ajax.ajax_urla+'/public/jquery.rating/images',
                number: max_size,
                targetKeep:   true,
                single: single_star_selections,
                click: function(score, event) {
                    jQuery('input[name="' + ratngfieldName + '"]').val(score);
                }
            });
        }else{
            jQuery(jQuery(this)).raty({
                targetType:   'score',
                starHalf:    'star-half.png',
                starOff:     icon_off,
                starOn:      icon_on,
                path: rating_ajax.ajax_urla+'/public/jquery.rating/images',
                number: max_size,
                targetKeep:   true,
                single: single_star_selections,
                click: function(score, event) {
                    jQuery('input[name="' + ratngfieldName + '"]').val(score);
                }

            });
        }
    });
});