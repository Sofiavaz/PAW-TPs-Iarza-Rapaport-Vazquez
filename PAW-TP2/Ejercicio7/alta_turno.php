<?php

include 'Model/TurnoManager.php';

use app\Model\TurnoManager;
use app\Model\Turno;

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
