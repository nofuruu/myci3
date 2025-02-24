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

        if (!$id) {
            $id = $this->input->post('id');
        }

        if (!$id) {
            throw new Exception('ID is required');
        }

        $data['id'] = $id;
        
        return JSONResponse([
            'RESULT' => 'OK',
            'CONTENT' => $this->load->view('view/form-add', $data, true)
        ]);
    
    }catch(Exception $ex){
        return JSONResponse('error', $ex->getMessage());
    }
}

    



}