<?php

defined('BASEPATH') or exit('NO direct script are allowed');

class Schedule extends CI_Controller
{

    public function index()
    {
        $this->load->view('addSchedule');
    }

    public function loadTrainModal()
    {
        try{

            $data = [];
        
        return JSONResponse([
            'RESULT' => 'OK',
            'CONTENT' => $this->load->view('form-add', $data, true)
        ]);
    
    }catch(Exception $ex){
        return JSONResponse('error', $ex->getMessage());
    }
}

    



}