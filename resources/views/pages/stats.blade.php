@extends('layout.master')          
@section('content')            

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Statistiques de criminalité de votre pays</h1>
    <p class="mb-4">
        <a target="_blank" href="https://www.chartjs.org/docs/latest/">ci-dessous  les graphes statistiques de criminalité de votre ville</a>.
    </p>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-8 col-lg-7">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Crimes en fonction des villes</h6>
                </div>
                <div class="card-body">
                    <div style="width: 100%;">
                        <canvas id="cityChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <!-- Pie Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Types de crimes</h6>
                </div>
                <div class="card-body">
                    <div style="width: 100%;">
                        <canvas id="typeChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- /.container-fluid -->

<!-- JavaScript pour les graphiques -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Histogramme des crimes par ville
        var cityCtx = document.getElementById('cityChart').getContext('2d');
        var cityChart = new Chart(cityCtx, {
            type: 'bar',
            data: {
                labels: @json($alertsByCity->pluck('ville')),
                datasets: [{
                    label: 'Nombre de crimes',
                    data: @json($alertsByCity->pluck('total')),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
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

        // Diagramme circulaire des types de crimes
        var typeCtx = document.getElementById('typeChart').getContext('2d');
        var typeChart = new Chart(typeCtx, {
            type: 'pie',
            data: {
                labels: @json($alertsByType->pluck('type')),
                datasets: [{
                    label: 'Nombre de crimes',
                    data: @json($alertsByType->pluck('total')),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                var label = context.label || '';
                                var value = context.raw || 0;
                                return label + ': ' + value;
                            }
                        }
                    }
                }
            }
        });
    });
</script>

@endsection
