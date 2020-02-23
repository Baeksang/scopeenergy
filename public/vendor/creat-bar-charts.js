( function ( $ ) {

    var charts = {
        init: function () {
            this.ajaxGetWeeklyPowerData();
        },

        ajaxGetWeeklyPowerData: function(){
            var urlPath = '/monitoring/weekpower';
            var request = $.ajax( {
                method: 'GET',
                url: urlPath
            });
            request.done( function (response){
                console.log(response);
                charts.createCompleteJobsChart( response );
            });
        },

        /**
         *  Created the Completed Jobs Chart
         */

        createCompleteJobsChart: function(response){

               /* bar chart - Start */
               var ctx = document.getElementById('weekPower');
               var weekPower = new Chart(ctx, {
                   type: 'bar',
                   data: {
                       labels: response.weeks,
                       datasets: [{
                           label: 'Day Power',
                           data: response.data,
                           backgroundColor: [
                               'rgba(255, 99, 132, 0.2)',
                               'rgba(54, 162, 235, 0.2)',
                               'rgba(255, 206, 86, 0.2)',
                               'rgba(75, 192, 192, 0.2)',
                               'rgba(153, 102, 255, 0.2)',
                               'rgba(255, 159, 64, 0.2)',
                               'rgba(255, 99, 132, 0.2)'
                           ],
                           borderColor: [
                               'rgba(255, 99, 132, 1)',
                               'rgba(54, 162, 235, 1)',
                               'rgba(255, 206, 86, 1)',
                               'rgba(75, 192, 192, 1)',
                               'rgba(153, 102, 255, 1)',
                               'rgba(255, 159, 64, 1)',
                               'rgba(255, 99, 132, 1)'
                           ],
                           borderWidth: 1
                       }]
                   },
                   options: {
                       // responsive, its default value is true. If you want to resize the canvas, it should be "true"
                       //responsive: false,   // false to resize a canvas
                       scales: {
                           yAxes: [{
                               ticks: {
                                   beginAtZero: true
                               }
                           }]
                       }
                   }
               });

               //var ddd = 'dddd';
               //var updateWeekPowerChart = function(){
               //   var data = '';
               //    $.getJSON('/monitoring/index',function(mData){
               //            data = mData;
               //            console.log(data);
               //        });
        }


    };

	charts.init();

} )( jQuery );
