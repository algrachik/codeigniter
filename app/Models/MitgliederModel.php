<?php
namespace App\Models;
use CodeIgniter\Model;


class PersonenModel extends Model
{
    public function getData(){
        $query = $this->db->query('SELECT id,Username, Email FROM mitglieder;');
        $results = $query->getResult();

        $data = [];

        foreach ($results as $e){
            $e = json_decode(json_encode($e), true);

            $data[] = $e;
        }

        return $data;
    }

    public function CheckUsername($username)
    {

        $query = $this->db->query('SELECT Username FROM mitglieder WHERE Username="'. $username .'"');
        $result = $query->getResult();

        if (count($result) < 1){
            return false;
        }
        $result = json_decode(json_encode($result[0]), true);

        if ($result['Username'] == $username){
            return true;
        }
        return false;
    }

    public function editData($userdata) {
        $this->db->table('mitglieder')->where('Username', $userdata['Username'])->set($userdata)->update();

        return true;
    }

    public function setData($userdata=null){
        $this->db->table('mitglieder')->insert($userdata);
        return true;
    }

    public function delData($id){

        $this->db->table('mitglieder')->delete('id='.$id);

        return true;

    }

}

