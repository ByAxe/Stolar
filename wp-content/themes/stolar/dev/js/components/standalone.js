jQuery(document).ready(function () {
    var standaloneHeadline = $('.standalone-headline h3'),
        hold = 2000;

    $(function () {
        $(standaloneHeadline).typed({
            strings: ["Аресоли", "Антресои", "Антресоли"],
            typeSpeed: 200,
            backSpeed: 120
        });
    });
});