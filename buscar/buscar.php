<!DOCTYPE html>

<html>

<head>

    <link href="buscar.css" rel="StyleSheet">

    <title>Search</title>

    <meta charset="utf-8">

</head>

<body>

    <?php

require("buscar_input.php");

require("parametros.php");

if(isset($_POST["boton"])){

    $conexion = mysqli_connect($host,$user,$con,$bd) or die("Error host");
    
    $id=$_POST["id"];

    if($id==null){

        echo"Inserte un id valido";

        mysqli_close($conexion);

        exit();

    }
    
    $consulta= "select foto from revisiones where id= '".$id."' ";
    
    $query=mysqli_query($conexion,$consulta);

    $result1=mysqli_fetch_row($query);

    $consulta= "select comentarios from revisiones where id= '$id' ";
    
    $query=mysqli_query($conexion,$consulta);

    $result2=mysqli_fetch_row($query);

    echo "<br>";
    echo "<br>";

    echo "<h1>Comentario:</h1>";

    echo $result2[0];

    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<h1>Imagenes:</h1>";

}
?>

    <br>

    <br>

    <div>

        <img id="img" src="/Img_Server/<?php echo $result1[0];?>" alt="img">

        <br>
        
        <input class="button" type="submit" name="des" value="dowload">

        <?php


?> 

        


    </div>

</body>

</html>