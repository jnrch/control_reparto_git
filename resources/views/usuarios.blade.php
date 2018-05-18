@extends('layouts.principal')
@section('content')

  <div class="header_users">
    <h2 class="display-5 header_users_titulo">Usuarios admin</h2>
    <p class="header_users_texto">Aquí podrá administrar usuarios de rango administrador. No olvide "guardar los cambios"</p>
  </div>

  <div class="contenedor">
      <div class="opciones_crear_users">
        <input class="form-control" type="text" name="busqueda" placeholder="Ingrese un término de búsqueda..">
        <button data-toggle="modal" data-target="#modal_crear_user" class="btn btn-xs" type="button" name="button">+ Crear usuario</button>
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
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Hector Derritchon</td>
              <td>Admin</td>
              <td>10/03/18</td>
              <td>15/05/18</td>
              <td>
                <i class="material-icons">create</i>
                <i class="material-icons">delete_outline</i>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Sebastian Apellido</td>
              <td>Admin</td>
              <td>10/03/18</td>
              <td>15/05/18</td>
              <td>
                <i class="material-icons">create</i>
                <i class="material-icons">delete_outline</i>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Juan Apellido</td>
              <td>Admin</td>
              <td>10/03/18</td>
              <td>15/05/18</td>
              <td>
                <i class="material-icons">create</i>
                <i class="material-icons">delete_outline</i>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

  </div>





  <!-- Modal de rendimiento -->
   <div class="modal fade" id="modal_crear_user">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">

         <!-- Modal cabecera -->
         <div class="modal-header">
           <h4 class="modal-title">Crear usuario</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>

         <!-- Modal cuerpo -->
         <div class="modal-body">
           <form class="form-group">
             <div class="form-row">
               <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="name">Nombre</label>
                   <input type="text" class="form-control" placeholder="Ingrese el nombre">
                 </div>
                 <div class="form-group col-md-6">
                   <label for="name">Apellido</label>
                   <input type="text" class="form-control" placeholder="Ingrese el apellido">
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
                   <select id="inputState" class="form-control">
                     <option selected>Seleccione...</option>
                     <option>Supervisor 1</option>
                     <option>Supervisor 2</option>
                     <option>Supervisor 3</option>
                   </select>
                 </div>
                 <button type="submit" class="btn btn_guardar_configuracion">Guardar</button>
               </div>

           </form>
         </div>

         <!-- Modal footer -->
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
         </div>

       </div>
     </div>
   </div>


@stop
