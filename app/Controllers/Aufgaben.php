<?php

namespace App\Controllers;
use App\Models\AufgabenModel;
use App\Models\PersonenModel;
use App\Models\ReiterModel;

class Aufgaben extends BaseController
{
    public function index()
    {

        $session = session();
        if (!$session->get('Logged_in')){
            return redirect()->to(base_url() . '/Login');
        }

        $aufgabenModel = new AufgabenModel();
        $aufgabenData = $aufgabenModel->getData($session->get('ProjektID'));
        $data['aufgaben'] = $aufgabenData;

        $personenModel = new PersonenModel();
        $reiterModel = new ReiterModel();

        $personenDataRaw = $personenModel->getData();

        $reiterDataRaw = $reiterModel->getData($session->get('ProjektID'));

        $personenData = [];
        $reiterData = [];
        foreach ($personenDataRaw as $e){
            $personenData[$e['id']] = $e['Username'];
        }
        foreach ($reiterDataRaw as $e){
            $reiterData[$e['id']] = $e['Name'];
        }
        $data['reiter'] = $reiterData;
        $data['user'] = $personenData;


        if (isset($_POST['save'])){
            $this->add();
        }

        $data['title']= "Aufgaben";
        echo view('templates/html-head');
        echo view('templates/header', $data);
        echo view('templates/side-bar');
        echo view('aufgaben', $data);
    }

    public function add(){
        $aufgabenData['Name'] = $_POST['name'];
        $aufgabenData['Beschreibung'] = $_POST['beschreibung'];
        $aufgabenData['Erstellungsdatum'] = $_POST['erDatum'];
        $aufgabenData['Fälligkeitsdatum'] = $_POST['FallDatum'];
        $aufgabenData['erstellerID'] = $_POST['User'];
        $aufgabenData['reiterID'] = $_POST['reiter'];
        $aufgabenData['projektID'] = session()->get('ProjektID');

        $aufgabenModel = new AufgabenModel();
        $aufgabenModel->setData($aufgabenData);

    }
    public function delete($id){

        $aufgabenModel = new AufgabenModel();
        $aufgabenModel->delData($id);

        return redirect()->to(base_url() . '/aufgaben');
    }
}
