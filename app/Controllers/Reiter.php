<?php

namespace App\Controllers;
use App\Models\ReiterModel;

class Reiter extends BaseController
{
    public function index($reiterID=null)
    {
        $session = session();
        if (!$session->get('Logged_in')){
            return redirect()->to(base_url() . '/Login');
        }

        $reiterModel = new ReiterModel();
        $reiterData = $reiterModel->getData($session->get('ProjektID'));

        $data['reiter'] = $reiterData;

        if (isset($_POST['save'])){
            $this->add();
            return redirect()->to(base_url() . '/reiter');
        }
        if (isset($_POST['reset'])){
            $data['reiterData'] = null;
        }


        $data['title']= "Reiter";
        echo view('templates/html-head');
        echo view('templates/header', $data);
        echo view('templates/side-bar');
        echo view('reiter');
    }

    public function add(){
        $reiterData['Name'] = $_POST['name'];
        $reiterData['Beschreibung'] = $_POST['beschreibung'];
        $reiterData['projektID'] = session()->get('ProjektID');

        $reiterModel = new ReiterModel();
        $reiterModel->setData($reiterData);
    }

    public function delete($id){
        $reiterModel = new ReiterModel();
        $reiterModel->delData($id);

        return redirect()->to(base_url() . '/reiter');
    }

}
