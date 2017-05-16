<?php
function conectar(){
	
	$user="root";
	$pw="";
	$host="localhost";
	$db="tn";
	$con=mysql_connect($host,$user,$pw) or die(mysql_error());
	mysql_select_db($db,$con);
	return $con;
}

?>