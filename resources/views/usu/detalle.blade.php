@extends('layouts.templateusu')

@section('title', 'Detalle')

@section('style-Hightcharts')
    <style type="text/css">
        #container {
            min-width: 400px; 
            max-width: 600px; 
            height: 400px; 
            margin: 0 auto
        }

        #container1 {
            min-width: 310px; 
            height: 400px; 
            margin: 0 auto
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
                    chart: {
                        polar: true,
                        type: 'line'
                    },

                    title: {
                        text: 'Esperado vs resultado',
                        x: -80
                    },

                    pane: {
                        size: '80%'
                    },

                    xAxis: {
                        categories: ['Ph', 'MOrg', 'K', 'Ca','Mg', 'P', 'Al'],
                        tickmarkPlacement: 'on',
                        lineWidth: 0
                    },

                    yAxis: {
                        gridLineInterpolation: 'polygon',
                        lineWidth: 0,
                        min: 0
                    },

                    tooltip: {
                        shared: true,
                        pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
                    },

                    legend: {
                        align: 'right',
                        verticalAlign: 'top',
                        y: 70,
                        layout: 'vertical',
                        floating: true
                    },

                    series: [{
                        name: 'Análisis esperado',
                        data: [2.2, 1.4, 1.8, 2, 1, 0.4, 2.5],
                        pointPlacement: 'on'
                    }, {
                        name: 'Resultado actual',
                        data: [
                            @php
                            foreach($infopropiedades as $cantidad => $item)
                            {
                            @endphp
                                @php 
                                    echo ($item->cantidad); 
                                @endphp,
                            @php  
                            }
                            @endphp
                        ],
                        pointPlacement: 'on'
                    }]
                });
            </script>     
        </div>
            
        </div>
    </div>
</div>

<div class="content mt-2">
    <div class="animated fadeIn">
        <div class="row">
        
        <div class="col-md-12">
            <div id="container1"></div>
            <script type="text/javascript">

            Highcharts.chart('container1', {
                chart: {
                    type: 'line'
                },
                title: {
                    text: 'Producción mensual'
                },
                subtitle: {
                    text: '{{ $infolote['0']->codigo }}'
                },
                xAxis: {
                    categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
                },
                yAxis: {
                    title: {
                        text: 'Producción (kg)'
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: [{
                    name: '{{ $infolote['0']->codigo }}',
                    data: [
                        @php
                        foreach($produccionlote as $cantidad => $item)
                        {
                        @endphp
                            @php 
                                echo ($item->cantidad); 
                            @endphp,
                        @php  
                        }
                        @endphp
                    ]
                }]
            });
		    </script>
        </div>    
            
        </div>
    </div>
</div>

@endsection            
