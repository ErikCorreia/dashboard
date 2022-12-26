<main id="page">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-6 h-100 p-3">
                <div class="bg-white shadow rounded">
                    <canvas id="myChartA"></canvas>
                </div>
            </div>
            <div class="col-lg-6 h-100 p-3">
                <div class="bg-white shadow rounded">
                    <canvas id="myChartB"></canvas>
                </div>
            </div>
            <div class="col-lg-4 h-100 p-3">
                <div class="bg-white shadow rounded">
                    <canvas id="myChartC"></canvas>
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChartA');
  const ctx3 = document.getElementById('myChartB');
  const ctx2 = document.getElementById('myChartC');


  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });

  new Chart(ctx3, {
    type: 'line',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
