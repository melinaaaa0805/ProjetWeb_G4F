<?php

namespace App\Controllers;

use App\Models\m_concours;
use App\Models\m_vote;
use Config\Services;

class c_vote extends BaseController
{
///Vérification des votes de l'utilisateur et gestion du bouton voter
    public function votePage(){
        $session = Services::session();
        $nomSupport= 'Switch';
        $model= new m_vote();
        $login=session()->get('login');
        $result=$model->aVote($login, $nomSupport);
        if (isset($result[0]))
        {
            $info['concoursSwitch']=$result;
        }
        else
        {
            $info['concoursSwitch']=null;
        }
        $nomSupport= 'Playstation';
        $model= new m_vote();
        $result=$model->aVote(session()->get('login'), $nomSupport);
        if (isset($result[0]))
        {
            $info['concoursPlaystation']=$result;
        }
        else {
            $info['concoursPlaystation']=null;
        }
        $nomSupport= 'Xbox';
        $model= new m_vote();
        $result=$model->aVote(session()->get('login'), $nomSupport);
        if (isset($result[0]))
        {
            $info['concoursXbox']=$result;
        }
        else{
            $info['concoursXbox']=null;
        }
        return
            view('v_menuConnecte')
            .view('v_mesvotes', $info)
            .view ('v_footer');
    }
    ///Récupération des jeux pour le vote Switch
    public function mesvotesSwitch(){
        $model=new m_vote();
        $info['jeux']=$model->recupJeuVote(4,5,6);
        return
            view('v_menuConnecte')
            .view('v_vote', $info)
            .view ('v_footer');
    }
    ///Récupération des jeux pour le vote Playstation
    public function mesvotesPlaystation(){
        $model=new m_vote();
        $info['jeux']=$model->recupJeuVote(7,8,9);
        return
            view('v_menuConnecte')
            .view('v_vote', $info)
            .view ('v_footer');
    }
    ///Récupération des jeux pour le vote Xbox
    public function mesvotesXbox(){
        Services::session();
        $model=new m_vote();
        $result=$model->recupJeuVote(1,2,3);
        if ($result==false){
            return
                view('v_menuConnecte')
                .view('v_accueil')
                .view ('v_footer');
        }
        else{
            $info['jeux']=$result;
            return
                view('v_menuConnecte')
                .view('v_vote',$info)
                .view ('v_footer');
        }}
    ///Gestion de l'ajout du vote
    public function ajoutVote(){
        Services::session();
        $model1= new m_concours();
        $jeux=(int)$this->request->getPost('jeux');
        $concours=$model1->getUnConcours($jeux);
        $model= new m_vote();
        $data = array(
            'LoginUser_voter' => session()->get('login'),
            'IdConcours_voter' => $concours[0]->Id_concours,
            'voter_aVoter'=> 1
        );
        $result=$model->ajoutVote($data);
        if ($result)
        {
            return
                $this->votePage();
        }
        else {
            view('v_menuConnecte')
            .view('v_accueil')
            .view ('v_footer');
        }}
}