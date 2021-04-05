$(function () {
    $(document).scroll(function() {
        if($(this).scrollTop() >= 200) {
            $(".gds-btn--back-to-top").addClass("visible");
        } else {
            $(".gds-btn--back-to-top").removeClass("visible");
        }
    });

    $("button.gds-btn--back-to-top").on("click", function () {
        $("html, body").animate({
            scrollTop: "0px"
        }, 300)
    })

    $(".main-link, .mobile-back").click(function(e) {
        e.stopPropagation();
        toggleLang();
    });

    $("#mobilemenutoggle").click(function() {
        toggleMenu();
        $('#mobile-lang').removeClass("visible");
    });

    $("#lang-select").click(function() {
        $("#lang-dropdown").toggleClass('display-none');
    });

    $(document).scroll(function() {
        hideToggleMenu();
    });

    $(document).click(function() {
        $('#lang-dropdown').addClass('display-none');
    });

    function toggleLang() {
        $('#mobile-lang').toggleClass("visible");
        $('#tab-lang-dropdown').toggleClass("display-none");
    }

    function toggleMenu() {
        $('nav.gds-mega-nav').toggleClass("visible");
    }

    function hideToggleMenu() {
        $('#mobile-lang').removeClass("visible");
        $('nav.gds-mega-nav').removeClass("visible");
        $("#lang-dropdown").addClass('display-none');
        $('#tab-lang-dropdown').addClass("display-none");
    }

    if ($('.gds-form-input__input--is-error').length > 0) {
        $('.gds-notification--error').removeClass('display-none');
    }
});

