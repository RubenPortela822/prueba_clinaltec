<?php
include(__DIR__ . '/../config/conection.php');

$sql = "SELECT * FROM departamentos";

$result = $conection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        print "
        <option value='" . $row['DepartamentoID'] . "'> " . $row['Descripcion'] . " </option>
        ";
    }
} else {
    echo "0 resultados";
}
