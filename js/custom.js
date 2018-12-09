$(document).ready(function() {

  // =====  GSAP Animations =====

  // Variables
  $caret = $('.header__caret');

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


  // WOW JS
  window.addEventListener('load', function () { start(); new WOW().init(); });

  // Add tooltips
  $('.tooltip').tooltipster({
    theme: 'tooltipster-shadow',
    maxWidth: '180'
  });

});