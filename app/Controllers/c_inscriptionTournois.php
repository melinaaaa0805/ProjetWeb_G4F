<?php

namespace App\Controllers;

use App\Models\m_inscription;

class c_inscriptionTournois extends BaseController
{
    public function index (){
        $model=new m_inscription();
        $result=$model->recupConcoursTournoi('Switch');
        if (isset($result[0])){
            $data['concoursSwitch']=$result;
            $id=(int)($result[0]->Id_concours);
            $result2=$model->recupDateConcours($id);
            if (isset($result2[0])){
                $data['dateSwitch1']=$result2;
                $result3=$model->recupDateConcours($result[1]->Id_concours);
                if (isset($result3[0])){
                    $data['dateSwitch2']=$result3;
                }
            }
        }
        $model=new m_inscription();
        $result=$model->recupConcoursTournoi('Playstation');
        if (isset($result[0])){
            $data['concoursPlaystation']=$result;
            $id=(int)($result[0]->Id_concours);
            $result2=$model->recupDateConcours($id);
            if (isset($result2[0])){
                $data['datePlaystation1']=$result2;
                $result3=$model->recupDateConcours($result[1]->Id_concours);
                if (isset($result3[0])){
                    $data['datePlaystation2']=$result3;
                }
            }
        }
        $model=new m_inscription();
        $result=$model->recupConcoursTournoi('Xbox');
        if (isset($result[0])){
            $data['concoursXbox']=$result;
            $id=(int)($result[0]->Id_concours);
            $result2=$model->recupDateConcours($id);
            if (isset($result2[0])){
                $data['dateXbox1']=$result2;
                $result3=$model->recupDateConcours($result[1]->Id_concours);
                if (isset($result3[0])){
                    $data['dateXbox2']=$result3;
                }
            }
        }
        return
            view('v_menuConnecte')
        .view('v_inscriptionTournois',$data)
        . view('v_footer');



}
}