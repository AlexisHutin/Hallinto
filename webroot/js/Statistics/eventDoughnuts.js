// var gradient = ctx.createLinearGradient(0, 0, 0, 300);
// gradient.addColorStop(0, '#CF7255');   
// gradient.addColorStop(1, '#6E50AF');

var ctx = document.getElementById("eventChart1");
var myPieChart = new Chart(ctx,{
  type: 'doughnut',
  
  data: {
    datasets: [{
      data: [5, 95],
      backgroundColor: [gradient,'rgb(225,229,234)']
    }],

  },
  options: {
    cutoutPercentage:40,
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

var ctx = document.getElementById("eventChart2");
var myPieChart = new Chart(ctx,{
  type: 'doughnut',
  
  data: {
    datasets: [{
      data: [50, 50],
      backgroundColor: [gradient,'rgb(225,229,234)']
    }],

  },
  options: {
    cutoutPercentage:40,
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

var ctx = document.getElementById("eventChart3");
var myPieChart = new Chart(ctx,{
  type: 'doughnut',
  
  data: {
    datasets: [{
      data: [35, 65],
      backgroundColor: [gradient,'rgb(225,229,234)']
    }],

  },
  options: {
    cutoutPercentage:40,
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

var ctx = document.getElementById("eventChart4");
var myPieChart = new Chart(ctx,{
  type: 'doughnut',
  
  data: {
    datasets: [{
      data: [10, 90],
      backgroundColor: [gradient,'rgb(225,229,234)']
    }],

  },
  options: {
    cutoutPercentage:40,
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