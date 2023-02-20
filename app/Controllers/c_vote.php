<?php

namespace App\Controllers;

use App\Models\m_concours;
use App\Models\m_vote;
use Config\Services;

class c_vote extends BaseController
{
///Vérification des votes de l'utilisateur et gestion du bouton voter
    public function votePage(): string
    {
        $nomSupport = 'Switch';
        $model = new m_vote();
        $login = session()->get('login');
        $result = $model->aVote($login, $nomSupport);
        if (isset($result[0])) {
            $info['voteSwitch'] = $result;
        } else {
            $info['voteSwitch'] = null;
        }
        $nomSupport = 'Playstation';
        $model = new m_vote();
        $result = $model->aVote(session()->get('login'), $nomSupport);
        if (isset($result[0])) {
            $info['votePlaystation'] = $result;
        } else {
            $info['votePlaystation'] = null;
        }
        $nomSupport = 'Xbox';
        $model = new m_vote();
        $result = $model->aVote(session()->get('login'), $nomSupport);
        if (isset($result[0])) {
            $info['voteXbox'] = $result;
        } else {
            $info['voteXbox'] = null;
        }
        $session = \Config\Services::session();
        $infoMenu['niveau'] = $session->get('niveau');
        return view('General/v_menuConnecte', $infoMenu)
            . view('VoteTournois/v_mesvotes', $info)
            . view('General/v_footer');
    }
    ///Récupération des jeux pour le vote Switch
    public function tournoisSwitch(): string
    {
        $model = new m_vote();
        $info['jeux'] = $model->recupJeuVote('Switch');
        $session = \Config\Services::session();
        $infoMenu['niveau'] = $session->get('niveau');
        return view('General/v_menuConnecte', $infoMenu)
            . view('VoteTournois/v_vote', $info)
            . view('General/v_footer');
    }
    ///Récupération des jeux pour le vote Playstation
    public function tournoisPlaystation(): string
    {
        $model = new m_vote();
        $info['jeux'] = $model->recupJeuVote('Playstation');
        return
            view('General/v_menuConnecte')
            . view('VoteTournois/v_vote', $info)
            . view('General/v_footer');
    }
    ///Récupération des jeux pour le vote Xbox
    public function tournoisXbox(): string
    {
        Services::session();
        $model = new m_vote();
        $result = $model->recupJeuVote('Xbox');
        if (!$result) {
            return
                view('General/v_menuConnecte')
                . view('General/v_accueil')
                . view('General/v_footer');
        } else {
            $info['jeux'] = $result;
            return
                view('General/v_menuConnecte')
                . view('VoteTournois/v_vote', $info)
                . view('General/v_footer');
        }
    }
    ///Gestion de l'ajout du vote
    public function ajoutVote(): string
    {
        Services::session();
        $model1 = new m_concours();
        $jeux = (int)$this->request->getPost('jeux');
        $concours = $model1->getUnConcours($jeux);
        $model = new m_vote();
        $data = array(
            'LoginUser_voter' => session()->get('login'),
            'IdConcours_voter' => $concours[0]->Id_concours,
            'voter_aVoter' => 1
        );
        $result = $model->ajoutVote($data);
        if ($result) {
            return
                $this->votePage();
        } else {
            return
            view('General/v_menuConnecte')
            . view('General/v_accueil')
            . view('General/v_footer');
        }
    }
}
