<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HomeModel extends CI_Model{
    public function add_data($post){
        $post['added_on'] = date('d M ,Y');
        $post['status'] = 1;
       $q = $this->db->insert('register',$post);
       if($q){
        return true;
       }else{
        return false;
       }
        
    }
     public function all_data(){
        $q = $this->db->order_by('id','desc')->get('register');
        if($q->num_rows()){
            return $q->result();
        }
     }
}