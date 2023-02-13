<?php

namespace App\Models;
use CodeIgniter\Model;
class m_concours extends \CodeIgniter\Model
{
    /// retourne un concours en fonction de l'id d'un jeu
    public function getUnConcours($id){
        $db=db_connect();
        $builder=$db->table('concours')->select('*')
            ->where('concours_IdJeux', $id);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    /// retourne un concours planifiés
    public function getLesConcours(){
        $db=db_connect();
        $builder=$db->table('concours')->select('*')
            ->where('concours_Actif', 1);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
}