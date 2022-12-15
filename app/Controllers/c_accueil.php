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
            . view('v_accueil',$data)
            . view('v_footer');
    }
    public function nintendo()
    {
        $data['titre'] = "Nintendo";
        return
            view('v_menu')
            . view('v_nintendo', $data)
            . view('v_footer');
    }
}