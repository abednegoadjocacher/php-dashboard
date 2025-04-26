<?php
declare(strict_types=1);
namespace App\Controllers;
class HomeController
{
    public function index()
    {
        echo "Welcome to the home page!";
    }
    public function about()
    {
        echo "This is the about page.";
    }
    public function contact()
    {
        echo "This is the contact page.";
    }
}