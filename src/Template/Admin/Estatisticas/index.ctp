<?php echo debug($gravidades); ?>
<h1>Estatisticas</h1>
    <hr>

    <div class="form-row">
        <div class="form-group col-md-9">

            <canvas id="myChart">
                <script>
                var ctx = document.getElementById('myChart').getContext('2d');

                var chart = new Chart(ctx, {

                    type: 'bar',
                    data: {
                        labels: <?= $gravidades ?>,


                        datasets: [{
                            label: 'Ocorrencias',
                            backgroundColor: ['lightgray', 'green', 'yellow', 'orange', 'red'],
                            borderColor: 'rgb(255, 99, 132)',
                            data: [10, 20, 30, 40, 50]
                        }]
                    },

                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }],
                            yAxes: [{
                                stacked: true
                            }]
                        }
                    }
                });
                </script>
            </canvas>

        </div>
    </div>