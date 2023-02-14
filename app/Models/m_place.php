<?php

namespace App\Models;

class m_place extends \CodeIgniter\Model
{
    ///Récupération des lots individuels ou collectif en fonction d'un support de jeux
    public function getLesLots($nomSupport)
    {
        $db=db_connect();
        $builder=$db->table('place')->distinct('Numero_place')->select('Numero_place, place_LotIndiv, place_LotEquipe')
            ->join('zone', 'place.IdZone_place = zone.IdZone_zone')
            ->join('concours', 'zone.SupportZone_zone = concours.concours_SupportZone')
            ->where('SupportZone_zone', $nomSupport);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
}