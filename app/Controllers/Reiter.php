<?php

namespace App\Controllers;

class Reiter extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('reiter');
        echo view('templates/footer');
    }


}
