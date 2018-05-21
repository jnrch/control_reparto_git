<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Repartos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script src="/js/peity.js"></script>
  </head>
  <body>
    <div class="barra_lateral">

      <div class="barra_lateral_sup">
        <img id="logo_ivess" src="img/logo_ivess_2018_2.png" alt="logo ivess">
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
            <a href="#">Comparativa</a>
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
            <i title="Configuración" class="material-icons iconos_barra_lateral">access_alarm</i>
            <a href="#">Notificaciones</a>
          </li>
          <li>
            <i title="Configuración" class="material-icons iconos_barra_lateral">settings</i>
            <a href="#">Configuración</a>
          </li>
          <li data-toggle="collapse"  href="#collapse1">
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


$(".line").peity("line");



// Seleccionar fechas en calendario
$('#periodo_inicial').datepicker({
    uiLibrary: 'bootstrap4',
});

$('#periodo_final').datepicker({
    uiLibrary: 'bootstrap4',
});


 $.datepicker.regional['es'] = {
 closeText: 'Cerrar',
 prevText: '< Ant',
 nextText: 'Sig >',
 currentText: 'Hoy',
 monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'dd/mm/yy',
 firstDay: 1,
 isRTL: false,
 showMonthAfterYear: false,
 yearSuffix: ''
 };
 $.datepicker.setDefaults($.datepicker.regional['es']);
 $(function () {
$("#periodo_inicial").datepicker();
});


// Seleccionar fechas en calendario



});

</script>

  </body>

</html>
