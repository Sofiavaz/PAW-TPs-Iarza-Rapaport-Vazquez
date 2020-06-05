<?php 

$ruta = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if ($ruta == "/") 
{
	include 'ver_turnos.php';
}
else 
	if ($ruta == "/turnos/alta")
	{
		include 'View/form.view.php';
	}
    else 
        if ($ruta == "/turnos/guardar")
        {
            include 'alta_turno.php';
        }
	else
		{
			$view_message = "404 - not found";
			http_response_code(404);
			include 'View/error.view.php';
		}