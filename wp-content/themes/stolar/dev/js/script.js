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
});
