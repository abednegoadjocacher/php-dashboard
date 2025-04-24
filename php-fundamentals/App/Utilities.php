<?php
declare(strict_types=1);
namespace App;

class Utilities{
    public static function printArray(array $array){
        echo "<pre>";
            print_r($array);
        echo "</pre>";
    }
}