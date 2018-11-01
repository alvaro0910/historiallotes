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
                <@php
                    
                $arrData = array(
                    "chart" => array(
                        "caption" => "tituo",
                        "showValues" => "0",
                        "theme" => "fusion"
                    )
                ); 
                  
                $arrData["data"] = array();
                 
                foreach ($data as &$e) {
                    $nomlote = ($e->cantidad);
                    array_push($arrData["data"], array(
                        "label" => $row[$nomlote],
                        "value" => $row[]
                    )); 
                }
                    
                $jsonEncodedData = json_encode($arrData);

                $columnChart = new FusionCharts("column2D", "myFirstChart" , 700, 400, "chart-1", "json", $jsonEncodedData);

                // Render the chart
                $columnChart->render();

                // Close the database connection
                $dbhandle->close();
                @endphp
            
            <div id="chart-1"><!-- Fusion Charts will render here--></div>\
                  
            </div>

            <div class="col-md-6">
                
            </div>
    
        </div>
    </div>
</div>

{{ <?php foreach ($infolote as &$item){ $nomlote = ($item->nombre); print_r($nomlote);} ?>'; }}


@endsection            
