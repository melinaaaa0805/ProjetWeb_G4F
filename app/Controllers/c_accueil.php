<?php

namespace App\Controllers;

use CodeIgniter\Config\Services;
use App\Models\m_jeux;
use App\Models\m_place;

class c_accueil extends BaseController
{
    /// retourne la page index et le menu en fonction de la connexion
    public function index()
    {
        Services::session();
        if (session()->get('login')==null){
            $data['titre'] = "Accueil";
            return
                view('v_menu')
                .view('v_accueil',$data)
                . view('v_footer');
        }
        else {
        $data['titre'] = "Accueil";
        return
            view('v_menuConnecte')
            .view('v_accueil',$data)
            . view('v_footer');
    }}
    ///retourne la page espace nintendo avec tous les jeux nintendo
    public function espaceNintendo()
    {
        $lesJeux=new m_jeux();
        $lesLots=new m_place();
        $support="Switch";
        $data['jeux']=$lesJeux->getLesJeuxSupport($support);
        $data['jeuxVote']=$lesJeux->getLesJeuxVote($support);
        $data['lots']=$lesLots->getLesLots($support);
        $data['titre'] = "Espace Nintendo";
        return
            view('v_menu')
            .view('v_espaceNintendo',$data)
            . view('v_footer');
    }
    ///retourne la page espace nextgen avec tous les jeux correspondants
    public function espaceNextGen()
    {
        $lesJeux=new m_jeux();
        $lesLots=new m_place();
        $support="Xbox";
        $data['jeuxXbox']=$lesJeux->getLesJeuxSupport($support);
        $data['jeuxXboxVote']=$lesJeux->getLesJeuxVote($support);
        $data['lotsXbox']=$lesLots->getLesLots($support);
        $lesJeux=new m_jeux();
        $lesLots=new m_place();
        $support="Playstation";
        $data['jeuxPlaystation']=$lesJeux->getLesJeuxSupport($support);
        $data['jeuxPlaystationVote']=$lesJeux->getLesJeuxVote($support);
        $data['lotsPlaystation']=$lesLots->getLesLots($support);
        $data['titre'] = "Espace NextGen";
        return
            view('v_menu')
            .view('v_espaceNextGen',$data)
            . view('v_footer');
    }
/// retourne la page login
    public function login()
    {
        $data['titre'] = "Se Connecter ...";
        $data['validation'] = Services::validation();
        $unUser=new m_user();
        if ($data['User']=$unUser->verifUser($data)) {
            return
                view('v_menu')
                . view('v_espace', $data)
                . view('v_footer');
        }
        else {
            $data['connexion']="Mot de passe ou login incorrect";
            return
                view('v_menu')
                . view('v_connexion', $data)
                . view('v_footer');
        }
    }
    /// retourne la page inscription
public function inscription()
{
    $data['titre']="Inscription";
    $data['validation'] = \CodeIgniter\Config\Services::validation();
    return
        view('v_menu')
        .view('v_inscription',$data)
        . view('v_footer');

}
/// retourne la page connexion
    public function connexion()
    {
        $data['titre']="Connexion";
        return
            view('v_menu')
            .view('v_connexion')
            . view('v_footer');
    }

}