@extends('layouts.principal')
@section('content')

  <div class="header_users">
    <h2 class="display-5 header_users_titulo">Comparativas</h2>
    <p class="header_users_texto">Aquí podrá elegir la comparativa de usuarios rankeada por los indicadores</p>
  </div>
  <div class="opciones_crear_users">
      <select class="form-control select_super_repart select_notificaciones">
        <option selected>Supervisores</option>
        <option>Repartidores</option>
      </select>
      <div class="seteo_rango_fechas">
        <input type="text" id="periodo_inicial" width="200" value="" />
        <input type="text" id="periodo_final" width="200" value="" />
      </div>
  </div>
  <div class="col-sm-12">
    <table class="table table-striped">
      <thead class="cabecera_tabla">
        <tr>
          <th>#</th>
          <th>Items</th>
          <th>Nuevos clientes</th>
          <th>Env improd</th>
          <th>Mov envases</th>
          <th>Clientes inact</th>
          <th>Ventas</th>
          <th>Desv hs</th>
          <th>Fiado</th>
          <th>Reclamos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Jose Perez</td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button">14</button> </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Juan Ramirez</td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button">26</button> </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Jonathan Mayer</td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button">5</button> </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Luis Fonsi</td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button">10</button> </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Mickey Mouse</td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button">80</button> </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Lionel Messi</td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button">35</button> </td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Don Quijote</td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-success btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button"></button> </td>
          <td> <button data-toggle="modal" data-target="#modal_rendimiento" class="btn btn-sm btn-danger btn_rendimiento" type="button" name="button">15</button> </td>
        </tr>
      </tbody>
    </table>
  </div>





  <!-- Modal de rendimiento -->
   <div class="modal fade" id="modal_rendimiento">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">

         <!-- Modal cabecera -->
         <div class="modal-header">
           <h4 class="modal-title">Rendimiento del grupo</h4>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>

         <!-- Modal cuerpo -->
         <div class="modal-body">
           <table class="table table-striped">
             <thead class="cabecera_tabla">
               <tr>
                 <th>#</th>
                 <th>Items</th>
                 <th>Ventas</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <th scope="row">1</th>
                 <td>Martin Nuñez</td>
                 <td>15</td>
               </tr>
               <tr>
                 <th scope="row">2</th>
                 <td>Edgardo Morales</td>
                 <td>30</td>
               </tr>
               <tr>
                 <th scope="row">3</th>
                 <td>Juan Gutierrez</td>
                 <td>15</td>
               </tr>
               <tr>
                 <th scope="row">4</th>
                 <td>Rafael Nido</td>
                 <td>45</td>
               </tr>
               <tr>
                 <th scope="row">5</th>
                 <td>Oscar Mileno</td>
                 <td>5</td>
               </tr>
               <tr>
                 <th scope="row">6</th>
                 <td>Damian Jilo</td>
                 <td>135</td>
               </tr>
               <tr>
                 <th scope="row">7</th>
                 <td>Omar Mora</td>
                 <td>127</td>
               </tr>
               <tr>
                 <th scope="row">8</th>
                 <td>Omar Mora</td>
                 <td>127</td>
               </tr>
               <tr>
                 <th scope="row">9</th>
                 <td>Omar Mora</td>
                 <td>127</td>
               </tr>
               <tr>
                 <th scope="row">10</th>
                 <td>Orlando Guido</td>
                 <td>127</td>
               </tr>
               <tr>
                 <th scope="row">11</th>
                 <td>Jimeno Rosas</td>
                 <td>50</td>
               </tr>
               <tr>
                 <th scope="row">12</th>
                 <td>Omar Mora</td>
                 <td>127</td>
               </tr>
               <tr>
                 <th scope="row">13</th>
                 <td>Julian Perez</td>
                 <td>127</td>
               </tr>
             </tbody>
           </table>
         </div>

         <!-- Modal footer -->
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
         </div>

       </div>
     </div>
   </div>

@stop
