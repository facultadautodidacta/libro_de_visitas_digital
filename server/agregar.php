<?php session_start();
    include "Visitas.php";
    $visitas = new Visitas();

    $validacion = 0;

    foreach ($_POST as $key => $value) {
        if (empty($value)) {
            $_SESSION['mensaje'] = 'Debes agregar todos los campos!';
            $validacion ++;
        }
    }

    if ($validacion == 0) {
        $datos = array(
            "paterno" => $_POST['paterno'],
            "materno" => $_POST['materno'],
            "nombre" => $_POST['nombre'],
            "motivo" => $_POST['motivo'],
            "fecha" => date('Y-m-d H:i:s')
        );

        if ($visitas->agregarVisita($datos)) {
            $_SESSION['mensaje'] = 'exito';
            header('location:../index.php');
        } else {
            $_SESSION['mensaje'] = 'error';
            header('location:../index.php');
        }

    } else {
        header('location:../index.php');
    }

    

    
?>