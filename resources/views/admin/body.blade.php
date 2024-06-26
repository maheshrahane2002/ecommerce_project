<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #f8f9fa; /* Assuming this is the background color you want */
        }
        .container-fluid {
            flex: 1;
        }
        section {
            background-color: #ffffff; /* Match this with your current section color */
        }
    </style>
</head>
<body>
<h2 class="h5 no-margin-bottom">Dashboard</h2>
<br>
    <br>

<section class="no-padding-top no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="icon-user-1"></i></div><strong>Total Clients</strong>
            </div>
            <div class="number dashtext-1">{{$user}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="icon-contract"></i></div><strong>Total Products</strong>
            </div>
            <div class="number dashtext-2">{{$product}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Total Orders</strong>
            </div>
            <div class="number dashtext-3">{{$order}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="statistic-block block">
          <div class="progress-details d-flex align-items-end justify-content-between">
            <div class="title">
              <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Total Delivered</strong>
            </div>
            <div class="number dashtext-4">{{$delivered}}</div>
          </div>
          <div class="progress progress-template">
            <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
<br>

<!-- Bar Graph and Line Chart -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <canvas id="barChart"></canvas>
    </div>
    <div class="col-md-6">
      <canvas id="lineChart"></canvas>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const barCtx = document.getElementById('barChart').getContext('2d');
    const lineCtx = document.getElementById('lineChart').getContext('2d');

    const barChart = new Chart(barCtx, {
      type: 'bar',
      data: {
        labels: ['Total Clients', 'Total Products', 'Total Orders', 'Total Delivered'],
        datasets: [{
          label: 'Statistics',
          data: [{{$user}}, {{$product}}, {{$order}}, {{$delivered}}],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)'
          ],
          borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)'
          ],
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

    const lineChart = new Chart(lineCtx, {
      type: 'line',
      data: {
        labels: ['Total Clients', 'Total Products', 'Total Orders', 'Total Delivered'],
        datasets: [{
          label: 'Statistics',
          data: [{{$user}}, {{$product}}, {{$order}}, {{$delivered}}],
          fill: false,
          borderColor: 'rgba(75, 192, 192, 1)',
          tension: 0.1
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
  });
</script>

</body>
</html>
