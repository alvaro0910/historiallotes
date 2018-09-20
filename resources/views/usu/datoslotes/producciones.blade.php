    @extends('layouts.templateusu')

@section('title', 'Producciones')

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
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mensual</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Anual</a>
                                </li>
                            </ul>
                            
                            
                            <div class="tab-content pl-3 p-1" id="myTabContent">
                                
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <p>
                                    
                                    <div class="col-lg-4">
                                        <h3>2018</h3>
                                        <div id="container3d1"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d1',
                                                    type: 'column',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Chart rotation demo'
                                                },
                                                subtitle: {
                                                    text: 'Test options by dragging the sliders below'
                                                },
                                                plotOptions: {
                                                    column: {
                                                        depth: 25
                                                    }
                                                },
                                                series: [{
                                                    data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                                                }]
                                            });
                                        </script>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <h3>2017</h3>
                                        <div id="container3d2"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d2',
                                                    type: 'column',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Chart rotation demo'
                                                },
                                                subtitle: {
                                                    text: 'Test options by dragging the sliders below'
                                                },
                                                plotOptions: {
                                                    column: {
                                                        depth: 25
                                                    }
                                                },
                                                series: [{
                                                    data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                                                }]
                                            });
                                        </script>
                                    </div>

                                    <div class="col-lg-4">
                                        <h3>2016</h3>
                                        <div id="container3d3"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d3',
                                                    type: 'column',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Chart rotation demo'
                                                },
                                                subtitle: {
                                                    text: 'Test options by dragging the sliders below'
                                                },
                                                plotOptions: {
                                                    column: {
                                                        depth: 25
                                                    }
                                                },
                                                series: [{
                                                    data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                                                }]
                                            });
                                        </script>
                                    </div>
                                        
                                    <div class="col-lg-4">
                                        <h3>2015</h3>
                                        <div id="container3d4"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d4',
                                                    type: 'column',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Chart rotation demo'
                                                },
                                                subtitle: {
                                                    text: 'Test options by dragging the sliders below'
                                                },
                                                plotOptions: {
                                                    column: {
                                                        depth: 25
                                                    }
                                                },
                                                series: [{
                                                    data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                                                }]
                                            });
                                        </script>
                                    </div>

                                    </p>
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <p>
                                    
                                    <div class="col-lg-4">
                                        <h3>2008-2018</h3>
                                        <div id="container12"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container12',
                                                    type: 'column',
                                                    options3d: {
                                                        enabled: true,
                                                        alpha: 15,
                                                        beta: 15,
                                                        depth: 50,
                                                        viewDistance: 25
                                                    }
                                                },
                                                title: {
                                                    text: 'Chart rotation demo'
                                                },
                                                subtitle: {
                                                    text: 'Test options by dragging the sliders below'
                                                },
                                                plotOptions: {
                                                    column: {
                                                        depth: 25
                                                    }
                                                },
                                                series: [{
                                                    data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
                                                }]
                                            });
                                        </script>
                                    </div>
                                    
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

    
                        
