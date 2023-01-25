<?php

namespace App\Models;
use CodeIgniter\Model;


class AufgabenModel extends Model
{

    public function getData($projektID){
        $query = $this->db->query("SELECT * from aufgaben WHERE projektID='" . $projektID . "'");
        $result = $query->getResult();

        $data = [];

        foreach ($result as $e){
            $e = json_decode(json_encode($e), true);

            $data[] = $e;
        }

        return $data;
    }
    public function setData($aufgabenData){
        $this->db->table('aufgaben')->insert($aufgabenData);
        return true;
    }
    public function delData($id){
        $this->db->table('aufgaben')->delete('id='.$id);

        return true;
    }

}