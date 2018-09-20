@extends('layouts.templateusu')

@section('title', 'Rendimientos')

@section('content')
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Historial produccion lote (250)</h4>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="r1-tab" data-toggle="tab" href="#r1" role="tab" aria-controls="r1" aria-selected="true">Ren 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="r2-tab" data-toggle="tab" href="#r2" role="tab" aria-controls="r2" aria-selected="false">Ren 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="r3-tab" data-toggle="tab" href="#r3" role="tab" aria-controls="r3" aria-selected="false">Ren 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="r4-tab" data-toggle="tab" href="#r4" role="tab" aria-controls="r4" aria-selected="false">Ren 4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="r5-tab" data-toggle="tab" href="#r5" role="tab" aria-controls="r5" aria-selected="false">Ren 5</a>
                                </li>
                            </ul>
                            
                            <div class="tab-content pl-3 p-1" id="myTabContent">
                                
                                <div class="tab-pane fade show active" id="r1" role="tabpanel" aria-labelledby="r1-tab">
                                    <p>
                                    1
                                    </p>
                                </div>

                                <div class="tab-pane fade" id="r2" role="tabpanel" aria-labelledby="r2-tab">
                                    <p>
                                    2
                                    </p>
                                </div>
                            
                                <div class="tab-pane fade" id="r3" role="tabpanel" aria-labelledby="r3-tab">
                                    <p>
                                    3
                                    </p>
                                </div>

                                <div class="tab-pane fade" id="r4" role="tabpanel" aria-labelledby="r4-tab">
                                    <p>
                                    4
                                    </p>
                                </div>

                                <div class="tab-pane fade" id="r5" role="tabpanel" aria-labelledby="r5-tab">
                                    <p>
                                    5
                                    </p>
                                </div>

                            </div> 
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection

    
                        
