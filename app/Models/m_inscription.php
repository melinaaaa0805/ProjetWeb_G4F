<?php

namespace App\Models;
use CodeIgniter\Model;

class m_inscription extends \CodeIgniter\Model
{
    /// Récupération des tournois en fonction d'un support
    public function recupConcoursTournoi($support){
        $db=db_connect();
        $builder=$db->table('concours')
            ->select('concours_Nom, Date_avoirLieu, SupportZone_zone,zone_NomZone, avoirlieu_PlacesRestantes')
            ->join('avoirlieu','IdConcours_avoirLieu = Id_concours')
            ->join('zone', 'SupportZone_zone = concours_SupportZone')
            ->where('concours_SupportZone',$support)
            ->where('concours_Actif',1);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    /// Récupération de la date d'un concours en fonction de son code de réservation
    public function recupDateConcours($id){
        $db=db_connect();
        $builder=$db->table('avoirlieu')->select('Date_avoirLieu')
            ->where('avoirlieu_CodeReservation',$id);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    /// Récupération des inscriptions de l'utilisateur
    public function recupUserInscription($id){
        $db=db_connect();
        $builder=$db->table('inscription')->select('CodeReservation_inscription, concours_SupportZone, Date_avoirLieu, concours_Nom')
            ->join('avoirlieu', 'CodeReservation_inscription = avoirlieu_CodeReservation')
            ->join('concours', 'IdConcours_avoirLieu = Id_concours')
            ->where('LoginUser_inscription',$id);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    /// Récupération des tournois où il y a encore de la place, qui ont un PEGI > à l'âge de l'utilisateur en fonction d'un support
    public function recupConcoursTournoiUser($support, $ageUser){
        $db=db_connect();
        $builder=$db->table('concours')
            ->select('Id_concours, concours_Nom, Date_avoirLieu, SupportZone_zone, zone_NomZone, avoirlieu_PlacesRestantes, avoirlieu_CodeReservation')
            ->join('avoirlieu','IdConcours_avoirLieu = Id_concours')
            ->join('zone', 'SupportZone_zone = concours_SupportZone')
            ->join('jeux', 'concours_IdJeux = Id_jeux')
            ->where('concours_SupportZone',$support)
            ->where('avoirlieu_PlacesRestantes >',0)
            ->where('jeux_Pegi <=',$ageUser)
            ->where('concours_Actif',1);
        $query = $builder->get();
        if($query->getFieldCount()>0){
            return $query->getResult();
        }else {
            return false;
        }
    }
    /// Ajout d'une inscription
    public function ajoutInscription ($info){
        $db=db_connect();
        $builder=$db->table('inscription');
        $query = $builder->insert($info);
        if ($query)
        {
            return true;
        }
        else {
            return false;
        }
    }
    /// Suppression d'une inscription
    public function suppInscription($id){
        $db=db_connect();
        $builder=$db->table('inscription')
            ->where('LoginUser_inscription ',session()->get('login'))
            ->where('CodeReservation_inscription',$id)
            ->delete();
        if ($builder)
        {
            return true;
        }
        else {
            return false;
        }
    }

}