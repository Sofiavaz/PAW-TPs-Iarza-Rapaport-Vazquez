<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Turno;

/**
 * summary
 */
class TurnosController extends Controller
{

	public function __construct(){
		$this->model = new Turno();
	}

    /**
     * summary
     */
    public function index()
    {
    	// Obtener los turnos desde la base de datos
    	$turnos = $this->model->get();


    	// Devolver la vista con los turnos
        return view('index', compact('turnos'));
    }


    public function create()
    {
    	return view('turnos.crear');
    }

    public function store()
    {
    	$fullname = htmlspecialchars($_POST['fullname']);
		$email = htmlspecialchars($_POST['email']);
		$tel = htmlspecialchars($_POST['telephone']);
		$age = htmlspecialchars($_POST['age']);
		$shoe_size = htmlspecialchars($_POST['shoeSize']);
		$height = htmlspecialchars($_POST['height']);
		$birthdate = htmlspecialchars($_POST['birthdate']);
		$hair_color = htmlspecialchars($_POST['hairColor']);
		$appt_date = htmlspecialchars($_POST['apptDate']);
		$appt_time = htmlspecialchars(strtotime($_POST['apptTime']));
		
		$appt_time_string = htmlspecialchars($_POST['apptTime']);

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
		    //include "View/error.view.php";
		    $mensaje = "Error en los datos ingresados";
		    return view('error-turno', compact('mensaje'));
		}
		else {

		    // Almacenar el turno
		    $turno = [
			    'fullname' => $fullname,
			  	'email' => $email,
			    'tel' => $tel,
			    'age'=> $age,
			    'shoe_size' => $shoe_size,
			    'height' => $height,
			    'birthdate' => $birthdate,
			    'hair_color' => $hair_color,
			    'appt_date' => $appt_date,
			    'appt_time' => $appt_time_string
		    ];

		    $this->model->insert($turno);

		    return view('ficha-turno', compact('turno'));
		}
	}

	public function show() {
		if (isset($_GET['id']) && !is_null($_GET['id'])){
			$id = htmlspecialchars($_GET['id']);

			$turno = $this->model->getById($id);

			return view('ficha-turno', compact('turno'));
		}

		return $this->index();
	}

}