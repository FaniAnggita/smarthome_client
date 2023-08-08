<?php
$page = 'device';
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
              <div class="col-xl-12">
                <div class="nav-align-top mb-4">
                  <ul class="nav nav-tabs nav-fill" role="tablist">
                    <li class="nav-item">
                      <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true">
                        <i class="tf-icons bx bx-home"></i> Home
                      </button>
                    </li>
                    <li class="nav-item">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false">
                        <i class="tf-icons bx bx-chat"></i> Living Room
                      </button>
                    </li>
                    <li class="nav-item">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages" aria-selected="false">
                        <i class="tf-icons bx bx-water"></i> Bath Room
                      </button>
                    </li>
                    <li class="nav-item">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-dining" aria-controls="navs-justified-dining" aria-selected="false">
                        <i class="tf-icons bx bx-table"></i> Dining Room
                      </button>
                    </li>
                    <li class="nav-item">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-bed" aria-controls="navs-justified-bed" aria-selected="false">
                        <i class="tf-icons bx bx-bed"></i> Bed Room
                      </button>
                    </li>
                    <li class="nav-item">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-kitchen" aria-controls="navs-justified-kitchen" aria-selected="false">
                        <i class="tf-icons bx bx-cookie"></i> Kitchen
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Home -->
                    <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                      <div class="row">
                        <!-- Light interior -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="card">
                            <h5 class="card-header">Interior Lights</h5>
                            <div class="card-body">
                              <p class="mb-4">Display main interior smart
                                lights all room </p>
                              <!-- Connections -->
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-warning"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Living Room</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-warning"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Dining Room</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-secondary"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Bath Room</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-warning"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Kitchen</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-warning"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Bed Room</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>
                        <!-- Light exterior -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="card">
                            <h5 class="card-header">Exterior Lights</h5>
                            <div class="card-body">
                              <p class="mb-4">Display main exterior smart
                                lights</p>
                              <!-- Connections -->
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-warning"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Front door</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-warning"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Garage</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-secondary"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Garden</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-warning"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Gate</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- appliances -->
                        <div class="col-lg-4 col-md-6 col-sm-12">
                          <div class="card">
                            <h5 class="card-header">Appliances</h5>
                            <div class="card-body">
                              <p class="mb-4">Display main appliances</p>
                              <!-- Connections -->

                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-soap fa-2xl text-primary"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Washing machine</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-tv fa-2xl text-secondary"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">TV</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-water fa-2xl text-danger"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Water Heater</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="d-flex mb-4">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-wind fa-2xl text-primary"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">AC</h6>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Living room -->
                    <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <!-- Smart Lamp -->
                          <div class="card mb-4">
                            <div class="card-header">
                              <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                  <i class="fa-solid fa-lightbulb fa-2xl text-warning"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Smart Lamp</h6>
                                    <small class="text-success">Online</small>
                                  </div>
                                  <div class="col-3 text-end">
                                    <form class="form-check form-switch" id="lampForm">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" id="toggleCheckbox" name="action" value="toggle" />
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="m-0" />
                            <div class="card-body">
                              <div class="mb-3 row">
                                <label for="smart-lamp-color-mode" class="col-md-4 col-form-label">Work Mode</label>
                                <div class="col-md-8">
                                  <select id="smart-lamp-color-mode" class="form-select">
                                    <option>White</option>
                                    <option value="1">Color</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="input-smart-lamp-color" style="display: none;">
                                <label for="smart-lamp-color" class="col-md-4 col-form-label">Color</label>
                                <form class="col-md-8" id="colorForm">
                                  <input class="form-control" type="color" id="smart-lamp-color" name="color" />
                                </form>
                              </div>
                              <div class="mb-3 row">
                                <label for="html5-range" class="col-md-4 col-form-label">Bright</label>
                                <form class="col-md-8" id="brightForm">
                                  <input type="range" class="form-range mt-3" id="bright" name="bright" min="0" max="1000" />
                                </form>
                              </div>
                              <!-- Schedule -->
                              <div class="mb-3 row">
                                <label for="smart-lamp-on" class="col-md-4 col-form-label">Time On</label>
                                <div class="col-md-8">
                                  <select id="smart-lamp-on" class="form-select">
                                    <option>Disable</option>
                                    <option value="1">Enable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="time-input-smart-lamp-on" style="display: none;">
                                <label for="html5-time-input" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="smart-lamp-off" class="col-md-4 col-form-label">Time Off</label>
                                <div class="col-md-8">
                                  <select id="smart-lamp-off" class="form-select">
                                    <option>Disable</option>
                                    <option value="1">Enable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="time-input-smart-lamp-off" style="display: none;">
                                <label for="html5-time-input" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                                </div>
                              </div>
                              <!-- End schedule -->
                            </div>
                          </div>
                          <!-- Smart Vacum -->
                          <div class="card mb-4">
                            <div class="card-header">
                              <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                  <i class="material-icons text-success" style="font-size:30px;">cleaning_services</i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Smart Vacuum Cleaner</h6>
                                    <small class="text-success">Online</small>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="m-0" />
                            <div class="card-body">
                              <div class="mb-3 row">
                                <label for="html5-workmode-input" class="col-md-4 col-form-label">Work Mode</label>
                                <div class="col-md-8">
                                  <select id="html5-workmode-input" class="form-select">
                                    <option value="1">Smart</option>
                                    <option value="2">Wall Follow</option>
                                    <option value="3">Spiral</option>
                                    <option value="4">Chargego</option>
                                  </select>
                                </div>
                              </div>
                              <!-- Schedule -->
                              <div class="mb-3 row">
                                <label for="smart-vacuum-on" class="col-md-4 col-form-label">Time On</label>
                                <div class="col-md-8">
                                  <select id="smart-vacuum-on" class="form-select">
                                    <option>Disable</option>
                                    <option value="1">Enable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="time-input-smart-vacuum-on" style="display: none;">
                                <label for="html5-time-input" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="smart-vacuum-off" class="col-md-4 col-form-label">Time Off</label>
                                <div class="col-md-8">
                                  <select id="smart-vacuum-off" class="form-select">
                                    <option>Disable</option>
                                    <option value="1">Enable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="time-input-smart-vacuum-off" style="display: none;">
                                <label for="html5-time-input" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                                </div>
                              </div>
                              <!-- End schedule -->
                            </div>
                          </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <!-- Smart Curtain -->
                          <div class="card mb-4">
                            <div class="card-header">
                              <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                  <i class="material-icons text-warning" style="font-size:30px;">blinds_closed</i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Smart Curtain</h6>
                                    <small class="text-success">Online</small>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="m-0" />
                            <div class="card-body">
                              <div class="mb-3 row">
                                <label for="html5-workmode-input" class="col-md-4 col-form-label">Work Mode</label>
                                <div class="col-md-8">
                                  <select id="html5-workmode-input" class="form-select">
                                    <option value="1">Open</option>
                                    <option value="2">Close</option>
                                  </select>
                                </div>
                              </div>
                              <!-- Schedule -->
                              <div class="mb-3 row">
                                <label for="smart-curtain-on" class="col-md-4 col-form-label">Time On</label>
                                <div class="col-md-8">
                                  <select id="smart-curtain-on" class="form-select">
                                    <option>Disable</option>
                                    <option value="1">Enable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="time-input-smart-curtain-on" style="display: none;">
                                <label for="html5-time-input" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="smart-curtain-off" class="col-md-4 col-form-label">Time Off</label>
                                <div class="col-md-8">
                                  <select id="smart-curtain-off" class="form-select">
                                    <option>Disable</option>
                                    <option value="1">Enable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="time-input-smart-curtain-off" style="display: none;">
                                <label for="html5-time-input" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                                </div>
                              </div>
                              <!-- End schedule -->
                            </div>
                          </div>
                          <!-- Smart Fan -->
                          <div class="card">
                            <div class="card-header">
                              <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                  <i class="material-icons text-primary" style="font-size:40px;">heat_pump</i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Smart Fan</h6>
                                    <small class="text-success">Online</small>
                                  </div>
                                  <div class="col-3 text-end">
                                    <div class="form-check form-switch">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" checked />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="m-0" />
                            <div class="card-body">
                              <div class="mb-3 row">
                                <label for="html5-range" class="col-md-4 col-form-label">Speed</label>
                                <div class="col-md-8">
                                  <input type="range" class="form-range mt-3" id="html5-range" min="1" max="3" />
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="html5-workmode-input" class="col-md-4 col-form-label">Shake the
                                  head</label>
                                <div class="col-md-8">
                                  <select id="html5-workmode-input" class="form-select">
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="html5-smart-fan" class="col-md-4 col-form-label">Time On</label>
                                <div class="col-md-8">
                                  <select id="html5-smart-fan" class="form-select">
                                    <option>Disable</option>
                                    <option value="1">Enable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="time-input-smart-fan" style="display: none;">
                                <label for="html5-time-input" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="html5-smart-fan-off" class="col-md-4 col-form-label">Time Off</label>
                                <div class="col-md-8">
                                  <select id="html5-smart-fan-off" class="form-select">
                                    <option>Disable</option>
                                    <option value="1">Enable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="time-input-smart-fan-off" style="display: none;">
                                <label for="html5-time-input" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input class="form-control" type="time" value="12:30:00" id="html5-time-input" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Bath room -->
                    <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                      bath
                    </div>
                    <!-- Dining room -->
                    <div class="tab-pane fade" id="navs-justified-dining" role="tabpanel">
                      dining
                    </div>
                    <!-- Bed room -->
                    <div class="tab-pane fade" id="navs-justified-bed" role="tabpanel">
                      bed
                    </div>
                    <!-- Kitchen -->
                    <div class="tab-pane fade" id="navs-justified-kitchen" role="tabpanel">
                      Kitchen
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / Content -->

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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
  <script src="scripts/time.js"></script>
  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script src="toggleInputTime.js"></script>

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    const lampForm = document.getElementById('lampForm');
    const colorForm = document.getElementById('colorForm');
    const brightForm = document.getElementById('brightForm');
    //  const scheduleForm = document.getElementById("scheduleForm");



    function sendLampData() {
      const toggleCheckbox = document.getElementById('toggleCheckbox');
      const action = toggleCheckbox.checked ? 'on' : 'off';
      const url = 'http://localhost:3000/api/lamp/switch';

      axios.post(url, {
          action
        })
        .then(response => {
          console.log(response.data.message);
        })
        .catch(error => {
          console.error('Error:', error.response.data.error);
        });
    }

    function sendBrightnessData() {
      const brightness = document.getElementById('bright').value;
      const parseBright = parseInt(brightness)
      const url = 'http://localhost:3000/api/lamp/bright';

      axios.post(url, {
          action: parseBright
        })
        .then(response => {
          console.log(response.data.message);
        })
        .catch(error => {
          console.error('Error:', error.response.data.error);
        });
    }

    function sendColorData() {
      const color = document.getElementById('smart-lamp-color').value;
      const {
        h,
        s,
        v
      } = hexToHsv(color);
      const url = 'http://localhost:3000/api/lamp/color';

      axios.post(url, {
          h,
          s,
          v
        })
        .then(response => {
          console.log(response.data.message);
        })
        .catch(error => {
          console.error('Error:', error.response.data.error);
        });
    }

    function sendScheduleData() {
      const statusTimeOn = document.getElementById("statusTimeOn").value;
      const timeOn = document.getElementById("timeOn").value;
      const statusTimeOff = document.getElementById("statusTimeOff").value;
      const timeOff = document.getElementById("timeOff").value;
      const url = "http://localhost:3000/api/lamp/schedule";

      axios
        .post(url, {
          statusTimeOn,
          timeOn,
          statusTimeOff,
          timeOff
        })
        .then((response) => {
          console.log(response.data.message);
        })
        .catch((error) => {
          console.error("Error:", error.response.data.error);
        });
    }


    function getStatus() {
      const url = 'http://localhost:3000/api/lamp/status';

      return axios.get(url)
        .then(response => {
          const statusData = response.data.result;
          const switch_led_value = statusData[0].value;
          const color_value = JSON.parse(statusData[4].value);
          const bright_value = JSON.parse(statusData[2].value);
          updateCheckboxStatus(switch_led_value);
          updateColorForm(color_value);
          updateBrightForm(bright_value);
          return switch_led_value;
        })
        .catch(error => {
          console.error('Error:', error.response.data.error);
        })
        .finally(() => {
          setTimeout(getStatus, 5000);
        });
    }

    function updateCheckboxStatus(switch_led_value) {
      const toggleCheckbox = document.getElementById('toggleCheckbox');
      toggleCheckbox.checked = switch_led_value;
    }

    function updateColorForm(color_value) {
      const colorInput = document.getElementById('color');
      const {
        h,
        s,
        v
      } = color_value;
      const hex = hsvToHex(h, s, v);
      colorInput.value = hex;
    }

    function updateBrightForm(bright_value) {
      const brightInput = document.getElementById('bright');
      brightInput.value = bright_value;
    }

    // Fungsi untuk mengambil data time on dan time off dari server
    function getScheduleData() {
      const url = "http://localhost:3000/api/lamp/statusSchedule";

      axios
        .get(url)
        .then((response) => {
          const {
            time_on,
            time_off
          } = response.data;

          // Mendapatkan jam dan menit saat ini
          const currentTime = new Date();
          const currentHours = currentTime.getHours();
          const currentMinutes = currentTime.getMinutes();

          // Memisahkan jam dan menit dari time_on
          const [onHoursOn, onMinutesOn] = time_on.split(':');
          const [onHoursOff, onMinutesOff] = time_off.split(':');

          // Mengonversi string menjadi angka
          const onHoursOnInt = parseInt(onHoursOn);
          const onMinutesOnInt = parseInt(onMinutesOn);
          const onHoursOffInt = parseInt(onHoursOff);
          const onMinutesOffInt = parseInt(onMinutesOff);

          const toggleCheckbox = document.getElementById('toggleCheckbox');

          // Membandingkan jam dan menit saat ini dengan time_on
          if (currentHours === onHoursOnInt && currentMinutes === onMinutesOnInt) {
            if (toggleCheckbox.checked) {
              console.log("Lampu sudah menyala!");
            } else {
              console.log("Saatnya menyalakan lampu!");
              const url = 'http://localhost:3000/api/lamp/switch';
              const action = 'on';

              axios.post(url, {
                  action
                })
                .then(response => {
                  console.log(response.data.message);
                })
                .catch(error => {
                  console.error('Error:', error.response.data.error);
                });
            }

          } else {
            // Jam dan menit saat ini tidak sama dengan time_on
            // console.log("Belum waktunya menyalakan lampu.");
          }

          // Membandingkan jam dan menit saat ini dengan time_on
          if (currentHours === onHoursOffInt && currentMinutes === onMinutesOffInt) {
            if (toggleCheckbox.checked) {
              console.log("Saatnya mematikan lampu!");
              const url = 'http://localhost:3000/api/lamp/switch';
              const action = 'off';

              axios.post(url, {
                  action
                })
                .then(response => {
                  console.log(response.data.message);
                })
                .catch(error => {
                  console.error('Error:', error.response.data.error);
                });
            } else {
              // console.log("Lampu sedang menyala!");
            }

          } else {
            // Jam dan menit saat ini tidak sama dengan time_on
            // console.log("Belum waktunya menyalakan lampu.");
          }


        })
        .catch((error) => {
          console.error("Error:", error.response.data.error);
        })
        .finally(() => {
          setTimeout(getScheduleData, 5000);
        });
    }

    getScheduleData();



    function hexToHsv(hex) {
      const bigint = parseInt(hex.substr(1), 16);
      const r = (bigint >> 16) & 255;
      const g = (bigint >> 8) & 255;
      const b = bigint & 255;
      return rgbToHsv(r, g, b);
    }

    function hsvToHex(h, s, v) {
      const {
        r,
        g,
        b
      } = hsvToRgb(h, s, v);
      return rgbToHex(r, g, b);
    }

    function rgbToHsv(r, g, b) {
      r /= 255;
      g /= 255;
      b /= 255;
      const max = Math.max(r, g, b);
      const min = Math.min(r, g, b);
      let h, s, v;

      if (max === min) {
        h = 0;
      } else if (max === r) {
        h = 60 * ((g - b) / (max - min));
      } else if (max === g) {
        h = 60 * (2 + (b - r) / (max - min));
      } else {
        h = 60 * (4 + (r - g) / (max - min));
      }

      if (h < 0) {
        h += 360;
      }

      v = max;
      s = max === 0 ? 0 : (max - min) / max;

      return {
        h,
        s,
        v
      };
    }

    function rgbToHex(r, g, b) {
      const hexR = r.toString(16).padStart(2, '0');
      const hexG = g.toString(16).padStart(2, '0');
      const hexB = b.toString(16).padStart(2, '0');
      return `#${hexR}${hexG}${hexB}`;
    }

    function hsvToRgb(h, s, v) {
      let r, g, b;
      const i = Math.floor(h / 60);
      const f = h / 60 - i;
      const p = v * (1 - s);
      const q = v * (1 - f * s);
      const t = v * (1 - (1 - f) * s);

      switch (i % 6) {
        case 0:
          r = v;
          g = t;
          b = p;
          break;
        case 1:
          r = q;
          g = v;
          b = p;
          break;
        case 2:
          r = p;
          g = v;
          b = t;
          break;
        case 3:
          r = p;
          g = q;
          b = v;
          break;
        case 4:
          r = t;
          g = p;
          b = v;
          break;
        case 5:
          r = v;
          g = p;
          b = q;
          break;
      }

      return {
        r: Math.round(r * 255),
        g: Math.round(g * 255),
        b: Math.round(b * 255)
      };
    }

    brightForm.addEventListener('change', sendBrightnessData);
    lampForm.addEventListener('change', sendLampData);
    colorForm.addEventListener('change', sendColorData);
    // scheduleForm.addEventListener("change", sendScheduleData);

    getStatus();
  </script>

</body>

</html>