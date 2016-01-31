/**
 * Created by ByAxe on 30.01.2016.
 */

jQuery(document).ready(function () {
    var wrapperNavButton = $(".wrapper-aside-button"),
        leftNavigation = $(".left-navigation"),
        widget = $(".widget");

    $(".swipe-area").swipe({
        swipeStatus: function (event, phase, direction, distance, duration, fingers) {
            if (phase == "move" && direction == "right") {

                $(leftNavigation).addClass("open-sidebar");
                $(wrapperNavButton).toggleClass("open-sidebar-button");
                $(widget).toggleClass("hidden");

                return false;
            }
        }
    });
    $("section").swipe({
        swipeStatus: function (event, phase, direction, distance, duration, fingers) {
            if (phase == "move" && direction == "left") {

                $(leftNavigation).removeClass("open-sidebar");
                $(wrapperNavButton).toggleClass("open-sidebar-button");
                $(widget).toggleClass("hidden");

                return false;
            }
        },
        excludedElements: "label, button, input, select, textarea, .noSwipe"
    });
});