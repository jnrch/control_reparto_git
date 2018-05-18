@extends('layouts.principal')
@section('content')

<div class="container contenedor_white">

  <form class="form-group">
    <div class="form-row">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="name">Nombre</label>
          <input type="text" class="form-control" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Perfil</label>
          <select id="inputState" class="form-control">
            <option selected>Seleccione...</option>
            <option>Administrador</option>
            <option>Supervisor</option>
            <option>Repartidor</option>
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" placeholder="Ingrese contraseña">
        </div>
        <div class="form-group col-md-6">
          <label for="password">Confirmar contraseña</label>
          <input type="password" class="form-control" placeholder="Confirme contraseña">
        </div>

        <button type="submit" class="btn btn_resetear_configuracion">Resetear</button>
        <button type="submit" class="btn btn_guardar_configuracion">Guardar</button>
      </div>

  </form>
</div>


@stop
