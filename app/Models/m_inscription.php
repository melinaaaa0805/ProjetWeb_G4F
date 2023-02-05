<?php

namespace App\Models;
use CodeIgniter\Model;

class m_inscription extends \CodeIgniter\Model
{
    public function recupDateConcours($id){
        $db=db_connect();
        $builder=$db->table('avoirlieu');
        $query = $builder->getWhere(['IdConcours_avoirLieu'=>$id]);
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    public function recupInscription($id){
        $db=db_connect();
        $builder=$db->table('avoirlieu');
        $query = $builder->getWhere(['IdConcours_inscription'=>$id]);
        if($query->getFieldCount()>0){
            return $query->getFieldCount();
        }else {
            return false;
        }
    }
}