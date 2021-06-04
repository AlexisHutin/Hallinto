
var ctx = document.getElementById('ComptaChart').getContext('2d');

var dashboardChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: data,
        datasets: [{
            data: data,
            backgroundColor: '#A896CF',
            // point:0,
             pointRadius: 1,
            // pointBackgroundColor:'#CF7255',
            // pointBorderWidth:0,
            borderWidth: 4,
            borderColor: '#8B73BF',
            tension: 0.3,
            fill: false,
        }]
    },
    options: {
        elements: {
            point:{
                radius: 0
            }
        },
        tooltips: {
            enabled: true
       },
        legend: {
            display:false
        },
        scales: {
            yAxes: [{
                display:true,
                ticks: {
                    display: true
                },
                color:'#ffffff'
            }],
            xAxes: [{
                display:false,
                ticks: {
                    display: true
                }
            }]
        },
        responsive: true,
        maintainAspectRatio: false,
    }
});