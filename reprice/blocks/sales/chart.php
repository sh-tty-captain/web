<canvas id="chart"></canvas>'

<script>
  var ctx = document.getElementById('chart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Dec 16', 'Dec 21', 'Dec 26', 'Dec 31', 'Jan 5', 'Jan 10'],
      datasets: [{
        label: 'Revenue',
        data: [12, 16, 20, 15, 10, 18],
        backgroundColor: [
          '#D6DDF8',
          '#D6DDF8',
          '#D6DDF8',
          '#D6DDF8',
          '#D6DDF8',
          '#D6DDF8'
        ],
        hoverBackgroundColor: [
          'rgba(214, 221, 248, .6)',
          'rgba(214, 221, 248, .6)',
          'rgba(214, 221, 248, .6)',
          'rgba(214, 221, 248, .6)',
          'rgba(214, 221, 248, .6)',
          'rgba(214, 221, 248, .6)',
          'rgba(214, 221, 248, .6)'
        ],
      }, {
        label: 'Profit',
        data: [6, 10, 12, 5, 4, 3],
        backgroundColor: [
          '#1BB12A',
          '#1BB12A',
          '#1BB12A',
          '#1BB12A',
          '#1BB12A',
          '#1BB12A'
        ],
        hoverBackgroundColor: [
          'rgba(27, 177, 42, .6)',
          'rgba(27, 177, 42, .6)',
          'rgba(27, 177, 42, .6)',
          'rgba(27, 177, 42, .6)',
          'rgba(27, 177, 42, .6)',
          'rgba(27, 177, 42, .6)',
          'rgba(27, 177, 42, .6)'
        ],
      }, {
        label: 'Loss',
        data: [-1, -0.5, -3, -1, -0.5, -0.5],
        backgroundColor: [
          '#E02222',
          '#E02222',
          '#E02222',
          '#E02222',
          '#E02222',
          '#E02222'
        ],
        hoverBackgroundColor: [
          'rgba(224, 34, 34, .6)',
          'rgba(224, 34, 34, .6)',
          'rgba(224, 34, 34, .6)',
          'rgba(224, 34, 34, .6)',
          'rgba(224, 34, 34, .6)',
          'rgba(224, 34, 34, .6)'
        ]
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      },
      legend : {
        display: false
      },
    }
  });
</script>
