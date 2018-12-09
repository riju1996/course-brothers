$(document).ready(function() {

  // WOW JS
  window.addEventListener('load', function () { new WOW().init(); });

  // Add tooltips
  $('.tooltip').tooltipster({
    theme: 'tooltipster-shadow',
    maxWidth: '180'
  });

});