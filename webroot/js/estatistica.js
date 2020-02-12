var ctx = document.getElementById('myChart').getContext('2d');

var chart = new Chart(ctx, {

    type: 'bar',
    data: {
        labels: ['Nula', 'Leve', 'Média', 'Grave', 'Gravissima'],


        datasets: [{
            label: 'Gráfico',
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