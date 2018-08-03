 $(function() {
  // Adds current year to copyright date in footer
  var currentYear = (new Date()).getFullYear();
  $("[data-year]").text(currentYear);
  
  // Opens all external links in a new window
  $("a[href^='http://'], a[href^='https://'], a[href^='//']").attr("target","_blank");
  
  // Fade in content
  // https://github.com/dirkgroenen/jQuery-viewport-checker
  var $fadeInInterview = $('[data-interview]').find('.border:not(:first-child) > *');
  var $fadeInPage = $('[data-page]').find('.wrapper-sm > *');
  function fadeIn(obj) {
    obj.addClass("hidden").viewportChecker({
      classToAdd: 'visible fade-in',
      classToRemove: 'hidden',
      offset: 100
    });
  }
  fadeIn($fadeInPage);
  fadeIn($fadeInInterview);
});
