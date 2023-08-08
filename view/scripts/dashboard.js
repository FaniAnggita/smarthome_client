const getEnergyConsumptionPerHour = () => {
    axios.get('http://localhost:3000/api/lamp/getEnergyConsumptionPerHour')
        .then(response => {
            const data = response.data;
            const reversedTotalKwhPerHour = data.map(item => item.total_kwh_per_hour).reverse();
            const chartData = data.map((item, index) => ({
                x: item.hour,
                y: reversedTotalKwhPerHour[index]
            }));

            const options = {
                chart: {
                    type: 'area',
                    height: 200
                },
                series: [{
                    name: 'Energy Consumption',
                    data: chartData
                }],
                xaxis: {
                    type: 'category'
                },
                fill: {
                    opacity: 0.5
                },
                tooltip: {
                    enabled: true,
                    formatter: function(val) {
                        const dataItem = data[val.dataPointIndex];
                        return `Hour: ${dataItem.hour}<br>Total kwh per Hour: ${reversedTotalKwhPerHour[val.dataPointIndex]}`;
                    }
                }
            };

            const chart = new ApexCharts(document.querySelector('#energyPerHour'), options);
            chart.render();
        })
        .catch(error => {
            console.error('Error:', error.message);
            // Lakukan penanganan kesalahan
        });
};

const getEnergyConsumptionPerWeek = () => {
    axios.get('http://localhost:3000/api/lamp/getEnergyConsumptionPerWeek')
    .then((response) => {
        const chartData = response.data.map((data) => {
            return {
                x: data.date,
                y: data.total_kwh_per_day,
            };
        });

        // ApexCharts configuration options
        const options = {
            chart: {
                type: 'area',
                height: 350,
                zoom: {
                    enabled: true,
                    type: 'x',
                    autoScaleYaxis: true
                },
            },
            series: [{
                name: 'Energy Consumption',
                data: chartData,
            }, ],
            xaxis: {
                type: 'datetime',
                categories: chartData.map((data) => data.x),
            },
        };

        // Create a new ApexCharts instance with the configuration options
        const chart = new ApexCharts(document.querySelector('#energyPerWeek'), options);

        // Render the chart
        chart.render();
    })
    .catch((error) => {
        console.error(error);
    });
};

const getEnergyConsumptionPerMonth = () => {
    axios
      .get('http://localhost:3000/api/lamp/getEnergyConsumptionPerMonth')
      .then((response) => {
        const chartData = response.data.map((data) => {
          return {
            x: getMonthName(data.month),
            y: data.total_kwh_per_month,
          };
        });
  
        // ApexCharts configuration options
        const options = {
          chart: {
            type: 'area',
            height: 350,
            zoom: {
              enabled: true,
              type: 'x',
              autoScaleYaxis: true,
            },
          },
          series: [
            {
              name: 'Energy Consumption',
              data: chartData,
            },
          ],
          xaxis: {
            type: 'category',
            categories: chartData.map((data) => data.x),
          },
        };
  
        // Create a new ApexCharts instance with the configuration options
        const chart = new ApexCharts(document.querySelector('#energyPerMonth'), options);
  
        // Render the chart
        chart.render();
      })
      .catch((error) => {
        console.error(error);
      });
  };
  
  const getMonthName = (month) => {
    const monthNames = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'July',
      'August',
      'September',
      'October',
      'November',
      'December',
    ];
    return monthNames[month - 1];
  };
  
  

// Panggil fungsi untuk mendapatkan data dan membuat grafik
getEnergyConsumptionPerHour();
getEnergyConsumptionPerWeek();
getEnergyConsumptionPerMonth();