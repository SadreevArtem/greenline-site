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

  function showFormMessage($form, message) {
    var $message = $form.find(".form-message");

    if (!$message.length) {
      $message = $('<div class="form-message alert alert-danger col-12 mt-3 mb-0"></div>');
      var $messageTarget = $form.find('button[type="submit"]').closest(".col-12");

      if ($messageTarget.length) {
        $messageTarget.after($message);
      } else {
        $form.append($message);
      }
    }

    $message.text(message).show();
  }

  function clearFormMessage($form) {
    $form.find(".form-message").hide().text("");
  }

  function setFormSending($form, isSending) {
    var $button = $form.find('button[type="submit"]');
    var $spinner = $button.find(".fa-spinner");

    $form.data("is-sending", isSending);
    if ($form.hasClass("request-form")) {
      updateRequestButton($form);
    } else {
      $button.prop("disabled", isSending);
    }
    $spinner.toggle(isSending);
  }

  function updateRequestButton($form) {
    var consentGiven = $form
      .find('input[name="personalDataConsent"]')
      .prop("checked");
    $form
      .find('button[type="submit"]')
      .prop("disabled", !consentGiven || $form.data("is-sending") === true);
  }

  $(document).on(
    "change",
    '.request-form input[name="personalDataConsent"]',
    function () {
      updateRequestButton($(this).closest("form"));
    },
  );

  $(".request-form").each(function () {
    updateRequestButton($(this));
  });

  $(".request-form").submit(function (e) {
    e.preventDefault();
    e.stopPropagation();

    var $this = $(this);
    clearFormMessage($this);
    setFormSending($this, true);

    var payload = {
      name: $this.find('[name="name"]').val(),
      organization: $this.find('[name="organization"]').val(),
      email: $this.find('[name="email"]').val(),
      comment: $this.find('[name="comment"]').val(),
      personalDataConsent: $this
        .find('[name="personalDataConsent"]')
        .prop("checked"),
    };

    $.ajax({
      url: $this.attr("action"),
      method: "POST",
      contentType: "application/json; charset=UTF-8",
      dataType: "json",
      data: JSON.stringify(payload),
      success: function (response) {
        if (response.success) {
          $("#success_modal").modal("show");
          $this[0].reset();
          updateRequestButton($this);
        } else {
          showFormMessage(
            $this,
            response.message || window.requestFormErrorMessage,
          );
        }
      },
      error: function (xhr) {
        var response = xhr.responseJSON || {};
        showFormMessage(
          $this,
          response.message || window.requestFormErrorMessage,
        );
      },
      complete: function () {
        setFormSending($this, false);
      },
    });
  });
  $("#footer-subscribe-form").submit(function (e) {
    e.preventDefault();
    e.stopPropagation();

    var $this = $(this);
    clearFormMessage($this);
    setFormSending($this, true);

    $.post(
      $(this).attr("action"),
      $this.serialize() + "&type=2",
      function (response) {
        if (response.success) {
          $("#success_modal_subscribe").modal("show");
          $this.find("input, textarea").val("");
        } else {
          showFormMessage(
            $this,
            response.message || window.subscribeFormErrorMessage,
          );
        }
      },
    )
      .fail(function () {
        showFormMessage($this, window.subscribeFormErrorMessage);
      })
      .always(function () {
        setFormSending($this, false);
      });
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
