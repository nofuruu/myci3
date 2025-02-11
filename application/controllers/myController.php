<?php

defined('BASEPATH') or exit('NO direct script are allowed');

class myController extends CI_Controller
{
    public function index()
    {
    $data['title'] = 'Home Page';
    $this->load->view('home', $data);
    }

    public function modalAdd()
    {
        $CONTENT = $this->load->view('modal', [], true);  // Load modal view sebagai string
        echo json_encode(['CONTENT' => $CONTENT]);  // Kirimkan response dalam format JSON dengan key "CONTENT"
    }
    
    public function insertKendaraan()
    {

    }

    public function formAddKendaraan()
    {

    }
}