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
                        <div class="media">
                            <a href="#">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                            </a>
                            <div class="media-body">
                                <h2 class="text-white display-6">Lote: {{ $infolote['0']->codigo }}</h2>
                                <p class="text-light">{{ $infolote['0']->nombre }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="weather-category twt-category">
                        <ul>
                            <li class="active">
                                <h5>{{ $infolote['0']->area }}</h5>
                                Hectareas
                            </li>
                            <li>
                                <h5>{{ $infolote['0']->poblacion }}</h5>
                                Total plantas
                            </li>
                            <li>
                                <h5>{{ round($otrosdatoslote['1']) }} @/ha</h5>
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
                                </div>
                            </div>
                        </div>

                        <div class="weather-category twt-category">
                            @php $contador = 0;
                            for ($i = 0; $i < count($infopropiedades)-1; $i++){
                                echo "<ul>";
                                        
                                    for ($j = 0; $j < 3; $j++){
                                        echo "<li>";
                                                echo "<h5>".$infopropiedades[$contador]->cantidad."</h5>";
                                                echo $infopropiedades[$contador]->material;
                                        echo "</li>";
                                    }
                                    $contador++;
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
        
            <div class="col-md-6">
            
                <div id="chart-1"><!-- Fusion Charts will render here--></div>\
                  
            </div>
    
        </div>
    </div>
</div>
@endsection            
