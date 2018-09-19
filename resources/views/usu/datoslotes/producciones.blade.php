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
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Menu 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Menu 2</a>
                                </li>
                            </ul>
                            
                            <div class="tab-content pl-3 p-1" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <h3>Home</h3>
                                    <p>
                                    <div id="container3d"></div>
                                    <div id="sliders">
                                        <table>
                                            <tr>
                                                <td>Alpha Angle</td>
                                                <td><input id="alpha" type="range" min="0" max="45" value="15"/> <span id="alpha-value" class="value"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Beta Angle</td>
                                                <td><input id="beta" type="range" min="-45" max="45" value="15"/> <span id="beta-value" class="value"></span></td>
                                            </tr>
                                            <tr>
                                                <td>Depth</td>
                                                <td><input id="depth" type="range" min="20" max="100" value="50"/> <span id="depth-value" class="value"></span></td>
                                            </tr>
                                        </table>
                                    </div>
                                    
                                    <script type="text/javascript">
                                        var chart = new Highcharts.Chart({
                                            chart: {
                                                renderTo: 'container3d',
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
                                        
                                        function showValues() {
                                            $('#alpha-value').html(chart.options.chart.options3d.alpha);
                                            $('#beta-value').html(chart.options.chart.options3d.beta);
                                            $('#depth-value').html(chart.options.chart.options3d.depth);
                                        }
                                        
                                        $('#sliders input').on('input change', function () {
                                            chart.options.chart.options3d[this.id] = parseFloat(this.value);
                                            showValues();
                                            chart.redraw(false);
                                        });
                                        
                                        showValues();
                                    </script>
                                    </p>
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <h3>Menu 1</h3>
                                    <p>Some content here.</p>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <h3>Menu 2</h3>
                                    <p>Some content here.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
@endsection

    
                        
