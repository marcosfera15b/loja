<?php

defined('BASEPATH') OR exit('Acess denied, you will trying have acess in not allowed area');

class Home extends CI_Controller{

    public function __contruct(){
        parent:: __construct();
        //existe uma sessão?
    }

    public function index(){
    
        $this->load->view('restricted\home\index');
       
            
        
    }
}