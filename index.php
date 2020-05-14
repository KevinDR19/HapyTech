<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title>

    <link rel="shortcut icon" href="Publicos/Imagenes/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Publicos/Imagenes/favicon.ico" type="image/x-icon">

    <!--Css-->
    <link rel="stylesheet" href="Librerias/bootstrap-4.4.1/css/bootstrap.css">
    <link rel="stylesheet" href="Librerias/fontawesome-5.13.0/css/all.css">
    <link rel="stylesheet" href="Librerias/sweetalert2/sweetalert/sweetalert2.min.css">
    <link rel="stylesheet" href="Librerias/indexStyle.css">

    <!--Js-->
    <script src="Librerias/jquery-3.4.1/jquery-3.4.1.js"></script>
    <script src="Librerias/bootstrap-4.4.1/js/bootstrap.js"></script>
    <script src="Librerias/sweetalert2/sweetalert/sweetalert2.all.min.js"></script>
    <script src="Funciones/edad_controller.js"></script>

</head>

<body>
    
    <div class="container">
        <div class="card">
            <div class="card-header"><h5>Registro de usuario</h5></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 form-group">
                        <label for="nombre">Nombre *</label>
                        <input type="text" class="form-control" name="nombre" id="nombre">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="apellido">Apellido *</label>
                        <input type="text" class="form-control" name="apellido" id="apellido">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="fechaNacimiento">Fecha de nacimiento *</label>
                        <input type="date" class="form-control" name="fechaNacimiento" id="fechaNacimiento">
                    </div>
                    <div class="col-md-2 form-group">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control"  name="edad" id="edad" readonly="true">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 form-group">
                        <label for="sexo">Sexo *</label>
                        <select name="sexo" id="sexo" class="form-control">
                            <option value="@">---</option>
                            <option value="MASCULINO">MASCULINO</option>
                            <option value="FEMENINO">FEMENINO</option>
                            <option value="OTRO">OTRO</option>
                        </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="correo">Correo electrónico *</label>
                        <input type="email" class="form-control" name="correo" id="correo">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="telefono">Teléfono *</label>
                        <input type="text" name="telefono" id="telefono" class="form-control">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="celular">Celular *</label>
                        <input type="text" name="celular" id="celular" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 form-group">
                        <label for="contrasenia">Contraseña *</label>
                        <input type="password" name="contrasenia" id="contrasenia" class="form-control">
                    </div>
                    <div class="col-md-3" style="padding-top: 2em;">
                        <button type="submit" class="btn btn-primary" id="btnEnviar">Registrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    <script>
        $('#btnEnviar').click(function(){
            var nombre = $('#nombre').val();
            var apellido = $('#apellido').val();
            var fechaNacimiento = $('#fechaNacimiento').val();
            var edad = $('#edad').val();
            var sexo = $('#sexo').val();
            var correo = $('#correo').val();
            var telefono = $('#telefono').val();
            var celular = $('#celular').val();
            var contrasenia = $('#contrasenia').val();

            if(nombre == "") {
                $('#nombre').focus();
                Swal.fire({
                    type: 'warning',
                    title: 'Opps!',
                    text: 'Este campo es obligatorio.',
                });
                return;
            }

            if(apellido == "") {
                $('#apellido').focus();
                Swal.fire({
                    type: 'warning',
                    title: 'Opps!',
                    text: 'Este campo es obligatorio.',
                });
                return;
            }

            if(fechaNacimiento == "") {
                $('#fechaNacimiento').focus();
                Swal.fire({
                    type: 'warning',
                    title: 'Opps!',
                    text: 'Este campo es obligatorio.',
                });
                return;
            }

            if(edad == "") {
                $('#edad').focus();
                Swal.fire({
                    type: 'warning',
                    title: 'Opps!',
                    text: 'Este campo es obligatorio.',
                });
                return;
            }

            if(sexo == "") {
                $('#sexo').focus();
                Swal.fire({
                    type: 'warning',
                    title: 'Opps!',
                    text: 'Este campo es obligatorio.',
                });
                return;
            }

            if(correo == "") {
                $('#correo').focus();
                Swal.fire({
                    type: 'warning',
                    title: 'Opps!',
                    text: 'Este campo es obligatorio.',
                });
                return;
            }

            if(telefono == "") {
                $('#telefono').focus();
                Swal.fire({
                    type: 'warning',
                    title: 'Opps!',
                    text: 'Este campo es obligatorio.',
                });
                return;
            }

            if(celular == "") {
                $('#nombre').focus();
                Swal.fire({
                    type: 'warning',
                    title: 'Opps!',
                    text: 'Este campo es obligatorio.',
                });
                return;
            }

            if(contrasenia == "") {
                $('#contrasenia').focus();
                Swal.fire({
                    type: 'warning',
                    title: 'Opps!',
                    text: 'Este campo es obligatorio.',
                });
                return;
            }

            $.ajax({
                data: {
                    nombre: nombre,
                    apellido: apellido,
                    fechaNacimiento: fechaNacimiento,
                    edad: edad,
                    sexo: sexo,
                    correo: correo,
                    telefono: telefono,
                    celular: celular,
                    contrasenia: contrasenia,
                },
                dataType: 'json',
                type: 'POST',
                url: 'Funciones/registroController.php',
                beforeSend: function() {
                    Swal.fire({
                        title: "Enviando datos...",
                        text: "Esto tomará unos segundos!",
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        imageWidth: 150,
                        imageUrl: "https://utservisalud.isware.com.co/img/loading3.gif",
                    }),
                    Swal.disableButtons();
                },
                success: function(response) {
                    if(response['estado'] == "ok") {
                        Swal.fire({
                            type: 'success',
                            title: 'Ok!',
                            text: response['mensaje'],
                        });
                        /*location.reload();*/
                    }
                    if(response['estado'] == "error") {
                        Swal.fire({
                            type: 'error',
                            title: 'Opps!',
                            text: response['mensaje'],
                        });
                    }
                },
            });
        });
    </script>

</html>