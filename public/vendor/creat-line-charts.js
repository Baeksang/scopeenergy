( function ( $ ) {

    var charts = {
        init: function () {
            this.ajaxGetdayPowerData();
        },
    
        ajaxGetdayPowerData: function(){
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
               var ctx1 = document.getElementById("dayPower");
               var ctx2 = ctx1.getContext("2d");
               var dayPower = new Chart(ctx2, {
                   type: 'line',
                   data: {
                       labels: response.day,
                       datasets: [{
                           label: 'Day Power',
                           data: response.daypower,
                           backgroundColor: 'transparent',
                           borderColor: 'rgba(255, 99, 132, 1)',
                           borderWidth: 3
                       }]
                   },
                   options: { 
                       // 차트 크기 조절을 위해 차트 옵션에 responsive: false 를 추가시켜 준다.
                       //responsive: false,   // false to resize a canvas
                       scales: { 
                           yAxes: [{ 
                               ticks: { 
                                    //beginAtZero: true,
                                    min: 0,
                                    max: 30,
                                    maxTicksLimit: 5                                   
                               }
                           }],
                           xAxes: [{
                               time : {
                                   unit: 'date'
                               },
                               guideLines: {
                                   display: false
                               },
                               ticks:{
                                   maxTicksLimit: 7
                               }
                           }]
                       },
                       //title : {
                       //    display : true,
                       //    text : '라인차트 제목'
                       //}
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