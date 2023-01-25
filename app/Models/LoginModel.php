<?php

namespace App\Models;
use CodeIgniter\Model;


class LoginModel extends Model
{

    public function getPassword($username){

        $query = $this->db->query("SELECT * FROM mitglieder WHERE Username='". $username . "'");
        $result = $query->getResult();

        $result = json_decode(json_encode($result[0]), true);

        return $result;
    }


}

