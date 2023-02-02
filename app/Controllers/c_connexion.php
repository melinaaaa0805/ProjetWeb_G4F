<?php

namespace App\Controllers;
use App\Models\m_user;
use Config\Services;
use DateTime;

class c_connexion extends BaseController
{
    public function index()
    {
        $validation = Services::validation();
        $rules = [
            'login' => 'required|min_length[5]',
            'password' => 'required|min_length[12]'
        ];
        //Erreurs
        $errors = [
            'login' => ['required' => 'Login obligatoire', 'min_length' => '5 car. minimum'],
            'password' => ['required' => 'Mot de passe obligatoire', 'min_length' => '12 car. minimum'],
        ];
        $validation->setRules($rules, $errors);
        if ($this->validate($rules, $errors))
        {
            $session = Services::session();
            $loginUser = $this->request->getPost('login');
            $model = new m_user();
            $result=$model->verifUser($loginUser);
            if($result[0]==false)
            {
                $info['titre'] = "Mot de passe et/ou identifiant incorrect";
                $info['validation'] = $this->validator;
                $session->setFlashdata('resultConnect', 'Utilisateur non trouvé');
                return view('v_menu')
                    .view('v_connexion', $info)
                    .view('v_footer');
            }
            else
            {
                $mdpUser=$result[0]->user_Mdp;
                $verifPwd = password_verify($this->request->getPost('password'),$mdpUser);
                if($verifPwd==true & $result[0]->user_Niveau=1) {
                            $session->set('login', $result[0]->login_User);
                            $session->set('email',$result[0]->user_AdresseMail);
                            $session->set('nom',$result[0]->user_Nom);
                            $session->set('prenom', $result[0]->user_Prenom);
                            $session->set('dateNaissance', $result[0]->user_DateNaissance);
                            $session->set('age',$result[0]->user_Age);
                            $session->set('password',$result[0]->user_Mdp);
                            $session->set('niveau',$result[0]->user_Niveau);
                            $data['titre']="Bienvenu ".$this->request->getPost('login');
                    return view('v_menuConnecte')
                        . view('v_accueil',$data)
                        . view('v_footer');
                }
                else {
                    $info['titre'] = "Mot de passe et/ou identifiant incorrect 2";
                    $info['validation'] = $this->validator;
                    $session->setFlashdata('resultConnect', 'Utilisateur non trouvé');
                    return view('v_menu')
                        .view('v_connexion', $info)
                        .view('v_footer');
                }

            }
        }
        else
        {
            $info['titre'] = "Connexion impossible, Corrigez votre saisie";
            $info['validation'] = $this->validator;
            return view('v_menu')
                .view('v_connexion', $info)
                .view('v_footer');
        }
    }

    public function deconnexion()
    {
        $session = \Config\Services::session();
        $session->remove('login');
        $session->destroy();
        $data['titre'] = "Déconnexion réussie";
        return view('v_menu')
            .view('v_accueil', $data)
            .view('v_footer');
    }

    public function ajoutUser()
    {
        $controle = $this->request->getPost('submit');
        if(isset($controle)==false)
        {
            $info['titre'] = "Ajouter un nouvel utilisateur";
            $info['validation'] = \CodeIgniter\Config\Services::validation();
        }
        else
        ///gestion de la validation
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
                    'min_length'  => '3 car. Minimun',
                    'max_length' => '24 car. Maximum'],
                'email' => ['required' => 'Email obligatoire',
                    'valid_email'  => "L'email doit être valide"],
                'nom' => ['required' => 'Nom obligatoire',
                    'min_length'  => '2 car. Minimun'],
                'prenom' => ['required' => 'Prénom obligatoire',
                    'min_length'  => '2 car. Minimun'],
                'dateNaissance' => ['required' => 'Date de naissance obligatoire'],
                'password' => ['required' => 'Mot de passe obligatoire',
                    'min_length'  => '12 car. Minimun'],
                'password2' => ['required' => 'Mot de passe obligatoire',
                    'min_length'=>'12 car. Minimum',
                    'matches'  => 'Les mots de passes doivent être identiques']
                ];

            $validation->setRules($rules, $errors);
            if ($this->validate($rules, $errors)){

                ///calcul de l'âge en fonction de la date naissance
                $datetime1 = date_create($this->request->getPost('dateNaissance')); // Date fixe
                $datetime2 = date_create('now'); // Date fixe
                $interval = date_diff($datetime1, $datetime2);
                $age=$interval->format('%y années');


                $data = array(
                    'login_User' => $this->request->getPost('login'),
                    'user_AdresseMail' => $this->request->getPost('email'),
                    'user_Nom' => $this->request->getPost('nom'),
                    'user_Prenom' => $this->request->getPost('prenom'),
                    'user_DateNaissance' => $this->request->getPost('dateNaissance'),
                    'user_Age'=>(int)$age,
                    'user_Mdp' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
                    'user_Niveau'=>1
                );
                $model=new m_user();
                $login=$this->request->getPost('login');
                $doublon=$model->verifUser($login);
                if ($doublon<>false) {
                   $info['titre'] = "Le login que vous avez choisi est déjà utilisé";
                   $info['validation'] = $this->validator;
                }
            else {
                $test=$model->ajoutUser($data);
                if ($test){
                $info['titre'] = "Votre compte a bien été créé, veuillez vous connecter";
                return
                    view('v_menu')
                    .view('v_connexion',$info)
                    .view('v_footer');}
            }}
        else{
        $info['titre'] = "Connexion impossible, Corrigez votre saisie";
        $info['validation'] = $this->validator;}}
        return
            view('v_menu')
            .view('v_inscription',$info)
            .view('v_footer');
    }

    public function info()
    {
        return
            view('v_menuConnecte')
            .view('v_espace')
            .view('v_footer');
    }
}