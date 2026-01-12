
$(document).ready(function () {

  $(".expart-slider").owlCarousel({
    loop: false,
    margin: 30,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  });

  $(".specility_card").owlCarousel({
    loop: true,
    margin: 10,
    loop: false,
    navText: [
      "<img src='image/left-arrow.svg'>",
      "<img src='image/right-arrow.svg'>",
    ],
    responsive: {
      0: {
        items: 1,
        dots: true,
        nav: false,
      },
      480: {
        items: 1,
        dots: true,
        nav: false,
      },
      768: {
        items: 2,
        dots: false,
        nav: true,
      },
      992: {
        items: 3,
        dots: false,
        nav: true,
      },
    },
  });

  $(".generic-slider").owlCarousel({
    loop: false,
    margin: 20,
    dots: true,
    nav: false,
    autoPlay: true,
    responsive: {
      0: {
        items: 2,
        autoPlay: true,
      },
      480: {
        items: 3,
        autoPlay: true,
      },
      768: {
        items: 3,
        autoPlay: true,
      },
      992: {
        items: 4,
        autoPlay: true,
      },
    },
  });

  $(".testimonial-slider").owlCarousel({
    loop: false,
    margin: 20,
    dots: true,
    nav: false,
    autoPlay: true,
    responsive: {
      0: {
        items: 1,
        autoPlay: true,
      },
      480: {
        items: 2,
        autoPlay: true,
      },
      768: {
        items: 2,
        autoPlay: true,
      },
      992: {
        items: 2,
        autoPlay: true,
      },
    },
  });

  $(".video-slider").owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
        autoPlay: true,
      },
      480: {
        items: 1,
        autoPlay: true,
      },
      768: {
        items: 1,
        autoPlay: true,
      },
      992: {
        items: 1,
        autoPlay: true,
      },
    },
  });

  $(".condition-slider").owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    loop: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
        margin: 15,
      },
      480: {
        items: 1,
        margin: 15,
      },
      768: {
        items: 3,
      },
      992: {
        items: 4,
      },
    },
  });

});

const opentab = (areaName, btn) => {
  const tabArea = document.querySelectorAll(".tab_area");
  const area = document.querySelector(`#${areaName}`);
  const tabBtn = document.querySelectorAll(".tab h6");

  tabBtn.forEach((b, _) => b.classList.remove("tab_btn"));
  tabArea.forEach((ta, _) => ta.classList.remove("close_area"));

  btn.classList.add("tab_btn");
  console.log(area);
  area.classList.add("close_area");
};

/* ==== sticky header ==== */

let navHeight = $("header").height();
$(window).bind("scroll", function () {
  if ($(window).scrollTop() > navHeight) {
    $(".header").addClass("sticky-header");
  } else {
    $(".header").removeClass("sticky-header");
  }
});

$(".anchor-menu").click(function () {
  $(".menu-button").click();
});

$(".menu-button").click(function () {
  $(".mobileOverlay").toggleClass("toggle");
  $(".mobile_primary").toggleClass("active");
  $(".menu-button").toggleClass("toggle");
});

$(".mobileOverlay").click(function () {
  $(".mobileOverlay").toggleClass("toggle");
  $(".mobile_primary").toggleClass("active");
  $(".menu-button").toggleClass("toggle");
});

$(".menuClose").click(function () {
  $(".mobileOverlay").toggleClass("toggle");
  $(".mobile_primary").toggleClass("active");
  $(".menuClose").toggleClass("toggle");
  $(".menu-button").toggleClass("toggle");
});

function showmodal(element) {
  let title = $(element).parents(".card-body").find("h2").html();
  let content = $(element).parents(".card-body").find(".show-area").html();

  $("#myModal").find(".modal-title").html(title);
  $("#myModal")
    .find(".modal-body")
    .html("<div>" + content + "</div>")
    .addClass("show-details");
  $("#myModal").modal("show");
}

document.querySelectorAll(".smooth-scroll").forEach((link) => {
  link.addEventListener("click", (event) => {
    event.preventDefault(); // Stop default behavior

    const targetId = event.currentTarget.getAttribute("data-target");
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
      const elementPosition =
        targetElement.getBoundingClientRect().top + window.scrollY;

      window.scrollTo({
        top: elementPosition,
        behavior: "smooth",
      });

      history.pushState(null, null, " "); // Remove hash from URL
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const content = document.getElementById("content");
  const toggleButton = document.getElementById("toggleButton");
  const fadeEffect = document.getElementById("fadeEffect");
  const buttonText = toggleButton.querySelector("span");

  // Set initial state
  let isExpanded = false;

  toggleButton.addEventListener("click", function () {
    isExpanded = !isExpanded;

    if (isExpanded) {
      content.classList.add("expanded");
      buttonText.textContent = "Read Less";
    } else {
      content.classList.remove("expanded");
      buttonText.textContent = "Read More";
    }
  });

  // Hide fade effect if content isn't long enough to need truncating
  function checkContentHeight() {
    if (content.scrollHeight <= content.clientHeight) {
      fadeEffect.style.display = "none";
      toggleButton.style.display = "none";
    } /* else {
      fadeEffect.style.display = "block";
      toggleButton.style.display = "flex";
    } */
  }

  // Initial check
  checkContentHeight();

  // Check on window resize
  window.addEventListener("resize", checkContentHeight);
});


  let btn = $('#scrolltoButton');

  $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
          btn.addClass('show');
      } else {
          btn.removeClass('show');
      }
  });

  btn.on('click', function (e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: 0 }, '300');
  });