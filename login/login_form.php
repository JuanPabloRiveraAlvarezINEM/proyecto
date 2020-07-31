<!DOCTYPE html>
<?php
if(isset($_GET['m'])){
    $m=$_GET['m'];

    if($m=1){
        $mensaje='<small id="emailHelp" class="form-text text-muted">Datos Incorrectos</small>';
    }else{
        $mensaje="";
    }

}else{
  
    $m=0;
    $mensaje="";
}
?>
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Login</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-fluid">
        <form action="login.php" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Ingrese correo electronico" name="name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="pass"
              required>
          </div>
          <?php
            echo $mensaje;
          ?>
          <input type="submit" class="btn btn-warning" name="login" value="Entrar">

        </form>
      </div>

    </div>

  </div>



</body>

</html>