<?php
    session_start();
    include_once 'conexion.php';

    // Check the connection
   /* if ($conn->connect_error) 
      {
        die("Connection failed: " . $conn->connect_error);
      }
    */

    // Prepare the INSERT statement
    $sql = "SELECT Nombre,Usuario,Clave,validacion FROM usuario";
    $result = $conn->query($sql);

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) 
    {
        // Recorrer los resultados
         while ($row = $result->fetch_assoc())
         {
            // Acceder a los datos del usuario
            $nombre = $row['Nombre'];
            $usuarios = $row['Usuario'];
            $passw = $row['Clave'];
            $validacion = $row['validacion'];

            if ($_POST)
            {
                $usu = $_POST['usuario'];
                $contra = $_POST['pass'];
                
                if ($usu == $usuarios & $contra == $passw & $validacion == 1) 
                {
                    //asignamos la sesion el usuario que ingresa
                    $login = $nombre;
                    $_SESSION['Nombre'] = $login;
    
                    header('Location: home.php');
                }
                elseif($usu == $usuarios & $contra == $passw & $validacion == 0)
                {
                    header('Location: home2.php');
                            
                }
                else
                {
                    echo 'Usurio no registrado';
                }
            }
        
        }

    } 
    else 
    {
        echo "No se encontraron resultados.";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Friends</title>

    <!-- Link Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container mt-5 contenedor">
        <!--
            <div class="row log_reg">
                <div class="col">
                    <button type="button" class="btn btn-outline-success" id="buton_login">LOGIN</button>
                </div>
                <div class="col">
                    <a href="registro_usuario.php" type="button" class="btn btn-outline-warning" id="buton_registrar">REGISTRARSE</a>
                </div>
            </div>
        -->

            <div class="row log_reg">
                <div class="col" style="text-align: center;">
                    <h1>CLEM</h1>
                </div>
                <div class="col" style="text-align: center;">
                    <h1>UNAD</h1>
                </div>
            </div>

            <div class="imgclass">
                <img src="img/clem.png" class="img-fluid img-thumbnail rounded" alt="Responsive image" style=" " >
            </div>
            <br><br>

            <div class="ingreso_fomr">
                <form method="POST">

                    <div>
                        <h2>Login</h2>
                    </div>
                    <div class="mb-3">
                        <p>Usuario</p>
                        <input type="email" class="form-control" aria-describedby="emailHelp" name="usuario" required>
                        <div id="emailHelp" class="form-text">Nunca compartas tus credenciales con nadie.</div>
                    </div>
                    <div class="mb-3">
                        <p>Contraseña</p>
                        <input type="password" class="form-control" id="exampleInputPassword1" name ="pass" required>
                    </div>
                    <button type="submit" class="btn btn-outline-info" id="ingresar">Ingresar</button>
                </form>
            </div>
    </div>
</body>
</html>