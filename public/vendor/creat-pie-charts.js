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
            var ctx = document.getElementById('myPieChart');
            var myPieChart = new Chart(ctx, {
                type: 'pie',
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
                    }
                }

            });
        }
    };

    charts.init();

} )( jQuery );
