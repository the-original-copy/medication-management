<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{

		//Form Validation
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('email','Email Id','required|valid_email|is_unique[tbluser.Email]');
		$this->form_validation->set_rules('mobileno','Mobile Number','required|exact_length[10]');
		$this->form_validation->set_rules('newpassword','Password','required|min_length[8]');
		$this->form_validation->set_rules('repeatpassword','Confirm Password','required|min_length[8]|matches[newpassword]');
		if($this->form_validation->run())
		{
			//Getting Post Values
			$fname=$this->input->post('firstname');
			$lname=$this->input->post('lastname');
			$emailid=$this->input->post('email');
			$mobno=$this->input->post('mobileno');
			$password=md5($this->input->post('newpassword'));
			$this->load->model('Signup_Model');
			$this->Signup_Model->index($fname,$lname,$emailid,$mobno,$password);
		} else {
		$this->load->view('signup');
	}
}
}
