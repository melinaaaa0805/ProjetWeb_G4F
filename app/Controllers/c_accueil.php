<?php

namespace App\Controllers;

use CodeIgniter\Config\Services;
use App\Models\m_jeux;
use App\Models\m_place;

class c_accueil extends BaseController
{
    public function index()
    {
        $data['titre'] = "Accueil";
        return
            view('v_menu')
            .view('v_accueil',$data)
            . view('v_footer');
    }
    ///retourne la page espace nintendo avec tous les jeux nintendo
    public function espaceNintendo()
    {
        $lesJeux=new m_jeux();
        $lesLots=new m_place();
        $support="Switch";
        $data['jeux']=$lesJeux->getLesJeuxSupport($support);
        $data['lots']=$lesLots->getLesLots($support);
        $data['titre'] = "Espace Nintendo";
        return
            view('v_menu')
            .view('v_espaceNintendo',$data)
            . view('v_footer');
    }

    public function login()
    {
        $data['titre'] = "Se Connecter ...";
        $data['validation'] = Services::validation();
        return
            view('v_menu')
            .view('v_espace',$data)
            . view('v_footer');
    }

    public function inscription()
    {
        return
            view('v_menu')
            .view('v_inscription')
            .view('v_footer');
    }
}