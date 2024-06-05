<?php
include(__DIR__ . '/../config/conection.php');


$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$genero = $_POST["genero"];
$departamento = $_POST["departamento"];
$municipio = $_POST["municipio"];

$sql = 'INSERT INTO pacientes (`Nombre`,`Edad`,`Genero`,`DepartamentoID`,`MunicipioID`) VALUES ("'.$nombre.'","'.$edad.'","'.$genero.'",'.$departamento.','.$municipio.')';

$alertResponse ="";

if ($conection->query($sql)) return true;


