<?php

namespace App\Controllers;

use App\Models\m_jeux;
use App\Models\m_concours;

class c_jeux extends BaseController
{
    ///renvoie la page v_jeux avec les informations de SuperSmach
    public function superSmach(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 10;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nintendo';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
            . view('General/v_jeux', $data)
            . view('General/v_footer');
        }
    }
    ///renvoie la page v_jeux avec les informations de Mario
    public function mario(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 4;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nintendo';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
    ///renvoie la page v_jeux avec les informations de SwitchSport
    public function switchSports(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 5;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nintendo';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
    ///renvoie la page v_jeux avec les informations de StreetFighter
    public function streetFighter(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 6;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nintendo';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }

    ///renvoie la page v_jeux avec les informations de JustDance
    public function justDance(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 11;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nintendo';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }

    ///renvoie la page v_jeux avec les informations de Call of Duty
    public function callOf(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 12;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }

    ///renvoie la page v_jeux avec les informations de Fifa
    public function fifa(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 14;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';

        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }

///renvoie la page v_jeux avec les informations de Rocket League
    public function rocketLeague(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 13;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';

        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
///renvoie la page v_jeux avec les informations de LeagueOfLegend
    public function leagueOflegend(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 15;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
    ///renvoie la page v_jeux avec les informations de NBA
    public function nba(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 1;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
    ///renvoie la page v_jeux avec les informations de overwatch
    public function overwatch(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 2;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
    ///renvoie la page v_jeux avec les informations de Gran Turismo
    public function granTurismo(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 7;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
    ///renvoie la page v_jeux avec les informations de Arkanoid
    public function arkanoid(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 9;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
    ///renvoie la page v_jeux avec les informations de F122
    public function f122(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 8;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
    ///renvoie la page v_jeux avec les informations de haloInfinite
    public function haloInfinite(): string
    {
        $UnJeu = new m_jeux();
        $UnConcours = new m_concours();
        $id = 3;
        $data['jeux'] = $UnJeu->getUnJeu($id);
        $data['concours'] = $UnConcours->getUnConcours($id);
        $data['route'] = 'nextGen';
        if (session()->get('login') == null) {
            return
                view('General/v_menu')
                . view('General/v_accueil', $data)
                . view('General/v_footer');
        } else {
            $session = \Config\Services::session();
            $infoMenu['niveau'] = $session->get('niveau');
            return view('General/v_menuConnecte', $infoMenu)
                . view('General/v_jeux', $data)
                . view('General/v_footer');
        }
    }
}
