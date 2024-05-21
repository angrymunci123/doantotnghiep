@extends('adminPage.layout')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
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
    <div id="container"></div>
    
<div style="width: 900px; margin: auto;">
<canvas id="chart"></canvas>
</div>
<script>
    var labels = <?php echo json_encode($labels ?? [], JSON_HEX_TAG); ?>;
    var datasets = <?php echo json_encode($datasets ?? [], JSON_HEX_TAG); ?>;

    var ctx = document.getElementById('chart').getContext('2d'); 
    var orderChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: datasets
        }
    });
</script>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    </div>
@endsection
