<?php

namespace App\Controllers;

use \DateTime;
use App\Core\Controller;
use App\Models\Turno;

class TurnoController extends Controller
{
    public function __construct()
    {
        $this->model = new Turno();
        $this->target_file = "";
        $this->target_dir = "public/uploads/";
        $this->blob= null;
        define('MB', 1048576);
    }

    /**
     * Show all task
     */
    public function index()
    {
        $tasks = $this->model->get();
        return view('turno', compact('turno'));
    }

    public function create()
    {
        return view('turno.create');
    }

    public function reserved()
    {
        return view('turno.reserved');
    }

    public function ficha($vars)
    {
        $turno = (array) $this->model->findById($vars['id'])[0];
        $img_path = $this->base64ToImage($turno['diagnostico'], "/public/uploads/img.png");
        return view('turno.view', compact('turno', 'img_path'));
    }

    public function table()
    {
        $turnos = $this->model->get();
        return view('turno.table', compact('turnos'));
    }

    public function save()
    {
        $error = $this->validateForm();
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
        if ($error == "") {
          $this->model->insert($turno);
          $img_path = $this->base64ToImage($turno->diagnostico, "/public/uploads/img.png" );
          return view('turno.reserved', compact('error', 'turno', 'img_path'));
        } else {
          return view('turno.create', compact('error', 'turno'));
        }
    }

    function base64ToImage($base64_string, $output_file) {
      $file = fopen($output_file, "wb");
      fwrite($file, base64_decode($base64_string));
      fclose($file);

      return $output_file;
    }

    function ImageToBase64($img_source){
      $img_binary = fread(fopen($img_source, "r"), filesize($img_source));
      $img_string = base64_encode($img_binary);
      return $img_string;
    }


    public function validateForm(){
      $name_pattern = "/^[a-zA-Z ]*$/";
      $email_pattern = '/[a-z\.]+@[a-z\.]+/';
      $tel_pattern = '/[0-9]{6,}/';
      $edad_pattern = '/[0-9]{0,}/';
      $talla_pattern = '/[0-9]{0,}/';
      $altura_pattern = '/[0-9]{0,}[,.]{0,1}[0-9]{0,}/';
      $color_pattern = '/Castaño|Morocho|Rubio||calvo|\s/';
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

        if ($_POST['color-pelo'] != "null") {
          if (!preg_match($color_pattern, $_POST['color-pelo'])) {
            $campoError .= 'color-pelo, ';
          }
        } else {
          $_POST['color-pelo'] = NULL;
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
      $file_id = 1;
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($this->target_file,PATHINFO_EXTENSION));
      // Si el archivo existe concatena un numero;
      if (isset($_FILES['diagnostico']) && $_FILES['diagnostico']["size"] != 0){
        $actual_name = pathinfo($_FILES["diagnostico"]["name"],PATHINFO_FILENAME);
        $original_name = $actual_name;
        $extension = pathinfo($_FILES["diagnostico"]["name"], PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["diagnostico"]["tmp_name"]);
        if($check !== false) {
          $uploadOk = 1;
        } else {
          $uploadOk = 0;
        }

        if($extension != "jpg" && $extension != "png" ) {
            $campoError .= "Solo se permite archivos con extensión JPG y PNG.\n";
            $uploadOk = 0;
        }

        $i = 1;
        while(file_exists($this->target_dir . $actual_name. "." .$extension))
        {
            $actual_name = (string)$original_name.$i;
            $name = $actual_name.".".$extension;
            $i++;
        }

        $this->target_file = $this->target_dir . $actual_name. "." .$extension;

        if ($_FILES['diagnostico']['size'] > 10*MB) {
          $uploadOk = 0;
        }

        if ($uploadOk != 0) {
            if (!move_uploaded_file($_FILES["diagnostico"]["tmp_name"], $this->target_file)) {
                $campoError .=  "Ha ocurrido un error al subir el archivo.\n";
            }
        }

         $this->blob = $this->ImageToBase64($this->target_file);
      }

      if ($campoError != ""){
        $campoError = substr($campoError, 0, -2);
        $campoError = "(" . $campoError . ")\n";
      }

      return $campoError;
    }
}
