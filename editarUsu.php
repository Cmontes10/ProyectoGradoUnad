<?php
include_once 'conexion.php';


if($_GET){

    $txt_usu = $_GET['txtusuario'];

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
                //$id = $row['id'];
        }
            // Consulta de actualización
            $query = "UPDATE usuario SET Nombre = ? WHERE id = 1";
            $stmt = $conn->prepare($query);

            // Enlazar parámetros
            $stmt->bind_param("s", $txt_usu);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo "Actualización exitosa.";
            } 
            else
            {
                echo "Error en la actualización: " . $stmt->error;
            }


    } 
    else 
    {
        echo "No se encontraron resultados.";
    }

}

    // Prepare the INSERT statement
    $sql = "SELECT Nombre,Usuario,Clave,validacion FROM usuario";
    $result = $conn->query($sql);

    // Cerrar la sentencia y la conexión
  
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boostrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Cuentas Ahorro</title>
</head>
<body>
 
<!-- navabar de administarado -->
<?php include_once('header.php') ?>
<!-- Fin navabar de administarado -->  

    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <h2>Editar Usuarios</h2>

<!--star table --> 
<div class="container mt-5">
    <div class="row">
        <div class="col-sm">
            <div class="tableFixHead">
                <form action="" method='GET'>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-magic" viewBox="0 0 16 16">
                                <path d="M9.5 2.672a.5.5 0 1 0 1 0V.843a.5.5 0 0 0-1 0v1.829Zm4.5.035A.5.5 0 0 0 13.293 2L12 3.293a.5.5 0 1 0 .707.707L14 2.707ZM7.293 4A.5.5 0 1 0 8 3.293L6.707 2A.5.5 0 0 0 6 2.707L7.293 4Zm-.621 2.5a.5.5 0 1 0 0-1H4.843a.5.5 0 1 0 0 1h1.829Zm8.485 0a.5.5 0 1 0 0-1h-1.829a.5.5 0 0 0 0 1h1.829ZM13.293 10A.5.5 0 1 0 14 9.293L12.707 8a.5.5 0 1 0-.707.707L13.293 10ZM9.5 11.157a.5.5 0 0 0 1 0V9.328a.5.5 0 0 0-1 0v1.829Zm1.854-5.097a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L8.646 5.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0l1.293-1.293Zm-3 3a.5.5 0 0 0 0-.706l-.708-.708a.5.5 0 0 0-.707 0L.646 13.94a.5.5 0 0 0 0 .707l.708.708a.5.5 0 0 0 .707 0L8.354 9.06Z"/>
                                </svg>
                                </th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Perfil</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($result as $dato):?>
                            <tr>
                                <th scope="row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </th>
                                <td>
                                    <input type="text" name="txtusuario" value="<?php echo($dato['Nombre'])?>">
                                </td>
                                <td>
                                    <input type="text" name="txtpass" value="<?php echo($dato['Usuario'])?>">
                                </td>
                                <td>
                                    <input type="text" name="txtperfil" value="<?php echo($dato['Clave'])?>">
                                </td>
                                <td>
                                    <input type="text" name="txtperfil" value="<?php echo($dato['validacion'])?>">
                                </td>
                                <td>
                                <button type="submit" name="editar" class="btn btn-outline-info" value="<?php echo($dato[0]) ?>"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    Guardar
                                </button>
                                </td>
                            </tr>
                        <?php endforeach ?>
                        </tbody>
                    </table>
                </form>
            </div> 
        </div> 
    </div>
    <!--end table -->
            </div>
        </div>
    </div>
</body>
</html>