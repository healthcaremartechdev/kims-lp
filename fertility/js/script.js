
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
      items: 2,
    },
    992: {
      items: 2,
    },
  },
});

$('.specility_card').owlCarousel({
  loop: true,
  margin: 10,
  loop: false,
  navText: ["<img src='image/left-arrow.svg'>", "<img src='image/right-arrow.svg'>"],
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
      stagePadding: 40,
    },
  },
})

  $('.testimonial-slider').owlCarousel({
    loop: true,
    margin: 30,
    dots: true,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 2,
      },
    },
  })    
  
  $('.video-slider').owlCarousel({
    loop: true,
    margin: 10,
    dots: true,
    nav: false,
    autoPlay: true,
    responsive: {
      0: {
        items: 1,
      },
      480: {
        items: 1,
      },
      768: {
        items: 1,
      },
      992: {
        items: 1,
      },
    },
  })  
  
  $('.condition-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    loop: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
        margin: 15
    },
    480: {
        items: 1,
        margin: 15
    },
    768: {
        items: 3
    },
    992: {
        items: 4
    }
    }
  })  
  
  $('.item-slider').owlCarousel({
    loop: false,
    margin: 20,
    autoplay: true,
    nav: false,
    items:3,
    dots: true,
    responsive:{
        0:{
            items: 1,
            margin: 10
        },
        480:{
            items: 1,
            margin:5
        },
        768:{
            items: 2,
            margin:20
        },
        992:{
            items: 3,
            margin: 20
        }
    }
});


  const opentab = (areaName, btn) => {
    const tabArea = document.querySelectorAll(".tab_area");
    const area = document.querySelector(`#${areaName}`);
    const tabBtn = document.querySelectorAll(".tab h6");

    tabBtn.forEach((b, _) => b.classList.remove("tab_btn"));
    tabArea.forEach((ta, _) => ta.classList.remove("close_area"));

    btn.classList.add("tab_btn");
    console.log(area)
    area.classList.add("close_area");

  }

   /* ==== sticky header ==== */

   let navHeight = $("header").height();
   $(window).bind("scroll", function () {
     if ($(window).scrollTop() > navHeight) {
       $(".header").addClass("sticky-header");
     } else {
       $(".header").removeClass("sticky-header");
     }
   });


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

function showmodal(element){
  let title = $(element).parents('.card-body').find('h2').html();
  let content = $(element).parents('.card-body').find('.full-details').html();
  
  $('#myModal').find('.modal-title').html(title);
  $('#myModal').find('.modal-body').html("<p>"+content+"</p>");
  $('#myModal').modal('show');
}

$('.counter').counterUp({
  delay: 10,
  time: 3000
});

const year = document.querySelector('.current-year');
year.innerHTML = new Date().getFullYear();