<?php
#This is the beginning of Object-Oriented Programming OOP
declare(strict_types=1);
namespace App;//This line creates virtual folder for storing my classes
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
    public SocialMedia $socialMedia;
   public function __construct(
    private string $name, 
    private float $balance){
    $this->socialMedia = new SocialMedia();
    }
    function deposit(float $amount){
        $this->balance += $amount;
        return $this;
    }

    #getting the balance of a private class object
    public function getBalance(){
        return "$" . $this->balance;
    }
    //Set the balance of the private class object
    public function setBalance(float $newBalance){
        if ($newBalance < 0){
            return;
        }
        $this->balance = $newBalance;
    }

}