<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Turno;

use App\Properties;
use DateTime;

/**
 * summary
 */
class TurnosController extends Controller
{

	public function __construct(){
		$this->model = new Turno();
        $this->target_file = '';
        $this->target_dir = "public/uploads/";
        $this->blob= null;
        define('MB', 1048576);
	}

    /**
     * summary
     */
    public function index()
    {
    	// Obtener los turnos desde la base de datos
    	$turnos = $this->model->get();

    	// Devolver la vista con los turnos
        return view('turnos.list', compact('turnos'));
    }


    public function create()
    {
        $coloresPelo = Properties::getProperty("coloresPelo");

    	return view('turnos.create', compact('coloresPelo'));
    }

    public function save()
    {
        $error = $this->validateForm();

        $this->saveImage($error);

        if ($error == "") {
            $turno = [
                'nombre' => $_POST['nombre'],
                'email' => $_POST['email'],
                'telefono' => $_POST['telefono'],
                'edad' => $_POST['edad'],
                'talla_calzado' => $_POST['talla-calzado'],
                'altura' => $_POST['altura'],
                'fecha_nacimiento' => $_POST['fecha-nacimiento'],
                'color_pelo' => $_POST['color-pelo'],
                'fecha_turno' => $_POST['fecha-turno'],
                'horario_turno' => $_POST['horario-turno'],
                'diagnostico' => $this->blob
            ];

            $this->model->insert($turno);
            return view('turnos.view', compact('error', 'turno'));
        } else {
            return view('turnos.create', compact('error', 'turno'));
        }

    }



    function ValidExtension($extention, &$invalid_fields) {
        $valid_extentions = ["png", "jpg"];
        if (in_array($extention, $valid_extentions)) {
            return TRUE;
        }
        $invalid_fields .= "Archivo Invalido, ";
    }

    function ValidTamanio($size, &$invalid_fields) {
        if ($size <= 3000000) {
            return TRUE;
        }
        $invalid_fields .= "Tamanio demasiado grande, ";
    }

    public function saveImage(&$error){
        $fullname = htmlspecialchars($_POST['nombre']);

        $nombre_imagen = basename ($_FILES ["diagnostico"]["name"]);
        $nombre_img_tmp =$_FILES["diagnostico"]["tmp_name"];
        $extension = strtolower(pathinfo($nombre_imagen, PATHINFO_EXTENSION));
        $tamanio_imagen = $_FILES ["diagnostico"] ["size"];

        if (($this->ValidExtension($extension,  $error)) && ($this->ValidTamanio($tamanio_imagen,  $error))) {
            $Hora = time();
            $hash_Imagen = hash("sha256", $nombre_imagen . $tamanio_imagen .$Hora) . "." .$extension;
            if(file_exists($fullname.'/'.$hash_Imagen)){

                $error .= ", Imagen ya existe";
            }
            else{
                if (!is_dir("files/" .$fullname.'/')){
                    if (!is_dir("files/")){
                        mkdir("files/",0777);
                    }
                    mkdir("files/" .$fullname.'/',0777);
                }
                $destino = "files/" .  $fullname.'/'.$hash_Imagen;
                if (move_uploaded_file($nombre_img_tmp, $destino)) {
                    $this->blob = $destino;
                }
                else {
                    $error .= "Error al cargar archivo, ";
                }
            }
        }
    }


    public function show($vars) {

        $turno = $this->model->getById($vars['id'])[0];
        
        return view('turno.view', compact('turno'));
//        if (isset($_POST['id']) && !is_null($_POST['id'])){
//            $id = htmlspecialchars($_POST['id']);
//
//            $turno = $this->model->getById($id);
//
//            return view('turno.view', compact('turno'));
//        }
//
//        return $this->index();
    }



    public function validateForm(){

        $name_pattern = "/^[a-zA-Z ]*$/";
        $email_pattern = '/[a-z\.]+@[a-z\.]+/';
        $tel_pattern = '/[0-9]{6,}/';
        $edad_pattern = '/[0-9]{0,}/';
        $talla_pattern = '/[0-9]{0,}/';
        $altura_pattern = '/[0-9]{0,}[,.]{0,1}[0-9]{0,}/';
        $horario_pattern = '/.:00|.:15|.:30|.:45/';

        $fecha_actual = new DateTime('America/Argentina/Buenos_Aires');
        $fecha_nacimiento_enviada = new DateTime($_POST['fecha-nacimiento']);
        $fecha_turno_enviada = new DateTime($_POST['fecha-turno']);

        $horario_enviado = new DateTime($_POST['horario-turno']);
        $horario_inicio = new DateTime('08:00');
        $horario_fin = new DateTime('17:00');
        $campoError = "";


        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            if (!preg_match($name_pattern, $_POST['nombre'])) {
                $campoError .= 'nombre, ';
            }
            if (!preg_match($email_pattern, mb_strtolower($_POST['email']))) {
                $campoError .= 'email, ';
            }
            if (!preg_match($tel_pattern, $_POST['telefono'])) {
                $campoError .= 'telefono,';
            }

            if (isset($_POST['edad'])){
                if (!preg_match($edad_pattern, $_POST['edad'])) {
                    $campoError .= 'edad, ';
                }
            } else {
                $_POST['edad'] = NULL;
            }

            if ($_POST['altura'] != ""){
                if (!preg_match($altura_pattern, $_POST['altura'])) {
                    $campoError .= 'altura, ';
                }
            } else {
                $_POST['altura'] = NULL;
            }

            if ($_POST['talla-calzado'] != ""){
                if (!preg_match($talla_pattern, $_POST['talla-calzado']) || ($_POST['talla-calzado'] < 20 || $_POST['talla-calzado'] > 45)) {
                    $campoError .= 'talla-calzado, ';
                }
            } else {
                $_POST['talla-calzado'] = NULL;
            }

            if ($fecha_nacimiento_enviada > $fecha_actual) {
                $campoError .= 'fecha_nacimiento, ';
            }
            if ($fecha_turno_enviada < $fecha_actual) {
                $campoError .= 'fecha_turno, ';
            }

            if ($_POST['horario-turno'] != "00:00") {
                if (!preg_match($horario_pattern,$_POST['horario-turno']) || ($horario_inicio > $horario_enviado) || ($horario_fin < $horario_enviado)) {
                    $campoError .= 'horario_turno, ';
                }
            } else {
                $_POST['horario-turno'] = NULL;
            }

        }

        if ($campoError != ""){
            $campoError = substr($campoError, 0, -2);
            $campoError = "(" . $campoError . ")\n";
        }

        return $campoError;
    }


    public function edit($vars){
        $turno = $this->model->getById($vars['id'])[0];

        return view('turnos.edit', compact('turno'));
    }

    public function update($vars){
        $turno = $this->model->getById($vars['id'])[0];
        $id = $vars['id'];
        $diagnostico = $turno->diagnostico;

        $error = $this->validateForm();

        if (isset($_POST['diagnostico'])) {
            $this->saveImage($error);
            $diagnostico = $this->blob;
        }

        if ($error == "") {
            $turno = [
                'id' => $id,
                'nombre' => $_POST['nombre'],
                'email' => $_POST['email'],
                'telefono' => $_POST['telefono'],
                'edad' => $_POST['edad'],
                'talla_calzado' => $_POST['talla-calzado'],
                'altura' => $_POST['altura'],
                'fecha_nacimiento' => $_POST['fecha-nacimiento'],
                'color_pelo' => $_POST['color-pelo'],
                'fecha_turno' => $_POST['fecha-turno'],
                'horario_turno' => $_POST['horario-turno'],
                'diagnostico' => $diagnostico
            ];

            $this->model->update($turno, $id);
            return view('turno.view', compact('error', 'turno'));
        } else {
            return view('turnos.edit', compact('error', 'turno'));
        }
    }

    public function delete($vars){
        $turno = $this->model->getById($vars['id'])[0];

        $this->model->delete($turno);

        return $this->index();
    }

}