 <?php

$router->get('', 'TurnosController@index');  
  
$router->get('turnos/crear', 'TurnosController@create');

$router->get('turnos/get/{id}', 'TurnosController@show');

$router->post('turnos/guardar', 'TurnosController@save');

$router->get('internal_error', 'ProjectController@internalError');