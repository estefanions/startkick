<?php


namespace App\Controller;

use Rubricate\View\View;

class Index
{
    public function __construct() 
    { }

    public function index()
    {
        $view = new View();
        $view->render('index');
    } 

}




