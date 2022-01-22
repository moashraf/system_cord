$(".owl-portfolio").owlCarousel({
  margin: 0,
  items: 1,
  singleItem: true,
  autoplay: false,
  nav: true,
  dots: false,
  navText: [
    "<i class='fas fa-arrow-left'></i>",
    "<i class='fas fa-arrow-right'></i>"
  ],
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});

$(".service").click(function() {
  $(".service-form").toggleClass("none");
  $(".service-form").addClass("animated fadeInLeft");
});

// $(".close-form").click(function() {
//   $(".service-form").toggleClass("none");
// });

  $(".service-form").click(function(e) {
    if ($(e.target).closest(".service-form form").length === 0) {
      $(".service-form").addClass("none");
    }
  });

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

if ($(window).width() > 996) {
  var waypoint = new Waypoint({
    element: document.getElementById("s1"),
    handler: function() {
      $(".s1").removeClass("visibility-hidden");
      $(".s2").removeClass("visibility-hidden");
      $(".s1").addClass("animated fadeInLeft slower");
      $(".s2").addClass("animated fadeInRight slower");
    },
    offset: "80%"
  });

  var waypoint = new Waypoint({
    element: document.getElementById("s2"),
    handler: function() {
      $(".s3").removeClass("visibility-hidden");
      $(".s4").removeClass("visibility-hidden");
      $(".s3").addClass("animated fadeInLeft slower");
      $(".s4").addClass("animated fadeInRight slower");
    },
    offset: "80%"
  });

  var waypoint = new Waypoint({
    element: document.getElementById("s3"),
    handler: function() {
      $(".s5").removeClass("visibility-hidden");
      $(".s6").removeClass("visibility-hidden");
      $(".s5").addClass("animated fadeInLeft slower");
      $(".s6").addClass("animated fadeInRight slower");
    },
    offset: "80%"
  });

  var waypoint = new Waypoint({
    element: document.getElementById("s4"),
    handler: function() {
      $(".s7").removeClass("visibility-hidden");
      $(".s8").removeClass("visibility-hidden");
      $(".s7").addClass("animated fadeInLeft slower");
      $(".s8").addClass("animated fadeInRight slower");
    },
    offset: "80%"
  });

  var waypoint = new Waypoint({
    element: document.getElementById("contact"),
    handler: function() {
      $(".contact-form").removeClass("visibility-hidden");
      $(".contact-form").addClass("animated fadeInUp slowe");
    },
    offset: "80%"
  });

  var waypoint = new Waypoint({
    element: document.getElementById("portfolio"),
    handler: function() {
      $(".portfolio").removeClass("visibility-hidden");
      $(".portfolio").addClass("animated fadeInUp slowe");
    },
    offset: "80%"
  });
} else {
  $(".visibility-hidden").removeClass("visibility-hidden");
}
