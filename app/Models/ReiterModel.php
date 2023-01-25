<?php

namespace App\Models;
use CodeIgniter\Model;


class ReiterModel extends Model
{

    public function getData($projektID){
        $query = $this->db->query("SELECT * from reiter WHERE projektID='" . $projektID . "'");
        $result = $query->getResult();

        $data = [];

        foreach ($result as $e){
            $e = json_decode(json_encode($e), true);

            $data[] = $e;
        }

        return $data;
    }
    public function delData($id){
        $this->db->table('reiter')->delete('id='.$id);

        return true;
    }
    public function editData($reiterData){
        $this->db->table('reiter')->where('id', $reiterData['id'])->set($reiterData)->update();

        return true;
    }

    public function setData($reiterdata=null){
        $this->db->table('reiter')->insert($reiterdata);
        return true;
    }


}

