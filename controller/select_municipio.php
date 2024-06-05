<?php
// include "config/conection.php";
include(__DIR__ . '/../config/conection.php');

if (isset($_POST['departamento_id'])) {

    $departamento_id = $_POST['departamento_id'];

    // Consulta para obtener los municipios
    $sql = "SELECT * FROM municipios WHERE DepartamentoID = " . $departamento_id;

    var_dump($sql);

    $result = $conection->query($sql);

    $municipios = "";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $municipios .= "
            <option value='" . $row['MunicipioID'] . "'> " . $row['Descripcion'] . " </option>
            ";
        }
    } else {
        echo "0 resultados";
    }
    echo $municipios;
}
