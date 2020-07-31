<?php

if(isset($_GET['m'])){

  $mensaje='<small id="emailHelp" class="form-text text-muted">Las contraseñas o los nombres no coinciden</small>';

}else{
  $mensaje="";
}

if(isset($_GET['c'])){

  $mensaje='<small id="emailHelp" class="form-text text-muted">La contraseña debe tener minimo 6 caracteres</small>';

}else{

  $mensaje="";
  
}

session_start();

if(!isset($_SESSION["user"])){
  
  header("location:/proyecto/login/login.php");

}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

  <h2>Register</h2>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-fluid">
        <form action="register.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="" name="name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="" name="name2" required>
          </div>
          
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="pass"
              required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="pass2"
              required>
          </div>
          <?php
          echo $mensaje;
          ?>
          <input type="submit" class="btn btn-warning" name="register" value="Registrar">

        </form>
      </div>

    </div>

  </div>


</body>

</html>