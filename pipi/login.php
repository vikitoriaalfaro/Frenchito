<?php
    $correo = $_POST["mail"];
    $contraseña = $_POST["password"];

   
    $servername = "127.0.0.1";
    $database = "Frenchi";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion
 
 
    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
      
        $query = "select password, nombre from Usuario where mailusuario = '$correo'";
        //esto es la consulta que realizo para saber si la contraseña coincide con el mail y la guardo en la variable query
        $resultado=mysqli_query($conexion, $query);
        //la variable resultado va a guardar el resultado del comando donde se realiza la consulta
        if(mysqli_num_rows($resultado)  == 0){
            header("Location: Login.html");
        }
        else {
            $fila=mysqli_fetch_assoc($resultado);
            if($fila["password"] == $contraseña){
                session_start();
                $_SESSION["usuario"] = $fila["nombre"]; 
                //ejemplo para poner en el index    
                header("Location: /nosotros/Nosotros.php");

            }
            else{
                header("Location: Login.html");
            }
        }
    }
    mysqli_close($conexion);
?>
