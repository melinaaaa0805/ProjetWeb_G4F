<?php

namespace App\Controllers;

use App\Models\m_concours;
use App\Models\m_inscription;

class c_inscriptionTournois extends BaseController
{
    public function index (){

        ///Récupération des concours et des dates switch
        $model=new m_inscription();
        $switch='Switch';
        $result=$model->recupConcoursTournoi($switch);
        if (isset($result[0])){
            $data['Switch']=$result;
        }

        ///Récupération des concours et des dates playstation
        $model=new m_inscription();
        $play='Playstation';
        $result1=$model->recupConcoursTournoi($play);
        if (isset($result1[0])){
            $data['Playstation']= $result1;
                }

        ///Récupération des concours et des dates xbox
        $model=new m_inscription();
        $xbox='Xbox';
        $result2=$model->recupConcoursTournoi($xbox);
        if (isset($result2[0])){
            $data['Xbox']=$result2;
        }

        if (session()->get('login')==null){
            return
                view('v_menu')
                .view('v_presentationTournois',$data)
                . view('v_footer');
        }
        else{
        return
            view('v_menuConnecte')
            .view('v_presentationTournois',$data)
            . view('v_footer');}
    }
    public function mesInscriptions(){
        $model=new m_inscription();
        $result=$model->recupUserInscription(session()->get('login'));
        If (isset($result[0])) {
        $data['inscription']=$result;
        }
        else {
            $data['inscription']=false;
        }
        return
            view('v_menuConnecte')
            .view('v_mesInscriptions',$data)
            . view('v_footer');}

    public function minscrire(){
    $model=new m_inscription();
    $age=session()->get('age');
    $model2= new m_concours();
    $result4= $model2->getLesConcours();
    $data['titre']= '';
    If (isset($result4))
            {
                $data['Concours']=$result4;
            }
            ///Récupération des concours et des dates switch
            $result1=$model->recupConcoursTournoiUser('Switch',$age);
            if (isset($result1[0])){
                $data['Switch']=$result1;
            }else {
                $data['Switch']=false;
            }

            ///Récupération des concours et des dates playstation
            $result3=$model->recupConcoursTournoiUser('Playstation',$age);
            if (isset($result3[0])){
                $data['Playstation']= $result3;
            }else {
                $data['Playstation']=false;
            }

            ///Récupération des concours et des dates xbox
            $result2=$model->recupConcoursTournoiUser('Xbox',$age);
            if (isset($result2[0])){
                $data['Xbox']=$result2;
            }else {
                $data['Xbox']=false;
            }
                return
                    view('v_menuConnecte')
                    .view('v_minscrire',$data)
                    . view('v_footer');
        }
        public function minscrireTournois(){
            $model=new m_inscription();
            /// on récupère les dates de toutes les réservations de l'utilisateur
            $result=$model->recupUserInscription(session()->get('login'));
            /// on récupère le code de réservation dans $controle
            if  ($this->request->getPost('selection') !== null) {
                    $controle = (int)($this->request->getPost('selection'));
                }
            If (isset($result[0])) {
                ///on récupère la date du concours selectionné
                $dateConcours=$model->recupDateConcours((int)($this->request->getPost('selection')));
                foreach($result as $Inscription):
                    if ($Inscription->Date_avoirLieu==$dateConcours[0]->Date_avoirLieu){
                        $resultat=1;}
                    endforeach;
                    if (isset($resultat)){
                        $data['titre']="Vous êtes déjà inscrit à un concours qui se déroule à la même heure et le même jour";
                        return
                            view('v_menuConnecte')
                            .view('v_minscrire',$data)
                            .view('v_footer');}}
            If (!isset($resultat)){
                $info= array('LoginUser_inscription' => session()->get('login'),
                    'CodeReservation_inscription' => $controle,
                    'inscription_Avis' => NULL,
                    'inscription_AvisCommentaire' => NULL,
                    'inscription_Place'=> NULL);
                $result1=$model->ajoutInscription($info);
                If ($result1){
                        return
                        $this->mesInscriptions();
                    } else {
                        $data['titre']="Votre inscription a échoué, veuillez recommencer";
                        return
                            view('v_menuConnecte')
                            .view('v_minscrire',$data)
                            .view('v_footer');
            }}
            }
            public function medesinscrire() {
                $model=new m_inscription();
                $result=$model->recupUserInscription(session()->get('login'));
                If (isset($result[0])) {
                    $data['inscription']=$result;
                    return
                        view('v_menuConnecte')
                        .view('v_desinscriptionTournois',$data)
                        .view('v_footer');
                }
            }
            public function desinscription(){
                $model= new m_inscription();
                if  ($this->request->getPost('selection') !== null) {
                    $id = (int)($this->request->getPost('selection'));
                    $result=$model->suppInscription($id);
                    if ($result){
                        return
                            $this->mesInscriptions();
                    }
                    else {
                        return
                            $this->mesInscriptions();
                    }
                }
            }
}