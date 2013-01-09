<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author chamith
 */
class login extends CI_Controller {
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    
    public function login(){
        $this->load->view('login');
    }
}

?>
