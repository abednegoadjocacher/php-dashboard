<?php
declare(strict_types=1);
namespace App;
class Toaster extends AbstractProduct{
    protected int $slot;
    public function __construct(){
        $this->slot = 2;
        $this->turnOn();
    }
   
    public function toast(){
        echo  "<br>{$this->slot} Toasting bread";
    }

    public function setUp(){
    
    }
}