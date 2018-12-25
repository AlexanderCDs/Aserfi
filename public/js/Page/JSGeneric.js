$( document ).ready(function() {
      
      AOS.init({
        easing: 'ease-out-back',
        duration: 1000
      });

      $('#btnQuienesSomos').on('click', function(e) {
        $('html, body').animate({
          scrollTop: $(window).height()
        }, 1200);
      });

      var array = ["scroll-qs", "scroll-s", "scroll-b", "scroll-u", "scroll-c"];
      $.each(array, function( index, value ) {
        $('.'+value).on('click', function(e) {
          $('html, body').animate({
            scrollTop: $(window).height()
          }, 1200);
        });
      });

      
      
    

			new Chart(document.getElementById("doughnut-chart-1"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [2478,5267]
        				}
      				]
    			},
    			options: {
            legend: {
              display: false
            },
            responsive: true,
            title: {
              display: true,
              text: '2014'
            }
          }
			});

			new Chart(document.getElementById("doughnut-chart-2"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [247,267]
        				}
      				]
    			},
    			options: {
            legend: {
              display: false
            },
      			responsive: true,
      			title: {
        			display: true,
        			text: '2015'
      			}
    			}
			});

			new Chart(document.getElementById("doughnut-chart-3"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [278,527]
        				}
      				]
    			},
    			options: {
            legend: {
              display: false
            },
            responsive: true,
            title: {
              display: true,
              text: '2016'
            }
          }
			});

			new Chart(document.getElementById("doughnut-chart-4"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [2478,5267]
        				}
      				]
    			},
    			options: {
            legend: {
              display: false
            },
            responsive: true,
            title: {
              display: true,
              text: '2017'
            }
          }
			});

			new Chart(document.getElementById("doughnut-chart-5"), {
    			type: 'doughnut',
    			data: {
      				labels: ["item-1", "item-2"],
      				datasets: [
        				{
          					backgroundColor: ["#DFDFDF", "#00528A"],
          					data: [78,57]
        				}
      				]
    			},
    			options: {
            legend: {
              display: false
            },
            responsive: true,
            title: {
              display: true,
              text: '2018'
            }
          }
			});
		});

    new Chart(document.getElementById("pie-chart-1"), {
          type: 'pie',
          data: {
              labels: ["SEGURIDAD", "INTERNACIONALIZACIÓN", "MEJORA DE RENDIMIENTOS"],
              datasets: [
                {
                    backgroundColor: ["#00375D", "#3275B3", "#064E8B"],
                    data: [30, 30, 30]
                }
              ]
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