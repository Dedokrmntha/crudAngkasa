<div>
    <canvas id="Cart" width="400" height="200"></canvas>
</div>

<script>
    $(document).ready(function() {
        $.ajax({
            url: "<?php echo base_url('home/get_cart'); ?>",
            method: "GET",
            dataType: "json",
            success: function(data) {
                var id_jurusan = [];
                var alamat = [];

                for (var i in data) {
                    id_jurusan.push(data[i].id_jurusan);
                    alamat.push(data[i].alamat);
                }

                var ctx = document.getElementById("Cart").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Revenue',
                            data: revenue,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
        });
    });
</script>
