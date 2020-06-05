<?php

namespace App;

class Properties
{

    private static $properties = [
         "coloresPelo" => ["Rubio", "Morocho", "Castanio"]
        ];


    public static function getProperty($key){

        foreach (self::$properties as $index=>$value){

            if ($index == $key) {
                return $value;
            }
        }
    }

}