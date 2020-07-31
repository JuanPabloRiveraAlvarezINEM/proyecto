<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
    
<?php

require("login_form.php");

require("parametros.php");

if(isset($_POST["login"])){

    $name=$_POST["name"];

    $pass=$_POST["pass"];

    try{

        $conexion=mysqli_connect($host,$user,$con,$bd) or die("No se puedo conectar");
      
        $consulta="select * from supervisores where nombre = '".$name."' and contraseña = '".$pass."' ";

        $result=mysqli_query($conexion,$consulta);
        
      $imprimir=mysqli_fetch_row($result);
            
      if($imprimir[0]==$name && $imprimir[1]==$pass){

      session_start();

      $_SESSION["user"]=$_POST["name"];
                
      header("location:/proyecto/home/home.php");

     }else{

         header("location:/proyecto/login/login_form.php?m=1");
     }
    
    }catch(exception $e){

        echo "Error";

    }

}

?>
        
    </body>
</html>
