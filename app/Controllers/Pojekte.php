<?php

namespace App\Controllers;

class Pojekte extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('projekte');
        echo view('templates/footer');
    }


}