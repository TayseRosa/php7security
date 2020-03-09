<?php

$id = (isset($_GET["id"])) ? $_GET["id"] : 1;

//Forma de evitar o SQL Injection
//Comparar tudo com aspas
//Usar PDO com Bind Params
//No form, usar tipos de dados adequados
if(!is_numeric($id) || strlen($id) > 5 ){
    exit("Pegamos você! Haha");
}

$conn = mysqli_connect("localhost", "root","", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while($resultado = mysqli_fetch_object($exec)){
    //echo $resultado->desnome . "<br>";
    var_dump($resultado);
}

//No navegador: http://localhost/php7/t_seguranca/seguranca_ex02.php?id=1%20OR%201=1%20--