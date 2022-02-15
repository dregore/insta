<?php namespace App\Controllers;
use App\Models\HomeModel;

class Home extends BaseController
{
    public function index(){
        $model = new HomeModel();
        
        //All contacts without private contacts
        $this->data['contacts'] = $model->contacts($this->data['user_id']);
        
        //Private contacts
        $this->data['contacts_private'] = $model->contacts_private($this->data['user_id']);
        
        return view('private_full', $this->data);
    }
    
    public function ajax_add(){
        $model = new HomeModel();
        //form variables
        $this->data['contact_id'] = (int)$_POST["contact_id"];
        
        $result = $model->add_contact_to_private($this->data);
        if($result > 0){
            echo 'OK';
        }
        else{
            echo 'ERROR';
        }
    }
    
    public function ajax_rm(){
        $model = new HomeModel();
        //form variables
        $this->data['contact_id'] = (int)$_POST["contact_id"];
        
        $result = $model->remove_contact_from_private($this->data);
        if($result > 0){
            echo 'OK';
        }
        else{
            echo 'ERROR';
        }
    }
}
