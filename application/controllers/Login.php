<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('login_page');
    }
    
    public function logar(){
        
        //session_start();
        
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $request = md5(implode($_POST));
            if(isset($_SESSION['last_request'])) {
               //print 'refresh<br />';
                $this->session->set_flashdata('error', 'Estes dados já foram enviados');
                redirect('login');
            }
            else {
               $_SESSION['last_request'] = $request;
               $this->session->set_flashdata('success', 'Você consegui logar com sucesso!'); 
               redirect('welcome');
               
            }
        }
        
    }
    
    public function logout(){
        // remove session datas
      foreach ($_SESSION as $key) {
        unset($_SESSION[$key]);
      }

      session_destroy();
    }
}