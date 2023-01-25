<?php

namespace App\Controllers;
use App\Models\LoginModel;
use App\Models\ProjekteModel;

class Login extends BaseController
{

    public function index()
    {

        $session = session();
        if ($session->get('Logged_in')){
            return redirect()->to(base_url() . '/');
        }

        $rules = [
            'Username' => 'required|min_length[3]',
            'Password' => 'required',
            'agb' => 'required',
        ];

        if ($this->request->getMethod() == 'post'){
            if ($this->validate($rules)){
                $this->Auth();

                return redirect()->to(base_url() . '/');
            }
            else{
                $data['validation'] = $this->validator;
            }
        }

        $data['title']= "Login";
        echo view('templates/html-head');
        echo view('templates/header', $data);
        echo view('login', $data);
    }

    public function Auth(){

        $username = $_POST['Username'];
        $loginModel = new LoginModel();

        $user = $loginModel->getPassword($username);

        $auth = false;
        if (password_verify($_POST['Password'], $user['Passwort'])) {
            $auth = true;
        }

        if ($auth){
            $projektModel = new ProjekteModel();
            $projektdata = $projektModel->getProjektID($user['id']);

            if (!isset($projektdata[0])){
                $projektdata[0] = null;
            }

            $userdata = ['username' => $user['Username'],
                         'email' => $user['Email'],
                         'UserID' => $user['id'],
                         'Logged_in' => true,
                         'ProjektID' => $projektdata[0],
                        ];

                $session = session();

                $session->set($userdata);

        }
        else{
            echo "<p>hashed Passwort zu test zwecken !</p>";
            echo "<p>". password_hash($_POST['Password'], PASSWORD_DEFAULT) ."</p>";
        }
    }

}
