<?php
    $correo = $_POST["mail"];
    $contraseña = $_POST["password"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
   
    $servername = "127.0.0.1";
    $database = "Frenchi";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion
 
 
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{ 
        if($correo=="" or $contraseña=="" OR $nombre=="" OR $direccion==""){
        header("Location:/Registro.html");
        }
        else{
        //insertamos el resultado del formulario
        $query = "insert into Usuario values ('$correo', '$contraseña', '$nombre', '$direccion')";
        $resultado=mysqli_query($conexion, $query);// esto ejecuta la query (variable con la sentencia sql) dentro de la base
        session_start(); //inicia la sesion en base a los datos que le dimos antes usuario, correo, contraseña y dir
        $_SESSION["usuario"] = $nombre; //variable que maneja info del inicio de sesion, que se va a mantener, ver o modificar en proximas paginas.
        header("Location:/Nosotros.php");

        }
    }
    mysqli_close($conexion);
?>

