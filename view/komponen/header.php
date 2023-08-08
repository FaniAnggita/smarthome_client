<?php session_start();
unset($_SESSION['login_error']);
if (!isset($_SESSION['smarthome_user'])) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Smarthome App</title>

  <meta name="description" content />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

  <script src="../assets/js/config.js"></script>

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!-- axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.js"></script>

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

  <!-- DataTables JS -->
  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

  <!-- jQuery -->





  <style>
    .device-on {
      color: orange;
    }

    .field-icon {
      float: right;
      margin-left: -25px;
      margin-top: -25px;
      position: relative;
      z-index: 2;
    }

    .container-pwd {
      padding-top: 50px;
      margin: auto;
    }

    .angry-grid {
      background-image: url(../assets/img/elements/desain-rumah-minimalis-643cebf808a8b564da672922.png);

      display: grid;
      grid-template-rows: 1fr 1fr 1fr;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
      gap: 0px;

      height: 100vh;
      width: 100%;

      background-size: 100% 100%;
      /* Menyesuaikan gambar latar belakang dengan lebar dan tinggi 100% */
      background-repeat: no-repeat;
    }


    #item-0 {

      grid-row-start: 1;
      grid-column-start: 1;

      grid-row-end: 2;
      grid-column-end: 2;

    }

    #item-1 {

      grid-row-start: 1;
      grid-column-start: 2;

      grid-row-end: 2;
      grid-column-end: 3;

    }

    #item-2 {

      grid-row-start: 1;
      grid-column-start: 3;

      grid-row-end: 2;
      grid-column-end: 4;

    }

    #item-3 {

      grid-row-start: 1;
      grid-column-start: 4;

      grid-row-end: 2;
      grid-column-end: 5;

    }

    #item-4 {

      grid-row-start: 2;
      grid-column-start: 2;

      grid-row-end: 3;
      grid-column-end: 4;

    }

    #item-5 {

      grid-row-start: 2;
      grid-column-start: 4;

      grid-row-end: 3;
      grid-column-end: 5;

    }

    #item-6 {

      grid-row-start: 3;
      grid-column-start: 4;

      grid-row-end: 4;
      grid-column-end: 5;

    }

    #item-7 {

      grid-row-start: 3;
      grid-column-start: 3;

      grid-row-end: 4;
      grid-column-end: 4;

    }

    #item-8 {

      grid-row-start: 3;
      grid-column-start: 2;

      grid-row-end: 4;
      grid-column-end: 3;

    }

    #item-9 {

      grid-row-start: 2;
      grid-column-start: 5;

      grid-row-end: 4;
      grid-column-end: 6;

    }

    #item-10 {

      grid-row-start: 2;
      grid-column-start: 1;

      grid-row-end: 3;
      grid-column-end: 2;

    }
  </style>

</head>