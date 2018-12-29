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

  new Chart(document.getElementById("pie-chart-1"), {
    type: 'pie',
    data: {
      labels: ["SEGURIDAD", "INTERNACIONALIZACIÓN", "MEJORA DE RENDIMIENTOS"],
      datasets: [{
        backgroundColor: ["#00375D", "#3275B3", "#064E8B"],
        data: [30, 30, 30]
      }]
    },
    options: {
      legend: {
        display: false
      },
      responsive: true,
      title: {
        display: true,
        text: ''
      }
    }
  });


});