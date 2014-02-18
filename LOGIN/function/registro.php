<?php
	include 'conexion.php';

	
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$pass = md5(mysqli_real_escape_string($_POST['pass']));
	$pagina = $_POST['pagina'];

		
		$SQL = "Select * From usuarios Where email = '$email'";
		$consulta = mysql_query($SQL);
		$filas = mysql_num_rows($consulta);
		$datos = mysql_fetch_row($consulta);

			if ($filas>0){
				echo "CORREO EN USO";
			}else{

				$SQL = "Insert Into usuarios (nombre, email, pass) 
				Values ('".$nombre."','".$email."','".$pass."')";
				mysql_query($SQL);
				
             echo "USUARIO REGISTRADO CORRECTAMENTE";
                                    
            }     
	
?>