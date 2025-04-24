<?php
declare(strict_types=1);
namespace App;
class FoodApp{
    public function __construct(RestaurantInterface $restaurant){
        $restaurant->prepareFood();
    }
}