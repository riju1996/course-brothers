$(document).ready(function() {

  // Variables
  $caret = $('.header__caret');
  $navbarFixed = $('.navbar--fixed');


  // Navbar animation on scroll
  // window.addEventListener('scroll', () => {
  //   if (window.pageYOffset > 1500) {
  //     $navbarFixed.css('top', '0');
  //   } else {
  //     $navbarFixed.css('top', '-19vh');
  //   }
  // });


  // =====  GSAP Animations =====

  // caretAnimation
  function caretAnim() {
    const caretTl = new TimelineMax({ repeat: -1, yoyo: true });
    caretTl
      .fromTo($caret, 1.5, {
        y: -35,
        autoAlpha: 0,
      }, {
        y: '+=20',
        autoAlpha: 1,
        ease: Power1.easeInOut
      })
    return caretTl;
  };

    // Start function with Master Timeline
  function start() {
    console.log('----- GSAP STARTS -----');
    const masterTl = new TimelineMax();
    masterTl
      .add(caretAnim(), 'caret-animation')
    ;
  };


  // WOW JS and GSAP Animations start
  window.addEventListener('load', function () { 

    start(); 
    new WOW().init();


    // Header Carousel
    let headerCarousel = document.querySelectorAll('.siema');
    let headerSiema = new Siema({
      selector: headerCarousel[0],
      draggable: false,
      loop: true,
      duration: 400
    });

    $('.header__carousel__buttons .fa-angle-right').click(() => {
      headerSiema.next();
    });
    $('.header__carousel__buttons .fa-angle-left').click(() => {
      headerSiema.prev();
    });

    setInterval(() => {
      headerSiema.next();
    }, 6000);


    // Courses Carousel
    let siema = new Siema({
      selector: headerCarousel[1],
      perPage: 2,
      duration: 400
    });

    $('.carousel__button .fa-angle-right').click(() => {
      siema.next();
    });
    $('.carousel__button .fa-angle-left').click(() => {
      siema.prev();
    });


    // // Testimonial Scroll
    // let testimonialScrollOffset = 0;
    // setInterval(() => {
    //   $('.testimonials__body').animate({'scrollLeft': testimonialScrollOffset + 'px' });
    //   testimonialScrollOffset += 4000;
    // }, 3000);
    // Initializing the marquee plugin
    // $('.marquee').marquee({
    //   direction: 'right',
    //   duplicated: 'true',
    //   duration: 15000,
    //   pauseOnHover: 'true',
    //   gap: 0
    // });
    let testCarousel = new Siema({
      selector: headerCarousel[2],
      perPage: 1,
      duration: 400,
      // draggable: false,
      loop: true
    });

    setInterval(() => {
      testCarousel.next();
    }, 6000);

  });

  // Add tooltips
  $('.tooltip').tooltipster({
    theme: 'tooltipster-shadow',
    maxWidth: '180'
  });


  // For Universities & Colleges carousel
  $(".rslides").responsiveSlides({
    auto: true,
    speed: 1000,
    timeout: 7000
  });


  // For making the selected course visible
  $('.featured_courses__list ul li').first().addClass('list--active');
  $('.featured_courses__list ul li').click(function() {
    $('.featured_courses__list ul li').removeClass('list--active');
    $(this).addClass('list--active');
  });



  // For getting newsletter popups every 10 seconds
  // let newsInterval = null;

  // function showNewsletter() {
  //   $('.newsletter_popup__backdrop').addClass('newsletter_popup__backdrop--active');
  //   $('.newsletter_popup').css({
  //     'transform': 'scale(1) translate(-50%, -50%)',
  //     'opacity': '1'
  //   });
  // };

  // function hideNewsletter() {
  //   $('.newsletter_popup__backdrop').removeClass('newsletter_popup__backdrop--active');
  //   $('.newsletter_popup').css({
  //     'transform': 'scale(0) translate(-50%, -50%)',
  //     'opacity': '0'
  //   });
  // }

  // newsInterval = setInterval(() => {
  //   showNewsletter();
  // }, 10000);

  // $('.newsletter_popup__main__close').click(function() {
  //   hideNewsletter();
  //   clearInterval(newsInterval);
  //   newsInterval = setInterval(() => {
  //     showNewsletter();
  //   }, 10000);
  // });

  // $(".newsletter_popup__main__form div").click(function() {
  //   hideNewsletter();
  //   clearInterval(newsInterval);
  // });

});