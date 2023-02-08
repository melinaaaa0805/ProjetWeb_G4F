<?php

namespace App\Models;
use CodeIgniter\Model;

class m_inscription extends \CodeIgniter\Model
{
    public function recupConcoursTournoi($support){
        $db=db_connect();
        $builder=$db->table('concours')->select('*')
            ->where(['concours_SupportZone'=>$support])
            ->where(['concours_Actif'=>1]);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    public function recupDateConcours($id){
        $db=db_connect();
        $builder=$db->table('avoirlieu');
        $query = $builder->getWhere(['IdConcours_avoirLieu'=>$id]);
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    public function recupReserv($id){
        $db=db_connect();
        $builder=$db->table('avoirlieu')->select('concours_Nom, Date_avoirLieu, SupportZone_zone,zone_NomZone ')
            ->join('concours', 'IdConcours_avoirLieu = Id_concours')
            ->join('zone', 'SupportZone_zone = concours_SupportZone')
            ->where(['avoirlieu_CodeReservation '=>$id]);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    public function recupUserInscription($id){
        $db=db_connect();
        $builder=$db->table('inscription');
        $query = $builder->getWhere(['LoginUser_inscription '=>$id]);
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
}