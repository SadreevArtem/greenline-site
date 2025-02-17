$(function () {
  YaMapsShown = false;
  $(window).scroll(function () {
    if (!YaMapsShown) {
      if (
        $(window).scrollTop() + $(window).height() >
        $(document).height() - 700
      ) {
        $("#YaMaps").html(
          '<iframe src="https://yandex.ru/map-widget/v1/?ll=20.875769%2C54.695048&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1MzE0OTQwMhIk0KDQvtGB0YHQuNGPLCDQmtCw0LvQuNC90LjQvdCz0YDQsNC0IgoNwxSkQRU011pC&z=9.06' +
            window.mapLanguage +
            '" width="100%" height="300" frameborder="0"></iframe>'
        );
        YaMapsShown = true;
      }
    }
  });

  if (window.innerWidth >= 992) {
    $(document).on("scroll", function (e) {
      checkNavbarOnTop();
    });
  }
  $(document).on("mouseenter", ".fade-container", function () {
    $($(".navbar-toggler")[0]).click();
  });
  $(".our-brands-carousel").owlCarousel({
    margin: window.innerWidth < 768 ? 10 : 37,
    autoWidth: true,
    items: window.innerWidth < 768 ? 3 : 6,
    nav: true,
    dots: false,
    loop: true,
    slideBy: 2,
    autoplay: true,
    navText: "",
  });
  $(".news-carousel").owlCarousel({
    margin: window.innerWidth < 1200 ? 0 : 20,
    items: window.innerWidth < 1200 ? 1 : 2,
    nav: true,
    dots: false,
    loop: true,
    slideBy: window.innerWidth < 1200 ? 1 : 2,
    autoplay: false,
    navText: "",
  });
  $(".exhibitions-carousel").owlCarousel({
    margin: window.innerWidth < 768 ? 10 : 32,
    items: window.innerWidth < 768 ? 1 : 3,
    nav: true,
    dots: false,
    loop: true,
    slideBy: window.innerWidth < 768 ? 1 : 2,
    // autoplay: true,
    navText: "",
  });
  $('[data-toggle="popover"]').popover();

  $(".request-form").submit(function (e) {
    e.preventDefault();
    e.stopPropagation();

    var $this = $(this);

    $.post(
      $(this).attr("action"),
      $this.serialize() + "&type=1",
      function (response) {
        if (response.success) {
          $("#success_modal").modal("show");
          $this.find("input, textarea").val("");
        } else {
          console.log(response);
        }
      }
    );
  });
  $("#footer-subscribe-form").submit(function (e) {
    e.preventDefault();
    e.stopPropagation();

    var $this = $(this);

    $.post(
      $(this).attr("action"),
      $this.serialize() + "&type=2",
      function (response) {
        if (response.success) {
          $("#success_modal_subscribe").modal("show");
          $this.find("input, textarea").val("");
        } else {
          console.log(response);
        }
      }
    );
  });
});

function checkNavbarOnTop() {
  var $navbar = $("#navbar-container");
  if ($navbar.offset().top > 300 || window.innerWidth < 992) {
    $navbar.removeClass("top");
  } else {
    $navbar.addClass("top");
  }
}
