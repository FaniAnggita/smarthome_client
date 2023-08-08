<?php
$page = 'user';
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

                        <!-- Basic Bootstrap Table -->
                        <div class="card">

                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="mb-0">User Management</h5>
                                <?php if ($_SESSION['smarthome_role'] === "1") { ?>
                                    <a href="add-user.php" class="btn btn-danger btn-sm"> <i class="bx bx-plus"></i> Add User</a>
                                <?php } ?>
                            </div>
                            <div class="card-body" id="alert-response" style="display: none;">
                                <div class="alert alert-danger alert-dismissible" role="alert" id="alert-box">
                                    <div id="responseMessage">Delete Success!</div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <?php if ($_SESSION['smarthome_role'] === "1") { ?>
                                                    <th>Password</th>
                                                <?php } ?>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>Role</th>
                                                <?php if ($_SESSION['smarthome_role'] === "1") { ?>
                                                    <th>Actions</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0" id="userTableBody">
                                            <!-- User data will be populated here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>

                    <?php
                    // Cek apakah variabel $_POST['uid'] ada
                    $showModal = isset($_POST['uid']) && !empty($_POST['uid']);
                    ?>

                    <!-- Modal -->
                    <div class="modal modal-top fade <?php if (!$showModal) echo 'd-none'; ?>" id="modalTop" tabindex="-1" style="display: block;">
                        <div class="modal-dialog">
                            <form class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTopTitle">Confirm Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this user?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
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
    <script>
        // Function to toggle password visibility
        function togglePasswordVisibility(passwordField) {
            const passwordInput = $(passwordField);
            const toggleIcon = passwordInput.siblings(".toggle-password");

            toggleIcon.toggleClass("fa-eye fa-eye-slash");

            if (passwordInput.attr("type") === "password") {
                passwordInput.attr("type", "text");
            } else {
                passwordInput.attr("type", "password");
            }
        }
    </script>

    <script>
        // Function to calculate age based on the date of birth
        function calculateAge(dateOfBirth) {
            const birthDate = new Date(dateOfBirth);
            const today = new Date();
            let age = today.getFullYear() - birthDate.getFullYear();
            const monthDiff = today.getMonth() - birthDate.getMonth();

            if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }

            return age;
        }

        // Function to fetch user data using Axios and populate the table
        function fetchUserDataAndPopulateTable() {
            // Replace the URL with your API endpoint
            const apiUrl = 'http://localhost:3000/api/user/getAllUserDataHandler';

            // Use Axios to make a GET request to the API endpoint
            axios.get(apiUrl)
                .then(response => {
                    // Process the response and populate the table
                    const userData = response.data;
                    const tableBody = document.getElementById('userTableBody');

                    userData.forEach((user, index) => {
                        const row = document.createElement('tr');

                        // Update gender value based on the condition
                        const gender = user.gender === 1 ? 'Male' : 'Female';

                        // Calculate age based on the date of birth
                        const age = calculateAge(user.date_of_birth);

                        // Generate sequential ID starting from 1
                        const id = index + 1;

                        // Generate unique IDs for each password field and toggle icon
                        const passwordFieldID = `password-field-${index}`;
                        const toggleIconID = `toggle-icon-${index}`;
                        // Assuming the properties in the user object match the table headers
                        row.innerHTML = `
                            <td>${id}</td>
                            <td>${user.name}</td>
                            <td>${user.email}</td>
                            <?php if ($_SESSION['smarthome_role'] === "1") { ?>
                            <td>
                            <div class="col-9">
                                                <input
                                                id="${passwordFieldID}"
                                                type="password"
                                                class="form-control"
                                                name="password"
                                                value="${user.password}" style="border: none; background: none;"
                                                />
                                                <span
                                                id="${toggleIconID}"
                                                toggle="#${passwordFieldID}"
                                                class="fa fa-fw fa-eye-slash field-icon toggle-password"
                                                onclick="togglePasswordVisibility('#${passwordFieldID}')"
                                                ></span>
                                            </div>
                            </td>
                            <?php } ?>
                            <td>${gender}</td>
                            <td>${age}</td>
                            <td>
                                <span class="badge bg-label-${
                                user.role === "1" ? "danger" : "primary"
                                } me-1">
                                ${user.role === "1" ? "Admin" : "Home User"}
                                </span>
                            </td>
                            <?php if ($_SESSION['smarthome_role'] === "1") { ?>
                            <td>
                            <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="update_user.php?name=${user.name}&gender=${user.gender}&date_of_birth=${user.date_of_birth}&email=${user.email}&password=${user.password}&role=${user.role}&uid=${user.uid}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <form  method="post" action=""> 
                                            <input type="text" id="uid" name="uid" value="${user.uid} " hidden/>
                                            <button type="submit" class="btn dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                                        </form>
                                        
                                    </div>
                                </div>
                            </td>
                            <?php  } ?>
                            `;

                        tableBody.appendChild(row);
                    });
                })
                .catch(error => {
                    console.error('Error fetching user data:', error);
                });
        }

        // Call the function to fetch user data and populate the table
        fetchUserDataAndPopulateTable();
    </script>


    <script>
        <?php if ($showModal) { ?>
            // Tangkap modal
            const modal = new bootstrap.Modal(document.getElementById('modalTop'));

            // Aktifkan modal saat halaman dimuat
            modal.show();
        <?php } ?>

        // Tangkap tombol "Delete" di dalam modal
        const deleteButton = document.querySelector('#modalTop .btn-danger');

        // Tambahkan event listener untuk tombol "Delete"
        deleteButton.addEventListener('click', async () => {
            const uid = "<?php echo $_POST['uid']; ?>";

            try {
                const response = await axios.post("http://localhost:3000/api/user/deleteUserDataHandler", {
                    uid: uid
                });

                const data = response.data;
                alert(data.message);

                // Tutup modal setelah menghapus data
                if (response.status === 200) {
                    modal.hide();
                    // Tampilkan alert
                    // $("#alert-response").fadeIn().delay(3000).fadeOut();

                    // Mengarahkan pengguna ke halaman lain
                    window.location.href = "user.php";
                }
            } catch (error) {
                console.error("Error:", error);
            }
        });
    </script>



    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Page JS -->
    <script src="../assets/js/ui-modals.js"></script>


</body>

</html>