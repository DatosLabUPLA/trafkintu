<?php

if(getenv("STATE") == "prod") {
    $mysql_host = getenv('HOST');
    $mysql_usuario = getenv('USERNAME');
    $mysql_password = getenv('PASSWORD');
    $mysql_port = getenv('PORT');
    $mysql_db = getenv('DATABASE');
}else {
    $mysql_host = "localhost";
    $mysql_usuario = "root";
    $mysql_password = "";
    $mysql_port = "3306";

    //BASE DE DATOS
    $mysql_bd = "adivinadorlab";
}

$enlace = mysqli_connect($mysql_host, $mysql_usuario, $mysql_password, $mysql_bd, $mysql_port);

/* COMPROBAR LA CONEXIÓN */
if (mysqli_connect_errno()){
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

//HACEMOS QUE LOS CARACTERES SE VEAN TODOS (UTF8)
mysqli_set_charset($enlace,"utf8");

?>