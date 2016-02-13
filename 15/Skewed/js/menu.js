
$(document).ready(function () {
    if ($(window).width() < 768) {
        $("#menu").hide();
    }
    $("#menu-button").click(function () {
        $("#menu").toggle();
    });
    $("#menu>ul>li>a").click(function () {
        if ($(window).width() < 768) {
            $("#menu").hide();
        }
    });
   
    $(window).resize(function() {
        if ($(window).width() < 768) {
            $("#menu").hide();
        }
        if ($(window).width() > 769) {
            $("#menu").show();
        }
    });
    $("#menu").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1000);
    });
});