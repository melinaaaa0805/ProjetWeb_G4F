<?php
namespace App\Models;
use CodeIgniter\Model;

class m_user extends \CodeIgniter\Model
{
    public function verifUser($valeur)
    {
        $db = \Config\Database::connect();
        $builder =  $db->table('user');
        $query = $builder->getWhere(['login_User'=>$valeur]);
        if ($query->getFieldCount()>0)
        {
            return $query;
        }
        else
        {
            return false;
        }
    }
    public function ajoutUser($info)
    {
        $db = \Config\Database::connect();
        $query = $db->table('user')->insert($info);
    }
    public function connexion($login, $mdp)
    {
        $db = \Config\Database::connect();
        $builder =  $db->table('user');
        $query = $builder->getWhere(['login_User'=>$login,'user_Mdp'=>$mdp]);
        if ($query->getFieldCount()>0)
        {
            return $query;
        }
        else
        {
            return false;
        }
    }
}