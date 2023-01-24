<?php

namespace App\Controllers;

class Todos extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('todos');
        echo view('templates/footer');
    }


}
