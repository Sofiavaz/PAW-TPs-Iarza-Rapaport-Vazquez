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

    		if ($this->turno_disponible($turnos, $turno))
            {
                $turno->id = $this->get_next_id($turnos);

                // Agrego a ese arreglo el nuevo turno
                $turnos[] = $turno;

                // Vuelvo a json para guardarlo
                $encoded = json_encode($turnos);

                file_put_contents($this->path, $encoded);

                return true;
            }
    		return false;
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
    			$turno->id = $turnoEncoded['id'];
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
                $turno->IdFicha = $turnoEncoded['id'];
 				// Agrego el turno al array
 				$turnos[] = $turno;
    		}    		

    		return $turnos;
    	}
    	catch (Exception $e){
    		return [];
    	}
    }

    private function get_next_id($turnos)
    {
        if (count($turnos) > 0)
        {
            $last_turno = end($turnos);
            return $last_turno->id + 1;
        }
        // Si no hay turnos, devuelvo 1
        return 1;
    }

    private function turno_disponible($turnos, $nuevo_turno)
    {
        foreach ($turnos as $turno_previo){
            if ($turno_previo->appt_date == $nuevo_turno->appt_date
                && $turno_previo->appt_time == $nuevo_turno->appt_time)
            {
                return false;
            }
        }
        return true;
    }


    public function get_turno_by_id($id){
    	try {
    		$encoded = file_get_contents($this->path);

    		$turnosEncoded = json_decode($encoded, true);

            foreach($turnosEncoded as $turnoEncoded){
                if ($turnoEncoded['id'] == $id) {
                    $turno = new Turno;
                    $turno->id = $turnoEncoded['id'];
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
                    $turno->IdFicha = $turnoEncoded['id'];
                    
                    return $turno;
                }
    		}    		
    	}
    	catch (Exception $e){
    		return null;
    	}
    }
}