$(document).ready(function () {

  AOS.init({
    easing: 'ease-out-back',
    duration: 1000
  });

  $('a.smooth').on('click', function (e) {
    e.preventDefault();
    var link = $(this);
    var anchor = link.attr('href');
    $('a.smooth').removeClass('line-nav');
    $(this).addClass('line-nav');
    $('html, body').stop().animate({
      scrollTop: $(anchor).offset().top - ($('#navegador').height() + 21)
    }, 1500);
  });

  $( ".hover-title" ).hover(function() {
    $( this ).removeClass("fadeInLeft animated");
    setTimeout(function(){
       $( this ).addClass("fadeInLeft animated");
    }, 250);
  }, function() {
    $( this ).addClass("fadeInLeft animated");
  });

  $( ".hover-title-seccion" ).hover(function() {
    $( this ).removeClass("zoomIn animated");
    setTimeout(function(){
       $( this ).addClass("zoomIn animated");
    }, 250);
  }, function() {
    $( this ).addClass("zoomIn animated");
  });

  $('#financiamiento-tab').on('click', function (e) {
    $('#financiamiento-tab').removeClass('jello animated');
    setTimeout(function(){
      $('#financiamiento-tab').addClass('jello animated');
    }, 250);
  });

  $('#inversiones-tab').on('click', function (e) {
    $('#inversiones-tab').removeClass('jello animated');
    setTimeout(function(){
      $('#inversiones-tab').addClass('jello animated');
    }, 250);
  });

  $('#patrimonio-tab').on('click', function (e) {
    $('#patrimonio-tab').removeClass('jello animated');
    setTimeout(function(){
      $('#patrimonio-tab').addClass('jello animated');
    }, 250);
  });

  $("#btn-play").click(function() {
    $('#divVideo').removeClass('divNotActive');
    $('#divVideo').addClass('divVideoPadding');
    $('#divBtn').addClass('divNotActive');
    $("#iframeVideo").attr("src","https://www.youtube-nocookie.com/embed/TkTDdsBGQu8?autoplay=1");
    
  });
});