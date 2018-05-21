@extends('layouts.principal')
@section('content')


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


  <div class="header_users">
    <h2 class="display-5 header_users_titulo">Notificaciones</h2>
    <p class="header_users_texto">A la izquierda verá en que indicadores está mal. Debe leerlos y marcarlos como visto.
    A la derecha se llevará un historial de sus acciones.
    </p>
  </div>
  <div class="filtros_notificaciones">
      <select class="form-control select_notificaciones">
        <option selected>Ayer</option>
        <option>Ultima semana</option>
        <option>Ultimo mes</option>
      </select>
  </div>


  <div class="container">
    <div class="accordion" id="acordion1">
      <div class="card">
        <div class="card-header" id="header1">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Pendientes de revisión
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="header1" data-parent="#acordion1">
          <div class="card-body">

            <div class="panel-group">
              <div class="row">
                 <div class="col-md-12">
                   <div class="panel panel-danger">
                         <div class="panel-heading cabecera_notificaciones">
                           10/05/2018
                           <i class="material-icons notificacion_no_vista">visibility</i>
                         </div>
                         <div class="panel-body">
                           <div class="cada_notificacion">
                             <p> <b>R1:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                             <i class="material-icons notificacion_no_vista">visibility</i>
                           </div>
                           <hr>
                           <div class="cada_notificacion">
                             <p> <b>R10:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                             <i class="material-icons notificacion_no_vista">visibility</i>
                           </div>
                           <hr>
                           <div class="cada_notificacion">
                             <p> <b>R11:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                             <i class="material-icons notificacion_no_vista">visibility</i>
                           </div>
                           <hr>
                         </div>
                   </div>
                   <div class="panel panel-danger">
                         <div class="panel-heading cabecera_notificaciones">
                           10/05/2018
                           <i class="material-icons notificacion_no_vista">visibility</i>
                         </div>
                         <div class="panel-body">
                           <div class="cada_notificacion">
                             <p> <b>R11:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                             <i class="material-icons notificacion_no_vista">visibility</i>
                           </div>
                           <hr>
                         </div>
                   </div>
                 </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="accordion" id="acordion2">
      <div class="card">
        <div class="card-header" id="header2">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapsetwo">
              Historial
            </button>
          </h5>
        </div>

        <div id="collapsetwo" class="collapse show" aria-labelledby="header2" data-parent="#acordion2">
          <div class="card-body">

            <div class="panel-group">
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-info">
                        <div class="panel-heading cabecera_notificaciones">
                          10/05/2018
                          <small>Visto</small>
                        </div>
                        <div class="panel-body">
                          <p> <b>R3:</b> Tiene problemas en <b>Envases improductivos - Ventas</b></p>
                          <hr>
                        </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


  </div>

<script type="text/javascript">

$(document).ready(function() {

  $(".cada_notificacion i").click(function() {
    if ($(this).hasClass("notificacion_no_vista")) {
      $(this).removeClass("notificacion_no_vista");
      $(this).addClass("notificacion_vista");
    }else {
      $(this).removeClass("notificacion_vista");
      $(this).addClass("notificacion_no_vista");
    }

  });




});


</script>

@stop
