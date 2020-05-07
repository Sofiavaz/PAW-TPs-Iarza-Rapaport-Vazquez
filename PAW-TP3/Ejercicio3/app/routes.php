 <?php

$router->get('', 'TurnosController@index');  
  
$router->get('turnos/crear', 'TurnosController@create');

$router->get('turnos/show', 'TurnosController@show');

$router->post('turnos/guardar', 'TurnosController@store');

$router->get('internal_error', 'ProjectController@internalError');