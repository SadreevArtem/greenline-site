$(function () {
    if (window.innerWidth >= 992) {
        $(document).on('scroll', function (e) {
            checkNavbarOnTop();
        });
    }
    $(document).on('mouseenter', '.fade-container', function () {
        $($('.navbar-toggler')[0]).click();
    })
    $('.our-brands-carousel').owlCarousel({
        margin: window.innerWidth < 768 ? 10 : 37,
        autoWidth: true,
        items: window.innerWidth < 768 ? 3 : 6,
        nav: true,
        dots: false,
        loop: true,
        slideBy: 2,
        autoplay: true,
        navText: ''
    });
    $('.news-carousel').owlCarousel({
        margin: window.innerWidth < 1200 ? 0 :20,
        items: window.innerWidth < 1200 ? 1 : 2,
        nav: true,
        dots: false,
        loop: true,
        slideBy: window.innerWidth < 1200 ? 1 : 2,
        autoplay: false,
        navText: ''
    });
    $('.exhibitions-carousel').owlCarousel({
        margin: window.innerWidth < 768 ? 10 : 32,
        items: window.innerWidth < 768 ? 1 : 3,
        nav: true,
        dots: false,
        loop: true,
        slideBy: window.innerWidth < 768 ? 1 : 2,
        // autoplay: true,
        navText: ''
    });
    $('[data-toggle="popover"]').popover();

    $('.request-form').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);

        $.post($(this).attr('action'), $this.serialize() + '&type=1', function (response) {
            if (response.success) {
                ym(64581349,'reachGoal','new_request')
                $('#success_modal').modal('show');
                $this.find('input, textarea').val('');
            } else {
                console.log(response);
            }
        });
    });
    $('#footer-subscribe-form').submit(function (e) {
        e.preventDefault();
        e.stopPropagation();

        var $this = $(this);

        $.post($(this).attr('action'), $this.serialize() + '&type=2', function (response) {
            if (response.success) {
                ym(64581349,'reachGoal','new_subscribe')
                $('#success_modal_subscribe').modal('show');
                $this.find('input, textarea').val('');
            } else {
                console.log(response);
            }
        });
    });
});

function checkNavbarOnTop() {
    var $navbar = $('#navbar-container');
    if ($navbar.offset().top > 300 || window.innerWidth < 992) {
        $navbar.removeClass('top');
    } else {
        $navbar.addClass('top');
    }
}