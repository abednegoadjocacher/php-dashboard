<?php
declare(strict_types=1);
namespace App;
class RestaurantOne implements RestaurantInterface{
    public function prepareFood(){
        echo "Preparing food";
    }
}