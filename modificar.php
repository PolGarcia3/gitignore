<?php
include 'config.php';
include 'conexion.php';
include 'persona.php';
$stmt = $pdo->prepare("UPDATE tbl_persona SET name=?, age=? WHERE id=?");
// Bind
$nombre = "Peter";
$edad = 19;
$id=2;
$stmt->bindParam(1, $nombre);
$stmt->bindParam(2, $edad);
$stmt->bindParam(3,$id);
// Excecute
$stmt->execute();
$persona=new Persona(2,"pepito",36);
$stmt = $pdo->prepare("UPDATE tbl_persona SET name=:name, age=:age WHERE id=:id" );
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}
