<?php
$page = 'index';
include 'komponen/header.php';
?>

<body onload="startTime()">
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->\
      <?php
      include 'komponen/aside.php';
      ?>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php
        include 'komponen/navbar.php';
        ?>
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-lg-8 mb-4 order-0">
                <div class="card">
                  <div class="d-flex align-items-end row" style="height: 100%;">
                    <div class="col-sm-7">
                      <div class="card-body">
                        <h3 class="card-title text-primary">
                          <script>
                            var today = new Date()
                            var curHr = today.getHours()
                            if (curHr < 12) {
                              document.write('🌄 Good morning, ');
                            } else if (curHr < 18) {
                              document.write('🌞 Good afternoon, ');
                            } else {
                              document.write('🌃 Good evening, ');
                            }
                          </script>
                          <?php echo $_SESSION['smarthome_name']; ?>
                        </h3>
                        <p class="mb-4" id="weather-desc">

                        </p>
                      </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                      <div class="card-body pb-0 px-0 px-md-4" style="height: 100%;">
                        <img id="weather-illustration" src="../assets/img/illustrations/Dog walking-cuate.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/Dog walking-cuate.png" data-app-light-img="illustrations/Dog walking-cuate.png" style="max-height: 100%;" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 col-sm-12 order-sm-1 order-0">
                <div class="row" style="height: 100%;">
                  <div class="col-lg-12 col-md-12 mb-4">
                    <div class="card" style="height: 100%;">
                      <div class="card-body">
                        <div class="d-flex mb-4">
                          <div class=" me-3">
                            <img src="../assets/img/icons/sun.png" alt="User" width="80px" id="weather-icon" />
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <small class="text-muted d-block mb-1">Pracimantoro, Wonogiri</small>
                              <h6 class="mb-0" id="weather-info"></h6>
                            </div>
                            <div class="user-progress d-flex align-items-center gap-1">
                              <h3 class="mb-0" id="temperature-info"></h3>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Energy Comsumption -->
              <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                <div class="card">
                  <div class="row row-bordered g-0">
                    <div class="col-md-12">
                      <h5 class="card-header m-0 me-2">Energy Consumption</h5>
                      <div class="card">
                        <div class="card-header">
                          <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item ">
                              <button type="button" class="nav-link active btn-sm" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-home" aria-controls="navs-pills-top-home" aria-selected="true">
                                Day
                              </button>
                            </li>
                            <li class="nav-item">
                              <button type="button" class="nav-link btn-sm" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile" aria-selected="false">
                                Week
                              </button>
                            </li>
                            <li class="nav-item">
                              <button type="button" class="nav-link btn-sm" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-messages" aria-controls="navs-pills-top-messages" aria-selected="false">
                                Month
                              </button>
                            </li>
                            <!-- <li class="nav-item">
                              <button type="button" class="nav-link btn-sm" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-year" aria-controls="navs-pills-top-year" aria-selected="false">
                                Year
                              </button>
                            </li> -->
                          </ul>
                        </div>
                        <div class="card-body px-0">
                          <div class="tab-content p-2">
                            <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                              <div id="energyPerHour"></div>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                              <div id="energyPerWeek"></div>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-top-messages" role="tabpanel">
                              <div id="energyPerMonth"></div>
                            </div>
                            <div class="tab-pane fade" id="navs-pills-top-year" role="tabpanel">
                              Year
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <!--/ Total Revenue -->
              <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                <div class="row">
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <i class="menu-icon tf-icons bx bx-bulb text-white bg-success p-2 rounded"></i>
                          </div>
                        </div>
                        <span class="d-block mb-1">Active Devices</span>
                        <h2 class="card-title text-nowrap mb-2" id="active-devices">0</h2>

                      </div>
                    </div>
                  </div>
                  <div class="col-6 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                          <div class="avatar flex-shrink-0">
                            <i class="menu-icon tf-icons bx bx-bulb text-white bg-secondary p-2 rounded"></i>
                          </div>
                        </div>
                        <span class="d-block mb-1">Inactive Devices</span>
                        <h2 class="card-title text-nowrap mb-2" id="inactive-devices">0</h2>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 mb-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                          <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                              <h5 class="text-nowrap mb-4">Electricity Bills this Month</h5>
                              <!-- <h5 class="bg-label-warning rounded-pill mb-2 text-center">
                                <script>
                                  var month = new Date();
                                  var curMonth = month.getMonth();
                                  var monthNames = [
                                    "January", "February", "March", "April", "May", "June",
                                    "July", "August", "September", "October", "November", "December"
                                  ];
                                  var monthName = monthNames[curMonth];
                                  document.write(monthName);
                                </script>
                              </h5> -->
                            </div>
                            <div class="mt-sm-auto">
                              <h3 class="mb-4" id="total-cost"></h3>
                              <h5 class="bg-label-warning rounded-pill mb-2 text-center" id="total-kwh">

                              </h5>
                            </div>
                          </div>
                          <div id="profileReportChart"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>



          <!-- Footer -->
          <?php
          include 'komponen/footer.php';
          ?>
          <!-- / Footer -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <!-- Time -->
  <script src="scripts/time.js"></script>
  <script src="scripts/dashboard.js"></script>





  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.js"></script>

  <script>
    function fetchData() {
      axios
        .get('https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/pracimantoro/today?unitGroup=metric&key=6VQTK2ECSCGQS9HMCALM8QDV4&contentType=json')
        .then(response => {
          const data = response.data;

          // Mengambil data suhu
          const temperature = data.currentConditions.temp;

          // Mengambil data kondisi cuaca
          const weatherCondition = data.currentConditions.conditions;

          const icon = data.currentConditions.icon;

          const description = data.days[0].description;

          const weatherDesc = document.getElementById('weather-desc');
          weatherDesc.innerHTML = description;

          const weather = document.getElementById('weather-info');
          weather.innerHTML = weatherCondition;

          const temp = document.getElementById('temperature-info');
          temp.innerHTML = temperature + '°C';

          const iconImg = document.getElementById('weather-icon');
          let iconSource = '';

          console.log(icon);

          const illustrationImg = document.getElementById('weather-illustration');
          let illustrationSource = '';

          if (icon === 'snow') {
            iconSource = '../assets/img/icons/snow.png';
            illustrationSource = '../assets/img/illustrations/rain2.png';
          } else if (icon === 'rain') {
            iconSource = '../assets/img/icons/rain.png';
            illustrationSource = '../assets/img/illustrations/rain2.png';
          } else if (icon === 'fog') {
            iconSource = '../assets/img/icons/fog.png';
            illustrationSource = '../assets/img/illustrations/fog2.png';
          } else if (icon === 'wind') {
            iconSource = '../assets/img/icons/wind.png';
            illustrationSource = '../assets/img/illustrations/wind2.png';
          } else if (icon === 'cloudy') {
            iconSource = '../assets/img/icons/cloudy.png';
            illustrationSource = '../assets/img/illustrations/Dog walking-cuate.png';
          } else if (icon === 'partly-cloudy-day') {
            iconSource = '../assets/img/icons/partly-cloudy-day.png';
            illustrationSource = '../assets/img/illustrations/Dog walking-cuate.png';
          } else if (icon === 'partly-cloudy-night') {
            iconSource = '../assets/img/icons/partly-cloudy-night.png';
            illustrationSource = '../assets/img/illustrations/night.png';
          } else if (icon === 'clear-day') {
            iconSource = '../assets/img/icons/clear-day.png';
            illustrationSource = '../assets/img/illustrations/sun.png';
          } else if (icon === 'clear-night') {
            iconSource = '../assets/img/icons/clear-night.png';
            illustrationSource = '../assets/img/illustrations/night.png';
          } else {
            iconSource = '../assets/img/icons/default.png'; // Gambar default jika tidak ada ikon yang cocok
            illustrationSource = '../assets/img/illustrations/Dog walking-cuate.png';
          }

          iconImg.src = iconSource;
          illustrationImg.src = illustrationSource;
        })
        .catch(error => {
          console.error(error);
        });
    }

    // Panggil fetchData() saat halaman pertama kali dimuat
    fetchData();

    // Refresh data setiap 10 menit (600000 milidetik)
    setInterval(fetchData, 600000);

    function totalDevices() {
      axios.get('http://localhost:3000/api/lamp/totalDeviceStatus')
        .then(response => {
          const {
            total_on_devices,
            total_off_devices
          } = response.data;
          document.getElementById('active-devices').innerHTML = total_on_devices;
          document.getElementById('inactive-devices').innerHTML = total_off_devices;
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    totalDevices();

    function energyConsumption() {
      axios.get('http://localhost:3000/api/lamp/getEneryConsumption')
        .then(response => {
          const {
            total_cost,
            total_kwh,
            total_duration
          } = response.data;
          document.getElementById('total-cost').innerHTML = 'Rp ' + Number(total_cost).toFixed(2);
          document.getElementById('total-kwh').innerHTML = Number(total_kwh).toFixed(2) + " kwh";
        })
        .catch(error => {
          console.error('Error:', error);
        });
    }

    energyConsumption();
  </script>

</body>

</html>