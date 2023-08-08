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
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-dining" aria-controls="navs-justified-dining" aria-selected="false">
                        <i class="tf-icons bx bx-table"></i> Dining Room
                      </button>
                    </li>
                    <li class="nav-item">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-bed" aria-controls="navs-justified-bed" aria-selected="false">
                        <i class="tf-icons bx bx-bed"></i> Bed Room
                      </button>
                    </li>
                    <!-- <li class="nav-item">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-messages" aria-controls="navs-justified-messages" aria-selected="false">
                        <i class="tf-icons bx bx-water"></i> Bath Room
                      </button>
                    </li> -->
                    <li class="nav-item">
                      <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-kitchen" aria-controls="navs-justified-kitchen" aria-selected="false">
                        <i class="tf-icons bx bx-cookie"></i> Kitchen
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <!-- Home -->
                    <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                      <form class="row mb-4" action="" method="post">
                        <!-- button -->
                        <div class="btn-toolbar demo-inline-spacing" role="toolbar" aria-label="Toolbar with button groups">
                          <div class="btn-group" role="group" aria-label="First group">
                            <button type="submit" class="btn btn-outline-secondary <?php echo isset($_POST['control-map']) ? 'btn-primary' : ''; ?>
" name="control-map">
                              <i class="tf-icons bx bx-map-alt"></i>
                            </button>
                            <button type="submit" class="btn btn-outline-secondary <?php echo isset($_POST['control-map']) ? '' : 'btn-primary'; ?>" name="control-list">
                              <i class="tf-icons bx bx-list-ul"></i>
                            </button>
                          </div>

                        </div>
                      </form>
                      <?php if (isset($_POST['control-map'])) { ?>


                        <!-- home map -->
                        <div class="row">
                          <div class="col-12">
                            <div class="angry-grid">
                              <div id="item-0"></div>
                              <div id="item-1"></div>
                              <div id="item-2"></div>
                              <div id="item-3" class="d-flex align-items-center"><i class="material-icons iconSmartFan" style="font-size:40px;">heat_pump</i>
                                <form class="form-check form-switch" id="switchSmartFanForm2">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" id="switchSmartFan2" />
                                </form>
                              </div>
                              <div id="item-4" class="d-flex align-items-center">
                                <i class="material-icons iconSmartCurtain" style="font-size:30px;">blinds_closed</i>
                                <form class="form-check form-switch" id="formSmartCurtain2">
                                  <input class="form-check-input float-end me-4" type="checkbox" role="switch" id="smartCurtainCheck2" />
                                </form>
                                <i class="lampIconHome fas fa-lightbulb fa-2x"></i>
                                <form class="form-check form-switch" id="lampForm2">
                                  <input class="form-check-input float-end livingRoomCheck" type="checkbox" role="switch" id="livingRoomCheck" />
                                </form>
                              </div>
                              <div id="item-5" class="d-flex align-items-center">

                                <i class="lampIconDiningRoom fas fa-lightbulb fa-2x"></i>
                                <form class="form-check form-switch" id="diningRoomCheckForm">
                                  <input class="form-check-input float-end me-4" type="checkbox" role="switch" id="diningRoomCheck" />
                                </form>
                                <i class="material-icons text-success iconSmartVacuum" style="font-size:30px;">cleaning_services</i>
                                <form class="form-check form-switch" id="switchSmartVacuumForm2">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" id="switchSmartVacuum2" />
                                </form>
                              </div>
                              <div id="item-6" class="d-flex align-items-center"> <i class="lampIconKitchen fas fa-lightbulb fa-2x"></i>
                                <form class="form-check form-switch" id="kitchenCheckForm">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" id="kitchenCheck" />
                                </form>
                              </div>
                              <div id="item-7" class="d-flex align-items-center">

                              </div>
                              <div id="item-8" class="d-flex align-items-center"> <i class="lampIconFrontDoor fas fa-lightbulb fa-2x"></i>
                                <form class="form-check form-switch" id="frontDoorCheckForm">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" id="frontDoorCheck" />
                                </form>
                              </div>
                              <div id="item-9" class="d-flex align-items-center">
                                <i class="lampIconGarden fas fa-lightbulb fa-2x"></i>
                                <form class="form-check form-switch" id="gardenCheckForm">
                                  <input class="form-check-input float-end" type="checkbox" role="switch" id="gardenCheck" />
                                </form>
                              </div>
                              <div id="item-10"></div>
                            </div>
                          </div>
                        </div>
                        <!-- end home map -->
                      <?php
                      } else { ?>

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
                                    <i class="lampIconHome fas fa-lightbulb fa-2x"></i>
                                  </div>
                                  <div class="flex-grow-1 row">
                                    <div class="col-9">
                                      <h6 class="mb-0">Living Room</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                      <form class="form-check form-switch" id="lampForm2">
                                        <input class="form-check-input float-end livingRoomCheck" type="checkbox" role="switch" id="livingRoomCheck" />
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex mb-4">
                                  <div class="flex-shrink-0 me-3">
                                    <i class="lampIconDiningRoom fas fa-lightbulb fa-2x"></i>
                                  </div>
                                  <div class="flex-grow-1 row">
                                    <div class="col-9">
                                      <h6 class="mb-0">Dining Room</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                      <form class="form-check form-switch" id="diningRoomCheckForm">
                                        <input class="form-check-input float-end" type="checkbox" role="switch" id="diningRoomCheck" />
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex mb-4">
                                  <div class="flex-shrink-0 me-3">
                                    <i class="lampIconKitchen fas fa-lightbulb fa-2x"></i>
                                  </div>
                                  <div class="flex-grow-1 row">
                                    <div class="col-9">
                                      <h6 class="mb-0">Kitchen</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                      <form class="form-check form-switch" id="kitchenCheckForm">
                                        <input class="form-check-input float-end" type="checkbox" role="switch" id="kitchenCheck" />
                                      </form>
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
                                    <i class="lampIconFrontDoor fas fa-lightbulb fa-2x"></i>
                                  </div>
                                  <div class="flex-grow-1 row">
                                    <div class="col-9">
                                      <h6 class="mb-0">Front door</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                      <form class="form-check form-switch" id="frontDoorCheckForm">
                                        <input class="form-check-input float-end" type="checkbox" role="switch" id="frontDoorCheck" />
                                      </form>
                                    </div>
                                  </div>
                                </div>

                                <div class="d-flex mb-4">
                                  <div class="flex-shrink-0 me-3">
                                    <i class="lampIconGarden fas fa-lightbulb fa-2x"></i>
                                  </div>
                                  <div class="flex-grow-1 row">
                                    <div class="col-9">
                                      <h6 class="mb-0">Garden</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                      <form class="form-check form-switch" id="gardenCheckForm">
                                        <input class="form-check-input float-end" type="checkbox" role="switch" id="gardenCheck" />
                                      </form>
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
                                <div class="d-flex mb-4">
                                  <div class="flex-shrink-0 me-3">
                                    <i class="material-icons text-success iconSmartVacuum" style="font-size:30px;">cleaning_services</i>
                                  </div>
                                  <div class="flex-grow-1 row">
                                    <div class="col-9">
                                      <h6 class="mb-0">Smart Vacuum Cleaner</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                      <form class="form-check form-switch" id="switchSmartVacuumForm2">
                                        <input class="form-check-input float-end" type="checkbox" role="switch" id="switchSmartVacuum2" />
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <div class="d-flex mb-4">
                                  <div class="flex-shrink-0 me-3">
                                    <i class="material-icons iconSmartFan" style="font-size:40px;">heat_pump</i>
                                  </div>
                                  <div class="flex-grow-1 row">
                                    <div class="col-9">
                                      <h6 class="mb-0">Smart Fan</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                      <form class="form-check form-switch" id="switchSmartFanForm2">
                                        <input class="form-check-input float-end" type="checkbox" role="switch" id="switchSmartFan2" />
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <!-- <div class="d-flex mb-4">
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
                              </div> -->
                                <div class="d-flex mb-4">
                                  <div class="flex-shrink-0 me-3">
                                    <i class="material-icons iconSmartCurtain" style="font-size:30px;">blinds_closed</i>
                                  </div>
                                  <div class="flex-grow-1 row">
                                    <div class="col-9">
                                      <h6 class="mb-0">Smart Curtain</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                      <form class="form-check form-switch" id="formSmartCurtain2">
                                        <input class="form-check-input float-end" type="checkbox" role="switch" id="smartCurtainCheck2" />
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php
                      } ?>
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
                                  <!-- <i id="lampIcon" class="fas fa-lightbulb fa-2x"></i> -->
                                  <i class="lampIconHome fas fa-lightbulb fa-2x"></i>
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
                              <form class="mb-3 row" id="workMode">
                                <label for="smart-lamp-color-mode" class="col-md-4 col-form-label">Work Mode</label>
                                <div class="col-md-8">
                                  <select id="smart-lamp-color-mode" class="form-select" name="work-mode-smart-lamp">
                                    <option value="2">White</option>
                                    <option value="1">Colour</option>
                                  </select>
                                </div>
                              </form>
                              <form class="mb-3 row" id="colorForm" style="display: none;">
                                <label for="color" class="col-md-4 col-form-label">Color</label>
                                <div class="col-md-8">
                                  <input class="form-control" type="color" id="color" name="color" />
                                </div>
                              </form>
                              <form class="mb-3 row" id="brightForm" style="display: none;">
                                <label for="bright" class="col-md-4 col-form-label">Bright</label>
                                <div class="col-md-8">
                                  <input type="range" class="form-range mt-3" id="bright" name="bright" min="0" max="1000" />
                                </div>
                              </form>

                              <!-- Schedule -->
                              <form id="scheduleForm">
                                <div class="mb-3 row">
                                  <label for="statusTimeOn" class="col-md-4 col-form-label">Schedule Time On</label>
                                  <div class="col-md-8">
                                    <select class="form-control" name="statusTimeOn" id="statusTimeOn">
                                      <option value="1">Enable</option>
                                      <option value="2">Disable</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row" id="input-time-on-smart-lamp-on" style="display: none;">
                                  <label for=" timeOn" class="col-md-4 col-form-label"></label>
                                  <div class="col-md-8">
                                    <input type="time" class="form-control" id="timeOn" name="timeOn" />
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="statusTimeOff" class="col-md-4 col-form-label">Schedule Time Off</label>
                                  <div class="col-md-8">
                                    <select class="form-control" name="statusTimeOff" id="statusTimeOff">
                                      <option value="1">Enable</option>
                                      <option value="2">Disable</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row" id="input-time-on-smart-lamp-off" style="display: none;">
                                  <label for="timeOff" class="col-md-4 col-form-label"></label>
                                  <div class="col-md-8">
                                    <input type="time" class="form-control" id="timeOff" name="timeOff" />
                                  </div>
                                </div>
                              </form>

                            </div>
                          </div>

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <!-- Smart Curtain -->
                          <div class="card mb-4">
                            <div class="card-header">
                              <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                  <i class="material-icons iconSmartCurtain" style="font-size:30px;">blinds_closed</i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Smart Curtain</h6>
                                    <small class="text-success">Online</small>
                                  </div>
                                  <div class="col-3 text-end">
                                    <form class="form-check form-switch" id="formSmartCurtain">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" id="smartCurtainCheck" checked />
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="m-0" />
                            <div class="card-body">
                              <form class="mb-3 row" id="workModeSmartCurtain">
                                <label for="workModeSmartCurtainSelect" class="col-md-4 col-form-label">Work Mode</label>
                                <div class="col-md-8">
                                  <select id="workModeSmartCurtainSelect" class="form-select" name="workModeSmartCurtainSelect">
                                    <option value="1">Open</option>
                                    <option value="2">Close</option>
                                    <option value="3">Stop</option>
                                  </select>
                                </div>
                              </form>
                              <!-- Schedule -->
                              <form id="scheduleFormSmartCurtain">
                                <div class="mb-3 row">
                                  <label for="statusTimeOnSmartCurtain" class="col-md-4 col-form-label">Schedule Time On</label>
                                  <div class="col-md-8">
                                    <select class="form-control" name="statusTimeOnSmartCurtain" id="statusTimeOnSmartCurtain">
                                      <option value="1">Enable</option>
                                      <option value="2">Disable</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row" id="input-time-on-smart-curtain-on" style="display: none;">
                                  <label for=" timeOnSmartCurtain" class="col-md-4 col-form-label"></label>
                                  <div class="col-md-8">
                                    <input type="time" class="form-control" id="timeOnSmartCurtain" name="timeOnSmartCurtain" />
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="statusTimeOffSmartCurtain" class="col-md-4 col-form-label">Schedule Time Off</label>
                                  <div class="col-md-8">
                                    <select class="form-control" name="statusTimeOffSmartCurtain" id="statusTimeOffSmartCurtain">
                                      <option value="1">Enable</option>
                                      <option value="2">Disable</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row" id="input-time-on-smart-curtain-off" style="display: none;">
                                  <label for="timeOffSmartCurtain" class="col-md-4 col-form-label"></label>
                                  <div class="col-md-8">
                                    <input type="time" class="form-control" id="timeOffSmartCurtain" name="timeOffSmartCurtain" />
                                  </div>
                                </div>
                              </form>
                              <!-- End schedule -->
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>

                    <!-- Dining room -->
                    <div class="tab-pane fade" id="navs-justified-dining" role="tabpanel">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <!-- Smart Lamp -->
                          <div class="card mb-4">
                            <div class="card-header">
                              <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                  <i class="lampIconDiningRoom fas fa-lightbulb fa-2x"></i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Smart Lamp Dining Room</h6>
                                    <small class="text-success">Online</small>
                                  </div>
                                  <div class="col-3 text-end">
                                    <form class="form-check form-switch" id="lampFormDiningRoom">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" id="toggleCheckboxDiningRoom" name="actionDiningRoom" value="toggle" />
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="m-0" />
                            <div class="card-body">
                              <form class="mb-3 row" id="workModeDiningRoom">
                                <label for="smart-lamp-color-modeDiningRoom" class="col-md-4 col-form-label">Work Mode</label>
                                <div class="col-md-8">
                                  <select id="smartLampWorkModeDiningRoom" class="form-select" name="smartLampWorkModeDiningRoom">
                                    <option value="2">White</option>
                                    <option value="1">Colour</option>
                                  </select>
                                </div>
                              </form>
                              <form class="mb-3 row" id="colorFormDiningRoom" style="display: none;">
                                <label for="colorDiningRoom" class="col-md-4 col-form-label">Color</label>
                                <div class="col-md-8">
                                  <input class="form-control" type="color" id="colorDiningRoom" name="colorDiningRoom" />
                                </div>
                              </form>
                              <form class="mb-3 row" id="brightFormDiningRoom" style="display: none;">
                                <label for="brightDiningRoom" class="col-md-4 col-form-label">Bright</label>
                                <div class="col-md-8">
                                  <input type="range" class="form-range mt-3" id="brightDiningRoom" name="brightDiningRoom" min="0" max="1000" />
                                </div>
                              </form>

                              <!-- Schedule -->
                              <form id="scheduleFormDiningRoom">
                                <div class="mb-3 row">
                                  <label for="statusTimeOnDiningRoom" class="col-md-4 col-form-label">Schedule Time On</label>
                                  <div class="col-md-8">
                                    <select class="form-control" name="statusTimeOnDiningRoom" id="statusTimeOnDiningRoom">
                                      <option value="1">Enable</option>
                                      <option value="2">Disable</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row" id="input-time-on-DiningRoom" style="display: none;">
                                  <label for="timeOnDiningRoom" class="col-md-4 col-form-label"></label>
                                  <div class="col-md-8">
                                    <input type="time" class="form-control" id="timeOnDiningRoom" name="timeOnDiningRoom" />
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="statusTimeOffDiningRoom" class="col-md-4 col-form-label">Schedule Time Off</label>
                                  <div class="col-md-8">
                                    <select class="form-control" name="statusTimeOffDiningRoom" id="statusTimeOffDiningRoom">
                                      <option value="1">Enable</option>
                                      <option value="2">Disable</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row" id="input-time-on-smart-lamp-offDiningRoom" style="display: none;">
                                  <label for="timeOffDiningRoom" class="col-md-4 col-form-label"></label>
                                  <div class="col-md-8">
                                    <input type="time" class="form-control" id="timeOffDiningRoom" name="timeOffDiningRoom" />
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- Smart Vacum -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                          <div class="card mb-4">
                            <div class="card-header">
                              <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                  <i class="material-icons iconSmartVacuum" style="font-size:30px;">cleaning_services</i>
                                </div>
                                <div class="flex-grow-1 row">
                                  <div class="col-9">
                                    <h6 class="mb-0">Smart Vacuum Cleaner</h6>
                                    <small class="text-success">Online</small>
                                  </div>
                                  <div class="col-3 text-end">
                                    <form class="form-check form-switch" id="switchSmartVacuumForm">
                                      <input class="form-check-input float-end" type="checkbox" role="switch" id="switchSmartVacuum" />
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <hr class="m-0" />
                            <div class="card-body">
                              <form class="mb-3 row" id="workModeSmartVacuumForm">
                                <label for="workModeSmartVacuum" class="col-md-4 col-form-label">Work Mode</label>
                                <div class="col-md-8">
                                  <select id="workModeSmartVacuum" class="form-select">
                                    <option value="1">Smart</option>
                                    <option value="2">Wall Follow</option>
                                    <option value="3">Spiral</option>
                                    <option value="4">Chargego</option>
                                  </select>
                                </div>
                              </form>
                              <!-- Schedule -->

                              <form id="scheduleFormSmartVacuum">
                                <div class="mb-3 row">
                                  <label for="statusTimeOnSmartVacuum" class="col-md-4 col-form-label">Schedule Time On</label>
                                  <div class="col-md-8">
                                    <select class="form-control" name="statusTimeOnSmartVacuum" id="statusTimeOnSmartVacuum">
                                      <option value="1">Enable</option>
                                      <option value="2">Disable</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row" id="input-time-on-smart-vacuum-on" style="display: none;">
                                  <label for=" timeOn" class="col-md-4 col-form-label"></label>
                                  <div class="col-md-8">
                                    <input type="time" class="form-control" id="timeOnSmartVacuum" name="timeOn" />
                                  </div>
                                </div>
                                <div class="mb-3 row">
                                  <label for="statusTimeOffSmartVacuum" class="col-md-4 col-form-label">Schedule Time Off</label>
                                  <div class="col-md-8">
                                    <select class="form-control" name="statusTimeOffSmartVacuum" id="statusTimeOffSmartVacuum">
                                      <option value="1">Enable</option>
                                      <option value="2">Disable</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="mb-3 row" id="input-time-on-smart-vacuum-off" style="display: none;">
                                  <label for="timeOff" class="col-md-4 col-form-label"></label>
                                  <div class="col-md-8">
                                    <input type="time" class="form-control" id="timeOffSmartVacuum" name="timeOffSmartVacuum" />
                                  </div>
                                </div>
                              </form>
                              <!-- End schedule -->
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>

                    <!-- Bed room -->
                    <div class="tab-pane fade" id="navs-justified-bed" role="tabpanel">
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <!-- Smart Fan -->
                        <div class="card">
                          <div class="card-header">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <i class="material-icons iconSmartFan" style="font-size:40px;">heat_pump</i>
                              </div>
                              <div class="flex-grow-1 row">
                                <div class="col-9">
                                  <h6 class="mb-0">Smart Fan</h6>
                                  <small class="text-success">Online</small>
                                </div>
                                <div class="col-3 text-end">
                                  <form class="form-check form-switch" id="switchSmartFanForm">
                                    <input class="form-check-input float-end" type="checkbox" role="switch" id="switchSmartFan" />
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="m-0" />
                          <div class="card-body">
                            <form class="mb-3 row" id="fanSpeedForm">
                              <label for="fanSpeed" class="col-md-4 col-form-label">Speed</label>
                              <div class="col-md-8">
                                <input type="range" class="form-range mt-3" id="fanSpeed" min="1" max="3" />
                              </div>
                            </form>
                            <form class="mb-3 row" id="shakeFanFrom">
                              <label for="shakeFan" class="col-md-4 col-form-label">Shake the
                                head</label>
                              <div class="col-md-8">
                                <select id="shakeFan" class="form-select">
                                  <option value="1">Yes</option>
                                  <option value="2">No</option>
                                </select>
                              </div>
                            </form>
                            <!-- Schedule -->
                            <form id="scheduleFormSmartFan">
                              <div class="mb-3 row">
                                <label for="statusTimeOnSmartFan" class="col-md-4 col-form-label">Schedule Time On</label>
                                <div class="col-md-8">
                                  <select class="form-control" name="statusTimeOnSmartFan" id="statusTimeOnSmartFan">
                                    <option value="1">Enable</option>
                                    <option value="2">Disable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="input-time-on-smart-Fan-on" style="display: none;">
                                <label for=" timeOnSmartFan" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input type="time" class="form-control" id="timeOnSmartFan" name="timeOnSmartFan" />
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="statusTimeOffSmartFan" class="col-md-4 col-form-label">Schedule Time Off</label>
                                <div class="col-md-8">
                                  <select class="form-control" name="statusTimeOffSmartFan" id="statusTimeOffSmartFan">
                                    <option value="1">Enable</option>
                                    <option value="2">Disable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="input-time-on-smart-Fan-off" style="display: none;">
                                <label for="timeOffSmartFan" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input type="time" class="form-control" id="timeOffSmartFan" name="timeOffSmartFan" />
                                </div>
                              </div>
                            </form>
                            <!-- End schedule -->
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Bath room -->
                    <div class="tab-pane fade" id="navs-justified-messages" role="tabpanel">
                      bath
                    </div>
                    <!-- Kitchen -->
                    <div class="tab-pane fade" id="navs-justified-kitchen" role="tabpanel">
                      <!-- Smart Lamp Kitchen -->
                      <!-- Smart Lamp -->
                      <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card mb-4">
                          <div class="card-header">
                            <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                <i class="lampIconKitchen fas fa-lightbulb fa-2x"></i>
                              </div>
                              <div class="flex-grow-1 row">
                                <div class="col-9">
                                  <h6 class="mb-0">Smart Lamp Kitchen</h6>
                                  <small class="text-success">Online</small>
                                </div>
                                <div class="col-3 text-end">
                                  <form class="form-check form-switch" id="lampFormKitchen">
                                    <input class="form-check-input float-end" type="checkbox" role="switch" id="toggleCheckboxKitchen" name="actionKitchen" value="toggle" />
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <hr class="m-0" />
                          <div class="card-body">
                            <form class="mb-3 row" id="workModeKitchen">
                              <label for="smart-lamp-color-modeKitchen" class="col-md-4 col-form-label">Work Mode</label>
                              <div class="col-md-8">
                                <select id="smartLampWorkModeKitchen" class="form-select" name="smartLampWorkModeKitchen">
                                  <option value="2">White</option>
                                  <option value="1">Colour</option>
                                </select>
                              </div>
                            </form>
                            <form class="mb-3 row" id="colorFormKitchen" style="display: none;">
                              <label for="colorKitchen" class="col-md-4 col-form-label">Color</label>
                              <div class="col-md-8">
                                <input class="form-control" type="color" id="colorKitchen" name="colorKitchen" />
                              </div>
                            </form>
                            <form class="mb-3 row" id="brightFormKitchen" style="display: none;">
                              <label for="brightKitchen" class="col-md-4 col-form-label">Bright</label>
                              <div class="col-md-8">
                                <input type="range" class="form-range mt-3" id="brightKitchen" name="brightKitchen" min="0" max="1000" />
                              </div>
                            </form>

                            <!-- Schedule -->
                            <form id="scheduleFormKitchen">
                              <div class="mb-3 row">
                                <label for="statusTimeOnKitchen" class="col-md-4 col-form-label">Schedule Time On</label>
                                <div class="col-md-8">
                                  <select class="form-control" name="statusTimeOnKitchen" id="statusTimeOnKitchen">
                                    <option value="1">Enable</option>
                                    <option value="2">Disable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="input-time-on-Kitchen" style="display: none;">
                                <label for="timeOnKitchen" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input type="time" class="form-control" id="timeOnKitchen" name="timeOnKitchen" />
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="statusTimeOffKitchen" class="col-md-4 col-form-label">Schedule Time Off</label>
                                <div class="col-md-8">
                                  <select class="form-control" name="statusTimeOffKitchen" id="statusTimeOffKitchen">
                                    <option value="1">Enable</option>
                                    <option value="2">Disable</option>
                                  </select>
                                </div>
                              </div>
                              <div class="mb-3 row" id="input-time-on-smart-lamp-offKitchen" style="display: none;">
                                <label for="timeOffKitchen" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                  <input type="time" class="form-control" id="timeOffKitchen" name="timeOffKitchen" />
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
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

  <!-- <script src="toggleInputTime.js"></script> -->
  <!-- Time -->
  <script src="scripts/time.js"></script>

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="scripts/smart_lamp.js"></script>
  <script src="scripts/smart_curtain.js"></script>
  <script src="scripts/smart_fan.js"></script>
  <script src="scripts/smart_vacuum.js"></script>
  <script src="scripts/toggleInput.js"></script>

</body>

</html>