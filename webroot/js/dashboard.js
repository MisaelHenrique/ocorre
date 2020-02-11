$(document).ready(function() {
    //Apresentar ou ocultar o menu
    $('.sidebar-toggle').on('click', function() {
        $('.sidebar').toggleClass('toggled');
    });

    //carregar aberto o submenu
    var active = $('.sidebar .active');
    if (active.length && active.parent('.collapse').length) {
        var parent = active.parent('.collapse');

        parent.prev('a').attr('aria-expanded', true);
        parent.addClass('show');
    }
});

function previewImagem() {
    var imagem = document.querySelector('input[name=imagem]').files[0];
    var preview = document.querySelector('#preview-img');

    var reader = new FileReader();
    reader.onloadend = function() {
        preview.src = reader.result;
    };
    if (imagem) {
        reader.readAsDataURL(imagem);
    } else {
        preview.src = "";
    }
}

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