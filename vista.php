<?php

include "config.php";
include_once 'cabecera.html';
include 'ver.php';

echo "<td><a type='button' class='btn btn-success'href='insertar.php'>Crear</a></td>";
echo "<table class='table table-light'>";
echo "<tr>";
echo "<th>email</th>";
echo "<th>nombre</th>";
echo "<th>apellido</th>";
echo "<th>edad</th>";
echo "<th>Actualizar</th>";
echo "<th>Borrar</th>";
echo "</tr>";

foreach ($listaPersonas as $persona) {

    echo "<tr>";
    echo "<td>{$persona['email']}</td>";
    echo "<td>{$persona['nombre']}</td>";
    echo "<td>{$persona['apellido']}</td>";
    echo "<td>{$persona['edad']}</td>";

    echo "<td><a type='button' class='btn btn-primary' href='actualizar.php?id={$persona['id']}' onclick=\"return confirm('¿Estás seguro de actualizar?')\">Actualizar</a></td>";

    echo "<td><a type='button' class='btn btn-danger' href='borrar.php?id={$persona['id']}'  onclick=\"return confirm('¿Estás seguro de borrar?')\">borrar</a></td>";

    echo '</tr>';
}

echo "</table>";
echo "</html>";
