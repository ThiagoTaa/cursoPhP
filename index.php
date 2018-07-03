<?php
    require_once("config.php");

    $sql = new Sql();

    $usuarios = $sql->select("SELECT * FROM tb_usuario");


    var_dump($usuarios);
?>