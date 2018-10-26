@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong>Datos estado fisico</strong>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($data, [
                        'method' => 'PUT',
                        'route' => ['propiedad.update', $data->id]
                    ]) !!}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Material</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="descripcion" name="descripcion" placeholder="Estado Fisico" class="form-control" value="{{ $data->material }}"><small class="form-text text-muted">Ingrese el material</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Unidad</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="periodo" name="periodo" placeholder="Año" class="form-control" value="{{ $data->unidad }}"><small class="form-text text-muted">Ingrese la unidad del material</small></div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Actualizar propiedad
                    </button>
                </div>
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('propiedades.index') }}"> 
                                <div class="icon-container">
                                    <span class="ti-back-left"></span><span class="icon-name"> Regresar</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        
        </div>
    </div>
</div>
@endsection