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
                                Prom. produccion anual
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
                                    <h2 class="text-light display-6">Analisis de suelos</h2>
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
                  
        </div>
            
        </div>
    </div>
</div>
@endsection            
