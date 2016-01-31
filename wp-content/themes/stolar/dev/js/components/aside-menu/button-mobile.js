/**
 * Created by ByAxe on 30.01.2016.
 */

jQuery(document).ready(function () {
    var coutnerOfMenu = 0,
        wrapperNavButton = $(".wrapper-aside-button");

    window.onscroll = function (e) {
        var scrollTop = window.pageYOffset ? window.pageYOffset : (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop);

        if (scrollTop > 60 && coutnerOfMenu == 0) {
            ++coutnerOfMenu;

            $(wrapperNavButton).addClass("first-step");
            $("aside").addClass("top-zero");

        } else if (scrollTop <= 60) {
            coutnerOfMenu = 0;

            $(wrapperNavButton).removeClass("first-step");
            $("aside").removeClass("top-zero");
        }
    };
});