@extends('adminPage.layout')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel Highcharts Demo</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>
</head>
<body>
    <h1>Highcharts in Laravel Example</h1>
    <div id="container"></div>
    
<div style="width: 900px; margin: auto;">
<canvas id="chart"></canvas>
</div>
<script>
    var ctx = document.getElementById('chart').getContext('2d'); 
    var orderChart = new Chart(ctx, {
        type:'bar',
        data:{
            labels: {!! json_encode($labels) !!},
            datasets: {!! json_encode($datasets) !!}
        },
    });
</script>

</body>
<!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
<!-- <script type="text/javascript">
    var month_orders = 
    Highcharts.chart('container', {
        title: {
            text: 'Number of new users in 2024'
        },
        subtitle: {
            text: 'Shoes Street'
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of New Users'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Number of Orders',
            data: userData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
</script> -->
@endsection
</html>