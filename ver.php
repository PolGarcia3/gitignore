<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';
$sentencia=$pdo->prepare("SELECT * FROM tbl_persona");
$sentencia->execute();
$listaPersonas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
//print_r($listaPersonas);

