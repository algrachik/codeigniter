<?php

namespace App\Controllers;

class Todos extends BaseController
{
    public function index()
    {
        echo view('todos');

    }


}
