<?php

namespace App\Controllers;
use App\Models\m_user;
use Config\Services;

class c_connexion extends BaseController
{
    public function index()
    {
        $validation = Services::validation();
        $rules = [
            'login' => 'required|min_length[5]',
            'mdp' => 'required|min_length[12]'
        ];
        //Erreurs
        $errors = [
            'login' => ['required' => 'Login obligatoire', 'min_length' => '5 car. minimum'],
            'mdp' => ['required' => 'Mot de passe obligatoire', 'min_length' => '12 car. minimum'],
        ];
        $validation->setRules($rules, $errors);
        if ($this->validate($rules, $errors))
        {
            $session = \Config\Services::session();
            $loginUser = $this->request->getPost('login');
            $model = new m_user();
            $test = $model->verifUser($loginUser);
            if($test == false)
            {
                $info['titre'] = "Connexion impossible à ".$loginUser;
                $info['validation'] = $this->validator;
                $session->setFlashdata('resultConnect', 'Utilisateur non trouvé');
                return view('v_header')
                    .view('v_menu')
                    .view('v_controleUser', $info)
                    .view('v_footer');
            }
            else
            {
                $pwd = $test->pwdUser;
                $verifPwd = password_verify($this->request->getPost('mdp'),$pwd);
                $niveau = $session-> get('niveau');
                if($verifPwd & $niveau="3") {
                    $session->set('login', $test->loginUser);
                    $session->set('mdp', $test->pwdUser);
                    /// Ligne modifiée BTS BLANC
                    $session->set('niveau', $test->niveauUser);
                    return view('v_header')
                        . view('v_menuAdmin')
                        . view('v_corpsAccueil')
                        . view('v_footer');
                }

                /// lignes ajoutée BTS BLANC
                if($verifPwd & $niveau <> 3){
                    return view('v_header')
                        . view('v_menu')
                        .view('v_corpsAccueil')
                        .view('v_footer');
                }
                else
                {
                    $info['titre'] = "Pb mot de passe : ";
                    $info['validation'] = $this->validator;
                    $session->setFlashdata('resultConnect', 'pb ident Utilisateur');
                    return view('v_header')
                        .view('v_menu')
                        .view('v_controleUser', $info)
                        .view('v_footer');
                }
            }
        }
        else
        {
            $info['titre'] = "Connexion impossible, Corrigez votre saisie";
            $info['validation'] = $this->validator;
            return view('v_header')
                .view('v_menu')
                .view('v_controleUser', $info)
                .view('v_footer');
        }
    }

    public function deconnexion()
    {
        $session = \Config\Services::session();
        $session->remove('login');
        $session->destroy();
        $data['title'] = "déconnexion réussie";
        return view('v_header')
            .view('v_menu')
            .view('v_corpsAccueil', $data)
            .view('v_footer');
    }
}