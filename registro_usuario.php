<?php
include_once 'conexion.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Prepare the INSERT statement
$sql = "INSERT INTO usuario (Nombre, Apellido, Usuario, Clave, Rep_contrasena, Sexo, Fecha, random, validacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
// Create a prepared statement
$stmt = $conn->prepare($sql);

//Creamos el numero random para identificar el usuario 
$numeroAleatorio = mt_rand(1000000000, 9999999999);
//echo $numeroAleatorio;


if($_POST)
{
    // Bind parameters to the statement
    $Nombre = $_POST["Nombre"];
    $Apellido = $_POST["Apellido"];
    $Usuario = $_POST["email"];
    $Contrasena = $_POST["Contrasena"];
    $Rep_contrasena = $_POST["Rep_contrasena"];
    $Sexo = $_POST["sexo"];
    $Fecha = $_POST["fecha"];
   $numeroAleatorio;
   $validacion = $_POST["validacion"];
    $stmt->bind_param("sssssssss",$Nombre, $Apellido, $Usuario,$Contrasena, $Rep_contrasena, $Sexo, $Fecha,$numeroAleatorio, $validacion);

    //Consultamos el correo que esta en la base de datos
    $sql_select = "SELECT Usuario FROM usuario";
    $query = mysqli_query($conn,$sql_select);

    while ($row = $query->fetch_assoc()) 
    {
        // Accedemos al usuario que esta en la base de datos
        $email= $row['Usuario'];
       // echo $email;
    
       //validamos si el usario que ingresa es igual al registrado en la base de datos 
        if( $Usuario == $email)
         {
            die(
               " <div class='alert alert-danger' role='alert' style='text-align: center'>
                    El Correo electronico ingresado ya existe en nuesta base de datos, por favor validar con otro correo.. Gracias 
                </div>

                <br />

                <div style='text-align: center'> 
                    <a href='registro_usuario.php'>Regresar</a>
                </div>
               "
                );

        }
    }

            
            if($Contrasena == $Rep_contrasena)
            {
                // Execute the statement
                if ($stmt->execute()) 
                {
                    echo " <div class='alert alert-success' role='alert' style='text-align: center'>
                                Usuario Ingresado Correctamente
                        </div>";
                    header( "refresh:3;url=home.php" );
                } 

            }
            else 
            {
                echo " <div class='alert alert-danger' role='alert' style='text-align: center'>
                            Las contraseñas no coinciden, por favor validar nuevamente.
                        </div>";
            }

        
    
}

// Close the statement and connection
$stmt->close();
$conn->close();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLEM</title>

    <!-- Link Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container mt-5 registro" >

        <h1>Clem Centro Latinoamericano de Especies Menores </h1>
        <h4>Registrate</h4>

        <!--
        <div class="row log_reg">
                <div class="col">
                    <a href="index.php" type="button" class="btn btn-outline-success" id="buton_login">LOGIN</a>
                </div>
                <div class="col">
                    <a href="registro_usuario.php" type="button" class="btn btn-outline-warning" id="buton_registrar">REGISTRARSE</a>
                </div>
            </div>
        -->
        <div class="form_regitro">
        <form method="POST">  
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color: #646402">Nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Nombre" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: #646402">Apellidos</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Apellido" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: #646402">Correo Electronico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: #646402">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Contrasena" required> 
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: #646402">Repetir Contraseña</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Rep_contrasena" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color: #646402">fecha de Nacimiento</label>
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fecha" >
            </div>

            <div class="row log_reg">
                <div class="col">
                    <h3>Sexo</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="exampleRadios1" name="sexo" value="Hombre" checked> Hombre  
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="exampleRadios2" name="sexo" value="Mujer"> Mujer    
                    </div>
                </div>

                <div class="col">
                <h3>Tipo de Usuario</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="exampleRadios1" name="validacion" value="1" checked> Administrador  
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="exampleRadios2" name="validacion" value="0"> Usuario Regular    
                    </div>
                </div>
            </div>
        </div>
            <br><br>
            <button type="submit" class="btn btn-outline-info">Guardar</button>
            <br>
        </form>
        </div>

    </div>
</body>
</html>