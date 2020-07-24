<?php
class Olresults extends CI_Controller{
    public function index(){
        $data['title'] = 'Ol index';

        $this->load->view('templates/header');
        $this->load->view('pages/OL',$data);
        $this->load->view('templates/footer');
    }


    public function checkolres(){
        $data['title'] = 'olresults';

        $olindex1 = $this->input->post('index1');
        $olindex2 = $this->input->post('index2');
        $olindex3 = $this->input->post('index3');
        
        if($olindex1 != ""){
            $data['olresults1'] = $this->olresults_model-> get_olresults1();
        }
        else{
            $data['olresults1'] = '';
        }
        if($olindex2 != ""){
            $data['olresults2'] = $this->olresults_model-> get_olresults2();
            // var_dump($olindex2);
        }else{
            $data['olresults2'] = '';
        }
        if($olindex3 != ""){
            $data['olresults3'] = $this->olresults_model-> get_olresults3();
        }else{
            $data['olresults3'] = '';
        }
        $this->session->set_userdata('olindex1', $olindex1);
        $this->session->set_userdata('olindex2', $olindex2);
        $this->session->set_userdata('olindex3', $olindex3);
        
        // redirect('alresults');
        $this->load->view('templates/header');
        $this->load->view('pages/olresults',$data);
        $this->load->view('templates/footer');

        // var_dump($data);
        
        
        // $this->form_validation->set_rules('index1', 'index1', 'required');

        // if($this->form_validation->run() === FALSE){
        //     $this->load->view('templates/header');
        //     $this->load->view('olresults/showresult',$data);
        //     $this->load->view('templates/footer');
        // }else{
        //     $this->olresults_model->get_result();
        // }
    }
}
