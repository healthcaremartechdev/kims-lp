// Language Dropdown 
/* const dropdown = document.querySelector(".lang-dropdown");
const selected = document.querySelector("#selectedLang");
const options = document.querySelectorAll(".lang-options li");

dropdown.querySelector(".lang-selected").addEventListener("click", () => {
  dropdown.classList.toggle("active");
});

options.forEach(option => {
  option.addEventListener("click", () => {
    options.forEach(o => o.classList.remove("active"));
    option.classList.add("active");
    selected.textContent = option.textContent;
    dropdown.classList.remove("active");
  });
});

document.addEventListener("click", (e) => {
  if (!dropdown.contains(e.target)) {
    dropdown.classList.remove("active");
  }
}); */

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();

    const target = document.querySelector(this.getAttribute('href'));

    const customOffset = 150; // 🔥 YOU control this value

    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;

    window.scrollTo({
      top: targetPosition - customOffset,
      behavior: "smooth"
    });
  });
});

$('.testi-slider').owlCarousel({
  loop: true,
  margin: 10,
  dots: false,
  nav: true,
  navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
  autoplay: true,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  smartSpeed: 3000,
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true
    },
    600: {
      items: 1,
      nav: false,
      dots: true
    },
    1000: {
      items: 1
    }
  }
})


$('.speciality-slider').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: ["<img src='img/chevron-left.svg'>", "<img src='img/chevron-right.svg'>"],
  autoplay: false,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  smartSpeed: 1000,
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    479: {
      items: 2,
      nav: false,
      dots: true,
    },
    600: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
})

$('.exellence-slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: false,
    nav: true,
    items: 4,
    slideTransition: 'linear',
    autoplaySpeed: 10000,
    navText: ["<img src='img/left-arrow.svg'>", "<img src='img/slider-right-arrow.svg'>"],
    responsive: {
        0: {
            items: 1.2,
            margin: 15,
            nav: false,
            dots: false
        },
        480: {
            items: 1.5,
            margin: 15,
            nav: false,
            dots: false
        },
        768: {
            items: 1.5,
            margin: 15,
            nav: false,
            dots: false
        },
        992: {
            items: 4,
            margin: 15,
            nav: true,
            dots: false
        }
    }
});

$('.details-cta-slider').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  dots: false,
  navText: ["<img src='img/chevron-left.svg'>", "<img src='img/chevron-right.svg'>"],
  autoplay: false,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  smartSpeed: 1000,
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    479: {
      items: 2,
      nav: false,
      dots: true,
    },
    600: {
      items: 3,
      nav: false,
    },
    1000: {
      items: 3
    }
  }
})

$('.doctor-slider').owlCarousel({
  loop: true,
  margin: 15,
  navText: ["<img src='img/left-arrow.svg'>", "<img src='img/slider-right-arrow.svg'>"],
  autoplay: false,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  smartSpeed: 1000,
  responsive: {
    0: {
      items: 1,
      nav: false,
      dots: true,
    },
    479: {
      items: 2,
      nav: false,
      dots: true,
    },
    600: {
      items: 3,
      nav: false,
      dots: true
    },
    1000: {
      items: 4,
      nav: true,
      dots: false
    }
  }
})

$('.award-slider').owlCarousel({
  loop: true,
  margin: 15,
  nav: true,
  dots: false,
  navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
  autoplay: false,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  smartSpeed: 1000,
  responsive: {
    0: {
      items: 1
    },
    479: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
})

$('.student-slide').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  center: true,
  smartSpeed: 1000,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 2
    }
  }
})


$('.about-logo-slide').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  autoplay: true,
  smartSpeed: 4000,
  autoplayTimeout: 4000,
  autoplayHoverPause: false,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})


if (document.querySelectorAll('.reveal').length) {
  gsap.registerPlugin(ScrollTrigger);

  let revealContainers = document.querySelectorAll(".reveal");

  revealContainers.forEach((container) => {
    let image = container.querySelector("img");

    ScrollTrigger.matchMedia({

      // Desktop and larger screens
      "(min-width: 768px)": function () {
        let tl = gsap.timeline({
          scrollTrigger: {
            trigger: container,
            start: "top 70%", // starts when container enters viewport
            toggleActions: "restart none none reset"
          }
        });

        // Make container visible
        tl.set(container, { autoAlpha: 1 });

        // Animate container sliding in
        tl.from(container, {
          duration: 1,
          xPercent: -100,
          ease: "power2.out"
        });

        // Animate image sliding in opposite direction
        tl.from(image, {
          duration: 1,
          xPercent: 100,
          scale: 1,
          ease: "power2.out"
        }, "<");
      },

      // Mobile screens
      "(max-width: 767px)": function () {
        let tl = gsap.timeline({
          scrollTrigger: {
            trigger: container,
            start: "top 80%", // trigger later on mobile
            toggleActions: "play none none none"
          }
        });

        tl.set(container, { autoAlpha: 1 });

        // Simpler animation for small screens
        tl.from(container, {
          duration: 0.8,
          y: 50,
          opacity: 0,
          ease: "power2.out"
        });

        tl.from(image, {
          duration: 0.8,
          scale: 1.1,
          opacity: 0,
          ease: "power2.out"
        }, "<");
      }
    });
  });
}



function showBox(element, id) {
  const wrapper = $(element).closest(".treat-wrapper");

  wrapper.find(".treat-tab").removeClass("active");
  $(element).addClass("active");

  wrapper.find(".treat-box:visible").fadeOut(200, function () {
    wrapper.find("#" + id).fadeIn(300);
  });
}










