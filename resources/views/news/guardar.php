<?php

$correo = $_POST['correo'];
echo $correo;
/*
$name = utf8_decode($_POST['name']);
$password = md5($_POST['password']);

//Para la conexión deberás introducir el usuario y password de tu base de datos
$con = mysql_connect('localhost', 'usuario', 'password');
mysql_select_db("tu_base_de_datos", $con);

$insert = "INSERT INTO tu_tabla (name, password, date_add) VALUES ('$name', '$password', now())";
mysql_query($insert);
*/
?>