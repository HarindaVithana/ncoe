<?php
class Alresults extends CI_Controller{
    public function index(){
        $data['title'] = 'Al index';

        $this->load->library('session');
        $this->load->view('templates/header');
        $this->load->view('pages/al',$data);
        $this->load->view('templates/footer');
    }


    public function checkalres(){
        $data['title'] = 'alresults';
        $alindex = $this->input->post('index');
        $this->session->set_userdata('alindex', $alindex);
        

        $data['alresults'] = $this->alresults_model-> get_alresults();
        // redirect('alresults');
        $this->load->view('templates/header');
        $this->load->view('pages/alresults',$data);
        $this->load->view('templates/footer');
        
    }
}