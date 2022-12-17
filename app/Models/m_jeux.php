<?php

namespace App\Models;

use CodeIgniter\Model;

class m_jeux extends \CodeIgniter\Model
{
    ///retourne tous les jeux en fonction d'un support
    public function getLesJeuxSupport($nomSupport)
    {
        $db=db_connect();
        $builder=$db->table('jeux')->select('*')
            ->join('concours', 'concours.concours_IdJeux = jeux.Id_jeux')
            ->join('zone', 'zone.SupportZone_zone = concours.concours_SupportZone')
            ->where('SupportZone_zone', $nomSupport)
            ->orderBy('jeux_Nom', 'ASC');
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
}