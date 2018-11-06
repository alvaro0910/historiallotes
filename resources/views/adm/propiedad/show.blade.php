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
                                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('images/estado.jpg') }}">
                                    <div class="media-body">
                                        <h2 class="text-light display-6">Propiedad del suelo</h2>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="fa fa-envelope-o"></i> <b>Material:</b> {{ $data->material }} 
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-envelope-o"></i> <b>Unidad:</b> {{ $data->unidad }} 
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-tasks"></i> <b>Fecha de Creación:</b> {{ $data->created_at }}
                                </li>
                                <li class="list-group-item"> 
                                    <i class="fa fa-bell-o"></i> <b>Ultima Actualización:</b> {{ $data->updated_at }}
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ route('propiedades.index') }}"> 
                                        <div class="icon-container" style="width:240px;">
                                            <span class="ti-back-left"></span><span class="icon-name"> Regresar</span>
                                        </div>
                                    </a>
                                    <a href="{{ route('propiedad.edit', $data->id) }}"> 
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