<?php

namespace App\Controllers;

use App\Models\m_user;
use Config\Services;
use DateTime;

class c_connexion extends BaseController
{
    ///Gestion de la connexion
    public function index(): string
    {
        $controle = $this->request->getPost('submit');
        if ($controle == null) {
            $info['titre'] = 'Me connecter';
            $info['validation'] = \CodeIgniter\Config\Services::validation();
        } else {
            $validation = Services::validation();
            $rules = [
            'login' => 'required|min_length[3]|max_length[24]',
            'password' => 'required|min_length[12]'
            ];
        //Erreurs
            $errors = [
            'login' => ['required' => 'Login obligatoire', 'min_length' => '3 caractères minimum'],
            'password' => ['required' => 'Mot de passe obligatoire', 'min_length' => '12 caractères minimum'],
            ];
            $validation->setRules($rules, $errors);
            if ($this->validate($rules, $errors)) {
                $session = Services::session();
                $loginUser = $this->request->getPost('login');
                $model = new m_user();
                $result = $model->verifUser($loginUser);
                if (!isset($result[0])) {
                    $info['titre'] = 'Mot de passe et/ou identifiant incorrect';
                    $info['validation'] = $this->validator;
                    return view('General/v_menu')
                    . view('Utilisateur/v_connexion', $info)
                    . view('General/v_footer');
                } else {
                    $mdpUser = $result[0]->user_Mdp;
                    $verifPwd = password_verify($this->request->getPost('password'), $mdpUser);
                    if ($verifPwd == true & $result[0]->user_Niveau = 1) {
                            $session->set('login', $result[0]->login_User);
                            $session->set('email', $result[0]->user_AdresseMail);
                            $session->set('nom', $result[0]->user_Nom);
                            $session->set('prenom', $result[0]->user_Prenom);
                            $session->set('dateNaissance', $result[0]->user_DateNaissance);
                            $session->set('age', $result[0]->user_Age);
                            $session->set('password', $result[0]->user_Mdp);
                            $session->set('niveau', $result[0]->user_Niveau);
                            $data['titre'] = 'Bienvenu ' . $this->request->getPost('login');
                        return view('General/v_menuConnecte')
                        . view('General/v_accueil', $data)
                        . view('General/v_footer');
                    } else {
                        $info['titre'] = 'Mot de passe et/ou identifiant incorrect';
                        $info['validation'] = $this->validator;
                        return view('General/v_menu')
                        . view('Utilisateur/v_connexion', $info)
                        . view('General/v_footer');
                    }
                }
            } else {
                $info['titre'] = 'Connexion impossible, corrigez votre saisie';
                $info['validation'] = $this->validator;
                return view('General/v_menu')
                . view('Utilisateur/v_connexion', $info)
                . view('General/v_footer');
            }
        }return view('General/v_menu')
        . view('Utilisateur/v_connexion', $info)
        . view('General/v_footer');
    }

    ///Gestion de la decconnexion
    public function deconnexion(): string
    {
        $session = \Config\Services::session();
        $session->remove('login');
        $session->destroy();
        $data['titre'] = 'Déconnexion réussie';
        return view('General/v_menu')
            . view('General/v_accueil', $data)
            . view('General/v_footer');
    }
    ///Gestion de l'inscription
    public function ajoutUser(): string
    {
        $controle = $this->request->getPost('submit');
        if (!isset($controle)) {
            $info['titre'] = 'Créer mon compte';
            $info['validation'] = \CodeIgniter\Config\Services::validation();
        } else ///gestion de la validation
        {
            $validation = Services::validation();
            $rules = [
                'login' => 'required|min_length[3]|max_length[24]',
                'email' => 'required|valid_email',
                'nom' => 'required|min_length[2]',
                'prenom' => 'required|min_length[2]',
                'dateNaissance' => 'required',
                'password' => 'required|min_length[12]',
                'password2' => 'required|min_length[12]|matches[password]'
            ];
            //Erreurs
            $errors = [
                'login' => ['required' => 'Login obligatoire',
                    'min_length'  => '3 caractères minimun',
                    'max_length' => '24 caractères maximum'],
                'email' => ['required' => 'Email obligatoire',
                    'valid_email'  => "L'email doit être valide"],
                'nom' => ['required' => 'Nom obligatoire',
                    'min_length'  => '2 caractères minimun'],
                'prenom' => ['required' => 'Prénom obligatoire',
                    'min_length'  => '2 caractères minimun'],
                'dateNaissance' => ['required' => 'Date de naissance obligatoire'],
                'password' => ['required' => 'Mot de passe obligatoire',
                    'min_length'  => '12 caractères minimun'],
                'password2' => ['required' => 'Mot de passe obligatoire',
                    'min_length' => '12 caractères minimum',
                    'matches'  => 'Les mots de passes doivent être identiques']
                ];

            $validation->setRules($rules, $errors);
            if ($this->validate($rules, $errors)) {
                ///calcul de l'âge en fonction de la date naissance
                $datetime1 = date_create($this->request->getPost('dateNaissance')); // Date fixe
                $datetime2 = date_create(); // Date fixe
                $interval = date_diff($datetime1, $datetime2);
                $age = $interval->format('%y années');

                /// initialisation d'un tableau pour créer l'utilisateur
                $data = array(
                    'login_User' => $this->request->getPost('login'),
                    'user_AdresseMail' => $this->request->getPost('email'),
                    'user_Nom' => $this->request->getPost('nom'),
                    'user_Prenom' => $this->request->getPost('prenom'),
                    'user_DateNaissance' => $this->request->getPost('dateNaissance'),
                    'user_Age' => (int)$age,
                    'user_Mdp' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                    'user_Niveau' => 1
                );
                $model = new m_user();
                $login = $this->request->getPost('login');
                $doublon = $model->verifUser($login);
                ///vérification du login
                if (isset($doublon[0])) {
                    $info['titre'] = 'Le login que vous avez choisi est déjà utilisé';
                    $info['validation'] = $this->validator;

                    ///ajout de l'utilisateur
                } else {
                    $test = $model->ajoutUser($data);
                    if ($test) {
                        $info['titre'] = 'Votre compte a bien été créé, veuillez vous connecter';
                        return
                        view('General/v_menu')
                        . view('Utilisateur/v_connexion', $info)
                        . view('General/v_footer');
                    }
                }
            } else {
                $info['titre'] = 'Connexion impossible, Corrigez votre saisie';
                $info['validation'] = $this->validator;
            }
        }
        return
            view('General/v_menu')
            . view('Utilisateur/v_inscription', $info)
            . view('General/v_footer');
    }
}
