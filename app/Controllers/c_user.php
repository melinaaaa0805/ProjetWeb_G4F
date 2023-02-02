<?php

namespace App\Controllers;

use Config\Services;
use App\Models\m_user;
use App\Models\m_vote;
class c_user extends BaseController
{
    public function suppression() {

    }
///modification des informations
    public function modificationInfo() {
        $session = Services::session();
        $controle = $this->request->getPost('submit');
        if(isset($controle)==false)
        {
            $info['titre'] = "Modification des informations";
            $info['validation'] = \CodeIgniter\Config\Services::validation();
        }
        else
            ///gestion de la validation
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
                $datetime1 = date_create($this->request->getPost('dateNaissance')); // Date fixe
                $datetime2 = date_create('now'); // Date fixe
                $interval = date_diff($datetime1, $datetime2);
                $age=$interval->format('%y années');

                /// initialisation d'un tableau pour modifier l'utilisateur
                $data = array(
                    'user_AdresseMail' => $this->request->getPost('email'),
                    'user_Nom' => $this->request->getPost('nom'),
                    'user_Prenom' => $this->request->getPost('prenom'),
                    'user_DateNaissance' => $this->request->getPost('dateNaissance'),
                    'user_Age'=>(int)$age,
                    'user_Mdp' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
                );

                $user= new m_user();
                $modif=$user->modifInfos($data,session()->get('login'));
                /// si la modification a été réalisée retour sur l'espace mes informations
                if ($modif){
                    $info['titre']="La modification a bien été effectué";
                    $result=$user->verifUser(session()->get('login'));
                    $session->set('login', $result[0]->login_User);
                    $session->set('email',$result[0]->user_AdresseMail);
                    $session->set('nom',$result[0]->user_Nom);
                    $session->set('prenom', $result[0]->user_Prenom);
                    $session->set('dateNaissance', $result[0]->user_DateNaissance);
                    $session->set('age',$result[0]->user_Age);
                    $session->set('password',$result[0]->user_Mdp);
                    $session->set('niveau',$result[0]->user_Niveau);
                    return
                        view('v_menuConnecte')
                        .view('v_espace',$info)
                        .view ('v_footer');
                }
                else {
                    $info['titre']= 'La modification a échoué, réessayez ultérieurement';
                    return
                        view('v_menuConnecte')
                        .view('v_modifInfo',$info)
                        .view ('v_footer');
                }
            }
            ///Modification échouée
        else {
            $info['titre']= 'La modification a échoué, corrigez votre saisie';
            $info['validation'] = $this->validator;
            return
                view('v_menuConnecte')
                .view('v_modifInfo', $info)
                .view ('v_footer');
        }}}
    public function votePage(){
        $nomSupport= 'Nintendo';
        $model= new m_vote();
        $result=$model->aVote(session()->get('login'), $nomSupport);
        if ($result==false)
        {
            $info['voteNintendo']=0;
            $info['concoursNintendo']=null;
        }
        else
        {
            $info['concoursNintendo']=$result;
        }
        $nomSupport= 'NextGen';
        $model= new m_vote();
        $result=$model->aVote(session()->get('login'), $nomSupport);
        if ($result==false)
        {
            $info['voteNextGen']=0;
            $info['concoursNextGen']=null;
        }
        else
        {
            $info['concoursNextGen']=$result;
        }
        return
            view('v_menuConnecte')
            .view('v_mesvotes', $info)
            .view ('v_footer');
    }
}