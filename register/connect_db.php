<?php

$conexion = mysql_connect('mysql.ecosplashapp.com', 'u129050475_dv','Br@in2584');
mysql_select_db('u129050475_academ', $conexion);

		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>