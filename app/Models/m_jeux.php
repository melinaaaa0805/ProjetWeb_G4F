<?php

namespace App\Models;

use CodeIgniter\Model;

class m_jeux extends \CodeIgniter\Model
{
    public function getLesJeuxSupport($nomSupport)
    {
        $db=db_connect();
        $builder=$db->table('jeux.jeux_nom');
            $builder->from('jeux');
            $builder->join('concours', 'concours.concours_idJeux = jeux.id_jeux');
            $builder->join('zone', 'zone.zone_SupportZone = concours.concours_SupportZone');
            $builder->getWhere(['zone_nomZone'=>$nomSupport]);
            $builder->orderBy('jeux_nom', 'ASC');
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
}