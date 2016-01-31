/**
 * Created by ByAxe on 30.01.2016.
 */

jQuery(document).ready(function () {
    var menu = $(".menu > img"),
        arrow = $(".arrow > img"),
        wrapperNavButton = $(".wrapper-aside-button"),
        widget = $(".widget");

    $("[data-side]").on('click', function () {
        var toggle_el = $(this).data("side");

        $(toggle_el).toggleClass("open-sidebar");
        $(wrapperNavButton).toggleClass("open-sidebar-button");
        $(widget).toggleClass("hidden");

        $.each([menu, arrow], function () {
            this.toggleClass('out');
        });

        $(this).addClass('anim').delay(800).queue(function (next) {
            $(this).removeClass('anim');
            next()
        });
    });
});