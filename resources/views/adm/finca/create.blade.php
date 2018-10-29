@extends('layouts.templateadm')

@section('content')
@if ($errors->any())
  <div class="alert alert-danger" role="alert">
  <p>Corrija los errores:</p>
  <ul>
      @foreach ($errors->all() as $error)
      <li>    
          {{ $error }}
      </li>
      @endforeach
  </ul>
  </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            Crear Finca
            
        </div>
    </div>
</div>

@jquery
@toastr_js
<script>
    @if(Session::has('message'))
      var type = "{{ Session::get('alert-type', 'info') }}";
      
      switch(type){
        case 'info':
          toastr.info("{{ Session::get('message') }}");
          break;
        case 'warning':
          toastr.warning("{{ Session::get('message') }}");
          break;
        case 'success':
          toastr.success("{{ Session::get('message') }}");
          break;
        case 'error':
          toastr.error("{{ Session::get('message') }}");
          break;
      }
    @endif
</script>
@endsection