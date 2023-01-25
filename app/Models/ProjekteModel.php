<?php

namespace App\Models;
use CodeIgniter\Model;


class ProjekteModel extends Model
{

    public function getProjektID($creatorID){
        $query = $this->db->query("SELECT id from projekte WHERE erstellerID='" . $creatorID . "'");
        $result = $query->getResult();

        $data = [];
        foreach ($result as $e){
            $e = json_decode(json_encode($e), true);

            $data[] = $e['id'];
        }

        return $data;
    }

    public function getData($userID){
        $query = $this->db->query("SELECT * from projekte WHERE erstellerID='" . $userID . "'");
        $result = $query->getResult();

        $data = [];

        foreach ($result as $e){
            $e = json_decode(json_encode($e), true);

            $data[] = $e;
        }

        return $data;
    }
    public function delData($id){
        $this->db->table('projekte')->delete('id='.$id);

        return true;
    }

    public function setData($projektdata=null){
        $this->db->table('projekte')->insert($projektdata);
        return true;
    }

    public function editData($projektdata) {
        $this->db->table('projekte')->where('id', $projektdata['id'])->set($projektdata)->update();

        return true;
    }

}

