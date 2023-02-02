<?php

namespace App\Models;

class m_vote extends \CodeIgniter\Model
{
    public function aVote($login, $nomSupport){
        $db=db_connect();
        $builder=$db->table('concours')->select('concours_Nom')
            ->join('voter', 'voter.IdConcours_voter = concours.Id_concours')
            ->join('zone', 'zone.SupportZone_zone = concours.concours_SupportZone')
            ->join('user', 'user.login_User = voter.LoginUser_voter')
            ->where('zone_NomZone', $nomSupport AND 'login_User',$login AND 'voter_aVoter', 1);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }

    }
}