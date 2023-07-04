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
$this->load->model('Expenses_Model');
$this->Expenses_Model->add($uid,$sdate,$medication,$dose);
} else{
$this->load->view('add-expense');
}
}
// Manage Expenses
public function manage(){
$uid=$this->session->userdata('uid');
$this->load->model('Expenses_Model');
$expdetails=$this->Expenses_Model->manage($uid);	
$this->load->view('manage-expense',['expensedetails'=>$expdetails]);
}
//Delete Expenses
public function delete($uid){
$this->load->model('Expenses_Model');
$this->Expenses_Model->delete($uid);
$this->session->set_flashdata('success','Expense Record deleted');
redirect('Expenses/manage');
}
//Delete Expenses
public function edit($uid){
    $this->load->model('Expenses_Model');
    $this->Expenses_Model->edit($uid);
    $this->session->set_flashdata('success','Expense Record Updated');
    redirect('Expenses/manage');
}

}
