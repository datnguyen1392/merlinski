<?php

class Frontpage extends CI_Controller{
   public function __construct() {
       parent::__construct();
       $this->load->helper(array("url"));
   }
   
   public function index(){
       $data['subview'] = 'pages/frontpage/Create_new_voucher';
       $data['title'] = 'Frontpage System';
       $this->load->view('pages/frontpage/main',$data);
   }
   public function admin_leftmenu(){
       $data['subview'] = 'views/templates/admin_leftmenu';
       $data['title'] = 'Frontpage System';
       $this->load->view('pages/frontpage/main',$data);
   }
}
?>