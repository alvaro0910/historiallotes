@extends('layouts.templateadm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="panel-heading">Usuario Seleccionado</div>
            <div class="panel-body">
                <h1>{{ $data->name }}</h1>

        </div>
    </div>
</div>
@endsection