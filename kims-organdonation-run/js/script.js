
/* ==== Sticky Navbar ==== */

let navHeight = $("header").height();
//   console.log(navHeight);
$(window).bind("scroll", function () {
  if ($(window).scrollTop() > navHeight) {
    $("#menuHeader").addClass("sticky-active");
  } else {
    $("#menuHeader").removeClass("sticky-active");
  }
});

/* ==== Mobile Menu ==== */

$('.anchor-menu').click(function() {
  $('.menu-button').click();
});


$('.menu-button').click(function() {
  $('.mobileOverlay').toggleClass('toggle');
  $('.mobile_primary').toggleClass('active');
  $('.menu-button').toggleClass('toggle');
});

$('.mobileOverlay').click(function () {
  $('.mobileOverlay').toggleClass('toggle');
  $('.mobile_primary').toggleClass('active');
  $('.menu-button').toggleClass('toggle');
});

$('.menuClose').click(function () {
  $('.mobileOverlay').toggleClass('toggle');
  $('.mobile_primary').toggleClass('active');
  $('.menuClose').toggleClass('toggle');
  $('.menu-button').toggleClass('toggle');
});

// 

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

/* Lightbox */
