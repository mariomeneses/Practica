<?php

$con= mysql_connect("localhost","root","root");
mysql_query("SET NAMES 'utf8'");
if($con) 
{   
	$db = mysql_select_db("login",$con);
	if(!$db)
	{ 
       		echo "Problemas para conectar a la BD";
	}
}
else
{
	echo "Problemas para conectar con el servidor";
}

?>