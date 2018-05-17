@extends('layouts.principal')
@section('content')

<div class="container contenedor_white">

  <form class="form-group">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Datos</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Ingresar">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Algun dato mas</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Ingresar dato">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">Algun dato</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">Algun dato</label>
        <select id="inputState" class="form-control">
          <option selected>Seleccione...</option>
          <option>Opciones</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Un check
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn_resetear_configuracion">Resetear</button>
    <button type="submit" class="btn btn_guardar_configuracion">Guardar</button>
  </form>
</div>


@stop
