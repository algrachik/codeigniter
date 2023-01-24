<?php

namespace App\Controllers;

class Mitglieder extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('Logged_in')){
            return redirect()->to(base_url() . '/Login');
        }

        $personenModel = new PersonenModel();

        $data['mitglieder'] = $personenModel->getData();


        $data['title'] = 'Mitglieder';


        echo view('templates/header');
        echo view('mitglieder');
        echo view('templates/footer');
        echo view('personen', $data);
    }

    public function AddEdit(){
        $userdata['Username'] = $_POST['Username'];
        $userdata['Email'] = $_POST['Email'];
        $userdata['Passwort'] = password_hash($_POST['Password'], PASSWORD_DEFAULT);

        $personenModel = new PersonenModel();


        $reload = false;

        if ($personenModel->CheckUsername($_POST['Username'])){
            $reload = $personenModel->editData($userdata);
        }
        else{
            $reload = $personenModel->setData($userdata);
        }




        if($reload){
            return redirect()->to(base_url() . '/mitglieder');
        }
    }

    public function Delete($id){
        $personenModel = new PersonenModel();

        $deleted = $personenModel->delData($id);

        if($deleted) {
            return redirect()->to(base_url() . '/mitglieder');
        }
    }

    public function Edit($id){
        echo $id;

    }

}
