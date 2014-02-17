<?php
function mensaje($variable)
{
	switch($variable)
	{
		case 1:
			$mensaje = "<p>Los datos no coinciden</p>";
		break;
		case 2:
			$mensaje = "<p>Las contrase単as deben ser iguales</p>";
		break;
		case 3:
			$mensaje = "<p>Correo ya registrado</p>";
		break;
		case 4:
			$mensaje = "<p>Usuario registrado perfectamente</p>";
		break;
		case 5:
			$mensaje = "<p>Mensaje no fue enviado, por favor intentelo nuevamente</p>";
		break;
	}
	return $mensaje;
}
?>