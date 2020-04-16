<?php

$IdFicha = $_GET['id'];

try {
    $encoded = file_get_contents($this->path);

    $turnosEncoded = json_decode($encoded, true);

    $turnos = [];

    foreach($turnosEncoded as $turnoEncoded){
        if ($IdFicha == $id){
            require "View/fichaturno.view.php $turnos ";
        }
    }    		

    return $turnos;
}
catch (Exception $e){
    return [];
}
    
?>