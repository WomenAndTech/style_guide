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
  

  // Opens external links in a new window
  $("a[href^='http://'], a[href^='https://'], a[href^='//']").attr("target","_blank");
  
  
  // Shows browser size just for testing
  function jqUpdateSize(){
    var pageWidth = $(document).width();
    var pageHeight = $(document).height();
    $('#width').html(pageWidth);
    $('#height').html(pageHeight);
  }
  $(document).ready(jqUpdateSize);
  $(window).resize(jqUpdateSize);
});
