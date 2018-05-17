@extends('layouts.principal')
@section('content')


          <div class="col-sm-12">
            <table class="table table-striped">
              <thead class="cabecera_tabla">
                <tr>
                  <th>#</th>
                  <th>Items</th>
                  <th>Ayer</th>
                  <th>Ult semana</th>
                  <th>Ult mes</th>
                  <th>Total</th>
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
                  <td>10</td>
                  <td>mdo</td>
                  <td><span class="bar">5,3,9,6,5,9,7,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_negativo">arrow_downward</i></td>
                  <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Env improductivos</td>
                  <td>30</td>
                  <td>120</td>
                  <td>85</td>
                  <td>96</td>
                  <td><span class="bar">5,3,9,6,5,9,7,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_positivo">arrow_upward</i></td>
                  <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Movimientos env</td>
                  <td>15</td>
                  <td>20</td>
                  <td>230</td>
                  <td>10</td>
                  <td><span class="bar">5,3,9,6,5,9,7,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_neutral">trending_flat</i></td>
                  <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Clientes inactivos</td>
                  <td>45</td>
                  <td>15</td>
                  <td>30</td>
                  <td>48</td>
                  <td><span class="bar">5,3,9,6,5,9,7,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_positivo">arrow_upward</i></td>
                  <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Ventas</td>
                  <td>5</td>
                  <td>52</td>
                  <td>20</td>
                  <td>35</td>
                  <td><span class="bar">5,3,9,6,5,9,7,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_positivo">arrow_upward</i></td>
                  <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Desvío de horario</td>
                  <td>135</td>
                  <td>26</td>
                  <td>28</td>
                  <td>29</td>
                  <td><span class="bar">5,3,9,6,5,9,7,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_neutral">trending_flat</i></td>
                  <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Fiado</td>
                  <td>127</td>
                  <td>10</td>
                  <td>30</td>
                  <td>85</td>
                  <td><span class="bar">5,3,9,6,5,9,7,3,5,2</span></td>
                  <td><i class="material-icons ult_semana_negativo">arrow_downward</i></td>
                  <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
                  <td>
                    <i class="material-icons">visibility</i>
                    <i class="material-icons">control_point</i>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="grafico_clientes_new">
            <canvas id="chart_clientes_new" width="100%" height="400"></canvas>
            <script src="/js/chart_clientes_new.js"> </script>
          </div>


@stop
