@extends('layouts.templateusu')

@section('title', 'Costo Labores')

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Costo labores (LOTE 250)</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Grupo labores</th>
                                        <th>2018</th>
                                        <th>2017</th>
                                        <th>2016</th>
                                        <th>2015</th>
                                        <th>2014</th>
                                        <th>2013</th>
                                        <th>2012</th>
                                        <th>2011</th>
                                        <th>2010</th>
                                        <th>2009</th>
                                        <th>2008</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Recoleccion</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                    <td>Control malezas</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                    <td>Fertilizacion</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                    <td>Control Sanitario</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12" id="container2">
                    <script type="text/javascript">
                        Highcharts.chart('container2', {

                            chart: {
                                backgroundColor: '#FFFFFF',
                                type: 'heatmap',
                                marginTop: 40,
                                marginBottom: 80,
                                plotBorderWidth: 1
                            },

                            title: {
                                text: 'Recoleccion'
                            },

                            xAxis: {
                                categories: ['2018', '2017', '2016', '2015', '2014', '2013', '2012', '2011', '2010', '2009', '2008']
                            },

                            yAxis: {
                                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                title: null
                            },

                            colorAxis: {
                                min: 0,
                                minColor: '#FFFFFF',
                                maxColor: Highcharts.getOptions().colors[0]
                            },

                            legend: {
                                align: 'right',
                                layout: 'vertical',
                                margin: 0,
                                verticalAlign: 'top',
                                y: 25,
                                symbolHeight: 280
                            },

                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> sold <br><b>' +
                                        this.point.value + '</b> items on <br><b>' + this.series.yAxis.categories[this.point.y] + '</b>';
                                }
                            },

                            series: [{
                                name: 'Sales per employee',
                                borderWidth: 1,
                                data: [[0, 0, 10], [0, 1, 19], [0, 2, 8], [0, 3, 24], [0, 4, 67],[0, 5, 10], [0, 6, 19], [0, 7, 8], [0, 8, 24], [0, 9, 67], [0, 10, 57], [0, 11, 46], [1, 0, 92], [1, 1, 78], [1, 2, 78], [1, 3, 117], [1, 4, 48], [2, 0, 35], [2, 1, 15], [2, 2, 123], [2, 3, 64], [2, 4, 52], [3, 0, 72], [3, 1, 132], [3, 2, 114], [3, 3, 19], [3, 4, 16], [4, 0, 38], [4, 1, 5], [4, 2, 8], [4, 3, 117], [4, 4, 115], [5, 0, 88], [5, 1, 32], [5, 2, 12], [5, 3, 6], [5, 4, 120], [6, 0, 13], [6, 1, 44], [6, 2, 88], [6, 3, 98], [6, 4, 96], [7, 0, 31], [7, 1, 1], [7, 2, 82], [7, 3, 32], [7, 4, 30], [8, 0, 85], [8, 1, 97], [8, 2, 123], [8, 3, 64], [8, 4, 84], [9, 0, 47], [9, 1, 114], [9, 2, 31], [9, 3, 48], [9, 4, 91], [10, 4, 76]],
                                dataLabels: {
                                    enabled: true,
                                    color: '#000000'
                                }
                            }]
                        });
                    </script>
                </div>
                <div>.</div>
                <div class="col-md-12" id="container3">
                    <script type="text/javascript">
                        Highcharts.chart('container3', {

                            chart: {
                                type: 'heatmap',
                                marginTop: 40,
                                marginBottom: 80,
                                plotBorderWidth: 1
                            },

                            title: {
                                text: 'Control malezas'
                            },

                            xAxis: {
                                categories: ['2018', '2017', '2016', '2015', '2014', '2013', '2012', '2011', '2010', '2009', '2008']
                            },

                            yAxis: {
                                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                title: null
                            },

                            colorAxis: {
                                min: 0,
                                minColor: '#FFFFFF',
                                maxColor: Highcharts.getOptions().colors[0]
                            },

                            legend: {
                                align: 'right',
                                layout: 'vertical',
                                margin: 0,
                                verticalAlign: 'top',
                                y: 25,
                                symbolHeight: 280
                            },

                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> sold <br><b>' +
                                        this.point.value + '</b> items on <br><b>' + this.series.yAxis.categories[this.point.y] + '</b>';
                                }
                            },

                            series: [{
                                name: 'Sales per employee',
                                borderWidth: 1,
                                data: [[0, 0, 10], [0, 1, 19], [0, 2, 8], [0, 3, 24], [0, 4, 67],[0, 5, 10], [0, 6, 19], [0, 7, 8], [0, 8, 24], [0, 9, 67], [0, 10, 57], [0, 11, 46], [1, 0, 92], [1, 1, 78], [1, 2, 78], [1, 3, 117], [1, 4, 48], [2, 0, 35], [2, 1, 15], [2, 2, 123], [2, 3, 64], [2, 4, 52], [3, 0, 72], [3, 1, 132], [3, 2, 114], [3, 3, 19], [3, 4, 16], [4, 0, 38], [4, 1, 5], [4, 2, 8], [4, 3, 117], [4, 4, 115], [5, 0, 88], [5, 1, 32], [5, 2, 12], [5, 3, 6], [5, 4, 120], [6, 0, 13], [6, 1, 44], [6, 2, 88], [6, 3, 98], [6, 4, 96], [7, 0, 31], [7, 1, 1], [7, 2, 82], [7, 3, 32], [7, 4, 30], [8, 0, 85], [8, 1, 97], [8, 2, 123], [8, 3, 64], [8, 4, 84], [9, 0, 47], [9, 1, 114], [9, 2, 31], [9, 3, 48], [9, 4, 91], [10, 4, 76]],
                                dataLabels: {
                                    enabled: true,
                                    color: '#000000'
                                }
                            }]
                        });
                    </script>
                </div>
                <div>.</div>
                <div class="col-md-12" id="container4">
                    <script type="text/javascript">
                        Highcharts.chart('container4', {

                            chart: {
                                type: 'heatmap',
                                marginTop: 40,
                                marginBottom: 80,
                                plotBorderWidth: 1
                            },

                            title: {
                                text: 'Control sanitario'
                            },

                            xAxis: {
                                categories: ['2018', '2017', '2016', '2015', '2014', '2013', '2012', '2011', '2010', '2009', '2008']
                            },

                            yAxis: {
                                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                title: null
                            },

                            colorAxis: {
                                min: 0,
                                minColor: '#FFFFFF',
                                maxColor: Highcharts.getOptions().colors[0]
                            },

                            legend: {
                                align: 'right',
                                layout: 'vertical',
                                margin: 0,
                                verticalAlign: 'top',
                                y: 25,
                                symbolHeight: 280
                            },

                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> sold <br><b>' +
                                        this.point.value + '</b> items on <br><b>' + this.series.yAxis.categories[this.point.y] + '</b>';
                                }
                            },

                            series: [{
                                name: 'Sales per employee',
                                borderWidth: 1,
                                data: [[0, 0, 10], [0, 1, 19], [0, 2, 8], [0, 3, 24], [0, 4, 67],[0, 5, 10], [0, 6, 19], [0, 7, 8], [0, 8, 24], [0, 9, 67], [0, 10, 57], [0, 11, 46], [1, 0, 92], [1, 1, 78], [1, 2, 78], [1, 3, 117], [1, 4, 48], [2, 0, 35], [2, 1, 15], [2, 2, 123], [2, 3, 64], [2, 4, 52], [3, 0, 72], [3, 1, 132], [3, 2, 114], [3, 3, 19], [3, 4, 16], [4, 0, 38], [4, 1, 5], [4, 2, 8], [4, 3, 117], [4, 4, 115], [5, 0, 88], [5, 1, 32], [5, 2, 12], [5, 3, 6], [5, 4, 120], [6, 0, 13], [6, 1, 44], [6, 2, 88], [6, 3, 98], [6, 4, 96], [7, 0, 31], [7, 1, 1], [7, 2, 82], [7, 3, 32], [7, 4, 30], [8, 0, 85], [8, 1, 97], [8, 2, 123], [8, 3, 64], [8, 4, 84], [9, 0, 47], [9, 1, 114], [9, 2, 31], [9, 3, 48], [9, 4, 91], [10, 4, 76]],
                                dataLabels: {
                                    enabled: true,
                                    color: '#000000'
                                }
                            }]
                        });
                    </script>
                </div>
                <div>.</div>
                <div class="col-md-12" id="container5">
                    <script type="text/javascript">
                        Highcharts.chart('container5', {

                            chart: {
                                type: 'heatmap',
                                marginTop: 40,
                                marginBottom: 80,
                                plotBorderWidth: 1
                            },

                            title: {
                                text: 'Fertilizacion'
                            },

                            xAxis: {
                                categories: ['2018', '2017', '2016', '2015', '2014', '2013', '2012', '2011', '2010', '2009', '2008']
                            },

                            yAxis: {
                                categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                title: null
                            },

                            colorAxis: {
                                min: 0,
                                minColor: '#FFFFFF',
                                maxColor: Highcharts.getOptions().colors[0]
                            },

                            legend: {
                                align: 'right',
                                layout: 'vertical',
                                margin: 0,
                                verticalAlign: 'top',
                                y: 25,
                                symbolHeight: 280
                            },

                            tooltip: {
                                formatter: function () {
                                    return '<b>' + this.series.xAxis.categories[this.point.x] + '</b> sold <br><b>' +
                                        this.point.value + '</b> items on <br><b>' + this.series.yAxis.categories[this.point.y] + '</b>';
                                }
                            },

                            series: [{
                                name: 'Sales per employee',
                                borderWidth: 1,
                                data: [[0, 0, 10], [0, 1, 19], [0, 2, 8], [0, 3, 24], [0, 4, 67],[0, 5, 10], [0, 6, 19], [0, 7, 8], [0, 8, 24], [0, 9, 67], [0, 10, 57], [0, 11, 46], [1, 0, 92], [1, 1, 78], [1, 2, 78], [1, 3, 117], [1, 4, 48], [2, 0, 35], [2, 1, 15], [2, 2, 123], [2, 3, 64], [2, 4, 52], [3, 0, 72], [3, 1, 132], [3, 2, 114], [3, 3, 19], [3, 4, 16], [4, 0, 38], [4, 1, 5], [4, 2, 8], [4, 3, 117], [4, 4, 115], [5, 0, 88], [5, 1, 32], [5, 2, 12], [5, 3, 6], [5, 4, 120], [6, 0, 13], [6, 1, 44], [6, 2, 88], [6, 3, 98], [6, 4, 96], [7, 0, 31], [7, 1, 1], [7, 2, 82], [7, 3, 32], [7, 4, 30], [8, 0, 85], [8, 1, 97], [8, 2, 123], [8, 3, 64], [8, 4, 84], [9, 0, 47], [9, 1, 114], [9, 2, 31], [9, 3, 48], [9, 4, 91], [10, 4, 76]],
                                dataLabels: {
                                    enabled: true,
                                    color: '#000000'
                                }
                            }]
                        });
                    </script>
                </div>

            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/data-table/datatables-init.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

@endsection



