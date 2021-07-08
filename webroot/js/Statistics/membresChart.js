
var ctx = document.getElementById('MembresChart').getContext("2d");

var gradient = ctx.createLinearGradient(0, 0, 0, 300);
gradient.addColorStop(0, '#CF7255');   
gradient.addColorStop(1, '#6E50AF');

var dashboardChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: pastMonths,
        datasets: [{
            data: [1,2,1,0,1,2],
            barThickness:25,
            borderWidth: 0,
            backgroundColor: gradient,
        }]
    },
    options: {
        legend: {
            display:false
        },
        scales: {
            yAxes: [{
                display:false,
                ticks: {
                    display: false
                },
                color:'#ffffff'
            }],
            xAxes: [{
                display: true,

                gridLines: {
                    display: false ,
                    color: "#FFFFFF"
                },
                ticks:{
                    display:true
                }

            }]
        },



    }
});