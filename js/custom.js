$(document).ready(function() {

  // =====  GSAP Animations =====

    // Start function with Master Timeline
  function start() {
    console.log('----- GSAP STARTS -----');
    const masterTl = new TimelineMax();
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


    // Testimonial Scroll
    let testCarousel = new Siema({
      selector: headerCarousel[2],
      perPage: 1,
      duration: 400,
      draggable: false,
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



  // For the top courses modal
  let topCourseItems = document.querySelectorAll('.top_courses__item');
  let topCoursesItemsSections = document.querySelectorAll('.top_courses__item__section');
  let topCoursesItemsSectionsButtons = document.querySelectorAll('.top_courses__item__section__button');

  function sectionShow(sectionNum) {
    topCoursesItemsSections[sectionNum].style.zIndex = '5';
    topCoursesItemsSections[sectionNum].style.opacity = '1';
  };

  function sectionHide(sectionNum) {
    topCoursesItemsSections[sectionNum].style.zIndex = '-5';
    topCoursesItemsSections[sectionNum].style.opacity = '0';
  };

  for(let i = 0; i < topCourseItems.length; i++) {
    topCourseItems[i].addEventListener('click', () => {
      sectionShow(i);
    });
    topCoursesItemsSectionsButtons[i].addEventListener('click', (e) => {
      e.stopPropagation();
      sectionHide(i);
    });
  }



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