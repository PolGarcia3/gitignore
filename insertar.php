<?php 
include 'config.php';
include 'conexion.php';
include 'persona.php';
/*$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (?, ?)");
// Bind
$name = "Peter";
$age = 30;
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $age);
// Excecute
$stmt->execute();*/
////
$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
// Bind
$nombre = "Charles";
$edad = 25;
$stmt->bindParam(':name', $nombre);
$stmt->bindParam(':age', $edad);
// Excecute
$stmt->execute();

$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
$name = "Luis";
$age = 35;
// Bind y execute: no funciona 
try{

if($stmt->execute(array(':name'=>$name, ':age'=>$age))){
    echo 'bien';
}else{ echo 'mal';}

}catch (PDOException $e) {
    echo 'mal';
   echo  $e->getMessage();
} 
/*$persona=new Persona("pepe",32);
$stmt = $pdo->prepare("INSERT INTO tbl_persona (name, age) VALUES (:name, :age)");
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}*/
$persona=new Persona(null,"pepito",34);
$stmt = $pdo->prepare("INSERT INTO tbl_persona(id, name, age) VALUES (:id, :name, :age)" );
if($stmt->execute((array) $persona)){
    echo 'bien';
}else{ echo 'mal';}

