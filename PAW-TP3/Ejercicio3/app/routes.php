 <?php

$router->get('', 'TurnosController@index');  
  
$router->get('turnos/crear', 'TurnosController@create');

$router->get('turnos/get/{id}', 'TurnosController@show');

$router->post('turnos/guardar', 'TurnosController@save');

$router->get('turnos/editar/{id}', 'TurnosController@edit');

$router->post('turnos/actualizar/{id}', 'TurnosController@update');

$router->get('turnos/eliminar/{id}', 'TurnosController@delete');

$router->get('internal_error', 'ProjectController@internalError');