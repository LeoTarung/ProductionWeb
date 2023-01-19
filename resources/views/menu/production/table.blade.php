@extends('main')
@section('content')
    <div class="main-content d-flex flex-column">
        <div class="container-fluid">
            <div class="card">
                <div>
                    <canvas id="myChart"></canvas>
                </div>
            </div>

        </div>
    </div>
    <script></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ingot = @json($ingot);
        var loss = @json($loss);
        var total_charging = @json($total_charging);
        var sampleChart;

        (function($) {
            $(document).ready(function() {
                console.log(ingot);
                const ctx = document.getElementById('myChart').getContext('2d');
                sampleChart.ChartData(ctx)
            })
        });

        // const ctx = document.getElementById('myChart');
        sampleChart = {
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: 'sales',
                        data: [12000, 19000, 3000, 5000, 2000, 3000],
                        borderWidth: 1,
                        backgroundColor: [
                            'rgba(255, 26, 104, 0.2)'
                        ],
                        borderColor: [
                            'rgba(0, 0, 0, 1)'
                        ],
                        yAxisID: 'y'
                    }, {
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        backgroundColor: [
                            'rgba(128, 0, 0, 1)'
                        ],
                        borderColor: [
                            'rgba(128, 0, 0, 1)'
                        ],
                        type: 'line',
                        yAxisID: 'quantity'
                    }, {
                        label: 'hh',
                        data: [12, 20, 7, 1, 2, 6],
                        backgroundColor: [
                            'rgba(0, 0, 0, 0.2)'
                        ],
                        borderColor: [
                            'rgba(0, 0, 0, 1)'
                        ],
                        type: 'line',
                        yAxisID: 'quantity'
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            type: 'linear',
                            position: 'left'
                        },
                        quantity: {
                            beginAtZero: true,
                            type: 'linear',
                            position: 'right'
                        }
                    }
                }
            });
        }
    </script>
@endsection
