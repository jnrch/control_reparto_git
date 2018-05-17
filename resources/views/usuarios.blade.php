@extends('layouts.principal')
@section('content')

  <div class="container">
    <h2 class="display-5">Usuarios admin</h2>
    <p>Aquí podrá administrar usuarios de rango administrador. No olvide "guardar los cambios"</p>
  </div>

  <div class="contenedor">
      <div class="opciones_crear_users">
        <button class="btn btn-xs" type="button" name="button">+ Crear usuario</button>
        <div class="select">
          <select>
            <option value="">Seleccione</option>
            <option value="1">Opción 1</option>
            <option value="2">Opción 2</option>
            <option value="3">Opción N</option>
          </select>
        </div>
        <div class="select">
          <select>
            <option value="">Seleccione</option>
            <option value="1">Opción 1</option>
            <option value="2">Opción 2</option>
            <option value="3">Opción N</option>
          </select>
        </div>
      </div>
      <div class="col-sm-12">
        <table class="table table-striped">
          <thead class="cabecera_tabla">
            <tr>
              <th>#</th>
              <th>Usuarios</th>
              <th>Rango</th>
              <th>Creado</th>
              <th>Último ingreso</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Hector Derritchon</td>
              <td>Admin</td>
              <td>10/03/18</td>
              <td>15/05/18</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Sebastian Apellido</td>
              <td>Admin</td>
              <td>10/03/18</td>
              <td>15/05/18</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Juan Apellido</td>
              <td>Admin</td>
              <td>10/03/18</td>
              <td>15/05/18</td>
            </tr>
          </tbody>
        </table>
      </div>

  </div>


@stop
