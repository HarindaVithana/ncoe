<?php 
class Olresults_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function get_olresults1(){
        $olindex1 = $this->input->post('index1');

        $query1 = $this->db->get_where('ol_result', array('OL_index' => $olindex1));

        return $query1->result_array();
        // var_dump($query);
    }

    public function get_olresults2(){
        $olindex2 = $this->input->post('index2');

        $query2 = $this->db->get_where('ol_result', array('OL_index' => $olindex2));

        return $query2->result_array();
        // var_dump($query);
    }

    public function get_olresults3(){
        $olindex3 = $this->input->post('index3');

        $query3 = $this->db->get_where('ol_result', array('OL_index' => $olindex3));
        
        return $query3->result_array();
        // var_dump($query);
    }
}
