 <?php

    $router->get('', 'TurnoController@create');
    $router->get('turno/create', 'TurnoController@create');
    $router->get('turno/view/all', 'TurnoController@table');
    $router->get('turno/get/{id}', 'TurnoController@ficha');
    $router->post('turno/reserved', 'TurnoController@save');
