<?php

namespace App\Controllers;

use Config\Services;
use App\Models\m_user;

class c_user extends BaseController
{
    public function suppression(): string
    {
        $login = session()->get('login');
        $model = new m_user();
        if ($model->supprimerCompte($login)) {
            $session = \Config\Services::session();
            $session->remove('login');
            $session->destroy();
            $data['titre'] = 'Votre compte a été supprimé avec succès';
            return
                    view('General/v_menu')
                    . view('General/v_accueil', $data)
                    . view('General/v_footer');
        } else {
            return
                view('General/v_menuConnecte')
                . view('Utilisateur/v_infoUser')
                . view('General/v_footer');
        }
    }
///modification des informations
    public function modificationInfo()
    {
        $session = Services::session();
        $controle = $this->request->getPost('submit');
        if (!isset($controle)) {
            $info['titre'] = 'Modification des informations';
        } else ///gestion de la validation
        {
            $validation = Services::validation();
            $rules = [
                'email' => 'required|valid_email',
                'nom' => 'required|min_length[2]',
                'prenom' => 'required|min_length[2]',
                'dateNaissance' => 'required',
                'password' => 'required|min_length[12]',
                'password2' => 'required|min_length[12]|matches[password]'
            ];
            //Erreurs
            $errors = [
                'email' => ['required' => "L'adresse mail est obligatoire",
                    'valid_email'  => "L'email doit être valide"],
                'nom' => ['required' => 'Nom obligatoire',
                    'min_length'  => 'Le nom est trop court'],
                'prenom' => ['required' => 'Prénom obligatoire',
                    'min_length'  => 'Le prénom est trop court'],
                'dateNaissance' => ['required' => 'Date de naissance obligatoire'],
                'password' => ['required' => 'Mot de passe obligatoire',
                    'min_length'  => '12 caractères minimun'],
                'password2' => ['required' => 'Mot de passe obligatoire',
                    'min_length' => '12 caractères Minimum',
                    'matches'  => 'Les mots de passes doivent être identiques']
            ];

            $validation->setRules($rules, $errors);
            if ($this->validate($rules, $errors)) {
                $datetime1 = date_create($this->request->getPost('dateNaissance')); // Date fixe
                $datetime2 = date_create('now'); // Date fixe
                $interval = date_diff($datetime1, $datetime2);
                $age = $interval->format('%y années');

                /// initialisation d'un tableau pour modifier l'utilisateur
                $data = array(
                    'user_AdresseMail' => $this->request->getPost('email'),
                    'user_Nom' => $this->request->getPost('nom'),
                    'user_Prenom' => $this->request->getPost('prenom'),
                    'user_DateNaissance' => $this->request->getPost('dateNaissance'),
                    'user_Age' => (int)$age,
                    'user_Mdp' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                );

                $user = new m_user();
                $modif = $user->modifInfos($data, session()->get('login'));
                /// si la modification a été réalisée retour sur l'espace mes informations
                if ($modif) {
                    $info['titre'] = 'La modification a bien été effectué';
                    $result = $user->verifUser(session()->get('login'));
                    $session->set('login', $result[0]->login_User);
                    $session->set('email', $result[0]->user_AdresseMail);
                    $session->set('nom', $result[0]->user_Nom);
                    $session->set('prenom', $result[0]->user_Prenom);
                    $session->set('dateNaissance', $result[0]->user_DateNaissance);
                    $session->set('age', $result[0]->user_Age);
                    $session->set('password', $result[0]->user_Mdp);
                    $session->set('niveau', $result[0]->user_Niveau);
                    $info['titre'] = 'La modification a été un succès !';
                    return
                        view('General/v_menuConnecte')
                        . view('Utilisateur/v_infoUser', $info)
                        . view('General/v_footer');
                } else {
                    $info['titre'] = 'La modification a échoué, réessayez ultérieurement';
                    return
                        view('General/v_menuConnecte')
                        . view('Utilisateur/v_modifInfo', $info)
                        . view('General/v_footer');
                }
            }
                $info['titre'] = 'La modification a échoué, corrigez votre saisie';
                $info['validation'] = $this->validator;
                return
                    view('General/v_menuConnecte')
                    . view('Utilisateur/v_modifInfo', $info)
                    . view('General/v_footer');
        }
    }

    ///Gestion de la page mes informations
    public function info(): string
    {
        return
            view('General/v_menuConnecte')
            . view('Utilisateur/v_infoUser')
            . view('General/v_footer');
    }

    ///Gestion de modification de la page mes informations
    public function modifInfo(): string
    {
        $data['validation'] = \CodeIgniter\Config\Services::validation();
        $data['titre'] = 'Modifier mes informations';
        return
            view('General/v_menuConnecte')
            . view('Utilisateur/v_modifInfo', $data)
            . view('General/v_footer');
    }
}
