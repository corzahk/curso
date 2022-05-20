<?php
include '../conexion/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nick = $con->real_escape_string(htmlentities($_POST['nick']));
    $passone = $con->real_escape_string(htmlentities($_POST['passone']));
   /*  $passone = sha1($passone); */
    $nivel = $con->real_escape_string(htmlentities($_POST['nivel']));
    $nombre = $con->real_escape_string(htmlentities($_POST['nombre']));
    $correo = $con->real_escape_string(htmlentities($_POST['correo']));

    if (empty($nick) || empty($passone) || empty($nivel) || empty($nombre)) {
        header('location:../extend/alerta.php?msj=Hay un campo sin especificar&c=us&p=in&t=error');
        exit;
    }
    if (!ctype_alpha($nick)) {
        header('location:../extend/alerta.php?msj=El nick no contiene solo letras&c=us&p=in&t=error');
        exit;
    }
    if (!ctype_alpha($nivel)) {
        header('location:../extend/alerta.php?msj=El nivel no contiene solo letras&c=us&p=in&t=error');
        exit;
    }

    $carecteres ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    for ($i=0; $i < strlen($nombre); $i++) { 
        $buscar = substr($nombre, $i, 1);
        if (strpos($caracteres, $buscar) === false) {
            header('location:../extend/alerta.php?msj=El nombre no contiene solo letras&c=us&p=in&t=error');
        exit;
        }
    }

    $usuario = strlen($nick);
    $contra = strlen($passone);

    if ($usuario < 0 || $usuario >15) {
        header('location:../extend/alerta.php?msj=El nick debe contener entre 8 y 15 caracteres&c=us&p=in&t=error');
        exit;
    }
    if ($contra < 0 || $contra >15) {
        header('location:../extend/alerta.php?msj=La contraseña debe contener entre 8 y 15 caracteres&c=us&p=in&t=error');
        exit;
    }

    if (!empty($corre)) {
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            header('location:../extend/alerta.php?msj=El email no es valido&c=us&p=in&t=error');
        }
    }
}else{
   header('location:../extend/alerta.php?msj=Utiliza el formulario&c=us&p=in&t=error');
}
?>