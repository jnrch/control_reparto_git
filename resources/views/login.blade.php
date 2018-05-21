<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Repartos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body class="body_salir_ingresar">

    <div class="logo_ivess_salir">
      <img src="img/logo_ivess_2018_2.png" alt="logo_ivess">
    </div>

    <div class="msj_bienvenida">
      <h2>Login</h2>
      <p>Ingrese al sistema de repartos de Ivess</p>
    </div>


    <form class="form_login">
      <div class="form-group">
        <label for="user">Usuario</label>
        <input type="email" class="form-control" name="user" placeholder="Ingresar usuario" required>
      </div>
      <div class="form-group">
        <label for="contraseña">Contraseña</label>
        <input type="password" class="form-control" name="contraseña" placeholder="Ingresar contraseña" required>
      </div>
      <button class="btn btn-sm btn_salir_ingresar" type="submit" name="button">Ingresar</button>
      <button data-toggle="modal" data-target="#modal_olvido_pass" class="btn btn-sm btn_salir_recordar_pass" type="button" name="button">Olvidé la contraseña</button>
    </form>




    <!-- Modal de rendimiento -->
     <div class="modal fade" id="modal_olvido_pass">
       <div class="modal-dialog modal-lg">
         <div class="modal-content">

           <!-- Modal cabecera -->
           <div class="modal-header">
             <h4 class="modal-title">Olvidé mi contraseña</h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

           <!-- Modal cuerpo -->
           <div class="modal-body">
             <p>Comuníquese al 15-3910-7352 </p>
           </div>

           <!-- Modal footer -->
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
           </div>

         </div>
       </div>
     </div>

     
  </body>
</html>
