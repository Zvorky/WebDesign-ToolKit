(function () {
  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)");
  if (reduce.matches) {
    return;
  }

  document.documentElement.classList.add("motion-ready");

  if (typeof reduce.addEventListener === "function") {
    reduce.addEventListener("change", function () {
      if (reduce.matches) {
        document.documentElement.classList.remove("motion-ready");
      }
    });
  }

  function observe() {
    var reveals = document.querySelectorAll(".js-reveal");
    var plots = document.querySelectorAll(".js-plot");

    if (!("IntersectionObserver" in window)) {
      reveals.forEach(function (el) {
        el.classList.add("is-in");
      });
      plots.forEach(function (el) {
        el.classList.add("is-plotting");
      });
      return;
    }

    var revealIo = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("is-in");
            revealIo.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.18, rootMargin: "0px 0px -6% 0px" }
    );

    reveals.forEach(function (el) {
      revealIo.observe(el);
    });

    var plotIo = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          entry.target.classList.toggle("is-plotting", entry.isIntersecting);
        });
      },
      { threshold: 0.08 }
    );

    plots.forEach(function (el) {
      plotIo.observe(el);
    });
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", observe);
  } else {
    observe();
  }
})();
