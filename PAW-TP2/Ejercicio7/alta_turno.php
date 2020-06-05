<?php

include 'Model/TurnoManager.php';

use app\Model\TurnoManager;
use app\Model\Turno;

// Pasa a variables los valores del post
$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$tel = htmlspecialchars($_POST['telephone']);
$age = htmlspecialchars($_POST['age']);
$shoe_size = htmlspecialchars($_POST['shoeSize']);
$height = htmlspecialchars($_POST['height']);
$birthdate = htmlspecialchars($_POST['birthdate']);
$hair_color = htmlspecialchars($_POST['hairColor']);
$appt_date = htmlspecialchars($_POST['apptDate']);
$appt_time = strtotime(htmlspecialchars($_POST['apptTime']));

$Hora = time();
$nombre_imagen = basename ($_FILES ["diagnostico"]["name"]);
$nombre_img_tmp =$_FILES["diagnostico"]["tmp_name"];
$extension = strtolower(pathinfo($nombre_imagen, PATHINFO_EXTENSION));
$tamanio_imagen = $_FILES ["diagnostico"] ["size"];


// Constantes de validacion de hora
$min_time = strtotime("08:00");
$max_time = strtotime("17:00");

// Valida los valores recibidos
$invalid_fields = [];

if ($fullname == "") {
    $invalid_fields[] = "Nombre";
}

if ($email == ""){
    $invalid_fields[] = "Email";
}

if ($tel == ""){
    $invalid_fields[] = "Telefono";
}

if ($shoe_size != "" && ($shoe_size < 20 || $shoe_size > 45)){
    $invalid_fields[] = "Talla de calzado";
}

if ($birthdate == ""){
    $invalid_fields[] = "Fecha nacimiento";
}

if ($appt_date == ""){
    $invalid_fields[] = "Fecha turno";
}

if ($appt_time == "" || $appt_time < $min_time 
    || $appt_time > $max_time) 
{
    $invalid_fields[] = "Hora turno";
}


if ((ValidExtension($extension,  $invalid_fields)) && (ValidTamanio($tamanio_imagen,  $invalid_fields))) {
    $hash_Imagen = hash("sha256", $nombre_imagen . $tamanio_imagen .$Hora) . "." .$extension;
    if(file_exists($fullname.'/'.$hash_Imagen)){
          $invalid_fields[] = "Imagen Existente";
      }else{
        if (!is_dir("files/" .$fullname.'/')){   
            if (!is_dir("files/")){
                mkdir("files/",0777);    
            }
            mkdir("files/" .$fullname.'/',0777);
        } 
          $destino = "files/" .  $fullname.'/'.$hash_Imagen;
          move_uploaded_file($nombre_img_tmp,$destino);
      }
}

if (count($invalid_fields) > 0) {
    // Retornar vista de error
    include "View/error.view.php";
}
else {
    // Almacenar el turno
    $turno = new Turno;

    $turno->fullname = $fullname;
    $turno->email = $email;
    $turno->tel = $tel;
    $turno->age= $age;
    $turno->shoe_size = $shoe_size;
    $turno->height = $height;
    $turno->birthdate = $birthdate;
    $turno->hair_color = $hair_color;
    $turno->appt_date = $appt_date;
    $turno->appt_time = $appt_time;
    $turno->destino = $destino;

    $turno_saver = new TurnoManager('turnos.txt');

    $ok = $turno_saver->save_turno($turno);

    if ($ok == true){
        // Informar turno guardado
        $view_message = "Turno guardado.";

        include "View/infoTurno.view.php";
    }
    else {
        $view_message = "No pudo guardarse el turno. Chequear fecha y hora esten libres.";
        include "View/error.view.php";
    }
}


function ValidExtension($extention, $invalid_fields = []) {
    $valid_extentions = ["png", "jpg"];
    if (in_array($extention, $valid_extentions)) {
      return TRUE;
    }
    $invalid_fields[] = "Archivo Invalido";
  }
  
  function ValidTamanio($size, $invalid_fields = []) {
    if ($size <= 3000000) {
      return TRUE;
    }
    $invalid_fields[] = "Tamanio demasiado grande";
  }