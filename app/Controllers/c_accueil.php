<?php

namespace App\Controllers;

use CodeIgniter\Config\Services;

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
    public function espaceNintendo()
    {
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
            . view('v_inscription', $data)
            . view('v_footer');
    }
}