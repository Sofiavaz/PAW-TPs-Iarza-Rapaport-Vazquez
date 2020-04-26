<?php

// Pasa a variables los valores del post
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$tel = $_POST['telephone'];
$age = $_POST['age'];
$shoe_size = $_POST['shoeSize'];
$height = $_POST['height'];
$birthdate = $_POST['birthdate'];
$hair_color = $_POST['hairColor'];
$appt_date = $_POST['apptDate'];
$appt_time = strtotime($_POST['apptTime']);
$Hora = getdate();
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

if ($appt_time == "" || $appt_time < $min_time || $appt_time > $max_time){
    $invalid_fields[] = "Hora turno";
}



if ((ValidExtension($extension)) && (ValidTamanio($tamanio_imagen))) {
    $hash_Imagen = hash("sha256", $nombre_imagen . $tamanio_imagen .$Hora) . "." .$extension;
    if(file_exists($fullname.'/'.$hash_Imagen)){
          $invalid_fields[] = "Imagen Existente";
      }else{
        if (!is_dir($fullname.'/')){   
            mkdir($fullname.'/',0777);
        } 
          $destino = $fullname.'/'.$hash_Imagen;
          move_uploaded_file($nombre_img_tmp,$destino);
      }
   

    }
    

function ValidExtension($extention) {
    $valid_extentions = ["png", "jpg"];
    if (in_array($extention, $valid_extentions)) {
      return TRUE;
    }
    $invalid_fields[] = "Archivo Invalido";
  }
  
  function ValidTamanio($size) {
    if ($size <= 3000000) {
      return TRUE;
    }
    $invalid_fields[] = "Tamanio demasiado grande";
  }
  


if (count($invalid_fields) > 0) {
    include "error.html.php";
}
else {
    include "infoTurno.html.php";
}
