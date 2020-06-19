<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Main_controller extends CI_Controller{
     function __construct(){
        parent::__construct();
        $this->load->model('main_model');
   }
    public function main(){
        $this->load->view('main');
       // $data['news']=$this->Main_model->get_news();
    }
    public function open_membership_form(){
        $this->load->view('form_member');
    }
    public function open_volunteer_form(){
        $this->load->view('form_volunteer');
    }
    public function open_about_us(){
        $this->load->view('about_us');
    }
    public function open_our_contribution(){
        $this->load->view('our_contribution');
    }

}
?>