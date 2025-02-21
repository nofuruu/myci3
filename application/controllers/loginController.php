<?php

defined('BASEPATH') or exit ('No direct script are allowed');

class loginController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('login/login');
    }
}