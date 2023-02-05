<?php
namespace App\Models;
use CodeIgniter\Model;

class m_user extends \CodeIgniter\Model
{
    // Requête qui vérifie si le login n'est pas déjà utilisé
    public function verifUser($login)
    {
        $db=db_connect();
        $builder =  $db->table('user');
        $query = $builder->getWhere(['login_User'=>$login]);
        if ($query->getFieldCount()>0)
        {
            return $query->getResult();
        }
        else
        {
            return false;
        }
    }

    //Requête qui ajoute un utilisateur dans la bdd
    public function ajoutUser($info)
    {
        $db=db_connect();
        $builder=$db->table('user');
        $query = $builder->insert($info);
        if ($query)
        {
            return true;
        }
        else {
            return false;
        }

    }
    //Requête qui vérifie la connexion de l'utilisateur
    public function connexion($login, $mdp)
    {
        $db = \Config\Database::connect();
        $builder =  $db->table('user');
        $query = $builder->getWhere(['login_User'=>$login,'user_Mdp'=>$mdp]);
        if ($query->getFieldCount()>0)
        {
            return $query->getResult();
        }
        else
        {
            return false;
        }
    }
    ///requête qui modifie les informations de l'utilisateur
    public function modifInfos($info, $login)
    {

        $db = \Config\Database::connect();
        $builder =  $db->table('user')
            ->where('login_User', $login);
        $query = $builder->update($info);

        if ($query)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}