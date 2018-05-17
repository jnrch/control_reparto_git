<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Repartos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="/js/peity.js"></script>
  </head>
  <body>
    <div class="barra_lateral">

      <div class="barra_lateral_sup">
        <img id="logo_ivess" src="img/logo_ivess.svg" alt="logo ivess">
      </div>

      <div class="info_personal">
        <img src="img/user_normal.png" alt="">
        <h5>Jose Perez</h5>
        <p>Ciudadela</p>
      </div>

      <div class="secciones_barra_lateral">
        <ul>
          <li>
            <i title="Resumen" class="material-icons iconos_barra_lateral">equalizer</i>
            <a href="#">Resumen</a>
          </li>
          <li>
            <i title="Mi progreso" class="material-icons iconos_barra_lateral">timeline</i>
            <a href="#">Mi progreso</a>
          </li>
          <li>
            <i title="Supervisores" class="material-icons iconos_barra_lateral">work</i>
            <a href="#">Supervisores</a>
          </li>
          <li>
            <i title="Repartidores" class="material-icons iconos_barra_lateral">face</i>
            <a href="#">Repartidores</a>
          </li>
          <li>
            <i title="Configuración" class="material-icons iconos_barra_lateral">build</i>
            <a href="#">Configuración</a>
          </li>
          <li data-toggle="collapse" data-target="#collapse1" href="#">
            <i title="Configuración" class="material-icons iconos_barra_lateral">person</i>
            <a>Usuarios</a>
          </li>
              <ul id="collapse1" class="collapse sub_menu_barra_lateral">
                <li>
                  <a href="#">Administrador</a>
                </li>
                <li>
                  <a href="#">Supervisor</a>
                </li>
                <li>
                  <a href="#">Repartidor</a>
                </li>
              </ul>
          <li>
            <i title="Configuración" class="material-icons iconos_barra_lateral">exit_to_app</i>
            <a href="#">Salir</a>
          </li>
        </ul>
      </div>

    </div>

    <div class="mostrar_seccion">
          <i id="icono_menu" class="material-icons">view_headline</i>

    @yield('content')


</div>


<script type="text/javascript">

$(document).ready(function() {

var mostrar = 0;

$("#icono_menu").click(function() {
if (mostrar == 1) {
  $(".barra_lateral").css("width", "16%");
  $(".barra_lateral").css("transition", "300ms");
  $("#logo_ivess").css("display", "block");
  $(".info_personal").css("display", "block");
  $(".secciones_barra_lateral ul li a").css("display", "block");
  mostrar --;
}else{
  $(".barra_lateral").css("width", "4%");
  $(".barra_lateral").css("transition", "300ms");
  $("#logo_ivess").css("display", "none");
  $(".info_personal").css("display", "none");
  $(".secciones_barra_lateral ul li a").css("display", "none");
  $(".iconos_barra_lateral").css("padding-left", "14px");
  mostrar ++;
}
});


$(".bar").peity("bar");



});

</script>

  </body>

</html>
