<?php

include 'Model/TurnoManager.php';
use app\Model\TurnoManager;

$IdFicha = htmlspecialchars($_GET['id']);

$turno_manager = new TurnoManager('turnos.txt');

$turnox = $turno_manager->get_turno_by_id($IdFicha);

include "View/fichaturno.view.php";

?>