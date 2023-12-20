<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Pie Chart Example</title>
    <!-- Include Chart.js library -->
    <script src="<?=base_url('assets/js/chart.js')?>"></script>
</head>
<body>

<div>
    <p>Total Mahasiswa: <?php echo $total_mahasiswa; ?></p>
</div>

<div style="width: 80%;">
    <!-- Add a canvas for the bar chart -->
    <canvas id="myBarChart"></canvas>
</div>

<!-- Add a canvas for the pie chart -->
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pie chart</h4>
                <canvas id="pieChart" style="height: 250px;"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    // Get data from PHP variable
    var mahasiswaData = <?php echo json_encode($mahasiswa); ?>;

    // Extract labels and values from the data for pie chart
    var pieLabels = mahasiswaData.map(function(item) {
        return item.nama;
    });

    var pieValues = mahasiswaData.map(function(item) {
        return item.jurusan;
    });

    // Create a pie chart
    var pieCtx = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: pieLabels,
            datasets: [{
                data: pieValues,
                backgroundColor: [
                    'red',
                    'blue',
                    'green',
                    // Add more colors as needed
                ],
            }],
        },
    });
</script>

</body>
</html>
