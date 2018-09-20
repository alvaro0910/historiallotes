@extends('layouts.templateusu')

@section('title', 'Usuario')

@section('content')
        <div class="content mt-4">
           <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                    Calendario
                    <!--<iframe src="https://calendar.google.com/calendar/b/1/embed?title=Calendario%20Congales%20Echeverri&amp;showNav=0&amp;showPrint=0&amp;showTz=0&amp;height=400&amp;wkst=1&amp;bgcolor=%2333ccff&amp;src=haciendaveneciaoficina%40gmail.com&amp;color=%231B887A&amp;ctz=America%2FBogota" style="border-width:0" width="450" height="400" frameborder="0" scrolling="no"></iframe>-->

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body pb-0">
                        Reloj

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body pb-0">
                        Precio del cafe
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        Moneda

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        Clima

                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4">
                <div class="card text-white bg-flat-color-4">
                    <div class="card-body pb-0">
                        Web

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="social-box facebook">
                    <i class="fa fa-facebook"></i>
                    <!--<ul>
                        <li>
                            <strong><span class="count">40</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <strong><span class="count">450</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>-->
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-twitter"></i>
                    <!--<ul>
                        <li>
                            <strong><span class="count">30</span> k</strong>
                            <span>friends</span>
                        </li>
                        <li>
                            <strong><span class="count">450</span></strong>
                            <span>tweets</span>
                        </li>
                    </ul>-->
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    {{-- <i class="fa fa-linkedin"></i> --}}
                    <!--<ul>
                        <li>
                            <strong><span class="count">40</span> +</strong>
                            <span>contacts</span>
                        </li>
                        <li>
                            <strong><span class="count">250</span></strong>
                            <span>feeds</span>
                        </li>
                    </ul>-->
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    {{-- <i class="fa fa-google-plus"></i> --}}
                    <!--<ul>
                        <li>
                            <strong><span class="count">94</span> k</strong>
                            <span>followers</span>
                        </li>
                        <li>
                            <strong><span class="count">92</span></strong>
                            <span>circles</span>
                        </li>
                    </ul>-->
                </div>
            </div>
        </div>
@endsection
