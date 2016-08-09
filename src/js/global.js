$(function() {
  
  // STYLE GUIDE
  // Change theme based on button click
  $('[data-theme]').click(function() {
    var currentTheme = $(this).data('theme');
    $('body').removeClass (function (index, css) {
      return (css.match (/\btheme-\S+/g) || []).join(' ');
    }).addClass('theme-'+currentTheme);
  });
  
  // Adds current year to copyright date
  var currentYear = (new Date()).getFullYear();
  $("[data-year]").text(currentYear);
});
