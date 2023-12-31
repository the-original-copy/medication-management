<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {
//Validating login
function __construct(){
parent::__construct();
if(!$this->session->userdata('uid'))
redirect('login');
}
//For fetching user data
public function index(){
			$uid=$this->session->userdata('uid');
			$this->load->model('Profile_Model');
			$profiledetails=$this->Profile_Model->getuserdetails($uid);
		
			$this->load->view('profile',['profile'=>$profiledetails]);
	
}

//For Updating User Profile
public function updateprofile(){
	//Form Validation
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('MobileNumber','Mobile Number','required|exact_length[10]');
		$this->form_validation->set_rules('dob','DOB','required|alpha');
		if($this->form_validation->run())
		{
			//Getting Post Values
			$fname=$this->input->post('firstname');
			$lname=$this->input->post('lastname');
			$mobno=$this->input->post('MobileNumber');
			$dob=$this->input->post('dob');
			$uid=$this->session->userdata('uid');
			$this->load->model('Profile_Model');
			$profiledetails=$this->Profile_Model->updateprofile($uid,$fname,$lname,$mobno,$dob);
$this->session->set_flashdata('success','Profile updated successfull');
redirect('Profile');
			
		} else {
$this->session->set_flashdata('error','Something went wrong. Please try again.');
redirect('Profile');
}

}
}
