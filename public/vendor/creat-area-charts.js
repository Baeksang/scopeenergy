( function ( $ ) {

    var charts = {
        init: function () {
            this.ajaxGetAreaData();
        },

        ajaxGetAreaData: function(){
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


            /* mixed chart - Start */

            const mydata = [10, 20, 30, 40];
            const mydataHalf = [5, 10, 20, 7];

            //var ctx = document.getElementsByClassName("myChart");
            var ctx = document.getElementById("myChart");

            var mixedChart = {
                type: 'bar',
                //labels: [
                //    '1', '2', '3', '4'
                //],
                labels : response.weeks,
                datasets: [
                    {
                        label: 'Bar Dataset',
                        //data: mydata,
                        data : response.data,
                        backgroudColor: 'rgba(256, 0, 0, 0.1)'

                    },
                    {
                        label: 'Line Dataset',
                        //data: mydataHalf,
                        data: response.data,
                        backgroundColor: 'transparent',
                        borderColor: 'skyblue',
                        type: 'line'
                    }
                ]
            };
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: mixedChart,
                options: {
                    // 차트 크기 조절을 위해 차트 옵션에 responsive: false 를 추가시켜 준다.
                    //responsive: false,   // false to resize a canvas
                }
            });

            /* mixed chart - End */

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
