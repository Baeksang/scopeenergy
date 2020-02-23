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

        createCompleteJobsChart: function(response) {

            /* bar chart - Start */
            /* 현재 발전량  */
            var ctx = document.getElementById('myGaugeChart');
            var myGaugeChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                    datasets: [{
                        label: "Population (millions)",
                        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                        data: [2478,5267,734,784,433]
                    }]
                },
                options: {
                    title: {
                        //display: true,
                        display: false,
                        text: 'Predicted world population (millions) in 2050'
                    },
                    circumference: Math.PI,
                    rotation: Math.PI,
                    cutoutPercentage: 70
                }

            });

            /* 금일 발전량 */
            var ctx = document.getElementById('myTodayPowerChart');
            var myTodayPowerChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                    datasets: [{
                        label: "Population (millions)",
                        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                        data: [2478,5267,734,784,433]
                    }]
                },
                options: {
                    title: {
                        //display: true,
                        display: false,
                        text: 'Predicted world population (millions) in 2050'
                    },
                    circumference: Math.PI,
                    rotation: Math.PI,
                    cutoutPercentage: 70
                }

            });

            /* 변환효율 */
            var ctx = document.getElementById('myTRatioChart');
            var myTRatioChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                    datasets: [{
                        label: "Population (millions)",
                        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                        data: [2478,5267,734,784,433]
                    }]
                },
                options: {
                    title: {
                        //display: true,
                        display: false,
                        text: 'Predicted world population (millions) in 2050'
                    },
                    circumference: Math.PI,
                    rotation: Math.PI,
                    cutoutPercentage: 70
                }

            });
        }
    };

    charts.init();

} )( jQuery );
