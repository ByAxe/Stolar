jQuery(document).ready(function () {
    /*-------------------WIDGET-PHONE ANIMATION------------------------*/
    var widget = $('.widget-info');

    $('.widget-icon-background').on('click', function (event) {
        event.preventDefault();
        $(widget).toggleClass('active');
    });
    /*-------------------WIDGET-PHONE ANIMATION------------------------*/

    /*-------------------SWIPEBOX MODAL IMAGES-------------------------*/
    (function ($) {
        $('.swipebox').swipebox();
    })(jQuery);
    /*-------------------SWIPEBOX MODAL IMAGES-------------------------*/

    /*-------------------PHONE MASK------------------------------------*/
    $('#phone').mask("8-(099)-999-99-99");
    /*-------------------PHONE MASK------------------------------------*/


    /*-------------------SHOW ASIDE MENU ONLY ON PROFILE/* ------------*/
    /*TODO Why it doesn't work? */

    if (window.location.href.search(/.profile\.*?/) === -1) { // Проверка на нахождение profile/* в URL
        $(document.getElementsByTagName("section")).toggleClass("hard-hidden");
        $(".swipe-area").toggleClass("hidden");
        $(".wrapper-aside-button").toggleClass("hidden");
    }
    /*-------------------SHOW ASIDE MENU ONLY ON PROFILE/* ------------*/

});