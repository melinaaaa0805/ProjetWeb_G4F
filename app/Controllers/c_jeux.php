<?php

namespace App\Controllers;
use App\Models\m_jeux;
use App\Models\m_concours;

class c_jeux extends BaseController
{
    ///renvoie la page v_jeux avec les informations de SuperSmach
    public function superSmach()
    {
        $UnJeu=new m_jeux();
        $UnConcours=new m_concours();
        $id=10;
        $data['jeux']=$UnJeu->getUnJeu($id);
        $data['concours']=$UnConcours->getUnConcours($id);
        if (session()->get('login')==null){
            return
                view('v_menu')
                .view('v_accueil',$data)
                . view('v_footer');
        }
        else {
        return
            view('v_menuConnecte')
            .view('v_jeux',$data)
            . view('v_footer');
    }}
    ///renvoie la page v_jeux avec les informations de Mario
    public function mario()
    {
        $UnJeu=new m_jeux();
        $UnConcours=new m_concours();
        $id=4;
        $data['jeux']=$UnJeu->getUnJeu($id);
        $data['concours']=$UnConcours->getUnConcours($id);
        return
            view('v_menu')
            .view('v_jeux',$data)
            . view('v_footer');
    }
    ///renvoie la page v_jeux avec les informations de SwitchSport
    public function switchSports()
    {
        $UnJeu=new m_jeux();
        $UnConcours=new m_concours();
        $id=5;
        $data['jeux']=$UnJeu->getUnJeu($id);
        $data['concours']=$UnConcours->getUnConcours($id);
        return
            view('v_menu')
            .view('v_jeux',$data)
            . view('v_footer');
    }
    ///renvoie la page v_jeux avec les informations de StreetFighter
    public function streetFighter()
    {
        $UnJeu=new m_jeux();
        $UnConcours=new m_concours();
        $id=6;
        $data['jeux']=$UnJeu->getUnJeu($id);
        $data['concours']=$UnConcours->getUnConcours($id);
        return
            view('v_menu')
            .view('v_jeux',$data)
            . view('v_footer');
    }
    ///renvoie la page v_jeux avec les informations de JustDance
    public function justDance()
    {
        $UnJeu=new m_jeux();
        $UnConcours=new m_concours();
        $id=11;
        $data['jeux']=$UnJeu->getUnJeu($id);
        $data['concours']=$UnConcours->getUnConcours($id);
        return
            view('v_menu')
            .view('v_jeux',$data)
            . view('v_footer');
    }
}