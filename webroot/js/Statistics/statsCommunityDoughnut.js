var ctx = document.getElementById("communityChart1");
var myChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [],
    datasets: [{
      label: '# of Tomatoes',
      data: [12, 19, 3, 5],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
      ],
      borderWidth: 1
    }]
  },

});


var ctx2 = document.getElementById("communityChart2");
var myChart2 = new Chart(ctx2, {
  type: 'doughnut',
  data: {
    labels: [],
    datasets: [{
      label: '# of Tomatoes',
      data: [12, 19, 3, 5],
      backgroundColor: [
        'rgba(255, 99, 132, 0.5)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)'
      ],
      borderWidth: 1
    }]
  },

});
