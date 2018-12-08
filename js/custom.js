$(document).ready(function() {

  // Add tooltips
  $('.tooltip').tooltipster({
    theme: 'tooltipster-shadow',
    maxWidth: '180'
  });


  // GSAP Animations
  $caret = $('.header__caret');

  // caretAnimation
  function caretAnim() {
    const caretTl = new TimelineMax({ repeat: -1 });
    caretTl
      .fromTo($caret, 2, {
        y: -35,
        autoAlpha: 0,
        scale: 1,
        transformOrigin: 'center bottom'
      }, {
        y: '+=20',
        autoAlpha: 1,
        scale: 1,
        transformOrigin: 'center bottom',
        ease: Back.easeInOut
      })
  };

  // Start function with Master Timeline
  function start() {
    console.log('----- GSAP STARTS -----');
    const masterTl = new TimelineMax();
    masterTl
      .add(caretAnim(), 'caret-animation');
  };

  start();

});