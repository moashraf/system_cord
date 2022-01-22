function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName("body")[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 2000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? "block" : "none";
}

onReady(function() {
  setVisible("body", true);
  setVisible(".loading", false);
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener("click", function(e) {
    e.preventDefault();

    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth"
    });
  });
});

if ($(".to-top").length) {
  var scrollTrigger = 100, // px
    backToTop = function() {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > scrollTrigger) {
        $(".to-top").addClass("show");
      } else {
        $(".to-top").removeClass("show");
      }
    };
  backToTop();
  $(window).on("scroll", function() {
    backToTop();
  });
  $(".to-top").on("click", function(e) {
    e.preventDefault();
    $("html,body").animate(
      {
        scrollTop: 0
      },
      1000
    );
  });
}

