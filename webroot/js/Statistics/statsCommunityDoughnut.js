var gradient = ctx.createLinearGradient(0, 0, 0, 300);
gradient.addColorStop(0, '#CF7255');   
gradient.addColorStop(1, '#6E50AF');

var ctx = document.getElementById("communityChart1");
var myPieChart = new Chart(ctx,{
  type: 'doughnut',
  
  data: {
    datasets: [{
      data: [20,80],
      backgroundColor: [gradient,'rgb(225,229,234)']
    }],

  },
  options: {
    cutoutPercentage:70,
    tooltips: {
      enabled: false,
    },
    plugins: {
      doughnutlabel: {
        labels: [{
          text: '550',
          font: {
            size: 20,
            weight: 'bold'
          }
        }, {
          text: 'total'
        }]
      }
    }
  }
});

var ctx = document.getElementById("communityChart2");
var myPieChart = new Chart(ctx,{
  type: 'doughnut',
  
  data: {
    datasets: [{
      data: [80,20],
      backgroundColor: [gradient,'rgb(225,229,234)']
    }],

  },
  options: {
    cutoutPercentage:70,
    tooltips: {
      enabled: false,
    },
    plugins: {
      doughnutlabel: {
        labels: [{
          text: '550',
          font: {
            size: 20,
            weight: 'bold'
          }
        }, {
          text: 'total'
        }]
      }
    }
  }
});