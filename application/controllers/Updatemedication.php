<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Updatemedication extends CI_Controller {
//Validating login
function __construct(){
parent::__construct();
if(!$this->session->userdata('uid'))
redirect('login');
}
//For fetching user data
public function index(){
			$uid=$this->session->userdata('uid');
			$this->load->model('Updatemedication_Model');
			$medicationdetails=$this->Updatemedication_Model->getuserdetails($uid);
		
			$this->load->view('update-medication',['update-medication'=>$medicationdetails]);
	
}

//For Updating Medication
public function updatemedication(){
	//Form Validation
         $this->form_validation->set_rules('startdate','Start date','required');
         $this->form_validation->set_rules('medication','Medication','required');
         $this->form_validation->set_rules('dose','Dose','required|numeric');

		if($this->form_validation->run())
		{
			//Getting Post Values
			$sdate=$this->input->post('startdate');
            $medication=$this->input->post('medication');
            $dose=$this->input->post('dose');
			$uid=$this->session->userdata('uid');
			$this->load->model('Updatemedication_Model');
			$medicationdetails=$this->Updatemedication_Model->updatemedication($uid,$sdate,$medication,$dose);
$this->session->set_flashdata('success','Medication updated successfull');
redirect('Updatemedication');
			
		} else {
$this->session->set_flashdata('error','Something went wrong. Please try again.');
redirect('Updatemedication');
}

}
}
