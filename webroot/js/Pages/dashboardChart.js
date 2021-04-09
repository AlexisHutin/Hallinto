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

var ctx = document.getElementById('myChart').getContext('2d');

var amountData = [];
amountData = document.getElementById('myChart').dataset.amounts;

var count = 0;
for(var i = 0; i < amountData.length; ++i){
    if(amountData[i] == 2)
        count++;
}

console.log(amountData);
console.log(count);


var gradientStroke = ctx.createLinearGradient(0, 100, 0, 500);
gradientStroke.addColorStop(0, "#A896CF");
gradientStroke.addColorStop(1, "#E2DCEF");

var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels:amoutData.length(),
        datasets: [{
            data: amountData,
            backgroundColor: gradientStroke,
            borderWidth: 1,
            pointRadius: 4,
            borderWidth: 0,

        }]
    },
    options: {
        legend: {
            display:false
        },
        scales: {
            yAxes: [{
                display:true
            }],
            xAxes: [{
                display:true
            }]
        },
         maintainAspectRatio: false,
    }
});