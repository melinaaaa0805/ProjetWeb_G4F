<?php

namespace App\Controllers;

use App\Models\m_avis;
use Config\Services;

class c_avis extends BaseController
{
    public function mesAvis(){
        $model=new m_avis();
        $result=$model->getLesAvis(session()->get('login'));
        If (isset($result[0])) {
            $data['mesAvis']=$result;

        return
            view('v_menuConnecte')
            .view('v_accueilAvis',$data)
            . view('v_footer');}

    }
    public function donnerAvis()
    {
        $model = new m_avis();
        $result = $model->getLesAvis(session()->get('login'));
        $controle = $this->request->getPost('submit');
        if ($controle == null) {
            $data['mesAvis'] = $result;
            $data['titre'] = "Donner mon avis";
            return
                view('v_menuConnecte')
                . view('v_ajoutAvis', $data)
                . view('v_footer');
        }
    }
    public function ajoutAvis(){
        $model=new m_avis();
            if ($this->request->getPost('commentaire')){
                $commentaire=NULL;
            }
            else {
                $commentaire=$this->request->getPost('commentaire');
            }
            $code=(int)($this->request->getPost('tournoi'));
            $note=(int)($this->request->getPost('note'));
            $login= session()->get('login');
            $info = array('LoginUser_inscription' => $login,
                'CodeReservation_inscription' => $code,
                'inscription_Avis'=> $note,
                'inscription_AvisCommentaire' => $commentaire,
                'inscription_Place' => NULL);

            $result1=$model->ajoutAvis($info,$login,$code);
            If ($result1){
                return
                $this->donnerAvis();
        }
            else {
                return
                    $this->donnerAvis();
            }
    }
}