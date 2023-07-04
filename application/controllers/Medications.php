<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Medications extends CI_Controller {
//Validating login
function __construct(){
parent::__construct();
if(!$this->session->userdata('uid'))
redirect('login');
}

//Function for adding medication
public function add(){
//form validation
$this->form_validation->set_rules('startdate','Start date','required');
$this->form_validation->set_rules('medication','Medication','required');
$this->form_validation->set_rules('dose','Dose','required|numeric');
if($this->form_validation->run())
{
$sdate=$this->input->post('startdate');
$medication=$this->input->post('medication');
$dose=$this->input->post('dose');
$uid=$this->session->userdata('uid');	
$this->load->model('Medications_Model');
$this->Medications_Model->add($uid,$sdate,$medication,$dose);
} else{
$this->load->view('add-medication');
}
}
// Manage Expenses
public function manage(){
$uid=$this->session->userdata('uid');
$this->load->model('Medicationss_Model');
$expdetails=$this->Medications_Model->manage($uid);	
$this->load->view('manage-medication',['expensedetails'=>$expdetails]);
}
//Delete Expenses
public function delete($uid){
$this->load->model('Medications_Model');
$this->Medications_Model->delete($uid);
$this->session->set_flashdata('success','Medication Record deleted');
redirect('Medications/manage');
}
//Delete Expenses
public function edit($uid){
    $this->load->model('Medicationss_Model');
    $this->Medications_Model->edit($uid);
    $this->session->set_flashdata('success','Medication Record Updated');
    redirect('Medications/manage');
}

}
