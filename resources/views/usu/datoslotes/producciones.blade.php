    @extends('layouts.templateusu')

@section('title', 'Info')

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
                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2018</h3>
                                        <p>
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
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2017</h3>
                                        <p>
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
                                        </p>
                                    </div>
                                </div>    
                                
                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2016</h3>
                                        <p>
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
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2015</h3>
                                        <p>
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
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2014</h3>
                                        <p>
                                        <div id="container3d5"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d5',
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
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2013</h3>
                                        <p>
                                        <div id="container3d6"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d6',
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
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2012</h3>
                                        <p>
                                        <div id="container3d7"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d7',
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
                                        </p>
                                    </div>
                                </div>    
                                
                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2011</h3>
                                        <p>
                                        <div id="container3d8"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d8',
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
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2010</h3>
                                        <p>
                                        <div id="container3d9"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d9',
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
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2009</h3>
                                        <p>
                                        <div id="container3d10"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d10',
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
                                        </p>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h3>2008</h3>
                                        <p>
                                        <div id="container3d11"></div>
                                        <script type="text/javascript">
                                            var chart = new Highcharts.Chart({
                                                chart: {
                                                    renderTo: 'container3d11',
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
                                        </p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h3>Anual</h3>
                                    <p>aca estamos </p>
                                </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection

    
                        
