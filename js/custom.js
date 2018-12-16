$(document).ready(function() {

  // Variables
  $caret = $('.header__caret');
  $navbarFixed = $('.navbar--fixed');


  // Navbar animation on scroll
  window.addEventListener('scroll', () => {
    if (window.pageYOffset > 1500) {
      $navbarFixed.css('top', '0');
    } else {
      $navbarFixed.css('top', '-19vh');
    }
  });


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

    // const carousels = document.querySelectorAll('.carousel__container');
    // const carouselContainer = document.querySelector('.featured_courses__carousel');
    // carousels.forEach((item, index) => {
    //   if (index === 0) {
    //     item.style.display = 'block';
    //   } else {
    //     item.style.display = 'none';
    //   }
    // });

    // Courses Carousel
    let siema = new Siema({
      perPage: 2,
      duration: 400
    });

    $('.carousel__button .fa-angle-right').click(() => {
      siema.next();
    });
    $('.carousel__button .fa-angle-left').click(() => {
      siema.prev();
    });


    // function carouselDisplayer(itemIndex) {
    //   carousels.forEach(item => {
    //     item.style.opacity = 0;
    //     setTimeout(() => { item.style.display = 'none'; }, 400);
    //   });
    //   carousels[itemIndex].style.opacity = 1;
    //   setTimeout(() => { carousels[itemIndex].style.display = 'block'; }, 400);
    // };

    // const featuredCourses = document.querySelectorAll('.featured_courses__list ul li');
    // featuredCourses.forEach((course, index) => {
    //   course.addEventListener('click', () => {
    //     carouselDisplayer(index);
    //   });
    // });

  });

  // Add tooltips
  $('.tooltip').tooltipster({
    theme: 'tooltipster-shadow',
    maxWidth: '180'
  });


  


  // For making the selected course visible
  $('.featured_courses__list ul li').first().addClass('list--active');
  $('.featured_courses__list ul li').click(function() {
    $('.featured_courses__list ul li').removeClass('list--active');
    $(this).addClass('list--active');
  });



  // For getting newsletter popups every 10 seconds
  let newsInterval = null;

  function showNewsletter() {
    $('.newsletter_popup__backdrop').addClass('newsletter_popup__backdrop--active');
    $('.newsletter_popup').css({
      'transform': 'scale(1) translate(-50%, -50%)',
      'opacity': '1'
    });
  };

  function hideNewsletter() {
    $('.newsletter_popup__backdrop').removeClass('newsletter_popup__backdrop--active');
    $('.newsletter_popup').css({
      'transform': 'scale(0) translate(-50%, -50%)',
      'opacity': '0'
    });
  }

  newsInterval = setInterval(() => {
    showNewsletter();
  }, 10000);

  $('.newsletter_popup__main__close').click(function() {
    hideNewsletter();
    clearInterval(newsInterval);
    newsInterval = setInterval(() => {
      showNewsletter();
    }, 10000);
  });

  $(".newsletter_popup__main__form div").click(function() {
    hideNewsletter();
    clearInterval(newsInterval);
  });

});