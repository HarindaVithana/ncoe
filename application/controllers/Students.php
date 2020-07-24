<?php
	class Students extends CI_Controller{
		// Personal Deatails
		public function personaldetails(){
            $data['title'] = 'Personal Details Form';
             
            $this->form_validation->set_rules('fullname', 'Name in Full', 'required');
            $this->form_validation->set_rules('initials', 'Name with Initials', 'required');
            $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
            $this->form_validation->set_rules('addressline1', 'Permenant Address', 'required');//all the lines were required.
            $this->form_validation->set_rules('addressline2', 'Permenant Address', 'required');
            $this->form_validation->set_rules('addressline3', 'Permenant Address', 'required');
            $this->form_validation->set_rules('addressline4', 'Permenant Address', 'required');
            $this->form_validation->set_rules('district', 'Recendent District Name and Number', 'required');
            $this->form_validation->set_rules('nic', 'NIC Number', 'required', 'max_lenght[12]');
            $this->form_validation->set_rules('optradio', 'Gender', 'required');//gender validation
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('ethnicity', 'Ethnicity', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('home', 'Home', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');


			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('personal', $data);
				$this->load->view('templates/footer');
			} else {
                $this->load->view('templates/header');
				$this->load->view('declaration');
				$this->load->view('templates/footer');
			}
		}

		
	}