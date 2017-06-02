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
    $('#screen').html();
    
    if(pageWidth <= 400){
      $('#screen').html("xsm");
    } else if (pageWidth <= 660){
      $('#screen').html("sm");
    }
    else if (pageWidth <= 980){
      $('#screen').html("med");
    } else {
      $('#screen').html("lg");
    }
  }
  $(document).ready(jqUpdateSize);
  $(window).resize(jqUpdateSize);
  
  var $navLink = $('[data-scroll-header] a');
  $navLink.on("click", function(){
    $navLink.removeClass("active");
    $(this).addClass("active");
  });
});