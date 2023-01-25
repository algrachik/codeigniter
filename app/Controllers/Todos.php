<?php

namespace App\Controllers;

use App\Models\AufgabenModel;
use App\Models\ReiterModel;

class Todos extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('Logged_in')){
            return redirect()->to(base_url() . '/Login');
        }

        $reiterModel = new ReiterModel();
        $aufgabenModel = new AufgabenModel();

        $reiterData = $reiterModel->getData($session->get('ProjektID'));
        $aufgabenData = $aufgabenModel->getData($session->get('ProjektID'));
        $todos = [];
        foreach ($reiterData as $e){
            $temp = [];
            $reiterID = $e['id'];

            foreach ($aufgabenData as $x){
                if ($x['reiterID'] == $reiterID){
                    $temp[] = $x;
                }
            }
            $todos[] = ['name' => $e['Name'], 'aufgaben' => $temp];
        }



        $data['todos'] = $todos;


        $data['title']= "Todos";
        echo view('templates/html-head');
        echo view('templates/header', $data);
        echo view('templates/side-bar');
        echo view('todos');
    }

}
