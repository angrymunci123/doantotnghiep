@extends('adminPage.layout')
@section('content')
    <?php
    session_start();
    ?>
        <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="me-md-3 me-xl-5">
                <h2 style="color:black">Revenue Statistics</h2>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>Total Orders</label>
                    <h1>{{ $total_order }}</h1>
                    <a href="/admin/statistics/orders_sold" class="text-white">View details</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>Today Orders</label>
                    <h1>{{ $today_orders }}</h1>
                    <a href="/admin/statistics/orders_sold" class="text-white">View details</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>This Month Orders</label>
                    <h1>{{ $month_orders }}</h1>
                    <a href="/admin/statistics/orders_sold" class="text-white">View details</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>This Year Orders</label>
                    <h1>{{ $year_orders }}</h1>
                    <a href="/admin/statistics/orders_sold" class="text-white">View details</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label>Unit Sold</label>
                    <h1>{{ $units_sold }}</h1>
                    <a href="/admin/statistics/orders_sold" class="text-white">View details</a>
                </div>
            </div>
        </div>
        <hr>
        <h2 style="color:black">Revenue Chart</h2>
        <div id="myfirstchart" style="height: 250px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            <canvas id="line-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    </div>
@endsection
<!-- <script type="text/javascript">
    window.onload = function () {
        Chart.defaults.global.defaultFontColor = '#000000';
        Chart.defaults.global.defaultFontFamily = 'Arial';
        var lineChart = document.getElementById('line-chart');
        var myChart = new Chart(lineChart, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "June"],
                datasets: [
                    {
                        label: 'PHP Activities',
                        data: [80, 30, 63, 20, 110, 3],
                        backgroundColor: 'rgba(0, 128, 128, 0.3)',
                        borderColor: 'rgba(0, 128, 128, 0.7)',
                        borderWidth: 1
                    },
                    {
                        label: 'Ruby Activities',
                        data: [18, 72, 10, 39, 19, 75],
                        backgroundColor: 'rgba(0, 128, 128, 0.7)',
                        borderColor: 'rgba(0, 128, 128, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                },
            }
        });
    };
</script> -->