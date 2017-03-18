$(document).ready(function (event) {
    $('#slideshow0').owlCarousel({
        items: 3,
        autoPlay: 3000,
        singleItem: true,
        navigation: true,
        navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
        pagination: true

    });
    $('#zoom_02').elevateZoom({
        zoomType: "inner",
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });

    $('#slideshow1').owlCarousel({
        loop: true,

        nav: true,
        items: 4,
        margin: 30,
        autoHeight: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },


            1000: {
                items: 4
            }
        }
    });
    $('#slideshow2').owlCarousel({
        loop: true,

        nav: true,
        items: 4,
        margin: 20,
        autoHeight: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }


});
