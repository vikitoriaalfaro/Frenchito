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
        //insertamos el resultado del formulario
        $query = "insert into Usuario values ('$correo', '$contraseña', '$nombre', '$direccion')";
        $resultado=mysqli_query($conexion, $query);
        session_start();
        $_SESSION["usuario"] = $nombre; 
        header("Location:/Nosotros.php");


        /*
        $query = "select password from Usuario where mail = '$mail'";
        //esto es la consulta que realizo para saber si la contraseña coincide con el mail y la guardo en la variable query
        $resultado=mysqli_query($conexion, $query);
        //la variable resultado va a guardar el resultado del comando donde se realiza la consulta
        if(mysqli_num_rows($resultado)  == 0){
            echo "Error";
            echo $correo;
        }
        else {
            $fila=mysqli_fetch_assoc($resultado);
            if($fila["password"] == $contraseña){
                session_start();
                $_SESSION["mail"] = $correo;
                $_SESSION["mail"] = $contraseña;
               
                echo "<a href='iniciosesion.php'> volver a inicio </a>";
            }
            else{
                echo "Constraseña incorrecta";
            }
        }*/
    }
    mysqli_close($conexion);
?>
