<?php

namespace App\Controllers;

use App\Models\m_avis;
use Config\Services;

class c_avis extends BaseController
{
    ///Retourne la page accueil avis avec tous les avis de l'utilisateur
    public function mesAvis(): string
    {
        $model = new m_avis();
        $result = $model->getLesAvis(session()->get('login'));
        if (isset($result[0])) {
            $data['mesAvis'] = $result;
            $data['titre'] = null;
        } else {
            $data['titre'] = "Impossible d'afficher cette page, revenez ultérieurement.";
        }
            return
            view('v_menuConnecte')
            . view('v_accueilAvis', $data)
            . view('v_footer');
    }
    ///Retourne la page ajout avis avec les avis non donnés de l'utilisateur
    public function donnerAvis(): string
    {
        $model = new m_avis();
        $result = $model->getLesAvisNonDonner(session()->get('login'));
        if (isset($result[0])) {
            $data['mesAvis'] = $result;
            $data['titre'] = 'Donner mon avis';
        } else {
            $data['titre'] = "Impossible d'afficher cette page, revenez ultérieurement.";
        }
        return
            view('v_menuConnecte')
            . view('v_ajoutAvis', $data)
            . view('v_footer');
    }
    ///Retourne la page donnerAvis et modifie l'enregistrement dans la table inscription
    public function ajoutAvis(): ?string
    {
        $model = new m_avis();
        if ($this->request->getPost('commentaire')) {
            $commentaire = null;
        } else {
            $commentaire = $this->request->getPost('commentaire');
        }
            $code = (int)($this->request->getPost('tournoi'));
            $note = (int)($this->request->getPost('note'));
            $login = session()->get('login');
            $info = array('LoginUser_inscription' => $login,
                'CodeReservation_inscription' => $code,
                'inscription_Avis' => $note,
                'inscription_AvisCommentaire' => $commentaire,
                'inscription_Place' => null);

            $result1 = $model->ajoutAvis($info, $login, $code);
            if ($result1) {
                return
                $this->mesAvis();
            } else {
                $data['message'] = "Le vote n'a pas été pris en compte, merci de rééssayer ultérieurement.";
                return
                    view('v_menuConnecte')
                    . view('v_accueilAvis', $data)
                    . view('v_footer');
            }
    }
}
