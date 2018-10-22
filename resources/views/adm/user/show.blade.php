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
                                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('images/user.png') }}">
                                            <div class="media-body">
                                                <h2 class="text-light display-6">{{ $data->name }}</h2>
                                            </div>
                                        </div>
                                    </div>
    
    
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <i class="fa fa-envelope-o"></i> <b>Correo:</b> {{ $data->email }} 
                                        </li>
                                        <li class="list-group-item">
                                                <i class="fa fa-envelope-o"></i> <b>Tipo:</b> {{ $data->tipo }} 
                                            </li>
                                        <li class="list-group-item">
                                            <i class="fa fa-tasks"></i> <b>Fecha de Creación:</b> {{ $data->created_at }}
                                        </li>
                                        <li class="list-group-item"> 
                                            <i class="fa fa-bell-o"></i> <b>Ultima Actualización:</b> {{ $data->updated_at }}
                                        </li>
                                        <li class="list-group-item">
                                            <a href="{{ route('users.index') }}"> 
                                                <div class="icon-container">
                                                    <span class="ti-back-left"></span><span class="icon-name"> Regresar</span>
                                                </div>
                                            </a>
                                            <a href="{{ route('users.edit', $data->id) }}"> 
                                                <div class="icon-container">
                                                    <span class="ti-pencil-alt"></span><span class="icon-name"> Editar</span>
                                                </div>
                                            </a>
                                            <a href="#"> 
                                                <div class="icon-container">
                                                    <span class="ti-trash"></span><span class="icon-name"> Eliminar</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                    
                                </section>
                            </aside>
                        </div>
                <h1></h1>

        </div>
    </div>
</div>
@endsection