<?php
declare(strict_types=1);
namespace App;
class ToasterPremium extends Toaster{
    protected int $slot;
    public function __construct(int $newDuration){
        parent::__construct();
        $this->slot = 7;
        $this->duration = $newDuration;
    }
    protected int $duration;
    public function toast(){
        parent::toast();
        echo " for {$this->duration} minutes <br>";

    }
    public function setUp(){
   
    }
}