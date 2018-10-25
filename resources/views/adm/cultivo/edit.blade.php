@extends('layouts.templateadm')

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-lg-8" style="">
            <div class="card">
                <div class="card-header">
                    <strong>Datos Cultivo</strong>
                </div>
                <div class="card-body card-block">
                    {!! Form::model($data, [
                        'method' => 'PUT',
                        'route' => ['cultivos.update', $data->id]
                    ]) !!}
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombre</label></div>
                        <div class="col-12 col-md-9"><input type="text" id="cultivo" name="cultivo" placeholder="Cultivo" class="form-control" value="{{ $data->cultivo }}"><small class="form-text text-muted">Ingrese el nombre deñ cultivo</small></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Descripcion</label></div>
                        <div class="col-12 col-md-9"><textarea type="textarea-input" id="descripcion" name="descripcion" rows="9" placeholder="Descripcion" class="form-control">{{ $data->descripcion }}</textarea>
                    </div>   
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Actualizar cultivo
                </button>
                
                </div>
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a href="{{ route('fincascultivosusers.index') }}"> 
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