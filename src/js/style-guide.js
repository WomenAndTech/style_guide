$(function() {
  // Style guide: change theme based on button click
  $('[data-theme]').click(function() {
    var currentTheme = $(this).data('theme');
    $('body').removeClass (function (index, css) {
      return (css.match (/\btheme-\S+/g) || []).join(' ');
    }).addClass('theme-'+currentTheme);
  });

  // Shows browser size for testing
  function jqUpdateSize(){
    var pageWidth = $(document).width();
    var pageHeight = $(document).height();
    $('#width').html(pageWidth);
    $('#height').html(pageHeight);
  }
  $(document).ready(jqUpdateSize);
  $(window).resize(jqUpdateSize);
});