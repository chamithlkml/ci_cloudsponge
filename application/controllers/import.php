<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of import
 *
 * @author chamith
 */
class import extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('list');
    }
    
    public function gmail(){
        echo 'here'; die;
    }
}

