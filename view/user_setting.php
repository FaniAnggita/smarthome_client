<?php
$page = 'setting';
include 'komponen/header.php';

?>





<body onload="startTime()">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include 'komponen/aside.php'; ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php include 'komponen/navbar.php'; ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Basic Layout & Basic with Icons -->
                        <div class="row">
                            <!-- Basic with Icons -->
                            <div class="col-xxl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Account Setting</h5>

                                    </div>
                                    <div class="card-body" id="alert-response" style="display: none;">
                                        <div class="alert alert-dismissible" role="alert" id="alert-box">
                                            <div id="responseMessage"></div>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form id="edit_user" action="" method="post">
                                            <input type="text" id="uid" name="uid" value="<?php echo $_SESSION['user_detail']['uid']; ?>" required hidden>

                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="name">Name</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-user"></i></span>
                                                        <input type="text" class="form-control" id="name" name="name" aria-label="John Doe" aria-describedby="name" autocomplete="off" value="<?php echo $_SESSION['user_detail']['name']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="gender">Gender</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-male"></i></span>
                                                        <select id="gender" name="gender" class="form-select">
                                                            <option value="1" <?php echo ($_SESSION['user_detail']['gender'] == 1) ? "selected" : ""; ?>>Male</option>
                                                            <option value="2" <?php echo ($_SESSION['user_detail']['gender'] == 2) ? "selected" : ""; ?>>Female</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="dob">Date of Birth</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-calendar"></i></span>
                                                        <input type="date" class="form-control" id="dob" name="dob" value="<?php
                                                                                                                            $inputDateString = $_SESSION['user_detail']['date_of_birth'];
                                                                                                                            $inputDate = new DateTime($inputDateString);
                                                                                                                            $formattedDate = $inputDate->format('Y-m-d');
                                                                                                                            echo $formattedDate;
                                                                                                                            ?>" required>
                                                    </div>


                                                </div>
                                            </div>
                                            <div class=" row mb-3">
                                                <label class="col-sm-2 col-form-label" for="email">Email</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                                        <input type="email" class="form-control" id="email" name="email" autocomplete="off" value="<?php echo $_SESSION['user_detail']['email']; ?>" required disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="password">Password</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-key"></i></span>
                                                        <input type="password" class="form-control" id="password" name="password" autocomplete="off" value="<?php echo $_SESSION['user_detail']['password']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label class="col-sm-2 col-form-label" for="copassword">Confirm Password</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text"><i class="bx bx-key"></i></span>
                                                        <input type="password" class="form-control" id="copassword" name="copassword" autocomplete="off" value="<?php echo $_SESSION['user_detail']['password']; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <select id="role" name="role" class="form-select" required hidden>
                                                <option value="2" <?php echo ($_SESSION['user_detail']['role'] == 2) ? "selected" : ""; ?>>Home User</option>
                                                <option value="1" <?php echo ($_SESSION['user_detail']['role'] == 1) ? "selected" : ""; ?>>Admin</option>
                                            </select>
                                            <div class="row justify-content-end">
                                                <div class="col-sm-10">
                                                    <button type="button" name="submit" class="btn btn-primary" id="submitButton">Send</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="bs-toast toast fade show bg-warning" role="alert" aria-live="assertive" aria-atomic="true" style="float: right; display: none" id="toast-element">
                            <div class="toast-header">
                                <i class="bx bx-bell me-2"></i>
                                <div class="me-auto fw-semibold">Warning</div>
                                <small>Now</small>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Please re-login to see the changes!
                            </div>
                        </div>
                    </div>
                    <div style="float: clear;"></div>

                    <!-- Footer -->
                    <?php include 'komponen/footer.php'; ?>
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


    <!-- datatable -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
        // JavaScript code to send form data to the handler using Axios
        document.getElementById("submitButton").addEventListener("click", () => {
            const uid = document.getElementById("uid").value;
            const name = document.getElementById("name").value;
            const gender = document.getElementById("gender").value;
            const dateOfBirth = document.getElementById("dob").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("copassword").value;
            const role = document.getElementById("role").value;

            const alertBox = document.getElementById("alert-box");

            // Validate password and confirmPassword
            if (password !== confirmPassword) {
                $("#alert-response").fadeIn().delay(3000).fadeOut();
                alertBox.classList.remove("alert-success");
                alertBox.classList.add("alert-danger");
                document.getElementById("responseMessage").innerText = "Passwords do not match.";
                return;
                exit();
            }

            const url = "http://localhost:3000/api/user/updateUserDataHandler";
            const userData = {
                uid,
                name,
                gender,
                date_of_birth: dateOfBirth,
                email,
                password,
                role,
            };

            axios
                .post(url, userData)
                .then((response) => {
                    $("#alert-response").fadeIn().delay(3000).fadeOut();
                    alertBox.innerText = response.data.message;
                    alertBox.classList.remove("alert-danger");
                    alertBox.classList.add("alert-success");
                    $("#toast-element").fadeIn().delay(8000).fadeOut();

                })
                .catch((error) => {
                    $("#alert-response").fadeIn().delay(3000).fadeOut();
                    alertBox.innerText = "Error: " + error.response.data.error;
                    alertBox.classList.remove("alert-success");
                    alertBox.classList.add("alert-danger");

                });
        });
    </script>

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/ui-toasts.js"></script>


</body>

</html>