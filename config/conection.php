<?php

try {
    $conection = new mysqli("localhost", "root", "","clinicadb");
    $conection->set_charset('utf8');
} catch (\Throwable $th) {
    die("Error Al Conectar Con La Base De Datos");
}
