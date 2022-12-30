<main id="page">
    <div class="container">
      <section class="my-3">
        <div class="bg-white rounded shadow-sm px-4 py-3">
          <h5 class="section-title m-0">Acessos</h5>
        </div>
        <div class="row mt-3">
            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <div class="access-card bg-white p-4">
                    <div class="card-header">
                      <span class="h4 m-0">1565</span>
                      <span class="bold text-secondary ms-3">Views</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <div class="access-card bg-white p-4">
                    <div class="card-header">
                      <span class="h4 m-0">155</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <div class="access-card bg-white p-4">
                    <div class="card-header">
                      <span class="h4 m-0">155</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-6 mb-3">
                <div class="access-card bg-white p-4">
                    <div class="card-header">
                      <span class="h4 m-0">155</span>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="my-3">
        <div class="bg-white rounded shadow-sm position-relative px-4 py-3">
          <h5 class="section-title m-0">Analytics</h5>
          <a href="" class="nav-link bold text-uppercase position-absolute" style="right: 30px; top: 50%; transform: translateY(-50%)">mais</a>
        </div>
        <div class="row mt-3">
            <div class="col-lg-8">
                <div class="bg-white shadow rounded">
                    <div id="chart-a"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white shadow rounded">
                    <div id="chart-b"></div>
                </div>
            </div>
        </div>
      </section>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
 var options = {
          series: [{
          name: 'Website Blog',
          type: 'column',
          data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
        }, {
          name: 'Social Media',
          type: 'line',
          data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16]
        }],
          chart: {
          height: 350,
          type: 'line',
        },
        stroke: {
          width: [0, 4]
        },
        title: {
          text: 'Traffic Sources'
        },
        dataLabels: {
          enabled: true,
          enabledOnSeries: [1]
        },
        labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
        xaxis: {
          type: 'datetime'
        },
        yaxis: [{
          title: {
            text: 'Website Blog',
          },
        
        }, {
          opposite: true,
          title: {
            text: 'Social Media'
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart-a"), options);
        chart.render();


        var options2 = {
          series: [{
          name: 'series1',
          data: [31, 40, 28, 51, 42, 109, 100]
        }, {
          name: 'series2',
          data: [11, 32, 45, 32, 34, 52, 41]
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          type: 'datetime',
          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        };


var chart2 = new ApexCharts(document.querySelector("#chart-b"), options2);

chart2.render();
</script>
