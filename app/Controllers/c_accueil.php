<?php

namespace App\Controllers;

use CodeIgniter\Config\Services;

class c_accueil extends BaseController
{
    public function index()
    {
        return
            view('v_menu')
            . view('v_Accueil')
            . view('v_footer');
    }
}