<?php

namespace app\Model;

include 'Model/Turno.php';

/**
 * summary
 */
class TurnoManager
{

	public function __construct($path)
    {
        $this->path = $path; 
    }

	// Guarda el turno recibido en el archivo del path
    public function save_turno(Turno $turno){
    	try {
    		// Obtengo el array de turnos existentes
    		$turnos = $this->get_turnos();

    		// Agrego a ese arreglo el nuevo turno
    		$turnos[] = $turno;

    		// Vuelvo a json para guardarlo
	    	$encoded = json_encode($turnos);            

	    	file_put_contents($this->path, $encoded);

	    	return true;
		}

		catch (Exception $e) {	
			return false;
		}
    }

    public function get_turnos(){
    	try {
    		$encoded = file_get_contents($this->path);

    		$turnosEncoded = json_decode($encoded, true);

    		$turnos = [];

    		foreach($turnosEncoded as $turnoEncoded){
    			$turno = new Turno;
    			$turno->fullname = $turnoEncoded['fullname'];
			    $turno->email = $turnoEncoded['email'];
			    $turno->tel = $turnoEncoded['tel'];
			    $turno->age= $turnoEncoded['age'];
			    $turno->shoe_size = $turnoEncoded['shoe_size'];
			    $turno->height = $turnoEncoded['height'];
			    $turno->birthdate = $turnoEncoded['birthdate'];
			    $turno->hair_color = $turnoEncoded['hair_color'];
			    $turno->appt_date = $turnoEncoded['appt_date'];
			    $turno->appt_time = $turnoEncoded['appt_time'];
 				// Agrego el turno al array
 				$turnos[] = $turno;
    		}    		

    		return $turnos;
    	}
    	catch (Exception $e){
    		return false;
    	}
    }
}