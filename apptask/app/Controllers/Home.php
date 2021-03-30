<?php namespace App\Controllers;
use App\Models\HomeModel;

class Home extends BaseController
{
	// public function index()
	// {
		// return view('welcome_message');
	// }
    
    public function index(){
        $model = new HomeModel();
        
        //All contacts without private contacts
        $this->data['contacts'] = $model->contacts($this->data['user_id']);
        // echo '<pre>';
        // print_r($this->data['contacts']);
        // echo '</pre>';
        // exit();
        
        //Private contacts
        $this->data['contacts_private'] = $model->contacts_private($this->data['user_id']);
        // echo '<pre>';
        // print_r($this->data['contacts_private']);
        // echo '</pre>';
        // exit();
        
        // All contacts without private contacts
        // for($i=0;$i<sizeof($this->data['contacts']);$i++){
            // foreach($this->data['contacts_private'] as $item){
                // if($this->data['contacts'][$i]['id'] == $item['contact_id']){
                    // unset($this->data['contacts'][$i]);
                // }
            // }
        // }
        // $this->data['contacts'] = array_values($this->data['contacts']);
        
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
