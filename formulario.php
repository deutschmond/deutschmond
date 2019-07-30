<?php 
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $correo = $_POST['correo'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no ,initial-scale=1,maximum-scale=1,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario de prueba 2 con validación PHP</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"method="post">
        <h1>Registro</h1>
        <label for="">Nombre:</label>
        <input type="text"name="nombre" value="<?php if(isset($nombre)) echo $nombre ?>">

        <label for="">Edad:</label>
        <input type="text" name="edad" value="<?php if(isset($edad)) echo $edad ?>">

        <label for="">Correo:</label>
        <input type="text" name="correo" value="<?php if(isset($correo)) echo $correo ?>">

        <input type="submit" name="submit">
        <?php 
            include("validar-form.php");
        ?>



    </form> 
    
</body>
</html>