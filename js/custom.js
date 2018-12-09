$(document).ready(function() {

  // Add tooltips
  $('.tooltip').tooltipster({
    theme: 'tooltipster-shadow',
    maxWidth: '180'
  });


  // =====  GSAP Animations =====

  // Variables
  $caret = $('.header__caret');
  $header = $('.header__title, .header__form');

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

  // FadeInHeader Animation
  function headerFadeIn() {
    const headerTl = new TimelineMax();
    headerTl
      .staggerFromTo($header, 1, {
        y: '-=40',
        autoAlpha: 0
      }, {
        y: 0,
        autoAlpha: 1
      }, 0.2);
    return headerTl;
  } 

  // Start function with Master Timeline
  function start() {
    console.log('----- GSAP STARTS -----');
    const masterTl = new TimelineMax();
    masterTl
      .add(headerFadeIn(), 'header-fade-in')
      .add(caretAnim(), 'caret-animation')
    ;
  };

  window.addEventListener('load', start);

});