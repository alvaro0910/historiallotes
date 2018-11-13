@extends('layouts.templateadm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel-body">
                <div class="col-md-12">
                    <aside class="profile-nav alt">
                        <section class="card">
                            <div class="card-header user-header alt bg-dark">
                                <div class="media">
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('images/cultivo.png') }}">
                                    <div class="media-body">
                                        <h2 class="text-light display-6">Relación cultivo - finca: ID: {{ $data{'0'}->id }}</h2>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="fa fa-envelope-o"></i> <b>Cultivo ID:</b> {{ $data{'0'}->cultivo_id }} 
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-envelope-o"></i> <b>Cultivo:</b> {{ $data{'0'}->cultivo }} 
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-envelope-o"></i> <b>Finca ID:</b> {{ $data{'0'}->finca_id }} 
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-envelope-o"></i> <b>Finca:</b> {{ $data{'0'}->nombre }} 
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-tasks"></i> <b>Fecha de Creación:</b> {{ $data{'0'}->created_at }}
                                </li>
                                <li class="list-group-item"> 
                                    <i class="fa fa-bell-o"></i> <b>Ultima Actualización:</b> {{ $data{'0'}->updated_at }}
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('fincascultivosusers.index') }}"> 
                                        <div class="icon-container" style="width:240px;">
                                            <span class="ti-back-left"></span><span class="icon-name"> Regresar</span>
                                        </div>
                                    </a>
                                    <a href="{{ route('cultivosfincas.edit', $data{'0'}->id) }}"> 
                                        <div class="icon-container" style="width:240px;">
                                            <span class="ti-pencil-alt"></span><span class="icon-name"> Editar</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection