jQuery(function () {
        jQuery(document).ready(function () {
            jQuery("#top").hide();
            jQuery(function () {
                jQuery(window).scroll(function () {
                    if (jQuery(this).scrollTop() > 100) {
                        jQuery('#top').fadeIn();
                    } else {
                        jQuery('#top').fadeOut();
                    }
                });
                jQuery('#top').click(function () {
                    jQuery('body,html').animate({
                        scrollTop : 0
                    }, 800);
                    return false;
                });
            });
        });
    });
