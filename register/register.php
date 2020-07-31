<?php
require("parametros.php");

require("register_input.php");

if(isset($_POST["register"])){

    $name1=$_POST["name"];

    $name2=$_POST["name2"];

    $pass1=$_POST["pass"];

    $pass2=$_POST["pass2"];

    try{
        
        $conexion = mysqli_connect($host,$user,$con,$bd);

        if($name1!=$name2 or $pass1!=$pass2){

        header("location:/proyecto/register/register_input.php?m=1");   

        exit();

        mysqli_close($conexion);

        }

        if(strlen($pass)<6){

            header("location:/proyecto/register/register_input.php?c=1");   

            exit();

            mysqli_close($conexion);
    
        }

        $consulta = "insert into supervisores values('$name1','$pass1')";

        $resultado = mysqli_query($conexion,$consulta);

        echo "registrado";
    
    }catch(exception $e){

        echo "error";

        mysqli_close($conexion);

    }

}

?>