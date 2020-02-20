( function ( $ ) {

    var charts = {
        init: function () {
            this.ajaxGetWeeklyPowerData();
        },
    
        ajaxGetWeeklyPowerData: function(){
            var urlPath = '/monitoring/daypower';
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
               var ctx = document.getElementById('dayPower').getContext('2d');
               var dayPower = new Chart(ctx, {
                   type: 'line',
                   data: {
                       labels: response.weeks,
                       datasets: [{
                           label: 'Day Power',
                           data: response.data,
                           backgroundColor: 'transparent',
                           borderColor: 'rgba(255, 99, 132, 1)',
                           borderWidth: 3
                       }]
                   },
                   options: { 
                       // responsive, its default value is true. If you want to resize the canvas, it should be "true"
                       //responsive: true,   // false to resize a canvas
                       //scales: { 
                       //    yAxes: [{ 
                       //        ticks: { 
                       //            beginAtZero: true 
                       //        }
                       //    }]
                       //},
                       title : {
                           display : true,
                           text : '라인차트 제목'
                       }
                   }
               }); 
               /* line chart - End */
   
               
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