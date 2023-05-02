(function ($) {
  "use strict";

  $(function () {
    var header = $(".start-style");
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 10) {
        header.removeClass("start-style").addClass("scroll-on");
      } else {
        header.removeClass("scroll-on").addClass("start-style");
      }
    });
  });

  //Animation

  $(document).ready(function () {
    $("body.hero-anime").removeClass("hero-anime");
  });

  //Menu On Hover

  $("body").on("mouseenter mouseleave", ".nav-item", function (e) {
    if ($(window).width() > 750) {
      var _d = $(e.target).closest(".nav-item");
      _d.addClass("show");
      setTimeout(function () {
        _d[_d.is(":hover") ? "addClass" : "removeClass"]("show");
      }, 1);
    }
  });

  //Switch light/dark

  $("#dl-icon").on("click", function () {
    if ($("body").hasClass("dark")) {
      $("body").removeClass("dark");
      $("#dl-icon").removeClass("bi bi-sun-fill");
    } else {
      $("body").addClass("dark");
      $("#dl-icon").addClass("bi bi-sun-fill");
    }
  });
  
})(jQuery); 


/*const temaOscuro = () => {
  document.querySelector("body").setAttribute("data-bs-theme", "dark");
  document.querySelector("#dl-icon").setAttribute("class", "bi bi-sun-fill");
}

const temaClaro = () => {
document.querySelector("body").setAttribute("data-bs-theme", "light");
document.querySelector("#dl-icon").setAttribute("class", "bi bi-moon-fill");
}

const cambiarTema = () => {
document.querySelector("body").getAttribute("data-bs-theme") === "light"?
temaOscuro() : temaClaro();
}*/