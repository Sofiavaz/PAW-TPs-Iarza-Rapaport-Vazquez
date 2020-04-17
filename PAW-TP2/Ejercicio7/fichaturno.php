<?php

include 'Model/TurnoManager.php';
use app\Model\TurnoManager;

$IdFicha = $_GET['id'];

$turno_manager = new TurnoManager('turnos.txt');

$turnox = $turno_manager->get_turno_by_id($IdFicha);

include "View/fichaturno.view.php";


/*try {
    $encoded = file_get_contents($this->path);

    $turnosEncoded = json_decode($encoded, true);

    //$turnos = [];

    foreach($turnosEncoded as $turnoEncoded){
        if ($IdFicha == $id){
            include "View/fichaturno.view.php";//$turnos ";
        }
    }    		

    //return $turnos;
}
catch (Exception $e){
    return [];
}
   */ 
?>