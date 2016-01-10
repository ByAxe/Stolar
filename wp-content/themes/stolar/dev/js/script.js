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

    /*WIDGET WITH PHONE ANIMATION*/
    $('.widget-icon-background').on('click', function (event) {
        event.preventDefault();
        $('.widget-info').toggleClass('active');
    });
    /*WIDGET WITH PHONE ANIMATION*/


    /*SWIPEBOX - MODAL IMAGES*/
    ;
    (function ($) {

        $('.swipebox').swipebox();

    })(jQuery);
    /*SWIPEBOX - MODAL IMAGES*/


    /*PHONES - DYNAMIC CALL*/
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
    /*PHONES - DYNAMIC CALL*/


    /*VALIDATION OF FORM*/
    $('#phone').mask("8-(099)-999-99-99")
    /*VALIDATION OF FORM*/


    /*INTERESTING ANIMATION OF ASIDE-MENU-BUTTON*/
    var menu = $(".menu > img");
    var arrow = $(".arrow > img");
    var wrapper = $(".wrapper");

    $("[data-side]").on('click', function () {
        var toggle_el = $(this).data("side");

        $(toggle_el).toggleClass("open-sidebar");

        $(wrapper).toggleClass("open-sidebar-button");

        $.each([menu, arrow], function () {
            this.toggleClass('out');
        });
        $(this).addClass('anim').delay(800).queue(function (next) {
            $(this).removeClass('anim');
            next()
        });
    });
    /*INTERESTING ANIMATION OF ASIDE-MENU-BUTTON*/


    /*SWIPING OF ASIDE-MENU BY FINGERS*/
    $(".swipe-area").swipe({
        swipeStatus:function(event, phase, direction, distance, duration, fingers)
        {
            if (phase=="move" && direction =="right") {
                $(".site-content").addClass("open-sidebar");
                $(wrapper).addClass("open-sidebar-button");
                return false;
            }
        }
    });
    $("section").swipe({
        swipeStatus:function(event, phase, direction, distance, duration, fingers)
        {
            if (phase=="move" && direction =="left") {
                $(".site-content").removeClass("open-sidebar");
                $(wrapper).toggleClass("open-sidebar-button");
                return false;
            }
        },
        excludedElements: "label, button, input, select, textarea, .noSwipe"
    });
    /*SWIPING OF ASIDE-MENU BY FINGERS*/


    function getBodyScrollTop()
    {
        return self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop);
    }

    function getBodyScrollLeft()
    {
        return self.pageXOffset || (document.documentElement && document.documentElement.scrollLeft) || (document.body && document.body.scrollLeft);
    }

});