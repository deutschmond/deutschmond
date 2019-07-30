<?php 
$usuario=$_POST['usuario'];
$password=_$POST['password'];

$conexion= mysqli_connect("localhost","root","","bdprueba");
$consulta= "SELECT * FROM usuarios WHERE usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas= mysqli_num_rows($resultado);

if($filas>0){
    header("location:productos.html");
}else{
    print("Error al momento de logearte");
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>