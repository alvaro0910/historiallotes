@extends('layouts.templateusu')

@section('title', 'Info')

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-4">
                    <aside class="profile-nav alt">
                        <section class="card">
                            <div class="card-header user-header alt bg-dark">
                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-light display-6">El Jordan</h2>
                                        <p>Analisis de suelos</p>
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
                            </div>
                        

                            <!-- <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#"> <i class="fa fa-envelope-o"></i> Mail Inbox <span class="badge badge-primary pull-right">10</span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"> <i class="fa fa-bell-o"></i> Notification <span class="badge badge-success pull-right">11</span></a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#"> <i class="fa fa-comments-o"></i> Message <span class="badge badge-warning pull-right r-activity">03</span></a>
                                </li>
                            </ul> -->
                        </section>
                    </aside>
                </div>

                <div class="col-md-4">
                    <section class="card">
                        <div class="twt-feed blue-bg">
                            <div class="corner-ribon black-ribon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <div class="fa fa-twitter wtt-mark"></div>

                            <div class="media">
                                <a href="#">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                </a>
                                <div class="media-body">
                                    <h2 class="text-white display-6">Jim Doe</h2>
                                    <p class="text-light">Project Manager</p>
                                </div>
                            </div>

                        </div>
                        <div class="weather-category twt-category">
                            <ul>
                                <li class="active">
                                    <h5>750</h5>
                                    Tweets
                                </li>
                                <li>
                                    <h5>865</h5>
                                    Following
                                </li>
                                <li>
                                    <h5>3645</h5>
                                    Followers
                                </li>
                            </ul>
                        </div>
                        <div class="twt-write col-sm-12">
                            <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                        </div>
                        <footer class="twt-footer">
                            <a href="#"><i class="fa fa-camera"></i></a>
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                            New Castle, UK
                            <span class="pull-right">
                                32
                            </span>
                        </footer>
                    </section>
                </div>
                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->
@endsection

    
                        
