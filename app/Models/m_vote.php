<?php

namespace App\Models;
use CodeIgniter\Model;


class m_vote extends \CodeIgniter\Model
{
    public function aVote($login, $nomSupport){
        $db=db_connect();
        $builder=$db->table('concours')->select('concours_Nom')
            ->join('voter', 'voter.IdConcours_voter = concours.Id_concours')
            ->join('zone', 'zone.SupportZone_zone = concours.concours_SupportZone')
            ->join('user', 'user.login_User = voter.LoginUser_voter')
            ->where('SupportZone_zone', $nomSupport AND 'login_User',$login AND 'voter_aVoter', 1);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    public function recupJeuVote($id1, $id2, $id3)
    {
        $db=db_connect();
        $builder =  $db->table('jeux')->select('jeux_Nom')
        ->where('Id_jeux',$id1)
        ->orWhere( 'Id_jeux',$id2)
        ->orWhere( 'Id_jeux', $id3);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
}