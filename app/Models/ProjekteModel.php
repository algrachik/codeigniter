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

}

