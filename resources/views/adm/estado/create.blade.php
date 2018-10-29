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

<div class="col-lg-6">
  <div class="card">
      <div class="card-header"><strong>Lote</strong><small> Form</small></div>
      <div class="card-body card-block">
        <div class="form-group">
          <label for="company" class=" form-control-label">Codigo</label>
          <input type="text" id="company" placeholder="Ingrese codigo del lote" class="form-control">
        </div>
        <div class="form-group">
          <label for="vat" class=" form-control-label">Nombre</label>
          <input type="text" id="vat" placeholder="" class="form-control">
        </div>
        <div class="form-group">
          <label for="street" class=" form-control-label">Area</label>
          <input type="text" id="street" placeholder="Area en ha" class="form-control">
        </div>
        <div class="form-group">
          <label for="street" class=" form-control-label">Poblacion</label>
          <input type="text" id="street" placeholder="plobacion de arboles" class="form-control">
        </div>
        
        <div class="row form-group">
            <div class="col col-md-3"><label for="select" class=" form-control-label">Select</label></div>
            <div class="col-12 col-md-9">
              <select name="select" id="select" class="form-control">
                <option value="0">Please select</option>
                <option value="1">Option #1</option>
                <option value="2">Option #2</option>
                <option value="3">Option #3</option>
              </select>
            </div>
          </div>
        <div class="row form-group">
          <div class="col-8">
            <div class="form-group"><label for="city" class=" form-control-label">City</label><input type="text" id="city" placeholder="Enter your city" class="form-control"></div>
          </div>
          <div class="col-8">
            <div class="form-group"><label for="postal-code" class=" form-control-label">Postal Code</label><input type="text" id="postal-code" placeholder="Postal Code" class="form-control"></div>
          </div>
        </div>
        <div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country" placeholder="Country name" class="form-control"></div>
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