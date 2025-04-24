<?php
#This is the beginning of Object-Oriented Programming OOP
declare(strict_types=1);
class Account {
    public string $name;
    public float $balance;

   public function __construct(string $newName, float $newBalance){
        $this->name = $newName;
        $this->balance = $newBalance;
    }
}




//A short hand form of defining a class
class Accounts {
   public function __construct(
    public string $name, 
    public float $balance){
    
    }
    function deposit(float $amount){
        $this->balance += $amount;
        return $this;
    }
}