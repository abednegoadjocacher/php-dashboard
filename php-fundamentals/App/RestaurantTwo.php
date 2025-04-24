<?php
declare(strict_types=1);
namespace App;
class RestaurantTwo implements RestaurantInterface{
    public function prepareFood(){
        echo "Preparing food from restaurant two";
    }
}