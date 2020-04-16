<?php 

include 'Model/TurnoManager.php';

use app\Model\TurnoManager;


$turno_manager = new TurnoManager('turnos.txt');

$turnos = $turno_manager->get_turnos();	

include 'View/tabla.view.php';