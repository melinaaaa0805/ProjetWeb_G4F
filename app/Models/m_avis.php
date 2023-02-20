<?php

namespace App\Models;

class m_avis extends \CodeIgniter\Model
{
    ///Retourne tous les avis d'un utilisateur
    public function getLesAvis($id): bool | array
    {
        $db = db_connect();
        $builder = $db->table('inscription')
            ->select('CodeReservation_inscription, inscription_Avis, inscription_AvisCommentaire, concours_Nom,
            Date_avoirLieu')
            ->join('avoirlieu', 'CodeReservation_inscription = avoirlieu_CodeReservation')
            ->join('concours', 'IdConcours_avoirLieu = Id_concours')
            ->where('LoginUser_inscription', $id);
        $query = $builder->get();
        if ($query->getFieldCount() > 0) {
            return $query->getResult();
        } else {
            return false;
        }
    }
    ///Retourne les inscriptions sans avis d'un utilisateur
    public function getLesAvisNonDonner($id): bool | array
    {
        $db = db_connect();
        $builder = $db->table('inscription')
            ->select('CodeReservation_inscription, inscription_Avis, inscription_AvisCommentaire, concours_Nom, 
            Date_avoirLieu')
            ->join('avoirlieu', 'CodeReservation_inscription = avoirlieu_CodeReservation')
            ->join('concours', 'IdConcours_avoirLieu = Id_concours')
            ->where('LoginUser_inscription', $id)
            ->where('inscription_Avis', null);
        $query = $builder->get();
        if ($query->getFieldCount() > 0) {
            return $query->getResult();
        } else {
            return false;
        }
    }
    /// Ajoute un avis
    public function ajoutAvis($info, $login, $idreserv): bool
    {
        $db = \Config\Database::connect();
        $builder =  $db->table('inscription')
            ->where('LoginUser_inscription', $login)
        ->where('CodeReservation_inscription', $idreserv);
        $query = $builder->update($info);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getTousLesAvis(): bool | array
    {
        $db = \Config\Database::connect();
        $builder = $db->table('inscription')
            ->select('LoginUser_inscription, inscription_Avis, inscription_AvisCommentaire')
            ->where('inscription_Avis IS NOT NULL');
        $query = $builder->get();
        if ($query->getFieldCount() > 0) {
            return $query->getResultArray();
        } else {
            return false;
        }
    }
}
