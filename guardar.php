<?php
 require 'conexion.php';
 $asunto  = $_POST['asunto']; 
 $nombre  = $_POST['nombre'];
 $email  = $_POST['email'];
 $comentario = $_POST['comentario'];

$insertar = "INSERT INTO datos VALUES ('$asunto','$nombre','$email','$comentario') ";

$query = mysqli_query($conectar, $insertar);

if($query){

   echo "<script> 
			alert('Se ha enviado correctamente');
			location.href = 'contacto.html';
		</script>";

}else{
    echo "<script> 
			alert('No se ha podido enviar');
			location.href = 'contacto.html';
		</script>";


}




?>