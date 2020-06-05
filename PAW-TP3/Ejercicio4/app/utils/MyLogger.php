<?php

namespace App\Utils;

use App\Core\App;
use DateTime;

class MyLogger
{
    public static function log($tipoABM, $turno){
        $logger = App::get('logger');

        $date = new DateTime();
        $date = $date->format("y:m:d h:i:s");

        $logger->info("$date -> OpType: $tipoABM; Turno: $turno");
    }

}