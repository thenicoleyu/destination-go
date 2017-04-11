$(window).on("load", function() {

    // index
    $(".loader-cont").fadeOut(700);

    setTimeout(function() {
        $(".intro-logo").addClass("load");
    }, 400);
    setTimeout(function() {
        $(".intro-title").addClass("load");
    }, 700);
    setTimeout(function() {
        $(".get-started").addClass("load");
    }, 1000);

    var btnFadeIn = 270;
    var btnFadeOut = 220;
    var slideFade = 320;
    var delay = 300;

    setTimeout(function() {
        $(".button-1").animate({opacity: 1, top: "0"}, btnFadeIn, "linear");
    }, 300);

    $(".button-1").click(function() {
        $(".button-1").animate({opacity: 0}, btnFadeOut);
        $(".button-2").removeClass("inactive");
        $("#left-slide-1, #right-slide-1").fadeOut(slideFade);
        setTimeout(function() {
            $(".button-2").animate({opacity: 1, top: "0"}, btnFadeIn);
            $(".button-1").hide();
        }, delay);
    });

    $(".button-2").click(function() {
        $(".button-2").animate({opacity: 0}, btnFadeOut);
        $(".button-3").removeClass("inactive");
        $("#left-slide-2, #right-slide-2").fadeOut(slideFade);
        setTimeout(function() {
            $(".button-3").animate({opacity: 1, top: "0"}, btnFadeIn);
            $(".button-2").hide();
        }, delay);
    });

    $(".button-3").click(function() {
        $(".button-3").animate({opacity: 0}, btnFadeOut);
        $(".button-4").removeClass("inactive");
        $("#left-slide-3, #right-slide-3").fadeOut(slideFade);
        setTimeout(function() {
            $(".button-4").animate({opacity: 1, top: "0"}, btnFadeIn);
            $(".button-3").hide();
        }, delay);
    });

    $(".button-4").click(function() {
        $(".button-4").animate({opacity: 0}, btnFadeOut);
        $(".button-5").removeClass("inactive");
        $("#left-slide-4, #right-slide-4").fadeOut(slideFade);
        setTimeout(function() {
            $(".button-5").animate({opacity: 1, top: "0"}, btnFadeIn);
            $(".button-4").hide();
        }, delay);
    });

    $(".button-5").click(function() {
        $(".button-5").animate({opacity: 0}, btnFadeOut);
        $(".button-6").removeClass("inactive");
        $("#left-slide-5, #right-slide-5").fadeOut(slideFade);
        setTimeout(function() {
            $(".button-6").animate({opacity: 1, top: "0"}, btnFadeIn);
            $(".button-5").hide();
        }, delay);
    });

    $(".button-6").click(function() {
        $(".button-6").animate({opacity: 0}, btnFadeOut);
        $("#left-slide-6, #right-slide-6").fadeOut(slideFade);
        $("#title").hide();
        setTimeout(function() {
            $(".button-6").hide();
        }, delay);
    });
});
