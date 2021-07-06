
var ctx = document.getElementById('ComptaChart').getContext('2d');

var dashboardChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: datesTransform,
        datasets: [{
            data: dataAndDates,
            backgroundColor: '#A896CF',
            borderWidth: 6,
            borderColor: '#8B73BF',
            tension: 0.3,
            fill: false,
        }]
    },
    options: {
        elements: {
            point:{
                radius: 3,
                pointHitRadius:3,
            }
        },
        tooltips: {
            enabled: true,
            backgroundColor:'#2C2046',
            titleAlign:'center',
            bodyAlign:'center',
            bodyFontSize: 20,
            mode: 'index',
            axis: 'y',
            callbacks: {
                title: function() {}
               },
       },
        legend: {
            display:false
        },
        responsive: true,
        maintainAspectRatio: false,
    }
});