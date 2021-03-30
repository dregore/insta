<?php namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model{
    
    protected $table_contacts = 'contacts';
    protected $table_users_contacts = 'users_contacts';
    
    public function contacts($user_id){
        $builder = $this->db->table($this->table_contacts);
        $builder->WhereNotIn('id', function($builder) use ($user_id) {
            return $builder->select('contact_id')->from('users_contacts')->where('user_id', $user_id);
        });
        $query = $builder->get();
        
        return $query->getResultArray();
	}
    
    public function contacts_private($user_id){
        $builder = $this->db->table($this->table_users_contacts);
        $builder->where('user_id', $user_id);
        $builder->join($this->table_contacts, $this->table_contacts.'.id = '.$this->table_users_contacts.'.contact_id');
        $query = $builder->get();
        
        return $query->getResultArray();
        // return $builder->getCompiledSelect();
    }
    
    public function add_contact_to_private($data){
        $builder = $this->db->table($this->table_users_contacts);
        $builder->insert($data);
        
        return $this->db->insertID();
    }
    
    public function remove_contact_from_private($data){
        $builder = $this->db->table($this->table_users_contacts);
        $builder->delete(['user_id' => $data['user_id'], 'contact_id' => $data['contact_id']]);
        
        return $this->db->affectedRows();
    }
}