<?php
   class Usuarios
   {
   	   public function BuscarUsuario($usuario, $contraseña)
	   {
	   	   $con=new Conexion();
		   $q="SELECT * FROM `usuarios` WHERE `usuario`='$usuario' AND `contraseña`='$contraseña';";
		   $resultado=$con->query($q);
		   return $resultado;
	   }
   }
?>
