<?php

    require_once('Database/conexion.php');

    $conexion = new conexion();
    $cnx = $conexion->conectar();

    $nombre = trim(mb_strtroupper($_POST['nombre']));
    $apellido = trim(mb_strtroupper($_POST['apellido']));
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);
    $celular = trim($_POST['celular']);
    $contrasenia = trim($_POST['contrasenia']);

    $contraseniaHash = password_hash($contrasenia, PASSWORD_ARGON2I);

    try {
        #Inicia la transacción
        $conexion->beginTransaction();

        #Prepara la consulta sql
        $sql = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, fechaNacimiento,
        edad, sexo, correo, telefono, celular, contrasenia) VALUES (:nombre, :apellido, :fechaNacimiento,
        :edad, :sexo, :correo, :telefono, :celular, :contrasenia) ");

        #Blinda los datos de inserción
        $sql->bindParam(':nombre', $nombre);
        $sql->bindParam(':apellido', $apellido);
        $sql->bindParam(':fechaNacimiento', $fechaNacimiento);
        $sql->bindParam(':edad', $edad);
        $sql->bindParam(':sexo', $sexo);
        $sql->bindParam(':correo', $correo);
        $sql->bindParam(':telefono', $telefono);
        $sql->bindParam(':celular', $celular);
        $sql->bindParam(':contrasenia', $contrasenia);

        #Ejecuta la consulta
        $sql->execute();

        #Guarda los datos
        $conexion->commit();
        $response['estado'] = "ok";
        $response['mensaje'] = "Los datos fueron insertados exitosamente.";
        echo json_encode($response);
        exit();
    }catch(PDOException $e) {
        #Devuelve los datos
        $conexion->rollBack();
        $response['estado'] = "error";
        $response['mensaje'] = "Se presentó el siguiente error: $e";
        echo json_encode($response);
        exit();
    }