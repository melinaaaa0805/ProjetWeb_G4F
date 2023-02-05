<?php

namespace App\Controllers;

use App\Models\m_inscription;

class c_inscriptionTournois extends BaseController
{
    public function index (){
        $model=new m_inscription();
        $result=$model->recupConcoursTournoi('Switch');
        if ($result<>!false){
            $data['concoursSwitch']=$result;
            $result2=$model->recupDateConcours($result[0]->Id_concours);
            if ($result2<>!false){
                $data['dateSwitch1']=$result;
                $result3=$model->recupDateConcours($result[1]->Id_concours);
                if ($result3<>!false){
                    $data['dateSwitch2']=$result;
                }
            }
        }
        $model=new m_inscription();
        $result=$model->recupConcoursTournoi('Playstation');
        if ($result<>!false){
            $data['concoursPlaystation']=$result;
            $result2=$model->recupDateConcours($result[0]->Id_concours);
            if ($result2<>!false){
                $data['datePlaystation1']=$result;
                $result3=$model->recupDateConcours($result[1]->Id_concours);
                if ($result3<>!false){
                    $data['datePlaystation2']=$result;
                }
            }
        }
        $model=new m_inscription();
        $result=$model->recupConcoursTournoi('Xbox');
        if ($result<>!false){
            $data['concoursXbox']=$result;
            $result2=$model->recupDateConcours($result[0]->Id_concours);
            if ($result2<>!false){
                $data['dateXbox1']=$result;
                $result3=$model->recupDateConcours($result[1]->Id_concours);
                if ($result3<>!false){
                    $data['dateXbox2']=$result;
                }
            }
        }
        return
            view('v_menuConnecte')
        .view('v_inscriptionTournois',$data)
        . view('v_footer');



}
}