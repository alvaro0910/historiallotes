@extends('layouts.templateusu')

@section('title', 'Detalle')

@section('content')
    <div class="content mt-2">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-6">
                    <section class="card">
                        
                        <div class="twt-feed blue-bg">
                            <div class="corner-ribon black-ribon">
                                <i class=""></i>
                            </div>
                            {{-- <div class="fa fa-twitter wtt-mark"></div> --}}

                            <div class="media">
                                <a href="#">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                </a>
                                <div class="media-body">
                                    <h2 class="text-white display-6">Lote 250</h2>
                                    <p class="text-light">Finca Morelia</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="weather-category twt-category">
                            <ul>
                                <li class="active">
                                    <h5>2,5</h5>
                                    Hectareas
                                </li>
                                <li>
                                    <h5>14.060</h5>
                                    Total plantas
                                </li>
                                <li>
                                    <h5>750 @/ha</h5>
                                    Prom. produccion anual
                                </li>
                            </ul>
                        </div>
                        
                        <div class="twt-write col-sm-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#"> <i class="fa fa-bell-o"></i> Estado actual <span class="badge badge-success pull-right">Zoca Tradicional de 2do Año</span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">Zoca Tradicional de 2do Año</span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">Zoca Tradicional de 2do Año</span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">Zoca Tradicional de 2do Año</span></a>
                                </li>
                            </ul>
                        </div>
        
                    </section>
                </div>

                <div class="col-md-6">
                    <aside class="profile-nav alt">
                        <section class="card">
                            <div class="card-header user-header alt bg-dark">
                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-light display-6">Analisis de suelos</h2>
                                            <div class="card">
                                                 <div class="card-body">
                                                    <strong>Seleccionar año </strong><select data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                                        <option value=""></option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="weather-category twt-category">
                                <ul>
                                    <li class="active">
                                        <h5>4,6</h5>
                                        pH
                                    </li>
                                    <li>
                                        <h5>8,65</h5>
                                        MOrg [%]
                                    </li>
                                    <li>
                                        <h5>36</h5>
                                        K [me/100gm]
                                    </li>
                                </ul>
                                <ul>
                                    <li class="active">
                                        <h5>25</h5>
                                        Ca [me/100gm]
                                    </li>
                                    <li>
                                        <h5>865</h5>
                                        Mg [me/100gm]
                                    </li>
                                    <li>
                                        <h5>3,2</h5>
                                        Fe [ppm]
                                    </li>
                                </ul>
                                <ul>
                                    <li class="active">
                                        <h5>0,4</h5>
                                        Al [me/100gm]
                                    </li>
                                    <li>
                                        <h5>8</h5>
                                        Sat_Al [%]
                                    </li>
                                    <li>
                                        <h5>3645</h5>
                                        CIC [me/100gm]
                                    </li>
                                </ul>
                                <ul>
                                    <li class="active">
                                        <h5>25</h5>
                                        Ca [me/100gm]
                                    </li>
                                    <li>
                                        <h5>865</h5>
                                        Mg [me/100gm]
                                    </li>
                                    <li>
                                        <h5>3,2</h5>
                                        Fe [ppm]
                                    </li>
                                </ul>
                                <ul>
                                    <li class="active">
                                        <h5>0,4</h5>
                                        Al [me/100gm]
                                    </li>
                                    <li>
                                        <h5>8</h5>
                                        Sat_Al [%]
                                    </li>
                                    <li>
                                        <h5>3645</h5>
                                        CIC [me/100gm]
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </aside>
                </div>

            </div>    
        </div>
    </div>    
        
    <div class="content mt-2">
        <div class="animated fadeIn">
            <div class="row">
            
                <div class="col-md-6">
                    <div id="container"></div>
                        <script type="text/javascript">
                            Highcharts.chart('container', {
                            chart: {
                                renderTo: 'container',
                                type: 'column'
                            },
                            
                            title: {
                                text: 'Restaurants Complaints'
                            },
                            
                            xAxis: {
                                categories: ['Overpriced', 'Small portions', 'Wait time', 'Food is tasteless', 'No atmosphere', 'Not clean', 'Too noisy', 'Unfriendly staff']
                            },
                            
                            yAxis: [{
                                title: {
                                    text: ''
                                }
                            }, {
                            
                            title: {
                                text: ''
                            },
                                minPadding: 0,
                                maxPadding: 0,
                                max: 100,
                                min: 0,
                                opposite: true,
                                labels: {
                                    format: "{value}%"
                                }
                            }],
                            
                            series: [{
                                type: 'pareto',
                                name: 'Pareto',
                                yAxis: 1,
                                zIndex: 10,
                                baseSeries: 1
                            }, {
                                name: 'Complaints',
                                type: 'column',
                                zIndex: 2,
                                data: [755, 222, 151, 86, 72, 51, 36, 10]
                            }]
                        });
                        </script>
                </div>

                <div class="col-md-6">
                    <div id="container1" style="min-width: 310px; max-width: 800px; height: 400px; margin: 1em auto"></div>
                    <script type="text/javascript">
                        Highcharts.chart('container1', {            
                            chart: {
                                polar: true
                            },
                                
                            title: {
                                text: 'Polar Chart'
                            },
                        
                            pane: {
                                startAngle: 0,
                                endAngle: 360
                            },
                                
                            xAxis: {
                                tickInterval: 45,
                                min: 0,
                                max: 360,
                                labels: {
                                    formatter: function () {
                                        return this.value + '°';
                                    }
                                }
                            },
                                
                            yAxis: {
                                min: 0
                            },
                        
                            plotOptions: {
                                series: {
                                    pointStart: 0,
                                    pointInterval: 45
                                },
                                column: {
                                    pointPadding: 0,
                                    groupPadding: 0
                                }
                            },
                        
                            series: [{
                                type: 'column',
                                name: 'Column',
                                data: [8, 7, 6, 5, 4, 3, 2, 1],
                                pointPlacement: 'between'
                            }, {
                                type: 'line',
                                name: 'Line',
                                data: [1, 2, 3, 4, 5, 6, 7, 8]
                            }, {
                                type: 'area',
                                name: 'Area',
                                data: [1, 8, 2, 7, 3, 6, 4, 5]
                            }]
                        });
                        </script>
                </div>
        
            </div>
        </div>
    </div>
@endsection            
