<?php
$device_id = $_GET['device_id'];
?>

<!DOCTYPE html>
<html>

<head>
    <title>Device Detail</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Add custom styles here if needed */
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1>Device Detail</h1>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Code</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody id="statusTableBody">
                    <!-- Status data will be populated here -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function getStatus() {
            const url = 'http://localhost:3000/api/lamp/status';

            axios.post(url, {
                    device_id: '<?php echo $device_id; ?>'
                })
                .then(response => {
                    const statusData = response.data.result;
                    const statusTableBody = document.getElementById('statusTableBody');

                    // Clear existing table rows
                    while (statusTableBody.firstChild) {
                        statusTableBody.removeChild(statusTableBody.firstChild);
                    }

                    // Populate table with status data
                    statusData.forEach(item => {
                        const row = document.createElement('tr');
                        const codeCell = document.createElement('td');
                        const valueCell = document.createElement('td');

                        codeCell.textContent = item.code;
                        valueCell.textContent = item.value;

                        row.appendChild(codeCell);
                        row.appendChild(valueCell);

                        statusTableBody.appendChild(row);
                    });
                })
                .catch(error => {
                    console.error('Error:', error.response.data.error);
                })
                .finally(() => {
                    // Poll again after a delay (e.g., 5 seconds)
                    // setTimeout(getStatus, 5000);
                });
        }

        getStatus();
    </script>
</body>

</html>