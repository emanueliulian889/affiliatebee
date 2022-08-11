$( document ).ready(function() {
    //remove flash message
    setTimeout(function() {
        $('.success-toast').addClass('fadeout');
    }, 5000);
});


// scroll to section
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 64
    }, 100);
});

// Add class based on scroll
$(function() {
    var header = $(".clearHeader");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        // header
        if (scroll >= 100) {
            $('header').addClass('small-header');
        } else {
            $('header').removeClass("small-header");
        }

        //footer CTA
        if (scroll >=300) {
            $('.footer-cta').addClass('show-cta');
        } else {
            $('.footer-cta').removeClass('show-cta');
        }
    });
});

document.addEventListener(
    "DOMContentLoaded", () => {
        new Mmenu( "#menu", {
            "iconbar": {
                "use": true,
                "position": "right",
                "bottom": [
                    "<a href='#/'><i class='fa fa-linkedin'></i></a>",
                    "<a href='#/'><i class='fa fa-twitter'></i></a>",
                    "<a href='#/'><i class='fa fa-instagram'></i></a>",
                    "<a href='#/'><i class='fa fa-youtube'></i></a>",
                ]
             },
            "extensions": [
                "position-right",
                "theme-white",
                "pagedim-black",
            ],
            onClick: {
                close:  true,
            }
        }, {
            // configuration
        });
    }
)