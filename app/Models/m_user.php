<?php
namespace App\Models;
use CodeIgniter\Model;

class m_user extends \CodeIgniter\Model
{
    public function verifUser($valeur)
    {
        $db = \Config\Database::connect();
        $builder =  $db->table('user');
        $querry = $builder->getWhere(['loginUser'=>$valeur]);
        if ($querry->getFieldCount()>0)
        {
            return $querry->getResult()[0];
        }
        else
        {
            return false;
        }
    }
    public function ajoutUtilisateur($info)
    {
        $db = \Config\Database::connect();
        $query = $db->table('user')->insert($info);
    }
}