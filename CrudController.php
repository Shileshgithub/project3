<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CrudController extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('homeModel');
        $this->form_validation->set_error_delimiters('<div class="text-danger mt-1 mb-3">','</div>');
    }
    public function index(){
        $this->load->view('insert');
    }
    public function add_data(){
        $this->form_validation->set_rules('name','full name','required|trim');
        $this->form_validation->set_rules('email','email','required|trim|valid_email');
        $this->form_validation->set_rules('phone','phone','required|trim');
        $this->form_validation->set_rules('language','language','required|trim');
        if(empty($_FILES['image']['name'])){
              $this->form_validation->set_rules('image','image/document','required|trim');
        }
        if($this->form_validation->run()){
            $post = $this->input->post();
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = '*';
            $this->load->library('upload',$config);
            $this->upload->do_upload('image');
             
            $data = $this->upload->data();
            $post['image']= $data['file_name'];
            
            $check = $this->homeModel->add_data($post);
            if($check){
                redirect('crudcontroller/all_data');
            }else{

            }

        }else{
            $this->load->view('insert');
        }
       
    }
        public function all_data(){
            $data['arr'] = $this->homeModel->all_data();
           $this->load->view('all-data',$data);
        }
}

