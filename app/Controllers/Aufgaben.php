<?php

namespace App\Controllers;

class Aufgaben extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('aufgaben');
        echo view('templates/footer');
    }


}
