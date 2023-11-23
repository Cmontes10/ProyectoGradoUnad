<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h5>hola</h5>
</body>
</html>

<?php


  session_destroy(); // Destruir la sesión
  header("Location: index.php"); // Redirigir a la página de inicio de sesión
  exit();



?>