getData = function(val)
{
    db.transaction(function(transaction) {
          transaction.executeSql('SELECT * FROM `accounting_entries`',[parseInt(val)], selectedRowValues, errorHandler);

    });
};
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

// var data = [];
// data = document.getElementById('dashboardChart').dataset.amounts;

console.log(data);
console.log(data.length);

const labels = [];


var dashboardChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: data,
        datasets: [{
            data: data,
            backgroundColor: '#A896CF',
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
                min: -100,
                max: 100
            }],
            xAxes: [{
                display:false
            }]
        },
         maintainAspectRatio: false,
    }
});