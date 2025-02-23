<?php

defined('BASEPATH') or exit('NO direct script are allowed');

class myController extends CI_Controller
{
    protected $db;
   
    public function __construct()
    {
        parent :: __construct();
        $this->db = $this->load->database('default', TRUE); 

    }
    public function index()
    {
    $data['title'] = 'Home Page';
    $this->load->view('home', $data);
    }

    public function loadModaladd()
    {
        try {
            $this->db->trans_begin();  
            
            $userid = getPost('userid');
            $data['userid'] =$userid;

            if($userid === NULL){
                throw new Exception('lakukan login sebelum melakukan pendaftaran');
            }
            $this->db->trans_commit();
            return JSONResponse([
                'RESULT' => 'OK',
                'CONTENT' => $this->load->view('addtrain/form-add', $data, true)
            ]);
        }catch (exception $ex){
            if($this->db->trans_status() === FALSE){
                $this->db->trans_rollback();
                throw new Exception("Something Wrong" . $e->getMEssage());
            }
        }
        
    }
    
    public function insertKendaraan()
    {

    }

    public function formAddKendaraan()
    {

    }
}