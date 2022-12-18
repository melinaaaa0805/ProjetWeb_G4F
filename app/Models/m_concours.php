<?php

namespace App\Models;
use CodeIgniter\Model;
class m_concours extends \CodeIgniter\Model
{
    public function getUnConcours($id){
        $db=db_connect();
        $builder=$db->table('concours')->select('*')
            ->join('jeux', 'concours.concours_IdJeux = jeux.Id_jeux')
            ->where('concours_IdJeux', $id);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
}