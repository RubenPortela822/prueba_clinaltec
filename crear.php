<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud clinaltec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex justify-content-center">
        <h1>Prueba</h1>
    </div>
    <div class="d-flex justify-content-center mb-3">

        <a href="listar.php"><button type="button" class="btn btn-primary mx-2">Listar</button> </a>
        <a href="crear.php"> <button type="button" class="btn btn-primary mx2">Crear</button></a>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <form id="pacienteForm" action="controller/guardar_paciente.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombre">
            </div>
            <div class="mb-3">
                <label class="form-label">Edad</label>
                <input type="text" class="form-control" name="edad" id="edad" aria-describedby="edad">
            </div>
            <div class="mb-3">
                <label class="form-label">Genero</label>
                <select class="form-control" name="genero" id="genero">
                    <option value="-1">Seleccione un departamento</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Departamento</label>
                <select id="departamento" class="form-control" name="departamento">
                    <option value="-1">Seleccione un departamento</option>
                    <?php
                    include "controller/select_departamento.php"
                    ?>
                </select>
            </div>
            <div>
                <label for="municipio">Municipio</label>
                <select id="municipio" class="form-control" name="municipio">
                    <option value="-1">Seleccione un municipio</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Guardar</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#departamento').change(function() {
                var departamentoID = $(this).val();
                if (departamentoID) {
                    $.ajax({
                        url: 'controller/select_municipio.php',
                        type: 'POST',
                        data: {
                            departamento_id: departamentoID
                        },
                        success: function(response) {
                            $('#municipio').html(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                } else {
                    $('#municipio').html('<option value="">Seleccione un municipio</option>');
                }
            });
        });


        document.getElementById('pacienteForm').addEventListener('submit', function(event) {
            // Evitar el envío del formulario
            event.preventDefault();

            // Variables para los campos
            let nombre = document.getElementById('nombre');
            let edad = document.getElementById('edad');
            let genero = document.getElementById('genero');
            let departamento = document.getElementById('departamento');
            let municipio = document.getElementById('municipio');

            // Validación de nombre
            if (nombre.value.trim() === '') {
                nombre.classList.add('is-invalid');
            } else {
                nombre.classList.remove('is-invalid');
                nombre.classList.add('is-valid');
            }

            if (edad.value.trim() === '' || isNaN(edad.value)) {
                edad.classList.add('is-invalid');
            } else {
                edad.classList.remove('is-invalid');
                edad.classList.add('is-valid');
            }

            if (genero.value.trim() === '-1') {
                genero.classList.add('is-invalid');
            } else {
                genero.classList.remove('is-invalid');
                genero.classList.add('is-valid');
            }

            if (departamento.value.trim() === '-1') {
                departamento.classList.add('is-invalid');
            } else {
                departamento.classList.remove('is-invalid');
                departamento.classList.add('is-valid');
            }


            if (municipio.value.trim() === '-1') {
                municipio.classList.add('is-invalid');
            } else {
                municipio.classList.remove('is-invalid');
                municipio.classList.add('is-valid');
            }
            
           

            // Si el formulario es válido, enviarlo
            if (document.querySelectorAll('.is-invalid').length === 0) {                
                $.ajax({
                        url: 'controller/guardar_paciente.php',
                        type: 'POST',
                        data: {
                            nombre:nombre.value,
                            edad:edad.value,
                            genero:genero.value,
                            departamento:departamento.value,
                            municipio:municipio.value
                        },
                        success: function(response) {
                            alert("Paciente guardado con exito");
                            // $('#municipio').html(response);
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    }); 
                
            }
        });

    </script>
</body>

</html>