<?php

include 'functions.php';

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
$nombre_imagen = $_FILES['adj']['name'];

$carpeta_Destino = './images/';
$path_imagen = $carpeta_Destino . $nombre_imagen;

move_uploaded_file($_FILES['adj']['tmp_name'], $path_imagen);

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

if (count($invalid_fields) > 0) {
    // Retornar vista de error
    include "error.html.php";
}
else {
    // Retornar vista resumen
    include "InfoTurno.html.php";
}
