@extends('layouts.principal')
@section('content')

  <div class="header_users">
    <h2 class="display-5 header_users_titulo">Resumen</h2>
    <p class="header_users_texto">Aquí podrá elegir que nivel desea mirar</p>
  </div>
  <div class="opciones_crear_users">
      <select class="form-control select_super_repart">
        <option selected>Fábrica</option>
        <option>Ciudadela</option>
        <option>La plata</option>
      </select>
  </div>


          <div class="col-sm-12">
            <table class="table table-striped">
              <thead class="cabecera_tabla">
                <tr>
                  <th>#</th>
                  <th>Items</th>
                  <th>Ayer</th>
                  <th>Ult semana</th>
                  <th>Ult mes</th>
                  <th>Prog. mensual</th>
                  <th>Últ semana</th>
                  <th>Rendimiento</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Nuevos clientes</td>
                  <td>15</td>
                  <td>820</td>
                  <td>mdo</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_negativo">arrow_downward</i></td>
                  <td> <button class="btn btn-sm btn-success btn_rendimiento" data-toggle="modal" data-target="#modal_rendimiento" type="button" name="button">Bueno</button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Env improductivos</td>
                  <td>30</td>
                  <td>120</td>
                  <td>96</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_positivo">arrow_upward</i></td>
                  <td> <button class="btn btn-sm btn-success btn_rendimiento" data-toggle="modal" data-target="#modal_rendimiento" type="button" name="button">Bueno</button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Movimientos env</td>
                  <td>15</td>
                  <td>20</td>
                  <td>10</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_neutral">trending_flat</i></td>
                  <td> <button class="btn btn-sm btn-success btn_rendimiento" data-toggle="modal" data-target="#modal_rendimiento" type="button" name="button">Bueno</button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Clientes inactivos</td>
                  <td>45</td>
                  <td>15</td>
                  <td>48</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_positivo">arrow_upward</i></td>
                  <td> <button class="btn btn-sm btn-warning btn_rendimiento" data-toggle="modal" data-target="#modal_rendimiento" type="button" name="button">Medio</button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Sodas</td>
                  <td>5</td>
                  <td>52</td>
                  <td>35</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_positivo">arrow_upward</i></td>
                  <td> <button class="btn btn-sm btn-danger btn_rendimiento" data-toggle="modal" data-target="#modal_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Botellones</td>
                  <td>5</td>
                  <td>52</td>
                  <td>35</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_positivo">arrow_upward</i></td>
                  <td> <button class="btn btn-sm btn-danger btn_rendimiento" data-toggle="modal" data-target="#modal_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Saborizada</td>
                  <td>5</td>
                  <td>52</td>
                  <td>35</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_positivo">arrow_upward</i></td>
                  <td> <button class="btn btn-sm btn-danger btn_rendimiento" data-toggle="modal" data-target="#modal_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>Desvío de horario</td>
                  <td>135</td>
                  <td>26</td>
                  <td>29</td>
                  <td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_neutral">trending_flat</i></td>
                  <td> <button class="btn btn-sm btn-warning btn_rendimiento" data-toggle="modal" data-target="#modal_rendimiento" type="button" name="button">Medio</button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Fiado</td>
                  <td>127</td>
                  <td>10</td>
                  <td>85</td>
                  <td><span class="line" width="100">5,3,2,-1,-3,-2,2,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_negativo">arrow_downward</i></td>
                  <td> <button class="btn btn-sm btn-danger btn_rendimiento" data-toggle="modal" data-target="#modal_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i data-toggle="modal" data-target="#modal_detalle_resumen" class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
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
                   <h4 class="modal-title">Titulo</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>

                 <!-- Modal cuerpo -->
                 <div class="modal-body">
                   <table class="table table-striped">
                     <thead class="cabecera_tabla">
                       <tr>
                         <th>#</th>
                         <th>Items</th>
                         <th>Ayer</th>
                         <th>Ult semana</th>
                         <th>Ult mes</th>
                       </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <th scope="row">1</th>
                         <td>Nuevos clientes</td>
                         <td>15</td>
                         <td>820</td>
                         <td>48</td>
                       </tr>
                       <tr>
                         <th scope="row">2</th>
                         <td>Env improductivos</td>
                         <td>30</td>
                         <td>120</td>
                         <td>48</td>
                       </tr>
                       <tr>
                         <th scope="row">3</th>
                         <td>Movimientos env</td>
                         <td>15</td>
                         <td>20</td>
                         <td>48</td>
                       </tr>
                       <tr>
                         <th scope="row">4</th>
                         <td>Clientes inactivos</td>
                         <td>45</td>
                         <td>15</td>
                         <td>48</td>
                       </tr>
                       <tr>
                         <th scope="row">5</th>
                         <td>Ventas</td>
                         <td>5</td>
                         <td>52</td>
                         <td>48</td>
                       </tr>
                       <tr>
                         <th scope="row">6</th>
                         <td>Desvío de horario</td>
                         <td>135</td>
                         <td>26</td>
                         <td>48</td>
                       </tr>
                       <tr>
                         <th scope="row">7</th>
                         <td>Fiado</td>
                         <td>127</td>
                         <td>10</td>
                         <td>48</td>
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








           <!-- Modal de rendimiento -->
            <div class="modal fade" id="modal_detalle_resumen">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <!-- Modal cabecera -->
                  <div class="modal-header">
                    <h4 class="modal-title">Detalle de botellones</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal cuerpo -->
                  <div class="modal-body">
                    <table class="table table-striped">
                      <thead class="cabecera_tabla">
                        <tr>
                          <th>#</th>
                          <th>Items</th>
                          <th>Ayer</th>
                          <th>Ult semana</th>
                          <th>Ult mes</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>12 litros</td>
                          <td>6</td>
                          <td>12</td>
                          <td>50</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>15 litros</td>
                          <td>8</td>
                          <td>19</td>
                          <td>70</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>30 litros</td>
                          <td>3</td>
                          <td>15</td>
                          <td>30</td>
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







          <div class="grafico_clientes_new">
            <canvas id="chart_clientes_new" width="100%" height="400"></canvas>
            <script src="/js/chart_clientes_new.js"> </script>
          </div>


@stop
