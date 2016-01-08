$(document).ready(function () {

    $(document).bind('mousewheel', function (e) {
        var nt = $(document.body).scrollTop() - 2.5 * (e.originalEvent.wheelDeltaY);
        e.preventDefault();

        $(document.body).stop().animate({scrollTop: nt}, 500);
    });

    setTimeout(function () {
        $('.codrops-header > h1').css({
            'transform': 'translateX(0px)',
            'opacity': '1'
        });
    }, 600);

    setTimeout(function () {
        $('.codrops-header span').css({
            'transform': 'translateX(0px)',
            'opacity': '1'
        });
    }, 1100);

    $('#st-trigger-effects')
        .mouseover(function () {
            $(this).animate({opacity: 1}, {queue: false, duration: 400});
        })
        .mouseout(function () {
            $(this).animate({opacity: 0.5}, {queue: false, duration: 400});
        })

    // ADD SLIDEDOWN ANIMATION TO DROPDOWN //
    $('.dropdown').on('show.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // ADD SLIDEUP ANIMATION TO DROPDOWN //
    $('.dropdown').on('hide.bs.dropdown', function (e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });

    $('.widget-icon-background').click(function () {
        $('.widget-info').fadeToggle("fast");
    });

    ;
    (function ($) {

        $('.swipebox').swipebox();

    })(jQuery);

    var isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    };

    if (isMobile.any()) {
        $('a.phone-vel').attr('href', 'tel: +375296037939');
        $('a.phone-mts').attr('href', 'tel: +375295787905');
        $('a.phone-home').attr('href', 'tel: +375172968257');
    }

});
