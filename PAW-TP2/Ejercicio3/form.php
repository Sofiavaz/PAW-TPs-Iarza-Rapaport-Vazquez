<?php

// Pasa a variables los valores del post
$fullname = $_GET['fullname'];
$email = $_GET['email'];
$tel = $_GET['telephone'];
$age = $_GET['age'];
$shoe_size = $_GET['shoeSize'];
$height = $_GET['height'];
$birthdate = $_GET['birthdate'];
$hair_color = $_GET['hairColor'];
$appt_date = $_GET['apptDate'];
$appt_time = strtotime($_GET['apptTime']);

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
    include "infoTurno.html.php";
}