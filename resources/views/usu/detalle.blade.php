@extends('layouts.templateusu')

@section('title', 'Detalle')

@section('style-Hightcharts')
    <style type="text/css">
        #container {
            min-width: 310px;
            max-width: 800px;
            height: 400px;
            margin: 0 auto;
        }
    </style>
@endsection

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
                        <div class="media">
                            <a href="#">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                            </a>
                            <div class="media-body" style="text-align:center;">
                                <h1 class="text-white display-6"><b>Lote: </b> {{ $infolote['0']->codigo }}</h1>
                                <p class="text-light"><b>Nombre: </b>{{ $infolote['0']->nombre }}<br>
                                <b>Variedad: </b>{{ $infolote['0']->variedad }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="weather-category twt-category">
                        <ul>
                            <li class="active" style="color:black;">
                                <h5>{{ $infolote['0']->area }}</h5>
                                Hectareas
                            </li>
                            <li style="color:black;">
                                <h5>{{ $infolote['0']->poblacion }}</h5>
                                Arboles
                            </li>
                            <li style="color:black;">
                                <h5>{{ round($otrosdatoslote['1']) }} @/ha</h5>
                                Prom. producción anual
                            </li>
                        </ul>
                    </div>
                    
                    <div class="twt-write col-sm-12">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="#"> <i class="fa fa-bell-o"></i> Estado actual <span class="badge badge-success pull-right">Zoca Tradicional de 2do Año</span></a>
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
                                    <h2 class="text-light display-6">Análisis de suelos</h2>
                                </div>
                            </div>
                        </div>

                        <div class="weather-category twt-category">
                            @php $contador = 0;
                            for ($i = 0; $i < count($infopropiedades)-1; $i++){
                                echo "<ul>";
                                    for ($j = 0; $j < 3; $j++){
                                        if (!empty($infopropiedades[$contador])) {
                                            echo "<li style='color:black;' >";
                                                echo "<h5>".$infopropiedades[$contador]->cantidad."</h5>";
                                                echo $infopropiedades[$contador]->material." [".$infopropiedades[$contador]->unidad."]";
                                            echo "</li>";
                                        $contador++;
                                        }else {
                                            break;
                                        }        
                                    }                            
                                echo "</ul>";
                            }   
                            @endphp
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
        
        <div class="col-md-12">
            <div id="container"></div>
            <script type="text/javascript">
                Highcharts.chart('container', {
                    title: {
                        text: 'Solar Employment Growth by Sector, 2010-2016'
                    },

                    subtitle: {
                        text: 'Source: thesolarfoundation.com'
                    },

                    yAxis: {
                        title: {
                            text: 'Number of Employees'
                        }
                    },

                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'middle'
                    },

                    plotOptions: {
                        series: {
                            label: {
                                connectorAllowed: false
                            },
                            pointStart: 2010
                        }
                    },
                    
                    series: [{
                        name: 'Installation',
                        data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
                    }, {
                        name: 'Manufacturing',
                        data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
                    }, {
                        name: 'Sales & Distribution',
                        data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
                    }, {
                        name: 'Project Development',
                        data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
                    }, {
                        name: 'Other',
                        data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
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
            </script>     
        </div>
            
        </div>
    </div>
</div>
@endsection            
