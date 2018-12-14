$(document).ready(function() {
  
  // For Showing Refined search options
  $('.course_results__refined_search__button i').click(function() {
    $(this).toggleClass('button--active');
    $('.course_results__refined_search__body').toggleClass('body--active');
    $('.course_results__refined_search__filter').toggleClass('filter--active');
  });

});