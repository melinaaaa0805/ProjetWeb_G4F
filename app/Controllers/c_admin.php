<?php

namespace App\Controllers;

use App\Models\m_avis;

class c_admin extends BaseController
{
    public function index()
    {
        if ($this->verifIsAdmin()) {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            $model = new m_avis();
            $lesAvis['lesAvis'] = $model->getTousLesAvis();
            return view('General/v_menuConnecte', $infoMenu)
            . view('Administrateur/v_admin', $lesAvis)
            . view('General/v_footer');
        }
    }

    private function verifIsAdmin()
    {
        $session = \Config\Services::session();
        if ($session->get('niveau') == 2) {
            return true;
        } else {
            redirect()->to(site_url('c_connexion::index'));
        }
    }
}
