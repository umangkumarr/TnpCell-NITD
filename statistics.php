<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="statisticstyle.css">
<!-- Site Metas -->
<title>T&P Cell, NIT Delhi</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="images/download.png" type="image/x-icon" />

<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="js/modernizer.js"></script>
<script src="js/jquery.min.js"></script>

<body>

  <!-- Header -->
  <?php include_once './utility/navbar.php'; ?>


  

  <!-- ------------- -->


  <div class="intro-banner row" style="position:relative; margin-top:50px;">
    <!-- <div class="col-lg-6 col-sm-12 status"> -->
      <!-- <h1 style="padding-bottom: 2%;">Placement Statistics of NIT Delhi over the years</h1>
      <a role="button" href="#myFirstChart" class="btn btn-primary">Eligible Students for placements for 2022-23</a>
      <h1 style="padding-top: 1%;"></h1>
      <a role="button" href="#avgPackage2223" class="btn btn-primary">Average package statistics for 2022-23</a>
      <h1 style="padding-top: 1%;"></h1>
      <a role="button" href="#avgPackage2223" class="btn btn-primary">Average Packages throughout the years</a> -->

    <!-- </div> -->
    <!-- <div class="col-lg-6 col-sm-12">
      <img class="vimg" src="images/imgbanner.png" alt="vector">
    </div> -->

    <div class="container align-center" style="text-align: center;justify-content: center; padding-top:50px;">
      <div class="row align-center start"
        style="margin-top: -2%; margin-right: auto; margin-left: auto;justify-content: center;">
        <div class="grid-x grid-padding-x" style="width: 100%;">
          <div class="large-2 medium-2 hide-for-small-only"></div>
          <div class="large-8 medium-8 small-12">
            <h3 class="headings" id="stathead" style="color: #992940;">
              Placement Statistics
            </h3>


            <h4 style="color: #992940;">
              Batch 2023*
            </h4>

            <!-- <h5 style="text-align: center;color: #eea412; font-weight: bolder;">
            PLACEMENT STATISTICS FOR 2020 PASSING BATCH
          </h5> -->
            <div style="justify-content: center;display: flex;">
              <table class="paras" style="box-shadow: 0.5px 0.5px 0.5px #A9A9A9;margin-bottom: 30px;    width: 80%;">
                <thead>
                  <tr style="text-align: left;">
                    <td align="center" width="70px" style="text-align: center; color:black;">
                      Highest Package
                    </td>
                    <td align="center" width="20px" style="text-align: center; color:black;">
                      Average Package
                    </td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td align="center">82 LPA</td>
                    <td align="center">17.72 LPA</td>
                  </tr>
                </tbody>
              </table>
              <br>
            </div>
            <br>

            <h5 align="center" style="color: #992940;">
              Consolidated Statistics
            </h5>
            <div align="center">
              <table class="paras" style="width: 80%;">
                <tbody>
                  <tr></tr>
                  <tr style="background: #e0dddd;">
                    <td>
                      Median Package
                    </td>
                    <td align="center">17.35</td>
                  </tr>
                  <tr>
                    <td>
                      Total Offers (Full time + Internship)
                    </td>
                    <td align="center">161</td>
                  </tr>

                  <tr style="background: #e0dddd;">
                    <td>
                      Percentage of registered students placed
                    </td>
                    <td align="center">88.3</td>
                  </tr>
                </tbody>
              </table>
              <br>
            </div>
            <br>
            <hr>

          </div>
        </div>
      </div>
    </div>

  </div>
  <div style="width:90%; margin: auto;">
    <div class="donut-chart row">
      <div class="eligible col-lg-6 col-sm-12">
        <h1 style="padding:4% 0 0 6%;">Eligible Students for Placements 2022-23</h1>
        <div>
          <!-- Doughnut chart canvas -->
          <canvas id="myFirstChart"></canvas>
        </div>
      </div>
      <div class="Dough-desc col-lg-6 col-sm-12">
        <strong><h1 style="padding:0 0 4% 6%; margin-bottom:4%;">Average Package for B.Tech 2022-23</h1></strong>
        <canvas id="avgPackage2223"></canvas>
      </div>
    </div>
  </div>


  <div style="width:90%; margin:auto; padding-bottom:50px; padding-top: 50px;">
    <div class="yearwise" style="display:flex; flex-direction:column; gap:10px;">
      <h1 style="margin:auto;">Average Packages Throughout The Years</h1>
      <div class="yChart" style="margin:auto;">
        <canvas style="padding-left: 2%;" id="yearChart"></canvas>
      </div>
    </div>
  </div>

  <!-- Doughnut Chart Begin -->
  <script src="
https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js
"></script>
  <script>
    const ctx = document.getElementById('myFirstChart').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["CSE", "ECE", "EEE"],
        datasets: [{
          lable: "placement",
          data: [60, 46, 49],
          backgroundColor: [
            'rgb(255,99,132)',
            'rgb(54,162,235)',
            'rgb(255,205,86)'
          ],
          hoverOffset: 4
        }],

      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        // scales:{
        //     y: {
        //         beginAtZero: true
        //     }
        // }
      }
    });
  </script>
  <!-- Doughnut Chart end -->


  <script src="
https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js
"></script>

  <!-- bar chart start -->
  <script>
    const ctx21 = document.getElementById('avgPackage2223').getContext('2d');
    const avg21 = new Chart(ctx21, {
      type: 'bar',
      data: {
        labels: ["Overall", "CSE", "ECE", "EEE"],
        datasets: [{
          label: 'Average Package',
          data: [17.72, 18.32, 16.25, 18.11],
          borderColor: 'rgb(0, 140, 255)',
          backgroundColor: 'rgba(87, 179, 255, 0.53)',
          borderWidth: 2,
          borderRadius: 8,
          yAxisID: 'y',
          hoverOffset: 4
        },
        {
          label: 'Placement Percentage',
          data: [85.81, 98.33, 76.09, 79.59],
          borderColor: 'rgb(255, 0, 72)',
          backgroundColor: 'rgba(255, 0, 72, 0.397)',
          borderWidth: 2,
          borderRadius: 8,
          yAxisID: 'y2',
          hoverOffset: 4
        }]
      },
      options: {
        scales: {
          y: {
            position: 'left',
            beginAtZero: true
          },
          y2: {
            position: 'right',
            beginAtZero: true,
            grid: {
              drawOnChartArea: false
            }
          }
        }
      }
    })
  </script>
  <!-- bar chart average package end -->

  <!-- bar chart start -->
  <script>
    const ctd = document.getElementById('yearChart').getContext('2d');
    const avg = new Chart(ctd, {
      type: 'bar',
      data: {
        labels: [ "2018-19", "2019-20", "2020-21", "2021-22", "2022-23"],
        datasets: [{
          label: 'Overall',
          data: [ 8.2, 8.8, 9.5, 17.14, 17.72],
          borderColor: 'rgb(255,99,132)',
          backgroundColor: 'rgb(255,99,132)',
          borderWidth: 2,

          yAxisID: 'y',
          hoverOffset: 4
        },
        {
          label: 'CSE',
          data: [ 9.2, 11.2, 12.2, 21.43, 18.32],
          borderColor: 'rgb(54,162,235)',
          backgroundColor: 'rgb(54,162,235)',
          borderWidth: 2,

          hoverOffset: 4
        },
        {
          label: 'ECE',
          data: [ 7.1, 9, 8.4, 16.6, 16.25],
          borderColor: 'rgb(255,205,86)',
          backgroundColor: 'rgb(255,205,86)',
          borderWidth: 2,

          hoverOffset: 4
        },
        {
          label: 'EEE',
          data: [ 7.2, 6.4, 8.1, 10.81, 18.11],
          borderColor: 'rgb(75, 192, 192)',
          backgroundColor: 'rgb(75, 192, 192)',
          borderWidth: 2,

          hoverOffset: 4
        }
        ]
      },
      options: {
        scales: {
          y: {
            position: 'left',
            beginAtZero: true
          },

        }
      }
    })
  </script>

  <!-- footer -->
  <?php include_once './utility/footer.php'; ?>

  <!-- copyrights -->
  <?php include_once './utility/copyrights.php'; ?>

  <!-- ALL JS FILES -->
  <script src="js/all.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>

</body>



</html>