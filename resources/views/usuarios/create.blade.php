@extends('layouts.principal')
@section('content')

    <div class="container contenedor_white">

    <form class="form-group" action="/usuarios" method="post">
      @csrf
      <div class="form-row">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" name="name_user" placeholder="Ingrese nombre de usuario">
          </div>
          <div class="form-group col-md-6">
            <label for="name">Nombre y apellido</label>
            <input type="text" class="form-control" name="name_largo" placeholder="Ingrese nombre y apellido">
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Perfil</label>
            <select id="inputState" class="form-control">
              <option selected>Seleccione...</option>
              <option>Administrador</option>
              <option>Supervisor</option>
              <option>Repartidor</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputState">Grupo</label>
            <select name="perfil" id="inputState" class="form-control">
              <option value="0" selected>Seleccione...</option>
              <option value="1">Supervisor 1</option>
              <option value="2">Supervisor 2</option>
              <option value="3">Supervisor 3</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control" name="pass" placeholder="Ingrese contraseña">
          </div>
          <div class="form-group col-md-6">
            <label for="cpass">Confirmar la contraseña</label>
            <input type="password" class="form-control" name="cpass" placeholder="Confirme la contraseña">
          </div>
          <hr>
          <button type="submit" class="btn btn_guardar_configuracion">Guardar</button>
        </div>
    </form>

    </div>

@stop
