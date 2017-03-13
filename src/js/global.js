$(function() {
  
  // Style guide: change theme based on button click
  $('[data-theme]').click(function() {
    var currentTheme = $(this).data('theme');
    $('body').removeClass (function (index, css) {
      return (css.match (/\btheme-\S+/g) || []).join(' ');
    }).addClass('theme-'+currentTheme);
  });
  
  
  // Adds current year to copyright date in footer
  var currentYear = (new Date()).getFullYear();
  $("[data-year]").text(currentYear);
  
  
  // Opens all external links in a new window
  $("a[href^='http://'], a[href^='https://'], a[href^='//']").attr("target","_blank");
  
  
  // Fade in content
  // https://github.com/dirkgroenen/jQuery-viewport-checker
  $('.border:not(:first-child) > *').addClass("hidden").viewportChecker({
    classToAdd: 'visible fade-in',
    classToRemove: 'hidden',
    offset: 100
  });


  // ONLY FOR TESTING
  // Shows browser size
  // function jqUpdateSize(){
  //   var pageWidth = $(document).width();
  //   var pageHeight = $(document).height();
  //   $('#width').html(pageWidth);
  //   $('#height').html(pageHeight);
  // }
  // $(document).ready(jqUpdateSize);
  // $(window).resize(jqUpdateSize);
});
