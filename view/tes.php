<!DOCTYPE html>
<html>

<head>
    <title>Lamp Control</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>
    <h1>Lamp Control</h1>

    <h2>Device Status</h2>
    <table id="statusTable">
        <tr>
            <th>Code</th>
            <th>Value</th>
        </tr>
    </table>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        function getStatus() {
            const url = 'http://localhost:3000/api/lamp/status';

            axios.post(url, {
                    device_id: '<?php echo 'vdevo168550291747733'; ?>'
                })
                .then(response => {
                    const statusData = response.data.result;
                    const table = document.getElementById('statusTable');

                    // Clear existing table rows
                    while (table.rows.length > 1) {
                        table.deleteRow(1);
                    }

                    console.log(statusData);
                    // console.log(statusData[4].value);
                    // console.log(statusData[0].value);

                    // Populate table with status data
                    statusData.forEach(item => {
                        const row = table.insertRow();
                        const codeCell = row.insertCell();
                        const valueCell = row.insertCell();

                        codeCell.textContent = item.code;
                        valueCell.textContent = item.value;
                    });
                })
                .catch(error => {
                    console.error('Error:', error.response.data.error);
                })
                .finally(() => {
                    // Poll again after a delay (e.g., 5 seconds)
                    setTimeout(getStatus, 5000);
                });
        }

        getStatus();
    </script>
</body>

</html>