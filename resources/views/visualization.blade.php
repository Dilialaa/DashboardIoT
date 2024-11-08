@extends('main')

@section('content')
<div class="container text-center my-4">
    <!-- Dropdowns Row -->
    <div class="row justify-content-center mb-4">
        <!-- Chart Dropdown -->
        <div class="col-auto">
            <div class="dropdown">
                <select class="styled-dropdown">
                    <option>Chart</option>
                    <!-- Add options if needed -->
                </select>
            </div>
        </div>

        <!-- Dimension Dropdown -->
        <div class="col-auto">
            <div class="dropdown">
                <select class="styled-dropdown">
                    <option>Dimension</option>
                    <!-- Add options if needed -->
                </select>
            </div>
        </div>

        <!-- Metric Dropdown -->
        <div class="col-auto">
            <div class="dropdown">
                <select class="styled-dropdown">
                    <option>Metric</option>
                    <!-- Add options if needed -->
                </select>
            </div>
        </div>
    </div>

    <!-- First Row of Charts -->
    <div class="row">
        <!-- Bar Chart -->
        <div class="col-md-6 mb-4">
            <canvas id="barChart"></canvas>
        </div>

        <!-- Line Chart -->
        <div class="col-md-6 mb-4">
            <canvas id="lineChart"></canvas>
        </div>
    </div>

    <!-- Second Row of Charts -->
    <div class="row">
        <!-- Area Chart -->
        <div class="col-md-6 mb-4">
            <canvas id="areaChart"></canvas>
        </div>

        <!-- Pie Chart -->
        <div class="col-md-6 mb-4">
            <canvas id="pieChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Bar Chart
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['India', 'USA', 'Indonesia', 'Brazil', 'Russia', 'Japan'],
            datasets: [
                {
                    label: 'Population',
                    data: [1380004385, 331002651, 273523615, 212559417, 145934462, 126476461],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)'
                },
                {
                    label: 'Total Cases',
                    data: [1000000, 900000, 800000, 700000, 600000, 500000],
                    backgroundColor: 'rgba(255, 99, 132, 0.6)'
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Line Chart
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [
                {
                    label: 'Active',
                    data: [0, 100, 500, 1000, 5000, 8000, 12000],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false
                },
                {
                    label: 'Deaths',
                    data: [0, 50, 200, 400, 1000, 1500, 2000],
                    borderColor: 'rgba(255, 159, 64, 1)',
                    fill: false
                },
                {
                    label: 'Recovered',
                    data: [0, 30, 300, 700, 4000, 7500, 11500],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Area Chart
    const areaCtx = document.getElementById('areaChart').getContext('2d');
    new Chart(areaCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            datasets: [
                {
                    label: 'Fluctuation',
                    data: [5, 10, 15, 10, 5, 7, 12],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    fill: true
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Pie Chart
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    new Chart(pieCtx, {
        type: 'pie',
        data: {
            labels: ['Legend 1', 'Legend 2', 'Legend 3', 'Legend 4'],
            datasets: [
                {
                    data: [40, 25, 20, 15],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                    ]
                }
            ]
        },
        options: {
            responsive: true
        }
    });
</script>

@endsection
