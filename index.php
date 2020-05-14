<!DOCTYPE html>
<html lang="en">
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

    <!--Js-->
    <script src="Librerias/jquery-3.4.1/jquery-3.4.1.js"></script>
    <script src="Librerias/bootstrap-4.4.1/js/bootstrap.js"></script>
    <script src="Librerias/sweetalert2/sweetalert/sweetalert2.all.min.js"></script>

</head>

<body>
    
    <div class="container">
        <form action="Funciones/registro_controller.php" method="post">
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
        </form>
    </div>

</body>

</html>