$(function () {
  var cookieNotice = document.querySelector(".cookie-notice");
  var cookieNoticeButton = document.querySelector("[data-cookie-notice-accept]");
  var cookieNoticeStorageKey = "greenlineCookieNoticeAccepted";

  function isCookieNoticeAccepted() {
    try {
      return localStorage.getItem(cookieNoticeStorageKey) === "true";
    } catch (e) {
      return false;
    }
  }

  function acceptCookieNotice() {
    try {
      localStorage.setItem(cookieNoticeStorageKey, "true");
    } catch (e) {}

    if (cookieNotice) {
      cookieNotice.classList.add("is-hidden");
    }
  }

  if (cookieNotice && !isCookieNoticeAccepted()) {
    cookieNotice.classList.remove("is-hidden");
  }

  if (cookieNoticeButton) {
    cookieNoticeButton.addEventListener("click", acceptCookieNotice);
  }

  YaMapsShown = false;
  $(window).scroll(function () {
    if (!YaMapsShown) {
      if (
        $(window).scrollTop() + $(window).height() >
        $(document).height() - 700
      ) {
        $("#YaMaps").html(
          '<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A5c7197ad5e4a1d80b17547e239e088798f966b7fff2a67b416a7f6c899e0030c&amp;source=constructor&lang=' +
            window.mapLanguage +
            '" width="100%" height="300" frameborder="0"></iframe>',
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
      },
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
      },
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
