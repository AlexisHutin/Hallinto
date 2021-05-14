
selectedRowValues = function(transaction,results)
{
     for(var i = 0; i < results.rows.length; i++)
     {
         var row = results.rows.item(i);
         alert(row['number']);
         alert(row['name']);                 
     }
};

var ctx = document.getElementById('dashboardChart').getContext('2d');

var gradient = ctx.createLinearGradient(0, 0, 0, 150);
gradient.addColorStop(0, '#A896CF');   
gradient.addColorStop(1, '#E2DCEF');

var dashboardChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: data,
        datasets: [{
            data: data,
            backgroundColor: gradient,
            pointRadius: 0,
            borderWidth: 2,
            borderColor: '#8B73BF',
            tension: 0.3

        }]
    },
    options: {
        legend: {
            display:false
        },
        scales: {
            yAxes: [{
                display:false,

            }],
            xAxes: [{
                display:false
            }]
        },
        maintainAspectRatio: false,
        responsive: true,
    }
});