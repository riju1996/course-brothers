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
    let masterCarousel = document.querySelectorAll('.siema');
    let headerSiema = new Siema({
      selector: masterCarousel[0],
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


    // Testimonial Scroll
    let testCarousel = new Siema({
      selector: masterCarousel[1],
      perPage: 1,
      duration: 400,
      draggable: false,
      loop: true
    });

    setInterval(() => {
      testCarousel.next();
    }, 6000);

    // News Scroll
    let newsCarousel = new Siema({
      selector: masterCarousel[2],
      perPage: 1,
      duration: 400,
      draggable: false,
      loop: true
    });

    $('.news_updates__back').click(() => {
      newsCarousel.prev();
    });

    $('.news_updates__next').click(() => {
      newsCarousel.next();
    });

    let newsInterval = '';
    const newsContainer = document.querySelector('.news_updates__container');
    
    newsInterval = setInterval(() => {
      newsCarousel.next();
    }, 5000);

    newsContainer.addEventListener('mouseover', (e) => {
      clearInterval(newsInterval);
    });

    newsContainer.addEventListener('mouseleave', () => {
      newsInterval = setInterval(() => {
        newsCarousel.next();
      }, 5000);
    });

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


  // Dynamic change for Featured Courses 
  const featuredCourses = document.querySelectorAll('.featured_courses__main__nav ul li');
  const featuredCoursesItems = document.querySelectorAll('.featured_courses__body__container');

  featuredCourses[0].firstChild.style.color = '#DB324D';
  featuredCourses[0].classList.add('list--active');

  const coursesChanger = (itemNum) => {
    featuredCourses[itemNum].addEventListener('mouseover', (e) => {

      featuredCoursesItems.forEach((item, i) => {
        if (i === itemNum) {
          featuredCourses[i].firstChild.style.color = '#DB324D';
          featuredCourses[i].classList.add('list--active');
          item.style.zIndex = '5';
          item.style.opacity = '1';
        } else {
          item.style.opacity = '0';
          item.style.zIndex = '-9';
          featuredCourses[i].firstChild.style.color = 'white';
          featuredCourses[i].classList.remove('list--active');
        }
      });

    });
  };

  featuredCourses.forEach((item, index) => {
    coursesChanger(index);
  });

  featuredCoursesItems.forEach((item, index) => {
    if (index === 0) {
      item.style.opacity = '1';
    } else {
      item.style.opacity = '0';
    }
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


  // Parallax for featured courses
  $(window).on('scroll', () => {
    $('.featured_courses').css({
      'background-position': `100% ${($(document).scrollTop() / 7)}%`
    });
  });



  // Back to top
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 1000) {
      $('.back-to-top').css('bottom', '3rem');
    } else {
      $('.back-to-top').css('bottom', '-10rem');
    }
  });

  $('.back-to-top').click(() => {
    $('html, body').animate({ scrollTop: 0 }, 800);
  });



  // For Login Modal Display
  const loginButton = document.querySelector('.navbar_main__appendix__login');
  const loginModal = document.querySelector('.login_modal');
  const loginModalBackdrop = document.querySelector('.login_modal__backdrop');
  const loginModalClose = document.querySelector('.login_modal__close');

  loginButton.addEventListener('click', function() {
    loginModalBackdrop.classList.add('login_modal__backdrop--active');
    loginModal.classList.add('login_modal--active');
  });

  loginModalClose.addEventListener('click', function() {
    loginModalBackdrop.classList.remove('login_modal__backdrop--active');
    loginModal.classList.remove('login_modal--active');
  });



  // For Register Modal Display
  const registerButton = document.querySelector('.navbar_main__appendix__register');
  const registerModal = document.querySelector('.register_modal');
  const registerModalBackdrop = loginModalBackdrop;
  const registerModalClose = document.querySelector('.register_modal__close');

  registerButton.addEventListener('click', () => {
    registerModalBackdrop.classList.add('login_modal__backdrop--active');
    registerModal.classList.add('register_modal--active');
  });

  registerModalClose.addEventListener('click', () => {
    registerModalBackdrop.classList.remove('login_modal__backdrop--active');
    registerModal.classList.remove('register_modal--active');
  });

  // For Register Modal Submit Fix
  const replacedRegisterSubmit = document.querySelector('.register_modal__submit');
  const registerFormButton = document.querySelector('.register_modal__main__form button');

  replacedRegisterSubmit.addEventListener('click', () => {
    registerFormButton.click();
  });


  // Interchanging Register and Login Modals
  const registerHereButton = document.querySelector('.login_modal__appendix__register');
  const loginHereButton = document.querySelector('.register_modal__appendix__login');

  registerHereButton.addEventListener('click', () => {
    registerModal.classList.add('register_modal--active');
    loginModal.classList.remove('login_modal--active');
  });
  loginHereButton.addEventListener('click', () => {
    loginModal.classList.add('login_modal--active');
    registerModal.classList.remove('register_modal--active');
  });

  // For getting newsletter popups every 10 seconds
  // let newsInterval = null;

  // function showNewsletter() {
  //   $('.newsletter_popup__backdrop').addClass('newsletter_popup__backdrop--active');
  //   $('.newsletter_popup').css({
  //     'transform': 'scale(1) translate(-50%, -50%)',
  //     'opacity': '1',
  //     'display': 'relative',
  //     'z-index': '8'
  //   });
  // };

  // function hideNewsletter() {
  //   $('.newsletter_popup__backdrop').removeClass('newsletter_popup__backdrop--active');
  //   $('.newsletter_popup').css({
  //     'transform': 'scale(0) translate(-50%, -50%)',
  //     'opacity': '0',
  //     'z-index': '1'
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