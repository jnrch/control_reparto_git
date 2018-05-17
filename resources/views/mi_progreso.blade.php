@extends('layouts.principal')
@section('content')

  <div class="col-sm-12">
    <table class="table table-striped">
      <thead class="cabecera_tabla">
        <tr>
          <th>#</th>
          <th>Items</th>
          <th>Ventas ayer</th>
          <th>Ventas ult semana</th>
          <th>Ventas ult mes</th>
          <th>Total</th>
          <th>Rendimiento</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Jose Perez</td>
          <td>15</td>
          <td>820</td>
          <td>10</td>
          <td>mdo</td>
          <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
          <td><i class="material-icons">cloud_download</i></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Juan Ramirez</td>
          <td>30</td>
          <td>120</td>
          <td>85</td>
          <td>96</td>
          <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
          <td><i class="material-icons">cloud_download</i></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Jonathan Mayer</td>
          <td>15</td>
          <td>20</td>
          <td>230</td>
          <td>10</td>
          <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
          <td><i class="material-icons">cloud_download</i></td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Luis Fonsi</td>
          <td>45</td>
          <td>15</td>
          <td>30</td>
          <td>48</td>
          <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
          <td><i class="material-icons">cloud_download</i></td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Mickey Mouse</td>
          <td>5</td>
          <td>52</td>
          <td>20</td>
          <td>35</td>
          <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
          <td><i class="material-icons">cloud_download</i></td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>Lionel Messi</td>
          <td>135</td>
          <td>26</td>
          <td>28</td>
          <td>29</td>
          <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
          <td><i class="material-icons">cloud_download</i></td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Don Quijote</td>
          <td>127</td>
          <td>10</td>
          <td>30</td>
          <td>85</td>
          <td> <button disabled class="btn btn-xs btn-danger btn_rendimiento" type="button" name="button">Bajo</button> </td>
          <td><i class="material-icons">cloud_download</i></td>
        </tr>
      </tbody>
    </table>
  </div>

@stop
