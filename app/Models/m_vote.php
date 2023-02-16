<?php

namespace App\Models;

use CodeIgniter\Model;

class m_vote extends \CodeIgniter\Model
{
    ///Requête qui vérifie si l'utilisateur a déjà voté
    public function aVote($login, $nomSupport): bool | array
    {
        $db = db_connect();
        $array = ['concours_SupportZone' => $nomSupport, 'LoginUser_voter' => $login, 'voter_aVoter' => 1];
        $builder = $db->table('concours')->select('*')
            ->join('voter', 'voter.IdConcours_voter = concours.Id_concours')
            ->where($array);
        $query = $builder->get();
        if ($query->getFieldCount() > 0) {
            return $query->getResult();
        } else {
            return false;
        }
    }
    ///Requête qui renvoie les jeux pour lesquels on peut voter
    public function recupJeuVote($support): bool | array
    {
        $db = db_connect();
        $builder =  $db->table('jeux')->select('*')
            ->join('concours', 'concours_IdJeux = Id_jeux')
            ->where(['concours_Actif' => 0])
            ->where(['concours_SupportZone' => $support]);
        $query = $builder->get();
        if ($query->getFieldCount() > 0) {
            return $query->getResult();
        } else {
            return false;
        }
    }
    ///Requête qui ajoute un vote
    public function ajoutVote($info): bool
    {
        $db = db_connect();
        $builder = $db->table('voter');
        $query = $builder->insert($info);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
