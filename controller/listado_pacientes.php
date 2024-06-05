<?php
include(__DIR__ . '/../config/conection.php');

$sql = "SELECT pacientes.*, departamentos.Descripcion AS dep_value, municipios.Descripcion AS muni_value,
CASE 
	when Genero = 'M' then 'Masculino'
	ELSE 'Femenino'
END AS genero_value
FROM pacientes 
JOIN departamentos ON pacientes.DepartamentoID = departamentos.DepartamentoID
JOIN municipios ON pacientes.MunicipioID = municipios.MunicipioID";

$result = $conection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        print "
        <tr>
            <th>" . $row['PacienteID'] . "</th>
            <td>" . $row["Nombre"] . "</td>
            <td>" . $row["Edad"] . "</td>
            <td>" . $row["genero_value"] . "</td>
            <td>" . $row["dep_value"] . "</td>                    
            <td>" . $row["muni_value"] . "</td>                    
        </tr>
        ";
    }
} else {
    print "
    <tr>
        <th> -- </th>
        <td> -- </td>
        <td> -- </td>
        <td> -- </td>
        <td> -- </td>                    
        <td> -- </td>                    
    </tr>
    ";
}
