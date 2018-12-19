<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>
	<div style="width:100%;">
        <canvas id="canvas"></canvas>
    </div>
    <script src="<?php echo base_url();?>ChartJs/dist/Chart.min.js"></script>
    <script src="<?php echo base_url();?>ChartJs/samples/utils.js"></script>
    <script type="text/javascript">
        var data_json = <?php echo $data_grafik; ?>;
        var data_perbulan  = [];

        for (var i = 0; i < data_json.length; i++) {
            data_perbulan.push(data_json[i].jumlah_perbulan)
        }

        var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
        var config = {
            type: 'line',
            data: {
                labels: MONTHS,
                datasets: [{
                    label: 'My First dataset',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: data_perbulan,
                    fill: false,
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Chart.js Line Chart'
                },
                tooltips: {
                    mode: 'index',
                    intersect: false,
                },
                hover: {
                    mode: 'nearest',
                    intersect: true
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        },
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        },
                    }]
                }
            }
        };

        window.onload = function() {
            var ctx = document.getElementById('canvas').getContext('2d');
            window.myLine = new Chart(ctx, config);
        }

</script>

</body>
</html>